The result of the logical design phase (or Data Model Mapping) is a set of relation schemas.

It is based on the ER diagram or class diagram.


<img src="v3.0/Data Model Mapping.png"
     alt="Data Model Mapping"/>
> Data Model Mapping v3.0

The relation shemas is performed in the following steps:

#### - Map conceptual model to logical model components

By mapping the conceptual model, it is translated into a set of relations

#### - Validate logical model using normalization

Normalizing the data enables us to eliminate any duplicate data as well as modification anomalies

#### - Validate logical model integrity constraints

It is required the definition of the attribute domains and appropriate constraints

##### a. Person

<table>
<tr>
<td>

|ID|  |
|--|--|
|Type| NUMERIC|
|Unique|NonDuplicated|
|Auto-increment|n+1|

</td>
<td>

|FIRST_NAME|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
<td>

|LAST_NAME|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
</tr>
<tr>
<td>

|EMAIL|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|
|Unique| NonDuplicated|
|Pattern| /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/ |

</td>
<td>

|PASSWORD|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|
|Pattern| Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)|

</td>
<td>

|PHONE_NUMBER|  |
|--|--|
|Type| VARCHAR(50)|
|Range| NonEmptyString|
|Pattern| French Phone Number standard|

</td>
</tr>
</table>

##### b. Animal

<table>
<tr>
<td>

|ID|  |
|--|--|
|Type| NUMERIC|
|Unique|NonDuplicated|
|Auto-increment|n+1|

</td>
<td>

|NAME|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
<td>

|ARRIVAL_DATE|  |
|--|--|
|Type| DATE|
|Display format| YYYY-MM-DD|
|Required| No|

</td>
</tr>
<tr>
<td>

|DESCRIPTION|  |
|--|--|
|Type| VARCHAR(250)|

</td>
<td>

|IS DISABLED|  |
|--|--|
|Type| BOOLEAN|
|Required| Yes|

</td>
<td>

</td>
</tr>
</table>

##### c. Address

<table>
<tr>
<td>

|ID|  |
|--|--|
|Type| NUMERIC|
|Unique|NonDuplicated|
|Auto-increment|n+1|

</td>
<td>

|street|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
<td>

|street nbr|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
</tr>
<tr>
<td>

|house nbr|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
<td>

|postcode|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
<td>

|city|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
</tr>
<tr>
<td>

|country|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
</tr>
</table>



#### - Validate logical model against user requirements