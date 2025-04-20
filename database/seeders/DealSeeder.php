<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('deals')->insert([
            [
                'user_id' => 1,
                'cliant_name' => '株式会社aaa',
                'products' => 'パソコン',
                'payment_method' => '現金',
                'confidence' => '20%',
                'sales_amount' => 1000000,
                'cost_amount' => 700000,
                'estimated_month' => '2025/04/30',
            ],
            [
                'user_id' => 1,
                'cliant_name' => '株式会社bbb',
                'products' => 'パソコン',
                'payment_method' => '現金',
                'confidence' => '20%',
                'sales_amount' => 1000000,
                'cost_amount' => 700000,
                'estimated_month' => '2025/05/30',
            ],
            [
                'user_id' => 1,
                'cliant_name' => '株式会社ccc',
                'products' => 'パソコン',
                'payment_method' => '現金',
                'confidence' => '20%',
                'sales_amount' => 1000000,
                'cost_amount' => 700000,
                'estimated_month' =>' 2025/06/30',
            ],

        ]);
    }
}
