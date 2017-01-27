<?php

use Illuminate\Database\Seeder;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCargo();
    }

    private function createCargo()
    {
        factory(\App\Entities\Cargo::class)->create([
            'name'      => 'CN. Juan Carlos Saravia',
            'year'      => '2016'
        ]);
    }
}
