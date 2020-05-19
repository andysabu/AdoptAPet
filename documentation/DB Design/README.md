# Index

1. [Database design](#database-design)
2. [Requirements analysis](#requirements-and-analysis)
   - [Entities](#Entities)
   - [Type of data](#type-of-data)
3. [Conceptual Design](#conceptual-design)
4. [Logical Design](#logical-design)
    - [Mapping](#--Map-conceptual-model-to-logical-model-components)
    - [Normalization](#--Validate-logical-model-using-normalization)
    - [Validate logical model integrity constraints](#--Validate-logical-model-integrity-constraints)
        + [Person](#a.-person)
        + [Animal](#b.-animal)
        + [Address](#c.-address)
        + [Payment](#d.-payment)
        + [Animal-User](#e.-animal-user)
        + [Users](#f.-users)
        + [Task-User](#g.-task-user)
        + [Taks](#h.-task)
        + [Role-User](#h.-role-user)
        + [Role](#j.-role)
        + [Image](#k.-image)
        + [Animal Type](#l.-animal-type)
        + [Gender](#m.-gender)
        + [Breed](#n.-breed)
    - [Validate user requiremetns](#--Validate-logical-model-against-user-requirements)
5. [Physical Design](#physical-design)
    - [Installation](#steps-to-install-the-database)
6. [References](#references)

# Database design

A well-structured database:

- Saves disk space by eliminating redundant data.
- Maintains data accuracy and integrity.
- Provides access to the data in useful ways.

Designing a database is a matter of following the proper process. These are the phases we have followed:

<img src="DB Design.png" alt="DB Design"/>

# Requirements and analysis

At this stage it was important to understand the purpose of the database.

It was considered the database from every perspective. For instance, the goal of the application is to get in touch the administration staff with people to foster and adopt pets.

Some ways were used to gather information before creating the database:

- Talk with the administrator and also think how we would like to run over the process as pet fosterers.
- Analyze current site and possible forms to be implemented.
- Comb through any existing data systems (including physical and digital files).

#### Entities

It was listed the type of data to be stored and the different entities. As a result, it is identified the following ones:

- people
- animals
- tasks
- breed
- animal type

#### Type of data

Based on the data it was first collected, it was now
you want to store and the entities, or people, things, locations, and events, that those data describe, like this:

<table>
<!-- <tr>
    <th>Table 1 Heading 1 </th>
    <th>Table 1 Heading 2</th>
</tr> -->
<tr>
<td>

|Person|
|--------|
|First name|
|Last name|
|Role|
|Street|
|City|
|State
|Zip|
|Email|

</td>
<td>

|Animal|
|--------|
|Name|
|Type|
|Gender|
|Breed|
|Arrival date|
|Description|
|Age|
|Street|
|City|
|State
|Zip|

</td>
<td>

| Breed |
|--------|
| Name |
| Description |

</td>
<td>

| Photo |
|--------|
| Link |

</td>
</tr>
<tr>
<td>

| Task |
|--------|
| Name |
| Description |
| Start date |
| End date |

</td>
<td>

| Payment |
|--------|
| Ammount |
| Method |
| Date |

</td>
<td>
</td>
<td>
</td>
</tr>
</table>


All this data became part of our data dictionary which outlines the tables and fields within the database.

# Conceptual Design

Once all the data was collected and analyzed, it was possible to create a conceptual design from the schema for the database.

This is going to be an Entity-Relationship (ER) diagram

<img src="01-Conceptual Design/v1.0/Entity-Relationship (ER) diagram.png"
     alt="Entity-Relationship (ER) diagram"/>
> Entity-Relationship (ER) diagram v1.0

# Logical Design

The result of the logical design phase (or Data Model Mapping) is a set of relation schemas.

It is based on the ER diagram or class diagram.


<img src="02-Logical Design [Data Model Mapping]/v3.0/Data Model Mapping.png"
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

|LAST_NAME|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
<td>

|PHONE_NUMBER|  |
|--|--|
|Type| VARCHAR(50)|
|Range| NonEmptyString|
|Pattern| French Phone Number standard|

</td>
</tr>
<tr>
<td>

|USER ID|  |
|--|--|
|Type| FK|
|Reference| id|
|Table| users |

</td>
<td>

|ADDRESS ID|  |
|--|--|
|Type| FK|
|Reference| id|
|Table| address |

</td>
<td>
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

|ANIMAL TYPE ID|  |
|--|--|
|Type| FK|
|Reference| id|
|Table| Animal Type |
</td>
</tr>
<tr>
<td>

|GENDER ID|  |
|--|--|
|Type| FK|
|Reference| id|
|Table| GENDER |

</td>
<td>

|BREED ID|  |
|--|--|
|Type| FK|
|Reference| id|
|Table| BREED |

</td>
<td>

|ADDRESS ID|  |
|--|--|
|Type| FK|
|Reference| id|
|Table| ADDRESS |

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
|Range| |

</td>
</tr>
<tr>
<td>

|house nbr|  |
|--|--|
|Type| VARCHAR(250)|
|Range| |

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

##### d. Payment

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

|charge_id|  |
|--|--|
|Type| VARCHAR(250)|
|Unique|NonDuplicated|
</td>

<td>

|NAME|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
</tr>
<tr>
<td>
    
|REFUND_URL|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
<td>

|USER_ID|  |
|--|--|
|Type| VARCHAR(250)|
|Type| FK|
|Reference| user_id|
|Table| PERSON |

</td>
<td>
</td>
</tr>
</table>


##### e. Animal-User

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

|IS FOSTER|  |
|--|--|
|Type| INT|
|Range| NonEmptyString|

</td>
<td>

|DEPARTURE DATE|  |
|--|--|
|Type| DATE|
|Range| NonEmptyString|

</td>
<tr>
<td>

|RETURN DATE|  |
|--|--|
|Type| DATE|
|Range| NonEmptyString|

</td>

<td>

|IS SPONSOR|  |
|--|--|
|Type| INT|
|Range| NonEmptyString|

</td>

<td>

|USER ID|  |
|--|--|
|Type| NUMERIC|
|Type| FK|
|Reference| user_id|
|Table| USERS |

</td>
</tr>
<tr>
<td>

|ANIMAL ID|  |
|--|--|
|Type| NUMERIC|
|Type| FK|
|Reference| animal_id|
|Table| ANIMAL |

</td>
<td>
</td>
<td>
</td>
</tr>
</table>

##### f. Users

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

</td>
<td>

|EMAIL|  |
|--|--|
|Type| VARCHAR(250)|

</td>
</tr>
<tr>
<td>

|EMAIL_VERIFIED_AT|  |
|--|--|
|Type| TIMESTAMP|
|Unique|NonDuplicated|


</td>
<td>

|PASSWORD|  |
|--|--|
|Type| VARCHAR(250)|
|Unique|NonDuplicated|


</td>
<td>

|REMEMBER_TOKEN|  |
|--|--|
|Type| VARCHAR(250)|
|Unique|NonDuplicated|
</td>
</tr>
<tr>
<td>

|CREATED_AT|  |
|--|--|
|Type| TIMESTAMP|
|Unique|NonDuplicated|
</td>
<td>

|UPDATED_AT|  |
|--|--|
|Type| TIMESTAMP|
|Unique|NonDuplicated|

</td>
<td>
</td>
</tr>
</table>


##### g. Task-User

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

|TASK_ID|  |
|--|--|
|Type| NUMERIC|
|Type| FK|
|Reference|Id|
|Table| TASK |

</td>
<td>

|USER_ID|  |
|--|--|
|Type| FK|
|Reference|Id|
|Table| USERS |

</td>
</tr>
</table>


##### h. Task

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

</td>
<td>

|DESCRIPTION|  |
|--|--|
|Type| VARCHAR(250)|

</td>
</tr>
<tr>
<td>

|START DATE|  |
|--|--|
|Type| DATE|

</td>
<td>

|END DATE|  |
|--|--|
|Type| DATE|

</td>
<td>
</td>
</tr>
</table>

##### i. Role-User

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

|USER ID|  |
|--|--|
|Type| FK|
|Reference|Id|
|Table| USERS |

</td>
<td>

|ROLE ID|  |
|--|--|
|Type| FK|
|Reference|Id|
|Table| ROLE |

</td>
</tr>
</table>

##### j. Role

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

|DESCRIPTION|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
</tr>
</table>

##### k. Image

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

|URL|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
<td>

|ANIMAL ID|  |
|--|--|
|Type| FK|
|Reference|Id|
|Table| ANIMAL |

</td>
</tr>
</table>

##### l. Animal Type

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

</td>
<td>

|DESCRIPTION|  |
|--|--|
|Type| VARCHAR(250)|

</td>
</tr>
</table>


##### m. Gender

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

|VALUE|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
<td>

|DESCRIPTION|  |
|--|--|
|Type| VARCHAR(250)|

</td>
</tr>
</table>

##### n. Breed

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

|DESCRIPTION|  |
|--|--|
|Type| VARCHAR(250)|
|Range| NonEmptyString|

</td>
</tr>
</table>

#### - Validate logical model against user requirements

# Physical Design

The goal of the last phase of database design, physical design, is to implement the main database.

![Diagram-to-database](https://qph.fs.quoracdn.net/main-qimg-fe9a6343223c10f0d9f7498e33533392)

Once the application is developed based on the framework [Laravel](https://laravel.com), it is used raw SQL, the [fluent query builder](https://laravel.com/docs/7.x/queries), and the [Eloquent ORM](https://laravel.com/docs/7.x/eloquent) to create the database.

_Example_:
```php

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('person', function (Blueprint $table) {
            // Attributes
            $table->id();
            
            ....
            
            $table->collation = 'utf8_unicode_ci';
        });
    }
}
```

> Refer to the main code to see the implementation of [Migrations](https://laravel.com/docs/7.x/migrations#introduction).

```php
class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gender')->insert(
            array(
                [
                'value' => 'Unknown',
                'description' => 'When it is not possible to determinate the gender'
                ],
                [
                'value' => 'Male',
                'description' => ''
                ],
                [
                'value' => 'Female',
                'description' => ''
                ]
            )
        );
    }
}
```
> Refer to the main code to see the implementation of [Seeder](https://laravel.com/docs/7.x/seeding).

#### Steps to install the database

In order to get installed the database in the current version with some mocked data, please execute  the following steps in the same order: 
1. First, drop all the existing tables and data in the database. This will remove everything except the table `migrations`.

+ By `Laravel Eloquent`
```php
php artisan migrate:reset
```
+ By `SQL` commands. Please, notice that it cannot delete or update a parent row (a foreign key constraint will fail). This means, that you want to execute this command up to get `migrations` table left.
```sql
SET @tables = NULL;
SELECT GROUP_CONCAT(table_schema, '.', table_name) INTO @tables FROM information_schema.tables 
  WHERE table_schema = 'specifySchemaName' AND table_name <> 'migrations';

SET @tables = CONCAT('DROP TABLE ', @tables);
PREPARE stmt1 FROM @tables;
EXECUTE stmt1;
DEALLOCATE PREPARE stmt1;
DELETE FROM migrations;
```
2. Regenerates the list of all classes that need to be included in the project.
```php
composer dump-autoload 
```
3. Then, create all the tables and relations between tables. [Migrations](https://laravel.com/docs/7.x/migrations) is the _version control_ for this purpose.
```php
php artisan migrate
```
4. Finally, by using [Seeding](https://laravel.com/docs/7.x/seeding), it is possible to test data in the tables.
```php
php artisan db:seed
```

# References

[Phases of Database Design](https://www.assignmentexpert.com/homework-answers/programming-answer-50987.pdf)

[Database Structure and Design ](https://www.lucidchart.com/pages/database-diagram/database-design#section_2)

[Logical-Design](http://www.myreadingroom.co.in/notes-and-studymaterial/65-dbms/508-logical-design.html)