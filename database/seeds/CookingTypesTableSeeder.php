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
        $tipus
            = <<<xml
<?xml version="1.0" encoding="UTF-8"?>
<establiments>
    <establiment>
        <nom>I Love Japo</nom>
        <descripcio>
            <cat>I Love Japo és un restaurant japonés que et porta un trosset de Japón a Mallorca. Un restaurant que et captivarà per la seva original decoració i l'alegria que desprèn. L'equip d'I Love Japo porta 5 anys situat al barri de Santa Catalina oferint una oferta única: sushi i menjar japonès amb una bona relación qualitat-preu. Per la seva ubicació en una zona de gran activitat, resulta ideal per endinsar-se i descobrir les diverses propostes i combinacions de la seva fantàstica carta. La gastronoia i cultura japonesa es revelen en els seus plats. Des del sushi tradicional, els futomakis tempuritzats o degustant l'autèntica cuina típica de les tavernes japoneses, com els takoyaki, les gyozas o les tradicionals broquetes (kushiyaki) fins a arribar a les postres perquè visquis una experiència inoblidable.</cat>
            <esp>I Love Japo es un restaurante japonés que te trae un trocito de Japón a Mallorca. Un restaurante que te cautivará por su original decoración y la alegría que desprende. El equipo de I Love Japo lleva 5 años situado en el barrio de Santa Catalina ofreciendo una oferta única: sushi y comida japonesa con una buena relación calidad-precio. Por su ubicación en una zona de gran actividad, resulta ideal para adentrarse y descubrir las diversas propuestas y combinaciones de su fantástica carta. La gastronomía y cultura japonesa se revelan en sus platos. Desde el sushi tradicional, los futomakis tempurizados o degustando la auténtica comida típica de las tabernas japonesas, como los takoyaki, las gyozas o las tradicionales brochetas (kushiyaki) hasta llegar a los postres para que vivas una experiencia inolvidable. </esp>
        </descripcio>
        <horari>
            <cat>Tots els dies de 13:30 a 15:30h.</cat>
            <esp>Todos los días de 13:30 a 15:30h.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>c/ Sant Magí, 25</adreca>
            <telefon>971738321</telefon>
            <web>www.ilovejapo.com/</web>
        </contacte>
        <preu>entre 20 i 25 €</preu>
        <tipusCuina>
            <tipus>japonès</tipus>
            <tipus>asiàtic</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Celler Pagès</nom>
        <descripcio>
            <cat>Situat en plena Llotja de Palma, el Celler Pagès obre les portes allà per l'any 1956. És un negoci familiar, que ha sabut mantenir la tradició al llarg de tres generacions. Per ell han passat personalitats de la talla de Lola Flores, Chavela Vargas, Gerhard Schröeder ... Ofereix una cuina tradicional mallorquina, de temporada, típica i casolana, la de sempre. Receptes familiars sempre millorades amb un toc de modernitat. Destaquen per un servei absolutament professional i atent, pendent de cada detall.</cat>
            <esp>Situado en plena Lonja de Palma, el Celler Pagés abre sus puertas allá por el año 1956. Es un negocio familiar, que ha sabido mantener la tradición a lo largo de tres generaciones. Por él han pasado personalidades de la talla de Lola Flores, Chavela Vargas, Gerhard Schröeder… Ofrecen una cocina tradicional mallorquina, de temporada, típica y casera, la de siempre. Recetas familiares siempre mejoradas con un toque de modernidad. Destacan por un servicio absolutamente profesional y atento, pendiente de cada detalle. </esp>
        </descripcio>
        <horari>
            <cat>De 13.00h. a 15.30h i de 20.00 h. a 23.00 h. Diumenges i dilluns nit tancat.</cat>
            <esp>De 13.00h. a 15.30h y de  20.00h. a 23.00h. Domingos y lunes noche cerrado.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>Felipe Bauzá, 2</adreca>
            <telefon>971726036</telefon>
            <web>www.cellerpages.com</web>
        </contacte>
        <preu>entre 10 i 15 €</preu>
        <tipusCuina>
            <tipus>mallorquí</tipus>
            <tipus>pa amb oli</tipus>
            <tipus>romàntic</tipus>
            <tipus>econòmic</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Es Siurell</nom>
        <descripcio>
            <cat>Especialistes en pa amb oli, frit mallorquí i caragols. El pa amb oli estrella és el que rep el nom del restaurant, Pa amb oli És Siurell. Un deliciós pa amb oli de verdures a la planxa acompanyat de sípia, o llom, o formatge de cabra. També tenim l'anomenat Pa amb oli Mallorquí, amb sobrassada, camaiot i formatge maonès o el pa amb oli d'ibèrics. Encara que sempre poden optar per demanar-nos que embotits desitgen. Tots els nostres postres, a excepció dels gelats són casolans.</cat>
            <esp>Especialistas en pa amb oli , frito mallorquín y caracoles. El pa amb oli estrella es el que recibe el nombre del restaurante, Pa amb oli Es Siurell. Un delicioso pa amb oli de verduras a la plancha acompañado de sepia, o lomo, o queso de cabra. También tenemos el llamado Pa amb oli Mallorquí, con sobrasada, camaiot i queso mahonés o el pa amb oli de ibéricos. Aunque siempre pueden optar por pedirnos que embutidos desean. Todos nuestros postres, a excepción de los helados son caseros.</esp>
        </descripcio>
        <horari>
            <cat>De dilluns a dissabte de 8 a 23 hores.</cat>
            <esp>De lunes a sábado de 8 a 23 horas.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>Carretera Valldemossa 12</adreca>
            <telefon>971781240</telefon>
            <web>www.facebook.com/essiurell</web>
        </contacte>
        <preu>entre 20 i 25 €</preu>
        <tipusCuina>
            <tipus>mallorquí</tipus>
            <tipus>pa amb oli</tipus>
            <tipus>casolà</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Ca'n Lluc</nom>
        <descripcio>
            <cat>Restaurant reconegut per l'excel·lència dels seus menús de cuina casolana tradicional tant mediterrània com mallorquina. Amb una experiència de moltíssims anys, Can Lluc ofereix una qualitat i servei excel·lent a preus molt econòmics.</cat>
            <esp>Restaurante  reconocido por la excelencia de sus menús de cocina casera tradicional tanto mediterránea como mallorquina. Con una experiencia de muchísimos años, Ca'n Lluc ofrece una calidad y servicio excelente a precios muy económicos.</esp>
        </descripcio>
        <horari>
            <cat>De 7:00-00:00. Dimarts tancat excepte festius.</cat>
            <esp>De 07.00h a 00.00h. Martes cerrado excepto festivos.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>c/ Despuig 7</adreca>
            <telefon>971280135</telefon>
            <web>www.canllucrestaurant.com</web>
        </contacte>
        <preu>entre 10 i 15 €</preu>
        <tipusCuina>
            <tipus>econòmic</tipus>
            <tipus>mallorquí</tipus>
            <tipus>mediterrani</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Bodega Llum de Sal</nom>
        <descripcio>
            <cat>
                Llum de Sal és sinònim de bon gust i tradició en el procés artesanal de Flor de Sal; noves creacions per gaudir dels sabors i aromes de Mallorca. Celler i botiga delicatessen dirigida i creada per Robert Chaves qui ha sabut fusionar la sal i el vi mallorquí donant com a resultat un producte exclusiu. Entre els seus productes (biològics certificats) destaquen les 13 varietats de salses i 3 d'ametlles mallorquines.</cat>
            <esp>Llum de Sal es sinónimo de buen gusto y tradición en el proceso artesanal de Flor de Sal; nuevas creaciones para disfrutar de los sabores y aromas de Mallorca. Bodega y tienda delicatessen dirigida y creada por Robert Chaves quien ha sabido fusionar la sal y el vino mallorquín dando como resultado un producto exclusivo. Entre sus productos (biológicos certificados) destacan las 13 variedades de salsas y 3 de almendras mallorquinas. </esp>
        </descripcio>
        <horari>
            <cat>Tots els dies de 9.30h - 01.00h</cat>
            <esp>Todos los días de 9.30h - 01.00h</esp>
        </horari>
        <contacte>
            <poblacio>Ses Salines</poblacio>
            <adreca>Burguera Mut, 14</adreca>
            <telefon>971649773</telefon>
            <web>www.llumdesal.es</web>
        </contacte>
        <preu>entre 15 i 20 €</preu>
        <tipusCuina>
            <tipus>d'autor</tipus>
            <tipus>mallorquí</tipus>
            <tipus>tenda gourmet</tipus>
            <tipus>vins</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Restaurant Es Quatre Vents</nom>
        <descripcio>
            <cat>Es 4 Vents, inaugurat l'any 1980, es troba situat a poc més d'un quilòmetre de la localitat mallorquina d'Algaida, a la carretera de Palma a Manacor. Antic bar de l'estació del tren d'Algaida ara convertit en restaurant modern i ben equipat on el tracte és agradable, familiar i summament eficient. Disposen d'un gran menjador amb diferents estances on es pot celebrar qualsevol tipus d'esdeveniment familiar, personal ... Menús adequats a les necessitats de cada client. I aquest mateix any han ampliat el restaurant amb una agradable terrassa on poder gaudir alguns dels suculents plats elaborats pel xef.</cat>
            <esp>Es 4 Vents, inaugurado en el año 1980, se halla situado a poco más de un kilómetro de la localidad mallorquina de Algaida, en la carretera de Palma a Manacor. Antiguo bar de la estación del tren de Algaida ahora convertido en restaurante moderno y bien equipado donde el trato es agradable, familiar y sumamente eficiente. Disponen de un gran comedor con diferentes estancias donde se puede celebrar cualquier tipo de evento familiar, personal... Menús adecuados a las necesidades de cada cliente. Y este mismo año han ampliado el restaurante con una agradable terraza donde poder disfrutar algunos de los suculentos platos elaborados por el chef.</esp>
        </descripcio>
        <horari>
            <cat>De 12.30 a 16.00 i de 19.30 a 23.30. Dimarts tancat.</cat>
            <esp>De 12.30 a 16.00 y de 19.30 a 23.30. Martes cerrado.</esp>
        </horari>
        <contacte>
            <poblacio>Algaida</poblacio>
            <adreca>Ctra. Palma-Manacor 21.70km</adreca>
            <telefon>971665173</telefon>
            <web>www.esquatrevents.com</web>
        </contacte>
        <preu>entre 25 i 30 €</preu>
        <tipusCuina>
            <tipus>mallorquí</tipus>
            <tipus>mediterrani</tipus>
            <tipus>carns</tipus>
            <tipus>amb nins</tipus>
            <tipus>sopars d'empresa</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Piccola Italia</nom>
        <descripcio>
            <cat>La Piccola Italia t'ofereix un viatge culinari per Itàlia a través d'una carta composta per més de 120 plats: des de la Pizza més sucosa típica de Napoli, Spaghetti alla vongole siciliana, a un Bacallà a la manera de Gènova. La pasta, les postres i els gelats són artesanals. Tota la pasta que es prepara a Piccola Italia és fresca i elaborada diàriament a la vista del comensal.</cat>
            <esp>La Piccola Italia te ofrece un viaje culinario por Italia a través de una carta compuesta por más de 120 platos: desde la Pizza más jugosa típica de Napoli, Spaghetti alla vongole siciliana, a un Bacalao a la manera de Génova. La pasta, los postres y los helados son artesanales. Toda la pasta que se prepara en Piccola Italia es fresca y elaborada a diario a la vista del comensal. </esp>
        </descripcio>
        <horari>
            <cat>Tot l'any de dilluns a diumenge de 12:30h a 00.30h.</cat>
            <esp>Todo el año de lunes a domingo de 12:30 a 00.30h.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>Passeig Marítim 27</adreca>
            <telefon>971458036</telefon>
            <web>www.piccolaitaliamallorca.com</web>
        </contacte>
        <preu>entre 20 i 25 €</preu>
        <tipusCuina>
            <tipus>italià</tipus>
            <tipus>amb nins</tipus>
            <tipus>sopars d'empresa</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>S'Aire</nom>
        <descripcio>
            <cat>El restaurant S'Aire es troba a Mallorca molt proper a la catedral i al centre de la ciutat de Palma. Destaca per oferir un ambient típic mallorquí gràcies a la decoració del local i les seves especialitats culinàries. Es basa en la cuina mallorquina tradicional, i ofereix una gran varietat de tapes, sandvitxos i entrepans en la seva carta a més d'un interessant menú del dia amb plats variats. En cadascun dels seus plats s'utilitzen productes de qualitat i frescos, de la terra.</cat>
            <esp>El restaurante S’Aire se encuentra en Mallorca muy cercano a la catedral y al centro de la ciudad de Palma. Destaca por ofrecer un ambiente típico mallorquín gracias a la decoración del local y sus especialidades culinarias. Se basa en la cocina mallorquina tradicional, y ofrece una gran variedad de tapas, sándwiches y bocadillos en su carta además de un interesante menú del día con platos variados. En cada uno de sus platos utilizan productos de calidad y frescos, de la tierra.</esp>
        </descripcio>
        <horari>
            <cat>De 12:00-14:30 i de 20:00 a 24:00h. Dilluns tancat.</cat>
            <esp>De 12:00-14:30 y de 20:00 a 24:00h. Lunes cerrado.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>Gerreria 26</adreca>
            <telefon>971451116</telefon>
            <web>www.saire.es</web>
        </contacte>
        <preu>entre 20 i 25 €</preu>
        <tipusCuina>
            <tipus>mediterrani</tipus>
            <tipus>econòmic</tipus>
            <tipus>mercat</tipus>
            <tipus>casolà</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Restaurant Corb Marí</nom>
        <descripcio>
            <cat>Des de 1960 Corb Marí ha acollit a les seves taules una infinitat de comensals que no han quedat indiferents davant la nostra proposta gastronòmica i ubicació. Tasteu les nostres autèntiques exquisideses, alternant clàssic i contemporani, però sobretot sense perdre de vista l'essència mediterrània. Disposem d'una gran selecció de carns de primeríssima qualitat: costella, entrecot, filet de bou, conill, porc, carns ... salsitxes reposades, amb el punt just d'infiltració de greix, per a paladars exigents.</cat>
            <esp>Desde 1960 Corb Marí ha acogido en sus mesas a infinidad de comensales quienes no han quedado indiferentes ante nuestra propuesta gastronómica y ubicación. Deguste nuestras auténticas exquisiteces, alternando clásico y contemporáneo, pero sobretodo sin perder de vista la esencia mediterránea. Disponemos de una gran selección de carnes de primerísima calidad: chuletón, entrecot, solomillo de buey, conejo, cerdo, salsichas… carnes reposadas, con el punto justo de infiltración de grasa, para paladares exigentes. </esp>
        </descripcio>
        <horari>
            <cat>Tots els dies de 12 a 23 hores.</cat>
            <esp>Todos los días de 12 a 23 horas.</esp>
        </horari>
        <contacte>
            <poblacio>Port de Pollença</poblacio>
            <adreca>Passeig Anglada Camarassa 91</adreca>
            <telefon>971867040</telefon>
            <web>www.restaurantcorbmari.com</web>
        </contacte>
        <preu>entre 20 i 25 €</preu>
        <tipusCuina>
            <tipus>mediterrani</tipus>
            <tipus>carns</tipus>
            <tipus>mariscs</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Racó de la Bona Cuina</nom>
        <descripcio>
            <cat>Racó de la Bona Cuina és un restaurant agradable i de tracte familiar on poder gaudir d'uns arrossos fantàstics i uns menús diaris molt elaborats segons mercat. Als matins, ofereixen uns esmorzars molt complets a molt bon preu, i per les tardes posen a la teva disposició la seva terrassa al costat de la Plaça d'Espanya on poder prendre uns gelats, un te o refrescos, i atenció, totes les begudes van acompanyades d'una tapa diferent que el xef prepara amb afecte per als seus clients. Disposen de tot això en un ambient familiar i agradable on el lema corporatiu és "la qualitat no està renyida amb el preu" i la seva màxima, sempre cuinar amb afecte.</cat>
            <esp>Racó de la Bona Cuina es una restaurante agradable y de trato familiar donde poder disfrutar de unos arroces estupendos y unos menús diarios muy elaborados según mercado. Por las mañanas, ofrecen unos desayunos muy completos a muy buen precio, y por las tardes ponen a tu disposición su terraza al lado de la Plaza de España donde poder tomar unos helados, un té o refrescos, y atención, todas las bebidas van acompañadas de una tapa diferente que el chef prepara con cariño para sus clientes. Disponen de todo esto en un ambiente familiar y agradable donde el lema corporativo es "la calidad no está reñida con el precio" y su máxima, siempre cocinar con cariño. </esp>
        </descripcio>
        <horari>
            <cat>Dilluns de 8 a 16h i de dimecres a diumenge de 12 a 23:30h. Dimarts tancat.</cat>
            <esp>Lunes de 8 a 16h y de miércoles a domingo de 12 a 23:30h. Martes cerrado.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>c/Jafuda Cresques, 6</adreca>
            <telefon>971904492</telefon>
            <web>www.racodelabonacuina.com</web>
        </contacte>
        <preu>entre 10 i 15 €</preu>
        <tipusCuina>
            <tipus>pa amb oli</tipus>
            <tipus>tapes</tipus>
            <tipus>arrosseria</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Restaurante Galeón</nom>
        <descripcio>
            <cat>Restaurant Galeón es situa enfront de la platja de Llenaire i compta amb unes vistes úniques a la Badia del Port de Pollença. Ofereix Menú diari, Snacks i A la Carta. Obert tots els dies. Servei per a celebracions de grups, casaments i esdeveniments. No podeu deixar de provar les carns servides a la pedra volcànica, la lasanya de llagosta o les delicioses paelles. Per a grups mínim 10 persones és imprescindible prèvia reserva. Ofereixen diferents opcions de menú i pressupost..</cat>
            <esp>Restaurante Galeón se ubica frente a la playa de Llenaire y cuenta con unas vistas únicas a la Bahía del Puerto de Pollença.  Ofrece Menú diario, Snacks y A la Carta. Abierto todos los días. Servicio para celebraciones de grupos, bodas y eventos. No podéis dejar de probar las carnes servidas a la piedra volcánica, la lasaña de langosta o las deliciosas paellas. Para grupos mínimo 10 personas es imprescindible previa reserva. Ofrecen diferentes opciones de menú y presupuesto.</esp>
        </descripcio>
        <horari>
            <cat>Esmorzars: 08:00-10:00h. Cafeteria, Snacks i Menú diari: 12:30-16:00h. Sopars: 18:30-22:30h.</cat>
            <esp>Desayunos: 08:00-10:00h. Cafetería, Snacks y Menú diario: 12:30-16:00h. Cenas: 18:30-22:30h.</esp>
        </horari>
        <contacte>
            <poblacio>Port de Pollença</poblacio>
            <adreca>Passeig de Londres 84-86</adreca>
            <telefon>971105575</telefon>
            <web>www.restaurantegaleon.com</web>
        </contacte>
        <preu>entre 15 i 20 €</preu>
        <tipusCuina>
            <tipus>costa</tipus>
            <tipus>mercat</tipus>
            <tipus>tradicional</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>El Gallego</nom>
        <descripcio>
            <cat>És un lloc especial, tradicional i molt familiar amb especialitats tan saboroses com pop amb cachelos, empanada, pebrots, petxines variades, salpicó, gambes, lluç de palangre, bacallà, mitjana a la pedra, costelletes, cabrit de llet, lacón amb grelos, cua de bou i lletons de vedella. Típic menjar gallega elaborada amb productes de primera qualitat en una amplíssima carta: peixos, carns, triperia i racions. Compten amb menú diari i menús de grup..</cat>
            <esp>Es un lugar especial, tradicional y muy familiar con especialidades tan sabrosas como pulpo con cachelos, empanada, pimientos, zamburiñas, salpicón, gambas, merluza de pincho, bacalao, chuletón a la piedra, chuletitas, cabrito lechal, lacón con grelos, rabo de buey y mollejas de ternera. Típica comida gallega elaborada con productos de primera calidad en una amplísima carta: pescados, carnes, casquería y raciones. Cuentan con menú diario y menús de grupo. </esp>
        </descripcio>
        <horari>
            <cat>Tots els dies de 13:00-16: 00h. Dijous, divendres i dissabtes de 13:00-16:00 / 20:00-00:00h.</cat>
            <esp>Todos los días de 13:00-16:00h. Jueves, viernes y sábados de 13:00-16:00 / 20:00-00:00h.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>c/ Del Carmen 16</adreca>
            <telefon>971710313</telefon>
            <web>www.restaurante-elgallego.es</web>
        </contacte>
        <preu>entre 20 i 25 €</preu>
        <tipusCuina>
            <tipus>carns</tipus>
            <tipus>mariscs</tipus>
            <tipus>gallec</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Es Castell: Castillo Hotel Son Vida</nom>
        <descripcio>
            <cat>En un lloc emblemàtic ple d'història i tradició, al Castell Hotel Son Vida, es troba el Restaurant Es Castell. Assaboreix menjar tradicional presentat amb un toc modern i amb productes locals mentre gaudeixes de les vistes a la badia de Palma i la seva catedral la Seu. Hi predomina la cuina espanyola amb influències mediterrànies acompanyades pels millors vins mallorquins i internacionals seleccionats pel Cap Sommelier Felix Granado amb gran coneixement de l'enologia farà que la teva experiència culinària sigui completa.</cat>
            <esp>En un lugar emblemático lleno de historia y tradición, en el Castillo Hotel Son Vida, se encuentra el Restaurante Es Castell. Saborea comida tradicional presentada con un toque moderno y con productos locales mientras disfrutas de las vistas a la bahía de Palma y su catedral La Seu. Predomina la cocina española con influencias mediterráneas acompañadas por los mejores vinos mallorquines e internacionales seleccionados por el Jefe Sumiller Felix Granado cuyo gran conocimiento de la enología hará que tu experiencia culinaria sea completa. </esp>
        </descripcio>
        <horari>
            <cat>Esmorzar: 7:00-11:00h, Sopar: 19:00-22:30h.</cat>
            <esp>Desayuno: 7:00-11:00h, Cena: 19:00-22:30h.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>Carrer de la Raixa 2</adreca>
            <telefon>971493493</telefon>
            <web>www.castillosonvidamallorca.com</web>
        </contacte>
        <preu>entre 40 i 50 €</preu>
        <tipusCuina>
            <tipus>mediterrani</tipus>
            <tipus>mercat</tipus>
            <tipus>tradicional</tipus>
            <tipus>internacional</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Arume Restaurant Sushi Bar</nom>
        <descripcio>
            <cat>El xef Tomeu Martí, sempre a l'avantguarda de la cuina de l'illa, reinterpreta la cuina japonesa amb un toc mediterrani realment original, la seva constant investigació ens permet redescobrir tots els sabors de la fusió Orient-Occident. Aquest local és una referència dels restaurants japonesos, situat al centre de la ciutat de Palma, la seva cuina ens descobreix un ampli recorregut per la gastronomia nipona, donant-nos a conèixer sabors únics en plats molt creatius que resulten sans per al cos i gratificants per l'ànima..</cat>
            <esp>El chef Tomeu Martí, siempre a la vanguardia de la cocina de la isla, reinterpreta la cocina japonesa con un toque mediterráneo realmente original, su constante investigación nos permite redescubrir todos los sabores de la fusión Oriente-Occidente. Este local es una referencia de los restaurantes japoneses, situado en el centro de la ciudad de Palma, su cocina nos descubre un amplio recorrido por la gastronomía nipona, dándonos a conocer sabores únicos en platos muy creativos que resultan sanos para el cuerpo y gratificantes para el alma.</esp>
        </descripcio>
        <horari>
            <cat>De dilluns a dissabtes: 13.30 a 15.30h i 20.30 a 23h. Diumenges i festius tancat.</cat>
            <esp>De lunes a sábados: 13.30 a 15.30h y 20.30 a 23h. Domingos y festivos cerrado.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>San Miguel, 83</adreca>
            <telefon>971214121</telefon>
            <web>www.arume-sushi.com</web>
        </contacte>
        <preu>entre 30 i 40 €</preu>
        <tipusCuina>
            <tipus>mediterrani</tipus>
            <tipus>japonès</tipus>
            <tipus>sopars d'empresa</tipus>
            <tipus>alta cuina</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Es Convent d'Ariany</nom>
        <descripcio>
            <cat>El restaurant Es Convent està ubicat a les instal·lacions d'un modern i acollidor hotel d'interior. Es Convent d'Ariany, localitzat al poble del mateix nom. El seu disseny i aposta gastronòmica s'alineen en una contínua recerca i disseny d'experiències en les que el resultat sigui un producte que unifiqui exclusivitat i sabor. El marc incomparable en què es localitza, amb vistes privilegiades sobre el Pla de Mallorca, és l'espai perfecte per relaxar-se i degustar les propostes del xef Joan Vila..</cat>
            <esp>El restaurante Es Convent está ubicado en las instalaciones de un moderno y acogedor hotel de interior. Es Convent d’Ariany, localizado en el pueblo del mismo nombre. Su diseño y apuesta gastronómica se alinean en una continua búsqueda y diseño de experiencias en las que el resultado sea un producto que unifique exclusividad y sabor. El marco incomparable en que se localiza, con vistas privilegiadas sobre el Pla de Mallorca, es el espacio perfecto para relajarse y degustar las propuestas del chef Joan Vila. </esp>
        </descripcio>
        <horari>
            <cat>Tots els dies de 19:30h a 23:00h. Divendres, Dissabtes i Diumenges de 13:30h a 16:00h.</cat>
            <esp>Todos los días de 19:30h a 23:00h. Viernes, Sábados y Domingos de 13:30h a 16:00h.</esp>
        </horari>
        <contacte>
            <poblacio>Ariany</poblacio>
            <adreca>Carrer Major 2</adreca>
            <telefon>691473379</telefon>
            <web>www.esconvent.org</web>
        </contacte>
        <preu>entre 20 i 25 €</preu>
        <tipusCuina>
            <tipus>mallorquí</tipus>
            <tipus>mediterrani</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Restaurant Molí des Torrent</nom>
        <descripcio>
            <cat>El nostre molí històric i reformat ofereix la ubicació ideal per organitzar festes d'aniversari, casaments o reunions de negocis. Al restaurant i el pati també pot passar un inoblidable sopar a la llum de les espelmes per a dues persones.</cat>
            <esp>Nuestro molino histórico y cuidadosamente restaurado ofrece la ubicación perfecta para celebrar cumpleaños, bodas o reuniones de negocios. En el restaurante y nuestro patio también puede pasar una inolvidable cena a la luz de las velas para dos.</esp>
        </descripcio>
        <horari>
            <cat>De dilluns a dissabtes: 12.30 a 15.30h i 20.30 a 23h. Diumenges i festius tancat.</cat>
            <esp>De lunes a sábados: 12.30 a 15.30h y 20.30 a 23h. Domingos y festivos cerrado.</esp>
        </horari>
        <contacte>
            <poblacio>Santa Maria</poblacio>
            <adreca>Carretera de Bunyola 75</adreca>
            <telefon>971140503</telefon>
            <web>www.molidestorrent.de</web>
        </contacte>
        <preu>entre 20 i 25 €</preu>
        <tipusCuina>
            <tipus>mediterrani</tipus>
            <tipus>romàntic</tipus>
            <tipus>sopars d'empresa</tipus>
            <tipus>amb terrassa</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Restaurant Sa Plaça Petra</nom>
        <descripcio>
            <cat>Al restaurant Sa Plaça Petra es desenvolupa una deliciosa cuina d'autor i antiga cuina mallorquina, de manera que es pot dir que es tracta d'un restaurant autèntic mallorquí, amb el menjar casolà i tradicional de tota la vida, seguint les receptes d'antany, però innovant amb tocs d'autor que fan els seus plats únics..</cat>
            <esp>En el restaurante Sa Plaça Petra se desarrolla una deliciosa cocina de autor y antigua cocina mallorquina, por lo que se puede decir que se trata de un restaurante auténtico mallorquín, con la comida casera y tradicional de toda la vida, siguiendo las recetas de antaño, pero innovando con toques de autor que hacen sus platos únicos. </esp>
        </descripcio>
        <horari>
            <cat>Dilluns de 8 a 16h i de dimecres a diumenge de 12 a 23:30h. Dimarts tancat.</cat>
            <esp>Lunes de 8 a 16h y de miércoles a domingo de 12 a 23:30h. Martes cerrado.</esp>
        </horari>
        <contacte>
            <poblacio>Petra</poblacio>
            <adreca>c/ Ramon Llull 4</adreca>
            <telefon>971561646</telefon>
            <web>www.petithotelpetra.com</web>
        </contacte>
        <preu>més de 50 €</preu>
        <tipusCuina>
            <tipus>romàntic</tipus>
            <tipus>mercat</tipus>
            <tipus>grups</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Ristorante Brunello</nom>
        <descripcio>
            <cat>Menjar al restaurant Brunello et transporta a una altra època ... Les seves parets estan decorades amb pintures murals de l'època grega i romana. Decorat amb una exquisida elegància, sense fum, ambient relaxat, tracte molt cuidat i excel·lent atenció per part dels cambrers..</cat>
            <esp>Comer en el restaurante Brunello te transporta a otra época... Sus paredes están decoradas con pinturas murales de la época griega y romana. Decorado con una exquisita elegancia, sin humo, ambiente relajado, trato muy cuidado y excelente atención por parte de los camareros. </esp>
        </descripcio>
        <horari>
            <cat>Tots els dies de 13:30 a 15:30h.</cat>
            <esp>Todos los días de 13:30 a 15:30h.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>c/Santiago Ramón y Cajal, 15 </adreca>
            <telefon>971221424</telefon>
            <web>www.brunelloitalianrestaurant.com</web>
        </contacte>
        <preu>entre 30 i 40 €</preu>
        <tipusCuina>
            <tipus>italià</tipus>
            <tipus>mediterrani</tipus>
            <tipus>pizza</tipus>
            <tipus>pasta</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Can Joan Capo</nom>
        <descripcio>
            <cat>Al nostre restaurant podrà degustar cuina basada en la dieta mediterrània, amb elaboracions i receptes típiques actualitzades, sense oblidar altres conceptes i tècniques. El nostre xef elabora diàriament delicioses exquisideses mantenint sempre el màxim respecte pels productes autòctons, de temporada i sobretot frescos. El nostre objectiu és que puguin gaudir d'un dinar o sopar sorprenent en un ambient amb caràcter. Gaudir menjant és la millor manera d'aturar el temps. Treballem perquè ho aconsegueixi entre nosaltres.</cat>
            <esp>En nuestro restaurante podrá degustar cocina basada en la dieta mediterránea, con elaboraciones y recetas típicas actualizadas, sin olvidar otros conceptos y técnicas. Nuestro chef elabora diariamente deliciosas exquisiteces manteniendo siempre el máximo respeto por los productos autóctonos, de temporada y sobretodo frescos. Nuestro objetivo es que puedan disfrutar de una comida o cena sorprendente en un ambiente con carácter. Disfrutar comiendo es la mejor forma de detener el tiempo. Trabajamos para que lo consiga entre nosotros.</esp>
        </descripcio>
        <horari>
            <cat>Tots els dies de 13:30 a 15:30h.</cat>
            <esp>Todos los días de 13:30 a 15:30h.</esp>
        </horari>
        <contacte>
            <poblacio>Sineu</poblacio>
            <adreca>Degà Joan Rotger,4</adreca>
            <telefon>971855075</telefon>
            <web>www.canjoancapo.com</web>
        </contacte>
        <preu>entre 40 i 50 €</preu>
        <tipusCuina>
            <tipus>d'autor</tipus>
            <tipus>tradicional</tipus>
        </tipusCuina>
    </establiment>

    <establiment>
        <nom>Vietnam Café</nom>
        <descripcio>
            <cat>Vietnam Cafè va obrir les seves portes a Palma després d'una visita dels seus propietaris a aquest mateix país el 2004. Van quedar impressionats amb els seus paisatges, les seves gents i els productes naturals i els meravellosos sabors de la cuina vietnamita. A Vietnam Cafè, el seu cap de cuina Tuan Thin i el seu ajudant Dhuong Tahng elaboren una cuina autòctona fidel a la seva tradició i transporten als seus clients a aquest llunyà país. Molts dels ingredients són importats d'Àsia, alguns Vietnam com lemongrass, fulles de llima, tamarinde i grans de lotus. L'aperitiu estrella són els rotllets de primavera coneguts com 'nems'. Estan fets amb pasta d'arròs i s'elaboren amb diversos ingredients (segons la zona del peix, vegetals, pollastre).</cat>
            <esp>Viétnam Café abrió sus puertas en Palma después de una visita de sus propietarios a ese mismo país en 2004. Quedaron impresionados con sus paisajes, sus gentes y los productos naturales y los maravillosos sabores de la cocina vietnamita. En Viétnam Café, su jefe de cocina Tuan Thin y su ayudante Dhuong Tahng elaboran una cocina autóctona fiel a su tradición y transportan a sus clientes a ese lejano país. Muchos de los ingredientes son importados de Asia, algunos de Vietnam como lemongrass, hojas de lima, tamarindo y granos de loto. El aperitivo estrella son los rollitos de primavera conocidos como 'nems'. Están hechos con pasta de arroz y se elaboran con diversos ingredientes (según la zona del pescado, vegetales, pollo).</esp>
        </descripcio>
        <horari>
            <cat>De dimarts a diumenge de 13:00 a 15: 30h i de 20: 00h a 23: 30h. Dilluns tancat.</cat>
            <esp>De martes a domingo de 13:00 a 15:30h y de 20:00h a 23:30h. Lunes cerrado.</esp>
        </horari>
        <contacte>
            <poblacio>Palma</poblacio>
            <adreca>Plaça Progrés, 14</adreca>
            <telefon>971285023</telefon>
            <web>www.vietnamcafe.es</web>
        </contacte>
        <preu>entre 25 i 30 €</preu>
        <tipusCuina>
            <tipus>exòtic</tipus>
            <tipus>romàntic</tipus>
            <tipus>vietnamita</tipus>
            <tipus>asiàtic</tipus>
        </tipusCuina>
    </establiment>
</establiments>
xml;
        $xml    = simplexml_load_string( $tipus );
        $tipuss = [];
        foreach ( $xml as $item ) {
            foreach ( $item->tipusCuina->tipus as $item2 ) {
                $tipuss[] = $item2->__toString();
            }
        }
        $tipuss = array_unique( $tipuss );
        foreach ( $tipuss as $item ) {
            DB::table('cooking_types')->insert([
                'name' => $item
            ]);
        }
    }
}
