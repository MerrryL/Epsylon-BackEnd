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
        
            factory(App\User::class, 25)->create();
            factory(App\ShoppingCart::class, 25)->create();
            factory(App\Product::class, 25)->create();

            factory(App\ProcurableType::class, 25)->create();
            factory(App\Procurable::class, 25)->create();
            factory(App\Availabilities::class, 25)->create();


            factory(App\ShippingInfo::class, 25)->create();
            factory(App\Order::class, 25)->create();
            factory(App\OrderDetails::class, 25)->create();

            factory(App\CartItem::class, 25)->create();
            factory(App\Image::class, 25)->create();
            
    }
}
