console.log('JS for pets');

$(document).ready(function() {
  // Launch modal element
  $('.toast').toast('show');

  // Update content for dialog
  $('#afsDialog').on('show.bs.modal', function (event) {
    console.log("Open AFS dialog...");    

    // Button that triggered the modal
    var button = $(event.relatedTarget); 
    
    // Extract info from data-* attributes
    var action = button.data('action');
    var id = button.data('pet-id');

    // Get modal dialog
    var modal = $(this);
    
    // Update Info in dialog
    modal.find('.afsModalTitle').text(action);
    modal.find('form').get(0).setAttribute('action', '../afs/' + action + "/" + id);
    // modal.find('.modal-body input').val(recipient)
  });
  
});

// Add paws by editing the Style for paginator
let previousSpan = document.querySelector(".page-item:first-child>*");
if (previousSpan != null) {
  previousSpan.innerHTML = "";
  previousSpan.classList.add("fas", "fa-paw", "paw-left");
}

let nextSpan = document.querySelector(".page-item:last-child>*");
if (nextSpan != null) {
  nextSpan.innerHTML = "";
  nextSpan.classList.add("fas", "fa-paw", "paw-right");
}
