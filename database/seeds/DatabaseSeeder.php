<?php

use App\Invoice;
use App\Loading;
use App\Product;
use App\Unit;
use App\UnitPricing;
use App\Van;
use App\VanDetails;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Unit::truncate();
        Product::truncate();
        VanDetails::truncate();
        Van::truncate();
        Loading::truncate();
        UnitPricing::truncate();

        DB::table('units')->insert(['name' => '13.5kg']);
        DB::table('units')->insert(['name' => '7.2kg']);
        DB::table('units')->insert(['name' => '5kg']);
        DB::table('units')->insert(['name' => '3kg']);

        DB::table('products')->insert(['name' => '4H', 'unit_id' => 1, 'class' => 'A']);
        DB::table('products')->insert(['name' => '5H', 'unit_id' => 1, 'class' => 'A']);
        DB::table('products')->insert(['name' => '6H', 'unit_id' => 1, 'class' => 'A']);
        DB::table('products')->insert(['name' => '7H', 'unit_id' => 1, 'class' => 'A']);
        DB::table('products')->insert(['name' => '8H', 'unit_id' => 1, 'class' => 'A']);
        DB::table('products')->insert(['name' => '9H', 'unit_id' => 1, 'class' => 'A']);
        DB::table('products')->insert(['name' => '7kg', 'unit_id' => 2, 'class' => 'A']);
        DB::table('products')->insert(['name' => '5kg', 'unit_id' => 3, 'class' => 'A']);
        DB::table('products')->insert(['name' => '3kg', 'unit_id' => 4, 'class' => 'A']);
        DB::table('products')->insert(['name' => 'CL', 'unit_id' => 1, 'class' => 'B']);
        DB::table('products')->insert(['name' => '4H', 'unit_id' => 1, 'class' => 'B']);
        DB::table('products')->insert(['name' => '5H', 'unit_id' => 1, 'class' => 'B']);
        DB::table('products')->insert(['name' => '6H', 'unit_id' => 1, 'class' => 'B']);
        DB::table('products')->insert(['name' => '7H', 'unit_id' => 1, 'class' => 'B']);
        DB::table('products')->insert(['name' => '8H', 'unit_id' => 1, 'class' => 'B']);
        DB::table('products')->insert(['name' => '9H', 'unit_id' => 1, 'class' => 'B']);


        $vanDetailsQuantity = 50;
        $vansQuantity = 40;
        $loadingQuantity = 10;
        $invoiceQuantity = 10;
        $unitPricingQuantity = 20;


        factory(Loading::class, $loadingQuantity)->create();
        factory(Van::class, $vansQuantity)->create();
        factory(VanDetails::class, $vanDetailsQuantity)->create();
        factory(Invoice::class, $invoiceQuantity)->create();
        factory(UnitPricing::class, $unitPricingQuantity)->create();


    }
}
