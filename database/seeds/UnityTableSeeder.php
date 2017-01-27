<?php

use Illuminate\Database\Seeder;

class UnityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUnity();
    }

    private function createUnity()
    {
        factory(\App\Entities\Unity::class)->create([
            'unity' => 'Escuela Naval Militar "V.Almte. Ronant Monje Roca"'
        ]);

        factory(\App\Entities\Unity::class)->create([
            'unity' => 'Escuela de Aplicación Naval'
        ]);
    }
}
