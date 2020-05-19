$(document).ready(function() {
    // Rate storage
    const global = {
        rate: false
    };
    // Ajax to get rates for USD base EUR
    $("#donate-stripe").click(function() {
        $.ajax({
            url: "https://api.exchangeratesapi.io/latest?base=EUR",
            method: "GET"
        }).done(function(res) {
            return (global.rate = res.rates.USD);
        });
    });
    // Create a Stripe client.
    const stripe = Stripe("pk_test_7UnlbFOrnLg4ZTp2DJaSiXT800inFG9qv4");

    // Create an instance of Elements.
    const elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    const style = {
        base: {
            color: "#32325d",
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: "antialiased",
            fontSize: "16px",
            fontWeight: "600",
            "::placeholder": {
                color: "#aab7c4"
            }
        },
        invalid: {
            color: "#fa755a",
            iconColor: "#fa755a"
        }
    };

    // Create an instance of the card Element.
    const card = elements.create("card", {
        style: style
    });
    // Get the created card element
    const cardElement = elements.getElement("card");

    // Add an instance of the card Element into the `card-element` <div>.
    cardElement.mount("#card-element");

    // When I tried changing from var & .getById to const and jQuery-> validator broke
    // IMO too insignificant given time constaints
    // Handle real-time validation errors from the card Element.
    card.addEventListener("change", function(event) {
        var displayError = document.getElementById("card-errors");
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = "";
        }
    });

    // Send a create token request to stripe
    function createToken(name) {
        return ({ token, error } = stripe.createToken(cardElement, {
            name
        }));
    }

    const results = $("#donate-results");
    const form = $("#payment-form");
    // Function used to visualize errors any errors not covered by backend
    function errVisualizer() {
        form.hide();
        results.html(
            "<p>Something went wrong on our end, sorry for the inconvenience, please try again later. A team of high-tech monkeys have been dispatched. Meanwhile, you may donate using Paypal.</p>"
        );
    }

    form.on("submit", async function(event) {
        // Empty results div in case validations were failed
        results.empty();
        event.preventDefault();
        // If nothing went terribly wrong
        if (elements.getElement("card")) {
            // Init validations array, if checks failed, store response messages.
            const validationArr = [];
            // Get name
            const name = $("#nameD").val();
            // Check name
            if (name.length < 1)
                validationArr.push("<p>The name field is required</p>"); // ? Shortest name is U.
            // Get amount
            const amount = $("#amountD").val();
            // Check for stripes limits
            if (global.rate !== false) {
                const amountUSD = amount * global.rate;
                if (amountUSD < 1 || amountUSD > 999999.99)
                    validationArr.push(
                        "<p>The amount should between €1 and €" +
                            Math.ceil(999999.99 / global.rate) +
                            "</p>"
                    );
            } else if (amount < 1 || amount > 630000) {
                validationArr.push(
                    "<p>The amount should between €1 and €630000</p>"
                );
            }
            // Get email
            const email = $("#emailD").val();
            // Check email, in theory, shortest possible is x@y.gg
            if (
                email.length < 6 ||
                email.indexOf("@") == -1 ||
                email.length > 320
            )
                validationArr.push("<p>E-mail address must be valid</p>");

            if (validationArr.length == 0) {
                // If no errors
                // Wait for token creation -> did not want to work otherwise. This was my workaround
                // By otherwise I mean using stripe.createToken() in a non async function
                // A variet was tried, this was the only thing that worked, spent 1 day (50-50)
                let object = await createToken(name);
                // Ajax the stripe token with xcsrf header to the backend for charge
                if (object) {
                    $.ajax({
                        url: "/donate",
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            )
                        },
                        data: {
                            // ? Used by stripe for charge
                            token: object.token, // Token for charge
                            email: email, // Receipt
                            amount: amount // Amount to pay
                        }
                    })
                        .fail(function(err) {
                            errVisualizer();
                        })
                        .done(function(res) {
                            // Return receipt, hide payment form, show thank you note + img.
                            if (res.indexOf("pay.stripe.com/receipts") > -1) {
                                // Assign receipt url to button
                                $("#rec-url").attr("href", res);
                                form.hide();
                                // Change modal title + add image to body
                                $("#modal-label-don").text("Thank you!");
                                results.html(
                                    '<img src="https://images.pexels.com/photos/883466/pexels-photo-883466.jpeg?auto=compress&cs=tinysrgb&dpr=3" alt="Thank you image" style="height:239px;">'
                                );
                                $("#receipt").show();
                                // If card exception occured, visualize the error msg provided by stripe
                            } else if (res.indexOf("Sorry") > -1) {
                                form.hide();
                                results.html("<p>" + res + "</p>");
                            } else {
                                // Show standard error in case bug / weird error etc
                                errVisualizer();
                            }
                        });
                }
            } else {
                // Dump errors array into results div if validations failed
                results.html(validationArr.join(""));
            }
        }
    });
});
