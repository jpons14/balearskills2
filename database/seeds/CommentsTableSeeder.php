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
        $comments
            = <<<xml
<?xml version="1.0" encoding="UTF-8"?>
<comentaris>
	<comentari>
		<usuari>mariaarbona45@gmail.com</usuari>
		<establiment>Celler Pagès</establiment>
		<text>Es todo excelente, tanto el trato del servicio, como la comida que es muy buena, especialmente las paellas, que están de infarto. Y los precios están bien, son normales.</text>
		<data>2016-10-01</data>
		<hora>12:33:15</hora>
	</comentari>
	<comentari>
		<usuari>bielmesquida25@gmail.com</usuari>
		<establiment>Es Siurell</establiment>
		<text>Buenísimo! No encontrareis otro pa amb oli como el de verduras, increíble. También las copas a muy buen precio. Repetiremos!</text>
		<data>2016-07-22</data>
		<hora>22:13:08</hora>
	</comentari>
	<comentari>
		<usuari>mgomez97@gmail.com</usuari>
		<establiment>Ca'n Lluc</establiment>
		<text>El mejor desayuno que he probado en mi vida. Todo un lujazo disfrutarlo con el solecito de cara y mirando al mar.</text>
		<data>2016-03-12</data>
		<hora>12:03:05</hora>
	</comentari>
	<comentari>
		<usuari>jsalou34@gmail.com</usuari>
		<establiment>I Love Japo</establiment>
		<text>Excel·lent, molt recomanable. Tracte immillorable, menjar exquisit.</text>
		<data>2016-07-22</data>
		<hora>14:35:18</hora>
	</comentari>
	<comentari>
		<usuari>bsoler90@gmail.com</usuari>
		<establiment>Celler Pagès</establiment>
		<text>Un gran descobriment, àmplia varietat de plats en el menú, molt bo, molt recomanable.</text>
		<data>2016-07-12</data>
		<hora>21:43:28</hora>
	</comentari>
	<comentari>
		<usuari>jsalou34@gmail.com</usuari>
		<establiment>Bodega Llum de Sal</establiment>
		<text>La comida excelente, el ambiente excelente, la decoración excelente, pero nos tocó un camarero que deja mucho que desear. Nada simpático, con poco tacto con el cliente, y te hace dudar de si vale la pena volver.</text>
		<data>2016-01-05</data>
		<hora>21:17:03</hora>
	</comentari>
	<comentari>
		<usuari>tllull52@gmail.com</usuari>
		<establiment>Ca'n Lluc</establiment>
		<text>Lo he visitado un par de veces y la verdad es que está buenísimo todo. Las tapas muy buenas.</text>
		<data>2016-06-06</data>
		<hora>11:45:22</hora>
	</comentari>
	<comentari>
		<usuari>mariaarbona45@gmail.com</usuari>
		<establiment>Restaurant Es Quatre Vents</establiment>
		<text>Estuve con un grupo de amigas, el trato fue muy bueno y la comida también. Volveremos seguro!</text>
		<data>2016-10-12</data>
		<hora>18:51:16</hora>
	</comentari>
	<comentari>
		<usuari>crisperez77@gmail.com</usuari>
		<establiment>Piccola Italia</establiment>
		<text>Vaig gaudir com a poques vegades d'un exquisit menjar italià.</text>
		<data>2016-03-18</data>
		<hora>11:22:45</hora>
	</comentari>
	<comentari>
		<usuari>jordisolermayol22@gmail.com</usuari>
		<establiment>Es Siurell</establiment>
		<text>Bon menjar, bons preus i millor servei.</text>
		<data>2016-05-15</data>
		<hora>14:41:16</hora>
	</comentari>
	<comentari>
		<usuari>jestelrich31@gmail.com</usuari>
		<establiment>Restaurant Es Quatre Vents</establiment>
		<text>La comida es buenísima. No probaréis mejores pizzas que las de allí.</text>
		<data>2016-01-16</data>
		<hora>19:23:28</hora>
	</comentari>
	<comentari>
		<usuari>bielmesquida25@gmail.com</usuari>
		<establiment>S'Aire</establiment>
		<text>Un local precioso, para celebrar algo en pareja!!</text>
		<data>2016-05-11</data>
		<hora>20:56:01</hora>
	</comentari>
	<comentari>
		<usuari>bielmesquida25@gmail.com</usuari>
		<establiment>Vietnam Café</establiment>
		<text>La primera vez que pruebo la comida vietnamita y ha sido una muy grata sorpresa. Si queréis probar sabores nuevos os lo recomiendo al 100x100.</text>
		<data>2016-05-23</data>
		<hora>18:46:51</hora>
	</comentari>
	<comentari>
		<usuari>jordisolermayol22@gmail.com</usuari>
		<establiment>Can Joan Capo</establiment>
		<text>Hi he anat un parell de vegades i la veritat és que està boníssim tot. Les tapes són delicioses. Molt molt bo.</text>
		<data>2016-08-13</data>
		<hora>16:24:16</hora>
	</comentari>
	<comentari>
		<usuari>crisperez77@gmail.com</usuari>
		<establiment>Can Joan Capo</establiment>
		<text>He comido el menú de festivo, la paella buenísima y la relación calidad-precio está muy bien, 100% recomendable, un buen sitio para ir a comer.</text>
		<data>2016-08-22</data>
		<hora>09:27:43</hora>
	</comentari>
	<comentari>
		<usuari>mgomez97@gmail.com</usuari>
		<establiment>El Gallego</establiment>
		<text>EXCELENTE carne! Las costillas de cerdo se desacian. Buenisimas!!!</text>
		<data>2016-07-18</data>
		<hora>11:29:07</hora>
	</comentari>
	<comentari>
		<usuari>mgomez97@gmail.com</usuari>
		<establiment>Arume Restaurant Sushi Bar</establiment>
		<text>Un sitio fantástico para comer sushi y demás platos de cocina japonesa. El local y el personal están muy bien. El precio es carillo, aunque la calidad es óptima, tanto en las materias primas como en la elaboración.</text>
		<data>2016-05-06</data>
		<hora>17:44:33</hora>
	</comentari>
	<comentari>
		<usuari>bsoler90@gmail.com</usuari>
		<establiment>Vietnam Café</establiment>
		<text>Un dels meus restaurants favorits. Sempre el recomano i no falla. El servei és una delícia i els seus plats ... per llepar-se els dits.</text>
		<data>2016-05-10</data>
		<hora>22:57:33</hora>
	</comentari>
	<comentari>
		<usuari>jsalou34@gmail.com</usuari>
		<establiment>Can Joan Capo</establiment>
		<text>Buen precio y buena cocina. Genial en los tiempos que corren.</text>
		<data>2016-09-19</data>
		<hora>21:52:21</hora>
	</comentari>
	<comentari>
		<usuari>mariaarbona45@gmail.com</usuari>
		<establiment>Ristorante Brunello</establiment>
		<text>Me encanta este sitio. Recomiendo en especial la fuente de pasta que es como degustación: te ponen 5 variedades diferentes de pasta y está buenísimo!</text>
		<data>2016-08-11</data>
		<hora>22:36:14</hora>
	</comentari>
</comentaris>

xml;
        $xml  = simplexml_load_string( $comments );
        foreach ( $xml as $item ) {
            DB::table('comments')->insert([
                'user_id' => 1,
                'establishment_id' => 1,
                'text' => $item->text,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
