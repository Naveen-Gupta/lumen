<?php

# database/seeds/PersonTableSeeder.php

use App\Http\Models\Person;  
use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder  
{
    public function run()
    {
        Person::create([
            'firstname' => 'Naveen',
            'lastname' => 'Gupta',
            'email' => 'naveen.gupta@hytechpro.com',
            'city' => 'noida'
        ]);

        Person::create([
            'firstname' => 'Ashish',
            'lastname' => 'Lavaniya',
            'email' => 'ashish.lavaniya@hytechpro.com',
            'city' => 'noida'
        ]);

        Person::create([
            'firstname' => 'Sumit',
            'lastname' => 'Kumar',
            'email' => 'sumit.kumar@hytechpro.com',
            'city' => 'noida'
        ]);

        Person::create([
            'firstname' => 'Ankit',
            'lastname' => 'Gupta',
            'email' => 'ankit.gupta@hytechpro.com',
            'city' => 'noida'
        ]);

        //... add more quotes if you want!
    }
}