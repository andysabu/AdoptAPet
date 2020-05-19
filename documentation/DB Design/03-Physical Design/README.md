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

                ....
                
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

#### Steps to install database

In order to get installed the database in the current version with some mocked data, please execute  the following steps in the same order: 
1. First, drop all the existing tables and data in the database. This will remove everything except the table `migrations`.
```php
php artisan migrate:reset
```
2. Then, create all the tables and relations between table. [Migrations](https://laravel.com/docs/7.x/migrations) is the _version control_ for this purpose.
```php
php artisan migrate
```
3. Finally, by using [Seeding](https://laravel.com/docs/7.x/seeding), it is possible to test data in the tables.
```php
php artisan db:seed
```