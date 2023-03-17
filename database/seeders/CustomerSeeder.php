<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [ 'email'=>'iguisse97@gmail.com'],
            [ 'email'=>'ibrahima@gmail.com'],
            [ 'email'=>'ahmady@gmail.com'],
            [ 'email'=>'guisse@mail.com'],
            [ 'email'=>'pogba@gmail.com'],
            [ 'email'=>'papa@gmail.com'],
            [ 'email'=>'cheikh@gmail.com'],
        ];
        Customer::insert($customers);
    }
}
