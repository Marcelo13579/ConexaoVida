<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       factory('conexaovida\Doador', 100)->create();
       
       factory('conexaovida\Orgaos', 100)->create();
    }
}
