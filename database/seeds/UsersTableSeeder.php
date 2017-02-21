<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filepath = realpath(__DIR__ . '/xmls/users.xml');
        $users = file_get_contents($filepath);
        $xml = simplexml_load_string($users);
        foreach ($xml as $item) {
            DB::table('users')->insert([
                'name' => $item->nom,
                'email' => $item->email,
                'password' => bcrypt($item->password),
                'remember_token' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
