<?php

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
        /**
         * Creación de preparaciones
         */
        DB::table('preparaciones')->insert([
            'id' => 1,
            'nombre' => 'sopa',
            'created_at' => '2020-06-14 00:00:00',
            'updated_at' => '2020-06-14 00:00:00'
        ]);
        DB::table('preparaciones')->insert([
            'id' => 2,
            'nombre' => 'ensalada de frutas',
            'created_at' => '2020-06-14 00:00:00',
            'updated_at' => '2020-06-14 00:00:00'
        ]);

        /**
         * creación de ingredientes para la ensalada
         */
        DB::table('ingredientes')->insert([
            'id' => 1,
            'nombre' => 'patilla',
            'id_preparacion' => 1,
            'created_at' => '2020-06-14 00:00:00',
            'updated_at' => '2020-06-14 00:00:00'
        ]);
        DB::table('ingredientes')->insert([
            'id' => 2,
            'nombre' => 'banano',
            'id_preparacion' => 1,
            'created_at' => '2020-06-14 00:00:00',
            'updated_at' => '2020-06-14 00:00:00'
        ]);
        DB::table('ingredientes')->insert([
            'id' => 3,
            'nombre' => 'fresa',
            'id_preparacion' => 1,
            'created_at' => '2020-06-14 00:00:00',
            'updated_at' => '2020-06-14 00:00:00'
        ]);
        DB::table('ingredientes')->insert([
            'id' => 4,
            'nombre' => 'manzana',
            'id_preparacion' => 1,
            'created_at' => '2020-06-14 00:00:00',
            'updated_at' => '2020-06-14 00:00:00'
        ]);

        /**
         * creación de ingredientes para la sopa
         */
        DB::table('ingredientes')->insert([
            'id' => 5,
            'nombre' => 'verdura',
            'id_preparacion' => 2,
            'created_at' => '2020-06-14 00:00:00',
            'updated_at' => '2020-06-14 00:00:00'
        ]);
        DB::table('ingredientes')->insert([
            'id' => 6,
            'nombre' => 'carne',
            'id_preparacion' => 2,
            'created_at' => '2020-06-14 00:00:00',
            'updated_at' => '2020-06-14 00:00:00'
        ]);
        DB::table('ingredientes')->insert([
            'id' => 7,
            'nombre' => 'crocoli',
            'id_preparacion' => 2,
            'created_at' => '2020-06-14 00:00:00',
            'updated_at' => '2020-06-14 00:00:00'
        ]);
        DB::table('ingredientes')->insert([
            'id' => 8,
            'nombre' => 'zanahoria',
            'id_preparacion' => 2,
            'created_at' => '2020-06-14 00:00:00',
            'updated_at' => '2020-06-14 00:00:00'
        ]);

    }
}
