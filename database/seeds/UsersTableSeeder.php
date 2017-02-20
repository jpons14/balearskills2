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
        $users
            = <<<xml
<?xml version="1.0" encoding="UTF-8"?>
<usuaris>
	<usuari>
		<nom>Maria Arbona</nom>
		<email>mariaarbona45@gmail.com</email>
		<password>uyjC38</password>
	</usuari>
	<usuari>
		<nom>Biel Mesquida</nom>
		<usuari>bielmesquida25@gmail.com</usuari>
		<password>3pn4pG</password>
	</usuari>
	<usuari>
		<nom>Miguel Gomez</nom>
		<email>mgomez97@gmail.com</email>
		<password>2c6qXA</password>
	</usuari>
	<usuari>
		<nom>Toni Llull</nom>
		<email>tllull52@gmail.com</email>
		<password>CTAVHB</password>
	</usuari>
	<usuari>
		<nom>Joana Salou</nom>
		<email>jsalou34@gmail.com</email>
		<password>BSWRvK</password>
	</usuari>
	<usuari>
		<nom>Cristina Perez</nom>
		<email>crisperez77@gmail.com</email>
		<password>P5ucpx</password>
	</usuari>
	<usuari>
		<nom>Jaume Vidal</nom>
		<email>jaumevidalplanes45@gmail.com</email>
		<password>5jfZHK</password>
	</usuari>
	<usuari>
		<nom>Bel Soler</nom>
		<email>bsoler90@gmail.com</email>
		<password>TxfC4f</password>
	</usuari>
	<usuari>
		<nom>Victoria Martinez</nom>
		<email>martinezv35@gmail.com</email>
		<password>SJhS5C</password>
	</usuari>
	<usuari>
		<nom>Jordi Soler</nom>
		<email>jordisolermayol22@gmail.com</email>
		<password>p9ewRz</password>
	</usuari>
	<usuari>
		<nom>Carme Riera</nom>
		<email>criera44@gmail.com</email>
		<password>dDYTKR</password>
	</usuari>
	<usuari>
		<nom>Joan Estelrich</nom>
		<email>jestelrich31@gmail.com</email>
		<password>fx8cre</password>
	</usuari>
</usuaris>
xml;
        $xml  = simplexml_load_string( $users );
        foreach ( $xml as $item ) {
            DB::table('users')->insert([
                'name' => $item->nom,
                'email' => $item->email,
                'password' => $item->password,
                'remember_token' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
