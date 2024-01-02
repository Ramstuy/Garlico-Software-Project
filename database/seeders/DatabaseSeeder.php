<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Garlico;
use App\Models\Shipment;

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
            'username'=>'ucokcok',
            'email'=>'unknownuser@gmail.com',
            'password'=> bcrypt('user123')
        ]);   

        Garlico::create([
            'price'=>165000,
        ]);  
        
        User::create([
            'username'=>'ramstuy',
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('admin123'),
            'is_admin'=>true
        ]); 


        // User::create([
        //     'username'=>'prabowo',
        //     'email'=>'okepaeng@gmail.com',
        //     'password'=> bcrypt('pilihno2')
        // ]);   

        // Customer::create([
        //     'user_id'=>'2',
        //     'customer_name'=>'Prabowo Gibran',
        //     'customer_email'=>'okepaeng@gmail.com',
        //     'customer_address'=>'3658 Chapel Street',
        //     'phone_number'=>'281-599-1887'
        // ]);

        // Order::create([
        //     'customer_id'=>'2',
        //     'quantity_ordered'=>'19'
        // ]);

        // User::create([
        //     'username'=>'tripleH',
        //     'email'=>'smekdon@gmail.com',
        //     'password'=> bcrypt('nice213')
        // ]);   

        // Customer::create([
        //     'user_id'=>'3',
        //     'customer_name'=>'Triple H',
        //     'customer_email'=>'smekdon@gmail.com',
        //     'customer_address'=>'2452 Giraffe Hill Drive',
        //     'phone_number'=>'972-285-3184'
        // ]);

        // Order::create([
        //     'customer_id'=>'3',
        //     'quantity_ordered'=>'11'
        // ]);
        
        
    }
}
