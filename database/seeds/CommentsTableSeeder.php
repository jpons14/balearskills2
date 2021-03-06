<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filepath = realpath(__DIR__ . '/xmls/comments.xml');
        $comments = file_get_contents($filepath);
        $xml = simplexml_load_string($comments);
        foreach ($xml as $item) {
            $idUser = DB::select("SELECT id FROM users WHERE email = '" . $item->usuari."';");
            $idEstablishment = DB::select("SELECT id FROM establishments WHERE name = \"" . $item->establiment."\";");
            DB::table('comments')->insert([
                'user_id' =>  $idUser[0]->id,
                'establishment_id' => $idEstablishment[0]->id,
                'text' => $item->text,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
