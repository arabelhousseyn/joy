<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Country,
    Province,
    UserAddress,
    UserBillingAddress,
    UserOnline,
    UserPayment,
    UserPhone,
    UserProfile,
    UserProfilePicture,
    UserProvince,
    Category,
    Plan,
    RequestOpenBrand,
    RequestOpenBrandPayment,
    Brand,
    BrandCategory,
    BrandInvoice,
    Product,
    BrandSocialLink
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
        UserBillingAddress::factory(1)->create();
        UserOnline::factory(20)->create();
        UserPayment::factory(20)->create();
        UserPhone::factory(10)->create();
        UserProfile::factory(1)->create();
        UserProfilePicture::factory(1)->create();
        UserProvince::factory(1)->create();
        Category::factory(1)->create();
        Plan::factory(1)->create();
        RequestOpenBrand::factory(1)->create();
        RequestOpenBrandPayment::factory(1)->create();
        Brand::factory(1)->create();
        BrandCategory::factory(1)->create();
        BrandInvoice::factory(1)->create();
        BrandSocialLink::factory(1)->create();
        Product::factory(20)->create();
    }
}
