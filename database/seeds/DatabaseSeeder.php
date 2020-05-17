<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class, 2)->create();
        factory(User::class, 5)->create();
        // factory(City::class, 10)->create();
        // factory(Product::class, 10)->create()->each(function ($a) {
        //     $a->categories()->attach(App\Category::all()->random());
        // });
    }
}
