<?php

use Illuminate\Database\Seeder;

class AvailabilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            factory(App\User::class, 50)->create();
            factory(App\ShoppingCart::class, 50)->create();
            factory(App\Product::class, 50)->create();

            factory(App\ProcurableType::class, 50)->create();
            factory(App\Procurable::class, 50)->create();
            factory(App\Availabilities::class, 250)->create();


            factory(App\ShippingInfo::class, 50)->create();
            factory(App\Order::class, 50)->create();
            factory(App\OrderDetails::class, 50)->create();

            factory(App\CartItem::class, 50)->create();
            factory(App\Image::class, 250)->create();
            
    }
}
