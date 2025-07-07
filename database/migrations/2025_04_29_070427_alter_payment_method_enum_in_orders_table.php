<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         DB::statement("ALTER TABLE orders MODIFY payment_method ENUM('cod', 'paypal', 'cardpay') NOT NULL DEFAULT 'cod'");
//     }

//     public function down(): void
//     {
//         DB::statement("ALTER TABLE orders MODIFY payment_method ENUM('cod', 'paypal') NOT NULL DEFAULT 'cod'");
//     }
// };

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::connection('mongodb')->command([
            'collMod' => 'orders',
            'validator' => [
                '$jsonSchema' => [
                    'bsonType' => 'object',
                    'properties' => [
                        'payment_method' => [
                            'enum' => ['cod', 'paypal', 'cardpay']
                        ]
                    ]
                ]
            ],
            'validationLevel' => 'moderate',
        ]);
    }

    public function down(): void
    {
        DB::connection('mongodb')->command([
            'collMod' => 'orders',
            'validator' => [
                '$jsonSchema' => [
                    'bsonType' => 'object',
                    'properties' => [
                        'payment_method' => [
                            'enum' => ['cod', 'paypal']
                        ]
                    ]
                ]
            ],
            'validationLevel' => 'moderate',
        ]);
    }
};
