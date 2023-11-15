<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'Melercury',
            'email'=>'melercury@gmail.com',
            'password'=> bcrypt('54321')
        ]);   

        Customer::create([
            'customer_name'=>'Mercury ni dek',
            'customer_email'=>'melercury@gmail.com',
            'customer_address'=>'Jl. Jalan',
            'phone_number'=>'+628123456789'
        ]);

        Order::create([
            'quantity_ordered'=>'3'
        ]);    
    }
}
