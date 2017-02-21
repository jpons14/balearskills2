<?php

use Illuminate\Database\Seeder;

class CookingTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filepath = realpath(__DIR__ . '/xmls/establishments.xml');
        $tipus = file_get_contents($filepath);
        $xml = simplexml_load_string($tipus);
        $tipuss = [];
        foreach ($xml as $item) {
            foreach ($item->tipusCuina->tipus as $item2) {
                $tipuss[] = $item2->__toString();
            }
        }
        $tipuss = array_unique($tipuss);
        foreach ($tipuss as $item) {
            DB::table('cooking_types')->insert([
                'name' => $item,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
