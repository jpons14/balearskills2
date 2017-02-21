<?php

use Illuminate\Database\Seeder;

class EstablishmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filepath = realpath(__DIR__ . '/xmls/establishments.xml');
        $establiments = file_get_contents($filepath);
        $xml = simplexml_load_string($establiments);
        foreach ($xml as $key => $establishment) {
            DB::table('establishments')->insert([
                'name' => $establishment->nom,
                'description_esp' => $establishment->descripcio->esp,
                'description_cat' => $establishment->descripcio->cat,
                'timetable_esp' => $establishment->horari->esp,
                'timetable_cat' => $establishment->horari->cat,
                'city' => $establishment->contacte->poblacio,
                'address' => $establishment->contacte->adreca,
                'phone' => $establishment->contacte->telefon,
                'web' => $establishment->contacte->web,
                'price' => $establishment->web,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
