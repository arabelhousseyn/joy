<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Country,
    Province,
    UserAddress,
    UserBillingAddress,
    UserOnline
};
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Country::factory(1)->create();
        Province::factory(1)->create();
        UserAddress::factory(10)->create();
        UserBillingAddress::factory(5)->create();
        UserOnline::factory(20)->create();
    }
}
