<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //\App\Models\Continent::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $continents = [
            ['id'=> 1, 'name' => 'Europe'],
            ['id' => 2, 'name' => 'Asia'],
            ['id' => 3, 'name' => 'Africa'],
            ['id' => 4, 'name' => 'South America'],
            ['id' => 5, 'name' => 'North America'],
            ['id' => 6, 'name' => 'Australia'],
            ['id' => 7, 'name' => 'Antartica']
        ];

        foreach($continents as $continent){
            \App\Models\Continent::factory()->create($continent)
                ->each(function($c){
                    $c->countries()->saveMany(Country::factory(10)->make());
                });
        }
    }
}
