<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PROVINCE AZUAY
        $parishesCuenca = [
            ['descripcion' => 'BELLAVISTA'],
            ['descripcion' => 'CAÑARIBAMBA'],
            ['descripcion' => 'EL BATÁN'],
            ['descripcion' => 'EL SAGRARIO'],
            ['descripcion' => 'EL VECINO'],
            ['descripcion' => 'GIL RAMÍREZ DÁVALOS'],
            ['descripcion' => 'HUAYNACÁPAC'],
            ['descripcion' => 'MACHÁNGARA'],
            ['descripcion' => 'MONAY'],
            ['descripcion' => 'SAN BLAS'],
            ['descripcion' => 'SAN SEBASTIÁN'],
            ['descripcion' => 'SUCRE'],
            ['descripcion' => 'TOTORACOCHA'],
            ['descripcion' => 'YANUNCAY'],
            ['descripcion' => 'HERMANO MIGUEL'],
            ['descripcion' => 'CUENCA'],
            ['descripcion' => 'BAÑOS'],
            ['descripcion' => 'CUMBE'],
            ['descripcion' => 'CHAUCHA'],
            ['descripcion' => 'CHECA (JIDCAY)'],
            ['descripcion' => 'CHIQUINTAD'],
            ['descripcion' => 'LLACAO'],
            ['descripcion' => 'MOLLETURO'],
            ['descripcion' => 'NULTI'],
            ['descripcion' => 'OCTAVIO CORDERO PALACIOS (SANTA ROSA)'],
            ['descripcion' => 'PACCHA'],
            ['descripcion' => 'QUINGEO'],
            ['descripcion' => 'RICAURTE'],
            ['descripcion' => 'SAN JOAQUÍN'],
            ['descripcion' => 'SANTA ANA'],
            ['descripcion' => 'SAYAUSÍ'],
            ['descripcion' => 'SIDCAY'],
            ['descripcion' => 'SININCAY'],
            ['descripcion' => 'TARQUI'],
            ['descripcion' => 'TURI'],
            ['descripcion' => 'VALLE'],
            ['descripcion' => 'VICTORIA DEL PORTETE (IRQUIS)'],
        ];
        $cuenca = City::find(1);
        $cuenca->parishes()->createMany($parishesCuenca);

        $parishesGiron = [
            ['descripcion' => 'GIRON'],
            ['descripcion' => 'LA ASUNCION'],
            ['descripcion' => 'SAN GERARDO'],
        ];
        $giron = City::find(2);
        $giron->parishes()->createMany($parishesGiron);

        $parishesGualaceo = [
            ['descripcion' => 'GUALACEO'],
            ['descripcion' => 'DANIEL CÓRDOVA TORAL (EL ORIENTE)'],
            ['descripcion' => 'JADÁN'],
            ['descripcion' => 'MARIANO MORENO'],
            ['descripcion' => 'REMIGIO CRESPO TORAL (GÚLAG)'],
            ['descripcion' => 'SAN JUAN'],
            ['descripcion' => 'ZHIDMAD'],
            ['descripcion' => 'LUIS CORDERO VEGA'],
            ['descripcion' => 'SIMÓN BOLÍVAR (CAB. EN GAÑANZOL)'],
        ];
        $gualaceo = City::find(3);
        $gualaceo->parishes()->createMany($parishesGualaceo);

        $parishesNabon = [
            ['descripcion' => 'NABON'],
            ['descripcion' => 'COCHAPATA'],
            ['descripcion' => 'EL PROGRESO (CAB. EN ZHOTA)'],
            ['descripcion' => 'LAS NIEVES'],
        ];
        $nabon = City::find(4);
        $nabon->parishes()->createMany($parishesNabon);

        $parishesPaute = [
            ['descripcion' => 'PAUTE'],
            ['descripcion' => 'BULAN'],
            ['descripcion' => 'CHICAN (GUILLERMO ORTEGA)'],
            ['descripcion' => 'EL CABO'],
            ['descripcion' => 'GUARAINAG'],
            ['descripcion' => 'SAN CRISTOBAL (CARLOS ORDOÑEZ LAZO)'],
            ['descripcion' => 'TOMEBAMBA'],
            ['descripcion' => 'DUG DUG'],
        ];
        $paute = City::find(5);
        $paute->parishes()->createMany($parishesPaute);

        $parishesPucara = [
            ['descripcion' => 'PUCARA'],
            ['descripcion' => 'SAN RAFAEL DE SHARUG'],
        ];
        $pucara = City::find(6);
        $pucara->parishes()->createMany($parishesPucara);

        $parishesSF = [
            ['descripcion' => 'SAN FERNANDO'],
            ['descripcion' => 'CHUMBLIN'],
        ];
        $sanFernando = City::find(7);
        $sanFernando->parishes()->createMany($parishesSF);

        $parishesSI = [
            ['descripcion' => 'SANTA ISABEL, CAB CANTONAL'],
            ['descripcion' => 'ABDON CALDERON'],
            ['descripcion' => 'EL CARMEN DE PIJILI'],
            ['descripcion' => 'SHAGLLI'],
            ['descripcion' => 'SAN SALVADOR DE CAÑARIBAMBA'],
        ];
        $santaI = City::find(8);
        $santaI->parishes()->createMany($parishesSI);

        $parishesSigsig = [
            ['descripcion' => 'SIGSIG'],
            ['descripcion' => 'CUCHIL'],
            ['descripcion' => 'GIMA'],
            ['descripcion' => 'GUEL'],
            ['descripcion' => 'LUDO'],
            ['descripcion' => 'SAN BARTOLOME'],
            ['descripcion' => 'SAN JOSE DE RARANGA'],
        ];
        $sigsig = City::find(9);
        $sigsig->parishes()->createMany($parishesSigsig);

        $parishesOna = [
            ['descripcion' => 'SAN FELIPE DE OÑA, CAB CANTONAL'],
            ['descripcion' => 'SUSUDEL'],
        ];
        $ona = City::find(10);
        $ona->parishes()->createMany($parishesOna);

        $parishesChordeleg = [
            ['descripcion' => 'CHORDELEG'],
            ['descripcion' => 'PRINCIPAL'],
            ['descripcion' => 'LA UNION'],
            ['descripcion' => 'LUIS GALARZA ORELLANA (CAB. EN DELEGSOL)'],
            ['descripcion' => 'SAN MARTIN DE PUZHIO'],
        ];
        $chordeleg = City::find(11);
        $chordeleg->parishes()->createMany($parishesChordeleg);

        $parisheselPan = [
            ['descripcion' => 'EL PAN'],
            ['descripcion' => 'SAN VICENTE'],
        ];
        $elPan = City::find(12);
        $elPan->parishes()->createMany($parisheselPan);

        $parishesSevillaOro = [
            ['descripcion' => 'SEVILLA DE ORO'],
            ['descripcion' => 'AMALUZA'],
            ['descripcion' => 'PALMAS'],
        ];
        $sevillaOro = City::find(13);
        $sevillaOro->parishes()->createMany($parishesSevillaOro);

        $parishesGuachapala = [
            ['descripcion' => 'GUACHAPALA'],
        ];
        $guachapala = City::find(14);
        $guachapala->parishes()->createMany($parishesGuachapala);

        $parishesCamiloPonce = [
            ['descripcion' => 'CAMILO PONCE ENRIQUEZ'],
        ];
        $camiloPonce = City::find(15);
        $camiloPonce->parishes()->createMany($parishesCamiloPonce);

        // PROVINCE BOLIVAR
        $parishesGuaranda = [
            ['descripcion' => 'ÁNGEL POLIBIO CHÁVES'],
            ['descripcion' => 'GABRIEL IGNACIO VEINTIMILLA'],
            ['descripcion' => 'GUANUJO'],
            ['descripcion' => 'GUARANDA, CAB CANTONAL Y CAPITAL PROVINCIAL'],
            ['descripcion' => 'FACUNDO VELA'],
            ['descripcion' => 'JULIO E. MORENO (CATANAHUAN GRANDE)'],
            ['descripcion' => 'SALINAS'],
            ['descripcion' => 'SAN LORENZO'],
            ['descripcion' => 'SAN SIMON'],
            ['descripcion' => 'SANTA FE'],
            ['descripcion' => 'SIMIATUG'],
            ['descripcion' => 'SAN LUIS DE PAMBIL'],
        ];
        $guaranda = City::find(16);
        $guaranda->parishes()->createMany($parishesGuaranda);

        $parishesChillanes = [
            ['descripcion' => 'CHILLANES, CAB CANTONAL'],
            ['descripcion' => 'SAN JOSÉ DEL TAMBO (CAB. EN TAMBOPAMBA)'],
        ];
        $chillanes = City::find(17);
        $chillanes->parishes()->createMany($parishesChillanes);

        $parishesChimbo = [
            ['descripcion' => 'SAN JOSE DE CHIMBO, CAB CANTONAL'],
            ['descripcion' => 'ASUNCION'],
            ['descripcion' => 'LA MAGDALENA'],
            ['descripcion' => 'SAN SEBASTIAN'],
            ['descripcion' => 'TELIMBELA'],
        ];
        $chimbo = City::find(18);
        $chimbo->parishes()->createMany($parishesChimbo);

        $parishesEcheandia = [
            ['descripcion' => 'ECHEANDIA'],
        ];
        $echeandia = City::find(19);
        $echeandia->parishes()->createMany($parishesEcheandia);

        $parishesSanMiguel = [
            ['descripcion' => 'SAN MIGUEL, CAB CANTONAL'],
            ['descripcion' => 'BALSAPAMBA'],
            ['descripcion' => 'BILOVAN'],
            ['descripcion' => 'REGULO DE MORA'],
            ['descripcion' => 'SAN PABLO (SAN PABLO DE ATENAS)'],
            ['descripcion' => 'SANTIAGO'],
            ['descripcion' => 'SAN VICENTE'],
        ];
        $sanMiguel = City::find(20);
        $sanMiguel->parishes()->createMany($parishesSanMiguel);

        $parishesCaluma = [
            ['descripcion' => 'CALUMA, CAB CANTONAL'],
        ];
        $caluma = City::find(21);
        $caluma->parishes()->createMany($parishesCaluma);

        $parishesLasNaves = [
            ['descripcion' => 'LAS MERCEDES'],
            ['descripcion' => 'LAS NAVES, CAB CANTONAL'],
        ];
        $lasNaves = City::find(22);
        $lasNaves->parishes()->createMany($parishesLasNaves);

        // ---------- PROVINCE CAÑAR -----------
        $parishesAzogues= [
            ['descripcion' => 'AURELIO BAYAS MARTÍNEZ'],
            ['descripcion' => 'AZOGUES, CAB CANTONAL Y CAPITAL PROVINCIAL'],
            ['descripcion' => 'BORRERO'],
            ['descripcion' => 'SAN FRANCISCO'],
            ['descripcion' => 'COJITAMBO'],
            ['descripcion' => 'GUAPAN'],
            ['descripcion' => 'JAVIER LOYOLA'],
            ['descripcion' => 'LUIS CORDERO'],
            ['descripcion' => 'PINDILIG'],
            ['descripcion' => 'RIVERA'],
            ['descripcion' => 'SAN MIGUEL'],
            ['descripcion' => 'TADAY'],
        ];
        $azogues = City::find(23);
        $azogues->parishes()->createMany($parishesAzogues);

        $parishesBiblian= [
            ['descripcion' => 'BIBLIAN'],
            ['descripcion' => 'NAZON (CAB. EN PAMPA DE DOMINGUEZ)'],
            ['descripcion' => 'SAN FRANCISCO DE SAGEO'],
            ['descripcion' => 'TURUPAMBA'],
            ['descripcion' => 'JERUSALEN'],
        ];
        $biblian = City::find(24);
        $biblian->parishes()->createMany($parishesBiblian);

        $parishesCanar = [
            ['descripcion' => 'CAÑAR, CAB CANTONAL'],
            ['descripcion' => 'CHONTAMARCA'],
            ['descripcion' => 'CHOROCOPTE'],
            ['descripcion' => 'GENERAL MORALES (SOCARTE)'],
            ['descripcion' => 'GUALLETURO'],
            ['descripcion' => 'HONORATO VASQUEZ (TAMBO VIEJO)'],
            ['descripcion' => 'INGAPIRCA'],
            ['descripcion' => 'JUNCAL'],
            ['descripcion' => 'SAN ANTONIO'],
            ['descripcion' => 'ZHUD'],
            ['descripcion' => 'VENTURA'],
            ['descripcion' => 'DUCUR'],
        ];
        $canar = City::find(25);
        $canar->parishes()->createMany($parishesCanar);

        $parishesLaTroncal = [
            ['descripcion' => 'LA TRONCAL, CAB CANTONAL'],
            ['descripcion' => 'MANUEL J. CALLE'],
            ['descripcion' => 'PANCHO NEGRO'],
        ];
        $laTroncal = City::find(26);
        $laTroncal->parishes()->createMany($parishesLaTroncal);

        $parishesElTambo = [
            ['descripcion' => 'EL TAMBO, CAB CANTONAL'],
        ];
        $elTambo = City::find(27);
        $elTambo->parishes()->createMany($parishesElTambo);
        
        $parishesDeleg = [
            ['descripcion' => 'DELEG, CAB CANTONAL'],
            ['descripcion' => 'SOLANO'],
        ];
        $deleg = City::find(28);
        $deleg->parishes()->createMany($parishesDeleg);

        $parishesSuscal = [
            ['descripcion' => 'SUSCAL, CAB CANTONAL'],
        ];
        $suscal = City::find(29);
        $suscal->parishes()->createMany($parishesSuscal);

        // ---------- PROVINCE CARCHI -----------
        $parishesTulcan = [
            ['descripcion' => 'GONZALEZ SUAREZ'],
            ['descripcion' => 'TULCAN'],
            ['descripcion' => 'EL CARMELO'],
            ['descripcion' => 'JULIO ANDRADE (OREJUELA)'],
            ['descripcion' => 'MALDONADO'],
            ['descripcion' => 'PIOTER'],
            ['descripcion' => 'TOBAR DONOSO (LA BOCANA DE CAMUMBI)'],
            ['descripcion' => 'TUFIÑO'],
            ['descripcion' => 'URBINA (TAYA)'],
            ['descripcion' => 'EL CHICAL'],
            ['descripcion' => 'SANTA MARTHA DE CUBA'],
        ];
        $tulcan = City::find(30);
        $tulcan->parishes()->createMany($parishesTulcan);

        $parishesBolivar = [
            ['descripcion' => 'BOLIVAR'],
            ['descripcion' => 'GARCIA MORENO'],
            ['descripcion' => 'LOS ANDES'],
            ['descripcion' => 'MONTE OLIVO'],
            ['descripcion' => 'SAN VICENTE DE PUSIR'],
            ['descripcion' => 'SAN RAFAEL'],
        ];
        $bolivar = City::find(31);
        $bolivar->parishes()->createMany($parishesBolivar);

        $parishesEspejo = [
            ['descripcion' => 'EL ANGEL'],
            ['descripcion' => '27 DE SEPTIEMBRE'],
            ['descripcion' => 'EL ANGEL (URBANO)'],
            ['descripcion' => 'EL GOALTAL'],
            ['descripcion' => 'LA LIBERTAD (ALIZO)'],
            ['descripcion' => 'SAN ISIDRO'],
        ];
        $espejo = City::find(32);
        $espejo->parishes()->createMany($parishesEspejo);

        $parishesMira = [
            ['descripcion' => 'MIRA (CHONTAHUASI)'],
            ['descripcion' => 'CONCEPCION'],
            ['descripcion' => 'JIJON Y CAAMAÑO (CAB. EN RIO BLANCO)'],
            ['descripcion' => 'JUAN MONTALVO (SAN IGNACIO DE QUIL)'],
        ];
        $mira = City::find(33);
        $mira->parishes()->createMany($parishesMira);

        $parishesMontufar = [
            ['descripcion' => 'SAN GABRIEL'],
            ['descripcion' => 'GONZALEZ SUAREZ'],
            ['descripcion' => 'SAN JOSE'],
            ['descripcion' => 'CRISTOBAL COLON'],
            ['descripcion' => 'CHITAN DE NAVARRETE'],
            ['descripcion' => 'FERNANDEZ SALVADOR'],
            ['descripcion' => 'LA PAZ'],
            ['descripcion' => 'PIARTAL'],
        ];
        $montufar = City::find(34);
        $montufar->parishes()->createMany($parishesMontufar);

        $parishesSanPedroH = [
            ['descripcion' => 'HUACA'],
            ['descripcion' => 'MARISCAL SUCRE'],
        ];
        $sanPedroH = City::find(35);
        $sanPedroH->parishes()->createMany($parishesSanPedroH);

        // ---------- PROVINCE COTOPAXI -----------
        $parishesLatacunga = [
            ['descripcion' => 'ELOY ALFARO (SAN FELIPE)'],
            ['descripcion' => 'IGNACIO FLORES'],
            ['descripcion' => 'JUAN MONTALVO'],
            ['descripcion' => 'LA MATRIZ'],
            ['descripcion' => 'SAN BUENAVENTURA'],
            ['descripcion' => 'LATACUNGA'],
            ['descripcion' => 'ALAQUEZ (ALAQUES)'],
            ['descripcion' => 'BELISARIO QUEVEDO (GUANAILIN)'],
            ['descripcion' => 'GUAYTACAMA (GUAITACAMA)'],
            ['descripcion' => 'JOSEGUANGO BAJO'],
            ['descripcion' => 'MULALO'],
            ['descripcion' => '11 DE NOVIEMBRE (ILINCHISI)'],
            ['descripcion' => 'POALO'],
            ['descripcion' => 'SAN JUAN DE PASTOCALLE'],
            ['descripcion' => 'TANICUCHI'],
            ['descripcion' => 'TOACASO'],
        ];
        $latacunga = City::find(36);
        $latacunga->parishes()->createMany($parishesLatacunga);

        $parisheslaMana = [
            ['descripcion' => 'EL CARMEN'],
            ['descripcion' => 'LA MANA (URBANO)'],
            ['descripcion' => 'EL TRIUNFO'],
            ['descripcion' => 'LA MANA (RURAL)'],
            ['descripcion' => 'GUASAGANDA (CAB. EN GUASAGANDA CENTRO)'],
            ['descripcion' => 'PUCAYACU'],
        ];
        $laMana = City::find(37);
        $laMana->parishes()->createMany($parisheslaMana);

        $parishesPangua = [
            ['descripcion' => 'EL CORAZON'],
            ['descripcion' => 'MORASPUNGO'],
            ['descripcion' => 'PINLLOPATA'],
            ['descripcion' => 'RAMON CAMPAÑA'],
        ];
        $pangua = City::find(38);
        $pangua->parishes()->createMany($parishesPangua);

        $parishesPujili = [
            ['descripcion' => 'PUJILI'],
            ['descripcion' => 'ANGAMARCA'],
            ['descripcion' => 'GUANGAJE'],
            ['descripcion' => 'LA VICTORIA'],
            ['descripcion' => 'PILALO'],
            ['descripcion' => 'TINGO'],
            ['descripcion' => 'ZUMBAHUA'],
        ];
        $pujili = City::find(39);
        $pujili->parishes()->createMany($parishesPujili);

        $parishesSalcedo = [
            ['descripcion' => 'SAN MIGUEL'],
            ['descripcion' => 'ANTONIO JOSE HOLGUIN (SANTA LUCIA)'],
            ['descripcion' => 'CUSUBAMBA'],
            ['descripcion' => 'MULALILLO'],
            ['descripcion' => 'MULLIQUINDIL (SANTA ANA)'],
            ['descripcion' => 'PANSALEO'],
        ];
        $salcedo = City::find(40);
        $salcedo->parishes()->createMany($parishesSalcedo);

        $parishesSaquisili = [
            ['descripcion' => 'SAQUISILI'],
            ['descripcion' => 'CANCHAGUA'],
            ['descripcion' => 'CHANTILIN'],
            ['descripcion' => 'COCHAPAMBA'],
        ];
        $saquisili = City::find(41);
        $saquisili->parishes()->createMany($parishesSaquisili);

        $parishesSigchos = [
            ['descripcion' => 'SIGCHOS'],
            ['descripcion' => 'CHUGCHILLAN'],
            ['descripcion' => 'ISINLIVI'],
            ['descripcion' => 'LAS PAMPAS'],
            ['descripcion' => 'PALO QUEMADO'],
        ];
        $sigchos = City::find(42);
        $sigchos->parishes()->createMany($parishesSigchos);

        // ---------- PROVINCE CHIMBORAZO -----------
        $parishesRiobamba = [
            ['descripcion' => 'LIZARZABURU'],
            ['descripcion' => 'MALDONADO'],
            ['descripcion' => 'VELASCO'],
            ['descripcion' => 'VELOZ'],
            ['descripcion' => 'YARUQUIES'],
            ['descripcion' => 'LICAN'],
            ['descripcion' => 'RIOBAMBA'],
            ['descripcion' => 'CACHA (CAB. EN MACHANGARA)'],
            ['descripcion' => 'CALPI'],
            ['descripcion' => 'CUBIJIES'],
            ['descripcion' => 'FLORES'],
            ['descripcion' => 'LICAN'],
            ['descripcion' => 'LICTO'],
            ['descripcion' => 'PUNGALA'],
            ['descripcion' => 'PUNIN'],
            ['descripcion' => 'QUIMIAG'],
            ['descripcion' => 'SAN JUAN'],
            ['descripcion' => 'SAN LUIS'],
        ];
        $riobamba = City::find(43);
        $riobamba->parishes()->createMany($parishesRiobamba);

        $parishesAlausi = [
            ['descripcion' => 'ALAUSI'],
            ['descripcion' => 'ACHUPALLAS'],
            ['descripcion' => 'GUASUNTOS'],
            ['descripcion' => 'HUIGRA'],
            ['descripcion' => 'MULTITUD'],
            ['descripcion' => 'PISTISHI (NARIZ DEL DIABLO)'],
            ['descripcion' => 'PUMALLACTA'],
            ['descripcion' => 'SEVILLA'],
            ['descripcion' => 'SIBAMBE'],
            ['descripcion' => 'TIXAN'],
        ];
        $alausi = City::find(44);
        $alausi->parishes()->createMany($parishesAlausi);

        $parishesColta = [
            ['descripcion' => 'CAJABAMBA'],
            ['descripcion' => 'SICALPA'],
            ['descripcion' => 'VILLA LA UNION (CAJABAMBA)'],
            ['descripcion' => 'CAÑI'],
            ['descripcion' => 'COLUMBE'],
            ['descripcion' => 'JUAN DE VELASCO (PANGOR)'],
            ['descripcion' => 'SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)'],
        ];
        $colta = City::find(45);
        $colta->parishes()->createMany($parishesColta);

        $parishesChambo = [
            ['descripcion' => 'CHAMBO'],
        ];
        $chambo = City::find(46);
        $chambo->parishes()->createMany($parishesChambo);

        $parishesChunchi = [
            ['descripcion' => 'CHUNCHI'],
            ['descripcion' => 'CAPZOL'],
            ['descripcion' => 'COMPUD'],
            ['descripcion' => 'GONZOL'],
            ['descripcion' => 'LLAGOS'],
        ];
        $chunchi = City::find(47);
        $chunchi->parishes()->createMany($parishesChunchi);

        $parishesGuamote = [
            ['descripcion' => 'GUAMOTE'],
            ['descripcion' => 'CEBADAS'],
            ['descripcion' => 'PALMIRA'],
        ];
        $guamote = City::find(48);
        $guamote->parishes()->createMany($parishesGuamote);

        $parishesGuano = [
            ['descripcion' => 'EL ROSARIO'],
            ['descripcion' => 'LA MATRIZ'],
            ['descripcion' => 'GUANO'],
            ['descripcion' => 'GUANANDO'],
            ['descripcion' => 'ILAPO'],
            ['descripcion' => 'LA PROVIDENCIA'],
            ['descripcion' => 'SAN ANDRES'],
            ['descripcion' => 'SAN GERARDO DE PACAICAGUAN'],
            ['descripcion' => 'SAN ISIDRO DE PATULU'],
            ['descripcion' => 'SAN JOSE DEL CHAZO'],
            ['descripcion' => 'SANTA FE DE GALAN'],
            ['descripcion' => 'VALPARAISO'],
        ];
        $guano = City::find(49);
        $guano->parishes()->createMany($parishesGuano);

        $parishesPallantanga = [
            ['descripcion' => 'PALLATANGA'],
        ];
        $pallatanga = City::find(50);
        $pallatanga->parishes()->createMany($parishesPallantanga);

        $parishesPenipe = [
            ['descripcion' => 'PENIPE'],
            ['descripcion' => 'EL ALTAR'],
            ['descripcion' => 'MATUS'],
            ['descripcion' => 'PUELA'],
            ['descripcion' => 'SAN ANTONIO DE BAYUSHIG'],
            ['descripcion' => 'LA CANDELARIA'],
            ['descripcion' => 'BILBAO (CAB. EN QUILLUYACU)'],
        ];
        $penipe = City::find(51);
        $penipe->parishes()->createMany($parishesPenipe);

        $parishesCumanda = [
            ['descripcion' => 'CUMANDA'],
        ];
        $cumanda = City::find(52);
        $cumanda->parishes()->createMany($parishesCumanda);

        // ---------- PROVINCE EL ORO -----------
        $parishesMachala = [
            ['descripcion' => 'LA PROVIDENCIA'],
            ['descripcion' => 'MACHALA (URBANO)'],
            ['descripcion' => 'PUERTO BOLÍVAR'],
            ['descripcion' => 'NUEVE DE MAYO'],
            ['descripcion' => 'EL CAMBIO'],
            ['descripcion' => 'MACHALA (RURAL)'],
            ['descripcion' => 'EL RETIRO'],
        ];
        $machala = City::find(53);
        $machala->parishes()->createMany($parishesMachala);

        $parishesArenillas = [
            ['descripcion' => 'ARENILLAS'],
            ['descripcion' => 'CHACRAS'],
            ['descripcion' => 'PALMALES'],
            ['descripcion' => 'CARCABON'],
            ['descripcion' => 'LA CUCA'],
        ];
        $arenillas = City::find(54);
        $arenillas->parishes()->createMany($parishesArenillas);

        $parishesAtahualpa = [
            ['descripcion' => 'PACCHA'],
            ['descripcion' => 'AYAPAMBA'],
            ['descripcion' => 'CORDONCILLO'],
            ['descripcion' => 'MILAGRO'],
            ['descripcion' => 'SAN JOSE'],
            ['descripcion' => 'SAN JUAN DE CERRO AZUL'],
        ];
        $atahualpa = City::find(55);
        $atahualpa->parishes()->createMany($parishesAtahualpa);

        $parishesBalsas = [
            ['descripcion' => 'BALSAS'],
            ['descripcion' => 'BELLAMARIA'],
        ];
        $balsas = City::find(56);
        $balsas->parishes()->createMany($parishesBalsas);

        $parishesChilla = [
            ['descripcion' => 'CHILLA'],
        ];
        $chilla = City::find(57);
        $chilla->parishes()->createMany($parishesChilla);

        $parishesElGuabo = [
            ['descripcion' => 'EL GUABO'],
            ['descripcion' => 'BARBONES (SUCRE)'],
            ['descripcion' => 'LA IBERIA'],
            ['descripcion' => 'TENDALES (CAB. EN PUERTO TENDALES)'],
            ['descripcion' => 'RIO BONITO'],
        ];
        $elGuabo = City::find(58);
        $elGuabo->parishes()->createMany($parishesElGuabo);

        $parishesHuaquillas = [
            ['descripcion' => 'ECUADOR'],
            ['descripcion' => 'EL PARAISO'],
            ['descripcion' => 'HUALTACO'],
            ['descripcion' => 'MILTON REYES'],
            ['descripcion' => 'UNION LOJANA'],
            ['descripcion' => 'HUAQUILLAS'],
        ];
        $huaquillas = City::find(59);
        $huaquillas->parishes()->createMany($parishesHuaquillas);

        $parishesMarcabeli = [
            ['descripcion' => 'MARCABELI'],
            ['descripcion' => 'EL INGENIO'],
        ];
        $marcabeli = City::find(60);
        $marcabeli->parishes()->createMany($parishesMarcabeli);

        $parishesPasaje = [
            ['descripcion' => 'BOLIVAR'],
            ['descripcion' => 'LOMA DE FRANCO'],
            ['descripcion' => 'OCHOA LEON (MATRIZ)'],
            ['descripcion' => 'TRES CERRITOS'],
            ['descripcion' => 'PASAJE'],
            ['descripcion' => 'BUENAVISTA'],
            ['descripcion' => 'CASACAY'],
            ['descripcion' => 'LA PEAÑA'],
            ['descripcion' => 'PROGRESO'],
            ['descripcion' => 'UZHCURRUMI'],
            ['descripcion' => 'CAÑAQUEMADA'],
        ];
        $pasaje = City::find(61);
        $pasaje->parishes()->createMany($parishesPasaje);

        $parishesPinas = [
            ['descripcion' => 'LA MATRIZ'],
            ['descripcion' => 'LA SUSAYA'],
            ['descripcion' => 'PIÑAS GRANDE'],
            ['descripcion' => 'PIÑAS'],
            ['descripcion' => 'CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)'],
            ['descripcion' => 'LA BOCANA'],
            ['descripcion' => 'MOROMORO (CAB. EN EL VADO)'],
            ['descripcion' => 'PIEDRAS'],
            ['descripcion' => 'SAN ROQUE (AMBROSIO MALDONADO)'],
            ['descripcion' => 'SARACAY'],
        ];
        $pinas = City::find(62);
        $pinas->parishes()->createMany($parishesPinas);

        $parishesPortovelo = [
            ['descripcion' => 'PORTOVELO'],
            ['descripcion' => 'CURTINCAPA'],
            ['descripcion' => 'MORALES'],
            ['descripcion' => 'SALATI'],
        ];
        $portovelo = City::find(63);
        $portovelo->parishes()->createMany($parishesPortovelo);

        $parishesSantaRosa = [
            ['descripcion' => 'SANTA ROSA (URBANO)'],
            ['descripcion' => 'PUERTO JELI'],
            ['descripcion' => 'BALNEARIO JAMBELI (SATELITE)'],
            ['descripcion' => 'JUMON (SATELITE)'],
            ['descripcion' => 'NUEVO SANTA ROSA'],
            ['descripcion' => 'SANTA ROSA (RURAL)'],
            ['descripcion' => 'BELLAVISTA'],
            ['descripcion' => 'JAMBELI'],
            ['descripcion' => 'LA AVANZADA'],
            ['descripcion' => 'SAN ANTONIO'],
            ['descripcion' => 'TORATA'],
            ['descripcion' => 'VICTORIA'],
            ['descripcion' => 'BELLAMARIA'],
        ];
        $santaRosa = City::find(64);
        $santaRosa->parishes()->createMany($parishesSantaRosa);

        $parishesZaruma = [
            ['descripcion' => 'ZARUMA'],
            ['descripcion' => 'ABAÑIN'],
            ['descripcion' => 'ARCAPAMBA'],
            ['descripcion' => 'GUANAZAN'],
            ['descripcion' => 'GUIZHAGUIÑA'],
            ['descripcion' => 'HUERTAS'],
            ['descripcion' => 'MALVAS'],
            ['descripcion' => 'MULUNCAY GRANDE'],
            ['descripcion' => 'SINSAO'],
            ['descripcion' => 'SALVIAS'],
        ];
        $zaruma = City::find(65);
        $zaruma->parishes()->createMany($parishesZaruma);

        $parishesLasLajas = [
            ['descripcion' => 'LA VICTORIA'],
            ['descripcion' => 'PLATANILLOS'],
            ['descripcion' => 'VALLE HERMOSO'],
            ['descripcion' => 'LA VICTORIA (RURAL)'],
            ['descripcion' => 'LA LIBERTAD'],
            ['descripcion' => 'EL PARAISO'],
            ['descripcion' => 'SAN ISIDRO'],
        ];
        $lasLajas = City::find(66);
        $lasLajas->parishes()->createMany($parishesLasLajas);

        // ---------- PROVINCE ESMERALDAS -----------
        $parishesEsmeraldas = [
            ['descripcion' => 'BARTOLOME RUIZ (CESAR FRANCO CARRION)'],
            ['descripcion' => '5 DE AGOSTO'],
            ['descripcion' => 'ESMERALDAS (URBANO)'],
            ['descripcion' => 'LUIS TELLO (LAS PALMAS)'],
            ['descripcion' => 'SIMON PLATAS TORRES'],
            ['descripcion' => 'ESMERALDAS (RURAL)'],
            ['descripcion' => 'CAMARONES (CAB. EN SAN VICENTE)'],
            ['descripcion' => 'CORONEL CARLOS CONCHA TORRES (CAB. EN HUELE)'],
            ['descripcion' => 'CHINCA'],
            ['descripcion' => 'MAJUA'],
            ['descripcion' => 'SAN MATEO'],
            ['descripcion' => 'TABIAZO'],
            ['descripcion' => 'TACHINA'],
            ['descripcion' => 'VUELTA LARGA'],
        ];
        $esmeraldas = City::find(67);
        $esmeraldas->parishes()->createMany($parishesEsmeraldas);

        $parishesEloyAlfaro = [
            ['descripcion' => 'VALDEZ (LIMONES)'],
            ['descripcion' => 'ANCHAYACU'],
            ['descripcion' => 'ATAHUALPA (CAB. EN CAMARONES)'],
            ['descripcion' => 'BORBON'],
            ['descripcion' => 'LA TOLA'],
            ['descripcion' => 'LUIS VARGAS TORRES (CAB. EN PLAYA DE ORO)'],
            ['descripcion' => 'MALDONADO'],
            ['descripcion' => 'PAMPANAL DE BOLIVAR'],
            ['descripcion' => 'SAN FRANCISCO DE ONZOLE'],
            ['descripcion' => 'SANTO DOMINGO DE ONZOLE'],
            ['descripcion' => 'SELVA ALEGRE'],
            ['descripcion' => 'TELEMBI'],
            ['descripcion' => 'COLON ELOY DEL MARIA'],
            ['descripcion' => 'SAN JOSE DE CAYAPAS'],
            ['descripcion' => 'TIMBIRE'],
            ['descripcion' => 'SANTA LUCÍA DE LAS PEÑAS'],
        ];
        $eloyAlfaro = City::find(68);
        $eloyAlfaro->parishes()->createMany($parishesEloyAlfaro);

        $parishesMuisne = [
            ['descripcion' => 'MUISNE'],
            ['descripcion' => 'BOLIVAR'],
            ['descripcion' => 'DAULE'],
            ['descripcion' => 'GALERA'],
            ['descripcion' => 'QUINGUE (OLMEDO PERDOMO FRANCO)'],
            ['descripcion' => 'SALIMA'],
            ['descripcion' => 'SAN FRANCISCO'],
            ['descripcion' => 'SAN GREGORIO'],
            ['descripcion' => 'SAN JOSE DE CHAMANGA'],
        ];
        $muisne = City::find(69);
        $muisne->parishes()->createMany($parishesMuisne);

        $parishesQuininde = [
            ['descripcion' => 'ROSA ZARATE (QUININDE)'],
            ['descripcion' => 'CUBE'],
            ['descripcion' => 'CHURA (CHANCAMA) (CAB. EN EL YERBERO)'],
            ['descripcion' => 'MALIMPIA'],
            ['descripcion' => 'VICHE'],
            ['descripcion' => 'LA UNION'],
        ];
        $quininde = City::find(70);
        $quininde->parishes()->createMany($parishesQuininde);

        $parishesSanLorenzo = [
            ['descripcion' => 'SAN LORENZO'],
            ['descripcion' => 'ALTO TAMBO (CAB EN GUADUAL)'],
            ['descripcion' => 'ANCON (PICHANGAL) (CAB. EN PALMA REAL)'],
            ['descripcion' => 'CALDERON'],
            ['descripcion' => 'CARONDELET'],
            ['descripcion' => '5 DE JUNIO (CAB. EN UIMBI)'],
            ['descripcion' => 'CONCEPCION'],
            ['descripcion' => 'MATAJE (CAB. EN SANTANDER)'],
            ['descripcion' => 'SAN JAVIER DE CACHAVI (CAB. EN SAN JAVIER)'],
            ['descripcion' => 'SANTA RITA'],
            ['descripcion' => 'TAMBILLO'],
            ['descripcion' => 'TULULBI (CAB. EN RICAURTE)'],
            ['descripcion' => 'URBINA'],
        ];
        $sanLorenzo = City::find(71);
        $sanLorenzo->parishes()->createMany($parishesSanLorenzo);

        $parishesAtacames = [
            ['descripcion' => 'ATACAMES'],
            ['descripcion' => 'LA UNION'],
            ['descripcion' => 'SUA (CAB. EN LA BOCANA)'],
            ['descripcion' => 'TONCHIGUE'],
            ['descripcion' => 'TONSUPA'],
        ];
        $atacames = City::find(72);
        $atacames->parishes()->createMany($parishesAtacames);

        $parishesRioVerde = [
            ['descripcion' => 'RIOVERDE'],
            ['descripcion' => 'CHONTADURO'],
            ['descripcion' => 'CHUMUNDE'],
            ['descripcion' => 'LAGARTO'],
            ['descripcion' => 'MONTALVO (CAB EN HORQUETA)'],
            ['descripcion' => 'ROCAFUERTE'],
        ];
        $rioVerde = City::find(73);
        $rioVerde->parishes()->createMany($parishesRioVerde);

        // ---------- PROVINCE GUAYAS ----------
        $parishesGuayaquil = [
            ['descripcion' => 'AYACUCHO'],
            ['descripcion' => 'BOLIVAR'],
            ['descripcion' => 'CARBO (CONCEPCION)'],
            ['descripcion' => 'FEBRES CORDERO'],
            ['descripcion' => 'GARCIA MORENO'],
            ['descripcion' => 'LETAMENDI'],
            ['descripcion' => 'NUEVE DE OCTUBRE'],
            ['descripcion' => 'OLMEDO (SAN ALEJO)'],
            ['descripcion' => 'ROCA'],
            ['descripcion' => 'ROCAFUERTE'],
            ['descripcion' => 'SUCRE'],
            ['descripcion' => 'TARQUI'],
            ['descripcion' => 'URDANETA'],
            ['descripcion' => 'XIMENA'],
            ['descripcion' => 'PASCUALES'],
            ['descripcion' => 'GUAYAQUIL'],
            ['descripcion' => 'JUAN GOMEZ RENDON (PROGRESO)'],
            ['descripcion' => 'MORRO'],
            ['descripcion' => 'POSORJA'],
            ['descripcion' => 'PUNA'],
            ['descripcion' => 'TENGUEL'],
        ];
        $guayaquil = City::find(74);
        $guayaquil->parishes()->createMany($parishesGuayaquil);

        $parishesAlfredoBaquerizo = [
            ['descripcion' => 'ALFREDO BAQUERIZO MORENO (JUJAN)'],
        ];
        $alfredoBaquerizo = City::find(75);
        $alfredoBaquerizo->parishes()->createMany($parishesAlfredoBaquerizo);

        $parishesBalao = [
            ['descripcion' => 'BALAO'],
        ];
        $balao = City::find(76);
        $balao->parishes()->createMany($parishesBalao);

        $parishesBalzar = [
            ['descripcion' => 'BALZAR'],
        ];
        $balzar = City::find(77);
        $balzar->parishes()->createMany($parishesBalzar);

        $parishesColimes = [
            ['descripcion' => 'COLIMES'],
            ['descripcion' => 'SAN JACINTO'],
        ];
        $colimes = City::find(78);
        $colimes->parishes()->createMany($parishesColimes);

        $parishesDaule = [
            ['descripcion' => 'DAULE (URBANO)'],
            ['descripcion' => 'LA AURORA (SATÉLITE)'],
            ['descripcion' => 'BENIFE'],
            ['descripcion' => 'EMILIANO CAICEDO MARCOS'],
            ['descripcion' => 'MAGRO'],
            ['descripcion' => 'PADRE JUAN BAUTISTA AGUIRRE'],
            ['descripcion' => 'SANTA CLARA'],
            ['descripcion' => 'VICENTE PIEDRAHITA'],
            ['descripcion' => 'DAULE (RURAL)'],
            ['descripcion' => 'JUAN BAUTISTA AGUIRRE'],
            ['descripcion' => 'LAUREL'],
            ['descripcion' => 'LIMONAL'],
            ['descripcion' => 'LOS LOJAS'],
        ];
        $daule = City::find(79);
        $daule->parishes()->createMany($parishesDaule);

        $parishesDuran = [
            ['descripcion' => 'ELOY ALFARO (DURAN)'],
            ['descripcion' => 'EL RECREO'],
            ['descripcion' => 'DIVINO NIÑO'],
        ];
        $duran = City::find(80);
        $duran->parishes()->createMany($parishesDuran);

        $parishesElEmpalme = [
            ['descripcion' => 'VELASCO IBARRA (CAB. CANTONAL)'],
            ['descripcion' => 'GUAYAS (CAB. EN PUEBLO NUEVO)'],
            ['descripcion' => 'EL ROSARIO'],
        ];
        $elEmpalme = City::find(81);
        $elEmpalme->parishes()->createMany($parishesElEmpalme);

        $parishesElTriunfo = [
            ['descripcion' => 'EL TRIUNFO'],
        ];
        $elTriunfo = City::find(82);
        $elTriunfo->parishes()->createMany($parishesElTriunfo);

        $parishesMilagro = [
            ['descripcion' => 'CAMILO ANDRADE'],
            ['descripcion' => 'ELOY ALFARO'],
            ['descripcion' => 'CHIRIJOS'],
            ['descripcion' => 'CORONEL ENRIQUE VALDEZ'],
            ['descripcion' => 'ROSA MARIA'],
            ['descripcion' => 'JOSE MARIA VELASCO IBARRA'],
            ['descripcion' => 'VICENTE ROCAFUERTE'],
            ['descripcion' => 'ERNESTO SEMINARIO'],
            ['descripcion' => 'LAS PIÑAS'],
            ['descripcion' => 'MILAGRO'],
            ['descripcion' => 'CHOBO'],
            ['descripcion' => 'MARISCAL SUCRE'],
            ['descripcion' => 'ROBERTO ASTUDILLO'],
        ];
        $milagro = City::find(83);
        $milagro->parishes()->createMany($parishesMilagro);

        $parishesNaranjal = [
            ['descripcion' => 'NARANJAL, CAB CANTONAL'],
            ['descripcion' => 'JESÚS MARÍA'],
            ['descripcion' => 'SAN CARLOS'],
            ['descripcion' => 'SANTA ROSA DE FLANDES'],
            ['descripcion' => 'TAURA'],
        ];
        $naranjal = City::find(84);
        $naranjal->parishes()->createMany($parishesNaranjal);

        $parishesNaranjito = [
            ['descripcion' => 'NARANJITO'],
        ];
        $naranjito = City::find(85);
        $naranjito->parishes()->createMany($parishesNaranjito);

        $parishesPalestina = [
            ['descripcion' => 'PALESTINA'],
        ];
        $palestina = City::find(86);
        $palestina->parishes()->createMany($parishesPalestina);

        $parishesPedroCarbo = [
            ['descripcion' => 'PEDRO CARBO'],
            ['descripcion' => 'VALLE DE LA VIRGEN'],
            ['descripcion' => 'SABANILLA'],
        ];
        $pedroCarbo = City::find(87);
        $pedroCarbo->parishes()->createMany($parishesPedroCarbo);

        $parishesSamborondon = [
            ['descripcion' => 'SAMBORONDOM (CAB CANTONAL)'],
            ['descripcion' => 'LA PUNTILLA (SATELITE)'],
            ['descripcion' => 'TARIFA'],
        ];
        $samborondon = City::find(88);
        $samborondon->parishes()->createMany($parishesSamborondon);

        $parishesSantaLucia = [
            ['descripcion' => 'SANTA LUCIA'],
        ];
        $santaLucia = City::find(89);
        $santaLucia->parishes()->createMany($parishesSantaLucia);

        $parishesSalitre = [
            ['descripcion' => 'BOCANA'],
            ['descripcion' => 'CANDILEJOS'],
            ['descripcion' => 'CENTRAL'],
            ['descripcion' => 'PARAISO'],
            ['descripcion' => 'SAN MATEO'],
            ['descripcion' => 'EL SALITRE'],
            ['descripcion' => 'GENERAL VERNAZA'],
            ['descripcion' => 'LA VICTORIA'],
            ['descripcion' => 'JUNQUILLAL'],
        ];
        $salitre = City::find(90);
        $salitre->parishes()->createMany($parishesSalitre);

        $parishesSanJacinto = [
            ['descripcion' => 'SAN JACINTO DE YUGUACHI'],
            ['descripcion' => 'GENERAL PEDRO J MONTERO'],
            ['descripcion' => 'YAGUACHI VIEJO'],
            ['descripcion' => 'VIRGEN DE FATIMA'],
        ];
        $sanJacinto = City::find(91);
        $sanJacinto->parishes()->createMany($parishesSanJacinto);

        $parishesPlayas = [
            ['descripcion' => 'GANERAL VILLAMIL'],
        ];
        $playas = City::find(92);
        $playas->parishes()->createMany($parishesPlayas);

        $parishesSimonBolivar = [
            ['descripcion' => 'SIMON BOLIVAR'],
            ['descripcion' => 'CORONEL LORENZO DE GARAYCOA'],
        ];
        $simonBolivar = City::find(93);
        $simonBolivar->parishes()->createMany($parishesSimonBolivar);

        $parishesCoronelMarcelino = [
            ['descripcion' => 'CORONEL MARCELINO MARIDUEÑA'],
        ];
        $coronelMarcelino = City::find(94);
        $coronelMarcelino->parishes()->createMany($parishesCoronelMarcelino);

        $parishesLomasdeSangertillo = [
            ['descripcion' => 'LOMAS DE SARGENTILLO'],
        ];
        $lomasdeSangertillo = City::find(95);
        $lomasdeSangertillo->parishes()->createMany($parishesLomasdeSangertillo);

        $parishesNobol = [
            ['descripcion' => 'NARCISA DE JESUS'],
        ];
        $nobol = City::find(96);
        $nobol->parishes()->createMany($parishesNobol);

        $parishesGeneralAntonio = [
            ['descripcion' => 'GENERAL ANTONIO ELIZALDE'],
        ];
        $generalAntonio = City::find(97);
        $generalAntonio->parishes()->createMany($parishesGeneralAntonio);

        $parishesIsidroAyora = [
            ['descripcion' => 'ISIDRO AYORA'],
        ];
        $isidroAyora = City::find(98);
        $isidroAyora->parishes()->createMany($parishesIsidroAyora);

        // ---------- PROVINCE IMBABURA -----------
        $parishesIbarra = [
            ['descripcion' => 'CARANQUI'],
            ['descripcion' => 'GUAYAQUIL DE ALPACHACA'],
            ['descripcion' => 'EL SAGRARIO'],
            ['descripcion' => 'SAN FRANCISCO'],
            ['descripcion' => 'LA DOLOROSA DEL PRIORATO'],
            ['descripcion' => 'SAN MIGUEL DE IBARRA'],
            ['descripcion' => 'AMBUQUI'],
            ['descripcion' => 'ANGOCHAGUA'],
            ['descripcion' => 'CAROLINA'],
            ['descripcion' => 'LA ESPERANZA'],
            ['descripcion' => 'LITA'],
            ['descripcion' => 'SALINAS'],
            ['descripcion' => 'SAN ANTONIO'],
        ];
        $ibarra = City::find(99);
        $ibarra->parishes()->createMany($parishesIbarra);

        $parishesAntonioMate = [
            ['descripcion' => 'ANDRADE MARIN (LOURDES)'],
            ['descripcion' => 'ATUNTAQUI (URBANO)'],
            ['descripcion' => 'ATUNTAQUI (RURAL)'],
            ['descripcion' => 'IMBAYA (SAN LUIS DE COBUENDO)'],
            ['descripcion' => 'SAN FRANCISCO DE NATABUELA'],
            ['descripcion' => 'SAN JOSE DE CHALTURA'],
            ['descripcion' => 'SAN ROQUE'],
        ];
        $antonioMate = City::find(100);
        $antonioMate->parishes()->createMany($parishesAntonioMate);

        $parishesCotacachi = [
            ['descripcion' => 'EL SAGRARIO'],
            ['descripcion' => 'SAN FRANCISCO'],
            ['descripcion' => 'COTACACHI'],
            ['descripcion' => 'APUELA'],
            ['descripcion' => 'GARCIA MORENO (LLURIMAGUA)'],
            ['descripcion' => 'IMANTAG'],
            ['descripcion' => 'PEÑAHERRERA'],
            ['descripcion' => 'PLAZA GUTIERREZ (CALVARIO)'],
            ['descripcion' => 'QUIROGA'],
            ['descripcion' => 'SEIS DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)'],
            ['descripcion' => 'VACAS GALINDO (EL CHURO) (CAB. EN SAN MIGUEL ALTO)'],
        ];
        $cotacachi = City::find(101);
        $cotacachi->parishes()->createMany($parishesCotacachi);

        $parishesOtavalo = [
            ['descripcion' => 'JORDAN'],
            ['descripcion' => 'SAN LUIS'],
            ['descripcion' => 'OTAVALO'],
            ['descripcion' => 'DOCTOR MIGUEL EGAS CABEZAS (PEGUCHE)'],
            ['descripcion' => 'EUGENIO ESPEJO (CALPAQUI)'],
            ['descripcion' => 'GONZALEZ SUAREZ'],
            ['descripcion' => 'PATAQUI'],
            ['descripcion' => 'SAN JOSE DE QUICHINCHE'],
            ['descripcion' => 'SAN JUAN DE ILUMAN'],
            ['descripcion' => 'SAN PABLO'],
            ['descripcion' => 'SAN RAFAEL'],
            ['descripcion' => 'SELVA ALEGRE'],
        ];
        $otavalo = City::find(102);
        $otavalo->parishes()->createMany($parishesOtavalo);

        $parishesPimampiro = [
            ['descripcion' => 'PIMAMPIRO'],
            ['descripcion' => 'CHUGA'],
            ['descripcion' => 'MARIANO ACOSTA'],
            ['descripcion' => 'SAN  FRANCISCO. DE SIGSIPAMBA'],
        ];
        $pimampiro = City::find(103);
        $pimampiro->parishes()->createMany($parishesPimampiro);

        $parishesSanMiguelUrcuqui = [
            ['descripcion' => 'URCUQUI'],
            ['descripcion' => 'CAHUASQUI'],
            ['descripcion' => 'LA MERCED DE BUENOS AIRES'],
            ['descripcion' => 'PABLO ARENAS'],
            ['descripcion' => 'SAN BLAS'],
            ['descripcion' => 'TUMBABIRO'],
        ];
        $sanMiguelUrcuqui = City::find(104);
        $sanMiguelUrcuqui->parishes()->createMany($parishesSanMiguelUrcuqui);

        // ---------- PROVINCE LOJA -----------
        $parishesLoja = [
            ['descripcion' => 'EL SAGRARIO'],
            ['descripcion' => 'SAN SEBASTIAN'],
            ['descripcion' => 'SUCRE'],
            ['descripcion' => 'VALLE'],
            ['descripcion' => 'CARIGAN'],
            ['descripcion' => 'PUNZARA'],
            ['descripcion' => 'LOJA'],
            ['descripcion' => 'CHANTACO'],
            ['descripcion' => 'CHUQUIRIBAMBA'],
            ['descripcion' => 'EL CISNE'],
            ['descripcion' => 'GUALEL'],
            ['descripcion' => 'JIMBILLA'],
            ['descripcion' => 'MALACATOS (VALLADOLID)'],
            ['descripcion' => 'SAN LUCAS'],
            ['descripcion' => 'SAN PEDRO DE VILCABAMBA'],
            ['descripcion' => 'SANTIAGO'],
            ['descripcion' => 'TAQUIL (MIGUEL RIOFRIO)'],
            ['descripcion' => 'VILCABAMBA (VICTORIA)'],
            ['descripcion' => 'YANGANA (ARSENIO CASTILLO)'],
            ['descripcion' => 'QUINARA'],
        ];
        $loja = City::find(105);
        $loja->parishes()->createMany($parishesLoja);

        $parishesCalvas = [
            ['descripcion' => 'CARIAMANGA (URBANO)'],
            ['descripcion' => 'CHILE'],
            ['descripcion' => 'SAN VICENTE'],
            ['descripcion' => 'CARIAMANGA (RURAL)'],
            ['descripcion' => 'COLAISACA'],
            ['descripcion' => 'EL LUCERO'],
            ['descripcion' => 'UTUANA'],
            ['descripcion' => 'SANGUILLIN'],
        ];
        $calvas = City::find(106);
        $calvas->parishes()->createMany($parishesCalvas);

        $parishesCatamayo = [
            ['descripcion' => 'CATAMAYO'],
            ['descripcion' => 'SAN JOSE'],
            ['descripcion' => 'CATAMAYO (LA TOMA)'],
            ['descripcion' => 'EL TAMBO'],
            ['descripcion' => 'GUAYQUICHUMA'],
            ['descripcion' => 'SAN PEDRO DE LA BENDITA'],
            ['descripcion' => 'ZAMBI'],
        ];
        $catamayo = City::find(107);
        $catamayo->parishes()->createMany($parishesCatamayo);

        $parishesCelica = [
            ['descripcion' => 'CELICA'],
            ['descripcion' => 'CRUZPAMBA (CAB EN CARLOS BUSTAMANTE)'],
            ['descripcion' => 'POZUL (SAN JUAN DE POZUL)'],
            ['descripcion' => 'SABANILLA'],
            ['descripcion' => 'TENIENTE MAXIMILIANO RODRIGUEZ LOAIZA'],
        ];
        $celica = City::find(108);
        $celica->parishes()->createMany($parishesCelica);

        $parishesChaguarpamba = [
            ['descripcion' => 'CHAGUARPAMBA'],
            ['descripcion' => 'BUENAVISTA'],
            ['descripcion' => 'EL ROSARIO'],
            ['descripcion' => 'SANTA RUFINA'],
            ['descripcion' => 'AMARILLOS'],
        ];
        $chaguarpamba = City::find(109);
        $chaguarpamba->parishes()->createMany($parishesChaguarpamba);

        $parishesEspindola = [
            ['descripcion' => 'AMALUZA'],
            ['descripcion' => 'BELLAVISTA'],
            ['descripcion' => 'JIMBURA'],
            ['descripcion' => 'SANTA TERESITA'],
            ['descripcion' => '27 DE ABRIL (CAB. EN LA NARANJA)'],
            ['descripcion' => 'EL INGENIO'],
            ['descripcion' => 'EL AIRO'],
        ];
        $espindola = City::find(110);
        $espindola->parishes()->createMany($parishesEspindola);

        $parishesGonzanama = [
            ['descripcion' => 'GONZANAMA'],
            ['descripcion' => 'CHANGAIMINA (LA LIBERTAD)'],
            ['descripcion' => 'NAMBACOLA'],
            ['descripcion' => 'PURUNUMA (EGUIGUREN)'],
            ['descripcion' => 'SACAPALCA'],
        ];
        $gonzanama = City::find(111);
        $gonzanama->parishes()->createMany($parishesGonzanama);

        $parishesMacara = [
            ['descripcion' => 'GENERAL ELOY ALFARO (SAN SEBASTIAN)'],
            ['descripcion' => 'MACARA (MANUEL ENRIQUE RENGEL SUQUILANDA)'],
            ['descripcion' => 'MACARA'],
            ['descripcion' => 'LARAMA'],
            ['descripcion' => 'LA VICTORIA'],
            ['descripcion' => 'SABIANGO (LA CAPILLA)'],
        ];
        $macara = City::find(112);
        $macara->parishes()->createMany($parishesMacara);

        $parishesPaltas = [
            ['descripcion' => 'CATACOCHA (URBANO)'],
            ['descripcion' => 'LOURDES'],
            ['descripcion' => 'CATACOCHA (RURAL)'],
            ['descripcion' => 'CANGONAMA'],
            ['descripcion' => 'GUACHANAMA'],
            ['descripcion' => 'LAURO GUERRERO'],
            ['descripcion' => 'ORIANGA'],
            ['descripcion' => 'SAN ANTONIO'],
            ['descripcion' => 'CASANGA'],
            ['descripcion' => 'YAMANA'],
        ];
        $paltas = City::find(113);
        $paltas->parishes()->createMany($parishesPaltas);

        $parishesPuyango = [
            ['descripcion' => 'ALAMOR'],
            ['descripcion' => 'CIANO'],
            ['descripcion' => 'EL ARENAL'],
            ['descripcion' => 'EL LIMO (MARIANA DE JESUS)'],
            ['descripcion' => 'MERCADILLO'],
            ['descripcion' => 'VICENTINO'],
        ];
        $puyango = City::find(114);
        $puyango->parishes()->createMany($parishesPuyango);

        $parishesSaraguro = [
            ['descripcion' => 'SARAGURO'],
            ['descripcion' => 'EL PARAISO DE CELEN'],
            ['descripcion' => 'EL TABLON'],
            ['descripcion' => 'LLUZHAPA'],
            ['descripcion' => 'MANU'],
            ['descripcion' => 'SAN ANTONIO DE QUMBE (CUMBE)'],
            ['descripcion' => 'SAN PABLO DE TENTA'],
            ['descripcion' => 'SAN SEBASTIAN DE YULUC'],
            ['descripcion' => 'SELVA ALEGRE'],
            ['descripcion' => 'URDANETA (PAQUISHAPA)'],
            ['descripcion' => 'SUMAYPAMBA'],
        ];
        $saraguro = City::find(115);
        $saraguro->parishes()->createMany($parishesSaraguro);

        $parishesSozaranga = [
            ['descripcion' => 'SOZORANGA'],
            ['descripcion' => 'NUEVA FATIMA'],
            ['descripcion' => 'TACAMOROS'],
        ];
        $sozaranga = City::find(116);
        $sozaranga->parishes()->createMany($parishesSozaranga);

        $parishesZapotillo = [
            ['descripcion' => 'ZAPOTILLO'],
            ['descripcion' => 'MANGAHURCO'],
            ['descripcion' => 'GARZAREAL'],
            ['descripcion' => 'LIMONES'],
            ['descripcion' => 'PALETILLAS'],
            ['descripcion' => 'BOLASPAMBA'],
            ['descripcion' => 'CAZADEROS'],
        ];
        $zapotillo = City::find(117);
        $zapotillo->parishes()->createMany($parishesZapotillo);

        $parishesPindal = [
            ['descripcion' => 'PINDAL'],
            ['descripcion' => 'CHAQUINAL'],
            ['descripcion' => '12 DE DICIEMBRE (CAB. EN ACHIOTES)'],
            ['descripcion' => 'MILAGROS'],
        ];
        $pindal = City::find(118);
        $pindal->parishes()->createMany($parishesPindal);

        $parishesQuilanga = [
            ['descripcion' => 'QUILANGA'],
            ['descripcion' => 'FUNDOCHAMBA'],
            ['descripcion' => 'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)'],
        ];
        $quilanga = City::find(119);
        $quilanga->parishes()->createMany($parishesQuilanga);

        $parishesOlmedo = [
            ['descripcion' => 'OLMEDO'],
            ['descripcion' => 'LA TINGUE'],
        ];
        $olmedo = City::find(120);
        $olmedo->parishes()->createMany($parishesOlmedo);

        // ---------- PROVINCE LOS RIOS -----------
        $parishesBabahoyo = [
            ['descripcion' => 'CLEMENTE BAQUERIZO'],
            ['descripcion' => 'DOCTOR CAMILO PONCE'],
            ['descripcion' => 'BARREIRO'],
            ['descripcion' => 'EL SALTO'],
            ['descripcion' => 'BABAHOYO'],
            ['descripcion' => 'CARACOL'],
            ['descripcion' => 'FEBRES CORDERO (LAS JUNTAS)'],
            ['descripcion' => 'PIMOCHA'],
            ['descripcion' => 'LA UNION'],
        ];
        $babahoyo = City::find(121);
        $babahoyo->parishes()->createMany($parishesBabahoyo);

        $parishesBaba = [
            ['descripcion' => 'BABA'],
            ['descripcion' => 'GUARE'],
            ['descripcion' => 'ISLA DE BEJUCAL'],
        ];
        $baba = City::find(122);
        $baba->parishes()->createMany($parishesBaba);

        $parishesMontalvo = [
            ['descripcion' => 'MONTALVO'],
            ['descripcion' => 'LA ESMERALDA'],
        ];
        $montalvo = City::find(123);
        $montalvo->parishes()->createMany($parishesMontalvo);

        $parishesPuebloViejo = [
            ['descripcion' => 'PUEBLOVIEJO'],
            ['descripcion' => 'PUERTO PECHICHE'],
            ['descripcion' => 'SAN JUAN'],
        ];
        $puebloViejo = City::find(124);
        $puebloViejo->parishes()->createMany($parishesPuebloViejo);

        $parishesQuevedo = [
            ['descripcion' => 'QUEVEDO (URBANO)'],
            ['descripcion' => 'SAN CAMILO'],
            ['descripcion' => 'EL GUAYACAN'],
            ['descripcion' => 'NICOLAS INFANTE DIAZ'],
            ['descripcion' => 'SAN CRISTOBAL'],
            ['descripcion' => '7 DE OCTUBRE'],
            ['descripcion' => '24 DE MAYO'],
            ['descripcion' => 'VENUS DEL RIO QUEVEDO'],
            ['descripcion' => 'VIVA ALFARO'],
            ['descripcion' => 'QUEVEDO (RURAL)'],
            ['descripcion' => 'SAN CARLOS'],
            ['descripcion' => 'LA ESPERANZA'],
        ];
        $quevedo = City::find(125);
        $quevedo->parishes()->createMany($parishesQuevedo);

        $parishesUrdaneta = [
            ['descripcion' => 'CATARAMA'],
            ['descripcion' => 'RICAURTE'],
        ];
        $urdanetra = City::find(126);
        $urdanetra->parishes()->createMany($parishesUrdaneta);

        $parishesVentanas = [
            ['descripcion' => '10 DE NOVIEMBRE'],
            ['descripcion' => 'VENTANAS'],
            ['descripcion' => 'VENTANAS (RURAL)'],
            ['descripcion' => 'ZAPOTAL'],
            ['descripcion' => 'CHACARITA'],
            ['descripcion' => 'LOS ANGELES'],
        ];
        $ventanas = City::find(127);
        $ventanas->parishes()->createMany($parishesVentanas);

        $parishesVinces = [
            ['descripcion' => 'BALZAR DE VINCES'],
            ['descripcion' => 'VINCES CENTRAL'],
            ['descripcion' => 'SAN LORENZO DE VINCES'],
            ['descripcion' => 'VINCES (CAB CANTONAL)'],
            ['descripcion' => 'ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES)'],
        ];
        $vinces = City::find(128);
        $vinces->parishes()->createMany($parishesVinces);

        $parishesPalenque = [
            ['descripcion' => 'PALENQUE'],
        ];
        $palenque = City::find(129);
        $palenque->parishes()->createMany($parishesPalenque);

        $parishesBuenaFe = [
            ['descripcion' => 'SAN JACINTO DE BUENA FE (URBANO)'],
            ['descripcion' => '7 DE AGOSTO'],
            ['descripcion' => '11 DE OCTUBRE'],
            ['descripcion' => 'SAN JACINTO DE BUENA FE (RURAL)'],
            ['descripcion' => 'PATRICIA PILAR'],
        ];
        $buenaFe = City::find(130);
        $buenaFe->parishes()->createMany($parishesBuenaFe);

        $parishesValencia = [
            ['descripcion' => 'VALENCIA'],
            ['descripcion' => 'LA UNION'],
            ['descripcion' => 'LA NUEVA UNION'],
            ['descripcion' => 'VALENCIA (RURAL)'],
        ];
        $valencia = City::find(131);
        $valencia->parishes()->createMany($parishesValencia);

        $parishesMocache = [
            ['descripcion' => 'MOCACHE'],
        ];
        $mocache = City::find(132);
        $mocache->parishes()->createMany($parishesMocache);

        $parishesQuinsaloma = [
            ['descripcion' => 'QUINSALOMA'],
        ];
        $quinsaloma = City::find(133);
        $quinsaloma->parishes()->createMany($parishesQuinsaloma);

        // ---------- PROVINCE MANABI -----------
        $parishesPortoviejo = [
            ['descripcion' => 'PORTOVIEJO (URBANO)'],
            ['descripcion' => '12 DE MARZO'],
            ['descripcion' => 'COLON'],
            ['descripcion' => 'PICOAZA'],
            ['descripcion' => 'SAN PABLO'],
            ['descripcion' => 'ANDRES VERA'],
            ['descripcion' => 'FRANCISCO PACHECO'],
            ['descripcion' => '18 DE OCTUBRE'],
            ['descripcion' => 'SIMON BOLIVAR'],
            ['descripcion' => 'PORTOVIEJO (RURAL)'],
            ['descripcion' => 'ABDON CALDERON (SAN FRANCISCO)'],
            ['descripcion' => 'ALHAJUELA (BAJO GRANDE)'],
            ['descripcion' => 'CRUCITA'],
            ['descripcion' => 'PUEBLO NUEVO'],
            ['descripcion' => 'RIOCHICO (RIO CHICO)'],
            ['descripcion' => 'SAN PLACIDO'],
            ['descripcion' => 'CHIRIJOS'],
        ];
        $portoviejo = City::find(134);
        $portoviejo->parishes()->createMany($parishesPortoviejo);

        $parishesBolivarManabi = [
            ['descripcion' => 'CALCETA'],
            ['descripcion' => 'MEMBRILLO'],
            ['descripcion' => 'QUIROGA'],
        ];
        $bolivarManabi = City::find(135);
        $bolivarManabi->parishes()->createMany($parishesBolivarManabi);

        $parishesChone = [
            ['descripcion' => 'CHONE (URBANO)'],
            ['descripcion' => 'SANTA RITA'],
            ['descripcion' => 'CHONE (RURAL)'],
            ['descripcion' => 'BOYACA'],
            ['descripcion' => 'CANUTO'],
            ['descripcion' => 'CONVENTO'],
            ['descripcion' => 'CHIBUNGA'],
            ['descripcion' => 'ELOY ALFARO'],
            ['descripcion' => 'RICAURTE'],
            ['descripcion' => 'SAN ANTONIO'],
        ];
        $chone = City::find(136);
        $chone->parishes()->createMany($parishesChone);

        $parishesElCarmen = [
            ['descripcion' => 'EL CARMEN (URBANO)'],
            ['descripcion' => '4 DE DICIEMBRE'],
            ['descripcion' => 'EL CARMEN (RURAL)'],
            ['descripcion' => 'WILFRIDO LOOR MOREIRA (MAICITO)'],
            ['descripcion' => 'SAN PEDRO DE SUMA'],
            ['descripcion' => 'SANTA MARIA'],
            ['descripcion' => 'EL PARAISO LA 14'],
        ];
        $elCarmen = City::find(137);
        $elCarmen->parishes()->createMany($parishesElCarmen);

        $parishesFlavioAlfaro = [
            ['descripcion' => 'FLAVIO ALFARO'],
            ['descripcion' => 'SAN FRANCISCO DE NOVILLO (CAB. EN NOVILLO)'],
            ['descripcion' => 'ZAPALLO'],
        ];
        $flavioAlfaro = City::find(138);
        $flavioAlfaro->parishes()->createMany($parishesFlavioAlfaro);

        $parishesJipijapa = [
            ['descripcion' => 'DOCTOR MIGUEL MORAN LUCIO'],
            ['descripcion' => 'MANUEL INOCENCIO PARRALES Y GUALE'],
            ['descripcion' => 'SAN LORENZO DE JIPIJAPA'],
            ['descripcion' => 'JIPIJAPA'],
            ['descripcion' => 'AMERICA'],
            ['descripcion' => 'EL ANEGADO (CAB. EN ELOY ALFARO)'],
            ['descripcion' => 'JULCUY'],
            ['descripcion' => 'LA UNION'],
            ['descripcion' => 'MEMBRILLAL'],
            ['descripcion' => 'PEDRO PABLO GOMEZ'],
            ['descripcion' => 'PUERTO DE CAYO'],
        ];
        $jipijapa = City::find(139);
        $jipijapa->parishes()->createMany($parishesJipijapa);

        $parishesJunin = [
            ['descripcion' => 'JUNIN'],
        ];
        $junin = City::find(140);
        $junin->parishes()->createMany($parishesJunin);

        $parishesManta = [
            ['descripcion' => 'LOS ESTEROS'],
            ['descripcion' => 'MANTA (URBANO)'],
            ['descripcion' => 'SAN MATEO'],
            ['descripcion' => 'TARQUI'],
            ['descripcion' => 'ELOY ALFARO'],
            ['descripcion' => 'MANTA (RURAL)'],
            ['descripcion' => 'SAN LORENZO'],
            ['descripcion' => 'SANTA MARIANITA (BOCA DE PACOCHE)'],
        ];
        $manta = City::find(141);
        $manta->parishes()->createMany($parishesManta);

        $parishesMontecristi = [
            ['descripcion' => 'ANIBAL SAN ANDRES'],
            ['descripcion' => 'MONTECRISTI (URBANO)'],
            ['descripcion' => 'COLORADO'],
            ['descripcion' => 'LEONIDAS PROAÑO'],
            ['descripcion' => 'GENERAL ELOY ALFARO'],
            ['descripcion' => 'MONTECRISTI (RURAL)'],
            ['descripcion' => 'LA PILA'],
        ];
        $montecristi = City::find(142);
        $montecristi->parishes()->createMany($parishesMontecristi);

        $parishesPajan = [
            ['descripcion' => 'PAJAN'],
            ['descripcion' => 'CAMPOZANO (LA PALMA DE PAJAN)'],
            ['descripcion' => 'CASCOL'],
            ['descripcion' => 'GUALE'],
            ['descripcion' => 'LASCANO'],
        ];
        $pajan = City::find(143);
        $pajan->parishes()->createMany($parishesPajan);

        $parishesPichincha = [
            ['descripcion' => 'PICHINCHA'],
            ['descripcion' => 'BARRAGANETE'],
            ['descripcion' => 'SAN SEBASTIAN'],
        ];
        $pichincha = City::find(144);
        $pichincha->parishes()->createMany($parishesPichincha);

        $parishesRocafuerte = [
            ['descripcion' => 'ROCAFUERTE'],
        ];
        $rocafuerte = City::find(145);
        $rocafuerte->parishes()->createMany($parishesRocafuerte);

        $parishesSantaAna = [
            ['descripcion' => 'SANTA ANA'],
            ['descripcion' => 'LODANA'],
            ['descripcion' => 'SANTA ANA DE VUELTA LARGA'],
            ['descripcion' => 'AYACUCHO'],
            ['descripcion' => 'HONORATO VASQUEZ (CAB EN VASQUEZ)'],
            ['descripcion' => 'LA UNION'],
            ['descripcion' => 'SAN PABLO (CAB EN PUEBLO NUEVO)'],
        ];
        $santaAna = City::find(146);
        $santaAna->parishes()->createMany($parishesSantaAna);

        $parishesSucre = [
            ['descripcion' => 'BAHIA DE CARAQUEZ (URBANO)'],
            ['descripcion' => 'LEONIDAS PLAZA GUTIERREZ'],
            ['descripcion' => 'BAHIA DE CARAQUEZ (RURAL)'],
            ['descripcion' => 'CHARAPOTO'],
            ['descripcion' => 'SAN ISIDRO'],
        ];
        $sucre = City::find(147);
        $sucre->parishes()->createMany($parishesSucre);

        $parishesTosagua = [
            ['descripcion' => 'TOSAGUA'],
            ['descripcion' => 'BACHILLERO'],
            ['descripcion' => 'ANGEL PEDRO GILER (LA ESTANCILLA)'],
        ];
        $tosagua = City::find(148);
        $tosagua->parishes()->createMany($parishesTosagua);

        $parishes24DeMayo = [
            ['descripcion' => 'SUCRE'],
            ['descripcion' => 'BELLAVISTA'],
            ['descripcion' => 'NOBOA'],
            ['descripcion' => 'ARQUITECTO SIXTO DURAN BALLEN'],
        ];
        $mayo24 = City::find(149);
        $mayo24->parishes()->createMany($parishes24DeMayo);

        $parishesPedernales = [
            ['descripcion' => 'PEDERNALES'],
            ['descripcion' => 'COJIMIES'],
            ['descripcion' => 'DIEZ DE AGOSTO'],
            ['descripcion' => 'ATAHUALPA'],
        ];
        $pedernales = City::find(150);
        $pedernales->parishes()->createMany($parishesPedernales);

        $parishesOlmedoManabi = [
            ['descripcion' => 'OLMEDO'],
        ];
        $olmedoManabi = City::find(151);
        $olmedoManabi->parishes()->createMany($parishesOlmedoManabi);

        $parishesPuertoLopez = [
            ['descripcion' => 'PUERTO LOPEZ'],
            ['descripcion' => 'MACHALILLA'],
            ['descripcion' => 'SALANGO'],
        ];
        $puertoLopez = City::find(152);
        $puertoLopez->parishes()->createMany($parishesPuertoLopez);

        $parishesJama = [
            ['descripcion' => 'JAMA'],
        ];
        $jama = City::find(153);
        $jama->parishes()->createMany($parishesJama);

        $parishesJaramijo = [
            ['descripcion' => 'JARAMIJO'],
        ];
        $jaramijo = City::find(154);
        $jaramijo->parishes()->createMany($parishesJaramijo);

        $parishesSanVicente = [
            ['descripcion' => 'SAN VICENTE'],
            ['descripcion' => 'CANOA'],
        ];
        $sanVicente = City::find(155);
        $sanVicente->parishes()->createMany($parishesSanVicente);

        // ---------- PROVINCE MORONA SANTIAGO -----------
        $parishesMorona = [
            ['descripcion' => 'MACAS'],
            ['descripcion' => 'ALSHI (CAB EN 9 DE OCTUBRE)'],
            ['descripcion' => 'GENERAL PROAÑO'],
            ['descripcion' => 'SAN ISIDRO'],
            ['descripcion' => 'SEVILLA DON BOSCO'],
            ['descripcion' => 'SINAI'],
            ['descripcion' => 'ZUÑA (ZUÑAC)'],
            ['descripcion' => 'CUCHAENTZA'],
            ['descripcion' => 'RIO BLANCO'],
        ];
        $morona = City::find(156);
        $morona->parishes()->createMany($parishesMorona);

        $parishesGualaquiza = [
            ['descripcion' => 'GUALAQUIZA (URBANO)'],
            ['descripcion' => 'MERCEDES MOLINA'],
            ['descripcion' => 'GUALAQUIZA (RURAL)'],
            ['descripcion' => 'AMAZONAS (ROSARIO DE CUYES)'],
            ['descripcion' => 'BERMEJOS'],
            ['descripcion' => 'BOMBOIZA'],
            ['descripcion' => 'CHIGUINDA'],
            ['descripcion' => 'EL ROSARIO'],
            ['descripcion' => 'NUEVA TARQUI'],
            ['descripcion' => 'SAN MIGUEL DE CUYES'],
            ['descripcion' => 'EL IDEAL'],
        ];
        $gualaquiza = City::find(157);
        $gualaquiza->parishes()->createMany($parishesGualaquiza);

        $parishesLimonIndanza = [
            ['descripcion' => 'GRAL. LEONIDAS PLAZA GUTIERREZ'],
            ['descripcion' => 'INDANZA'],
            ['descripcion' => 'SAN ANTONIO (CAB EN SAN ANTONIO CENTRO)'],
            ['descripcion' => 'SAN MIGUEL DE CONCHAY'],
            ['descripcion' => 'STA SUSANA DE CHIVIAZA (CAB EN CHIVIAZA)'],
            ['descripcion' => 'YUNGANZA (CAB EN EL ROSARIO)'],
        ];
        $limonIndanza = City::find(158);
        $limonIndanza->parishes()->createMany($parishesLimonIndanza);

        $parishesPalora = [
            ['descripcion' => 'PALORA (METZERA)'],
            ['descripcion' => 'ARAPICOS'],
            ['descripcion' => 'CUMANDA (CAB EN COLONIA AGRICOLA SEVILLA DEL ORO)'],
            ['descripcion' => 'SANGAY (CAB EN NAYAMANACA)'],
            ['descripcion' => '16 DE AGOSTO'],
        ];
        $palora = City::find(159);
        $palora->parishes()->createMany($parishesPalora);

        $parishesSantiago = [
            ['descripcion' => 'SANTIAGO DE MENDEZ'],
            ['descripcion' => 'COPAL'],
            ['descripcion' => 'CHUPIANZA'],
            ['descripcion' => 'PATUCA'],
            ['descripcion' => 'SAN LUIS DE EL ACHO (CAB EN EL ACHO)'],
            ['descripcion' => 'TAYUZA'],
            ['descripcion' => 'SAN FRANCISCO DE CHINIMBIMI'],
        ];
        $santiago = City::find(160);
        $santiago->parishes()->createMany($parishesSantiago);

        $parishesSucua = [
            ['descripcion' => 'SUCUA'],
            ['descripcion' => 'ASUNCION'],
            ['descripcion' => 'HUAMBI'],
            ['descripcion' => 'SANTA MARIANITA DE JESUS'],
        ];
        $sucua = City::find(161);
        $sucua->parishes()->createMany($parishesSucua);

        $parishesHuamboya = [
            ['descripcion' => 'HUAMBOYA'],
            ['descripcion' => 'CHIGUAZA'],
        ];
        $huamboya = City::find(162);
        $huamboya->parishes()->createMany($parishesHuamboya);

        $parishesSanJuanBosco = [
            ['descripcion' => 'SAN JUAN BOSCO'],
            ['descripcion' => 'PAN DE AZUCAR'],
            ['descripcion' => 'SAN CARLOS DE LIMON'],
            ['descripcion' => 'SAN JACINTO DE WAKAMBEIS'],
            ['descripcion' => 'SANTIAGO DE PANANZA'],
        ];
        $sanJuanBosco = City::find(163);
        $sanJuanBosco->parishes()->createMany($parishesSanJuanBosco);

        $parishesTaisha = [
            ['descripcion' => 'TAISHA'],
            ['descripcion' => 'HUASAGA (CAB EN WAMPUIK)'],
            ['descripcion' => 'MACUMA'],
            ['descripcion' => 'TUUTINENTZA'],
            ['descripcion' => 'PUMPUENTSA'],
        ];
        $taisha = City::find(164);
        $taisha->parishes()->createMany($parishesTaisha);

        $parishesLogrono = [
            ['descripcion' => 'LOGROÑO'],
            ['descripcion' => 'YAUPI'],
            ['descripcion' => 'SHIMPIS'],
        ];
        $logrono = City::find(165);
        $logrono->parishes()->createMany($parishesLogrono);

        $parishesPabloSexto = [
            ['descripcion' => 'PABLO SEXTO'],
        ];
        $pabloSexto = City::find(166);
        $pabloSexto->parishes()->createMany($parishesPabloSexto);

        $parishesTiwintza = [
            ['descripcion' => 'SANTIAGO'],
            ['descripcion' => 'SAN JOSE DE MORONA'],
        ];
        $tiwintza = City::find(167);
        $tiwintza->parishes()->createMany($parishesTiwintza);

        // ---------- PROVINCE NAPO -----------
        $parishesTena = [
            ['descripcion' => 'TENA'],
            ['descripcion' => 'AHUANO'],
            ['descripcion' => 'CHONTAPUNTA'],
            ['descripcion' => 'PANO'],
            ['descripcion' => 'PUERTO MISAHUALLI'],
            ['descripcion' => 'PUERTO NAPO'],
            ['descripcion' => 'TALAG'],
            ['descripcion' => 'SAN JUAN DE MUYUNA'],
        ];
        $tena = City::find(168);
        $tena->parishes()->createMany($parishesTena);

        $parishesArchidona = [
            ['descripcion' => 'ARCHIDONA'],
            ['descripcion' => 'COTUNDO'],
            ['descripcion' => 'SAN PABLO DE USHPAYACU'],
            ['descripcion' => 'HATUN SUMAKU'],
        ];
        $archidona = City::find(169);
        $archidona->parishes()->createMany($parishesArchidona);

        $parishesElChaco = [
            ['descripcion' => 'EL CHACO'],
            ['descripcion' => 'GONZALO DIAZ DE PINEDA (EL BOMBON)'],
            ['descripcion' => 'LINARES'],
            ['descripcion' => 'OYACACHI'],
            ['descripcion' => 'SANTA ROSA'],
            ['descripcion' => 'SARDINAS'],
        ];
        $elChaco = City::find(170);
        $elChaco->parishes()->createMany($parishesElChaco);

        $parishesQuijos = [
            ['descripcion' => 'BAEZA'],
            ['descripcion' => 'COSANGA'],
            ['descripcion' => 'CUYUJA'],
            ['descripcion' => 'PAPALLACTA'],
            ['descripcion' => 'SAN FRANCISCO DE BORJA (VIRGILIO DAVILA)'],
            ['descripcion' => 'SUMACO'],
        ];
        $quijos = City::find(171);
        $quijos->parishes()->createMany($parishesQuijos);

        $parishesCarlosJulio = [
            ['descripcion' => 'CARLOS JULIO AROSEMENA TOLA'],
        ];
        $carlosJulio = City::find(172);
        $carlosJulio->parishes()->createMany($parishesCarlosJulio);

        // ---------- PROVINCE PASTAZA -----------
        $parishesPastaza = [
            ['descripcion' => 'PUYO'],
            ['descripcion' => 'CANELOS'],
            ['descripcion' => 'DIEZ DE AGOSTO'],
            ['descripcion' => 'FATIMA'],
            ['descripcion' => 'MONTALVO (ANDOAS)'],
            ['descripcion' => 'POMONA'],
            ['descripcion' => 'RIO CORRIENTES'],
            ['descripcion' => 'RIO TIGRE'],
            ['descripcion' => 'SARAYACU'],
            ['descripcion' => 'SIMON BOLIVAR (CAB. EN MUSHULLACTA)'],
            ['descripcion' => 'TARQUI'],
            ['descripcion' => 'TENIENTE HUGO ORTIZ'],
            ['descripcion' => 'VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)'],
            ['descripcion' => 'EL TRIUNFO'],
        ];
        $pastaza = City::find(173);
        $pastaza->parishes()->createMany($parishesPastaza);

        $parishesMera = [
            ['descripcion' => 'MERA'],
            ['descripcion' => 'MADRE TIERRA'],
            ['descripcion' => 'SHELL'],
        ];
        $mera = City::find(174);
        $mera->parishes()->createMany($parishesMera);

        $parishesSantaClara = [
            ['descripcion' => 'SANTA CLARA'],
            ['descripcion' => 'SAN JOSE'],
        ];
        $santaClara = City::find(175);
        $santaClara->parishes()->createMany($parishesSantaClara);

        $parishesArajuno = [
            ['descripcion' => 'ARAJUNO'],
            ['descripcion' => 'CURARAY'],
        ];
        $arajuno = City::find(176);
        $arajuno->parishes()->createMany($parishesArajuno);

        // ---------- PROVINCE PICHINCHA -----------
        $parishesQuito = [
            ['descripcion' => 'BELISARIO QUEVEDO'],
            ['descripcion' => 'CARCELEN'],
            ['descripcion' => 'CENTRO HISTORICO'],
            ['descripcion' => 'COCHAPAMBA'],
            ['descripcion' => 'COMITE DEL PUEBLO'],
            ['descripcion' => 'COTOCOLLAO'],
            ['descripcion' => 'CHILIBULO'],
            ['descripcion' => 'CHILLOGALLO'],
            ['descripcion' => 'CHIMBACALLE'],
            ['descripcion' => 'EL CONDADO'],
            ['descripcion' => 'GUAMANI'],
            ['descripcion' => 'IÑAQUITO'],
            ['descripcion' => 'ITCHIMBIA'],
            ['descripcion' => 'JIPIJAPA'],
            ['descripcion' => 'KENNEDY'],
            ['descripcion' => 'LA ARGELIA'],
            ['descripcion' => 'LA CONCEPCION'],
            ['descripcion' => 'LA ECUATORIANA'],
            ['descripcion' => 'LA FERROVIARIA'],
            ['descripcion' => 'LA LIBERTAD'],
            ['descripcion' => 'LA MAGDALENA'],
            ['descripcion' => 'LA MENA'],
            ['descripcion' => 'MARISCAL SUCRE'],
            ['descripcion' => 'PONCEANO'],
            ['descripcion' => 'PUENGASI'],
            ['descripcion' => 'QUITUMBE'],
            ['descripcion' => 'RUMIPAMBA'],
            ['descripcion' => 'SAN BARTOLO'],
            ['descripcion' => 'SAN ISIDRO DEL INCA'],
            ['descripcion' => 'SAN JUAN'],
            ['descripcion' => 'SOLANDA'],
            ['descripcion' => 'TURUBAMBA'],
            ['descripcion' => 'QUITO, (CAB CANTONAL, CAPITAL PROVINCIAL DEL ECUADOR)'],
            ['descripcion' => 'ALANGASI'],
            ['descripcion' => 'AMAGUAÑA'],
            ['descripcion' => 'ATAHUALPA (HABASPAMBA)'],
            ['descripcion' => 'CALACALI'],
            ['descripcion' => 'CALDERON (CARAPUNGO)'],
            ['descripcion' => 'CONOCOTO'],
            ['descripcion' => 'CUMBAYA'],
            ['descripcion' => 'CHAVEZPAMBA'],
            ['descripcion' => 'CHECA (CHILPA)'],
            ['descripcion' => 'EL QUINCHE'],
            ['descripcion' => 'GUALEA'],
            ['descripcion' => 'GUANGOPOLO'],
            ['descripcion' => 'GUAYLLABAMBA'],
            ['descripcion' => 'LA MERCED'],
            ['descripcion' => 'LLANO CHICO'],
            ['descripcion' => 'LLOA'],
            ['descripcion' => 'NANEGAL'],
            ['descripcion' => 'NANEGALITO'],
            ['descripcion' => 'NAYON'],
            ['descripcion' => 'NONO'],
            ['descripcion' => 'PACTO'],
            ['descripcion' => 'PERUCHO'],
            ['descripcion' => 'PIFO'],
            ['descripcion' => 'PINTAG'],
            ['descripcion' => 'POMASQUI'],
            ['descripcion' => 'PUELLARO'],
            ['descripcion' => 'PUEMBO'],
            ['descripcion' => 'SAN ANTONIO'],
            ['descripcion' => 'SAN JOSE DE MINAS'],
            ['descripcion' => 'TABABELA'],
            ['descripcion' => 'TUMBACO'],
            ['descripcion' => 'YARUQUI'],
            ['descripcion' => 'ZAMBIZA'],
        ];
        $quito = City::find(177);
        $quito->parishes()->createMany($parishesQuito);

        $parishesCayambe = [
            ['descripcion' => 'CAYAMBE (URBANO)'],
            ['descripcion' => 'JUAN MONTALVO'],
            ['descripcion' => 'CAYAMBE (RURAL)'],
            ['descripcion' => 'ASCAZUBI'],
            ['descripcion' => 'CANGAHUA'],
            ['descripcion' => 'OLMEDO (PESILLO)'],
            ['descripcion' => 'OTON'],
            ['descripcion' => 'SANTA ROSA DE CUZUBAMBA'],
            ['descripcion' => 'SAN JOSE DE AYORA'],
        ];
        $cayambe = City::find(178);
        $cayambe->parishes()->createMany($parishesCayambe);

        $parishesMejia = [
            ['descripcion' => 'MACHACHI'],
            ['descripcion' => 'ALOAG'],
            ['descripcion' => 'ALOASI'],
            ['descripcion' => 'CUTUGLAHUA'],
            ['descripcion' => 'EL CHAUPI'],
            ['descripcion' => 'MANUEL CORNEJO ASTORGA (TANDAPI)'],
            ['descripcion' => 'TAMBILLO'],
            ['descripcion' => 'UYUMBICHO'],
        ];
        $mejia = City::find(179);
        $mejia->parishes()->createMany($parishesMejia);

        $parishesPedroMoncayo = [
            ['descripcion' => 'TABACUNDO'],
            ['descripcion' => 'LA ESPERANZA'],
            ['descripcion' => 'MALCHINGUI'],
            ['descripcion' => 'TOCACHI'],
            ['descripcion' => 'TUPIGACHI'],
        ];
        $pedroMoncayo = City::find(180);
        $pedroMoncayo->parishes()->createMany($parishesPedroMoncayo);

        $parishesRuminahui = [
            ['descripcion' => 'SANGOLQUI (URBANO)'],
            ['descripcion' => 'SAN PEDRO DE TABOADA'],
            ['descripcion' => 'SAN RAFAEL'],
            ['descripcion' => 'FAJARDO'],
            ['descripcion' => 'SANGOLQUI (RURAL)'],
            ['descripcion' => 'COTOGCHOA'],
            ['descripcion' => 'RUMIPAMBA'],
        ];
        $ruminahui = City::find(181);
        $ruminahui->parishes()->createMany($parishesRuminahui);

        $parishesSanMiguelBancos = [
            ['descripcion' => 'SAN MIGUEL DE LOS BANCOS'],
            ['descripcion' => 'MINDO'],
        ];
        $sanMiguelBancos = City::find(182);
        $sanMiguelBancos->parishes()->createMany($parishesSanMiguelBancos);

        $parishesPedroVicente = [
            ['descripcion' => 'PEDRO VICENTE MALDONADO'],
        ];
        $pedroVicente = City::find(183);
        $pedroVicente->parishes()->createMany($parishesPedroVicente);

        $parishesPuertoQuito = [
            ['descripcion' => 'PUERTO QUITO'],
        ];
        $puertoQuito = City::find(184);
        $puertoQuito->parishes()->createMany($parishesPuertoQuito);

        // ---------- PROVINCE TUNGURAHUA -----------
        $parishesAmbato = [
            ['descripcion' => 'ATOCHA - FICOA'],
            ['descripcion' => 'CELIANO MONGE'],
            ['descripcion' => 'HUACHI CHICO'],
            ['descripcion' => 'HUACHI LORETO'],
            ['descripcion' => 'LA MERCED'],
            ['descripcion' => 'LA PENINSULA'],
            ['descripcion' => 'LA MATRIZ'],
            ['descripcion' => 'PISHILATA'],
            ['descripcion' => 'SAN FRANCISCO'],
            ['descripcion' => 'AMBATO'],
            ['descripcion' => 'AMBATILLO'],
            ['descripcion' => 'ATAHUALPA (CAB EN CHISALATA)'],
            ['descripcion' => 'AUGUSTO N. MARTINEZ (MUNDUGLEO)'],
            ['descripcion' => 'CONSTANTINO FERNANDEZ (CAB. EN CULLITAHUA)'],
            ['descripcion' => 'HUACHI GRANDE'],
            ['descripcion' => 'IZAMBA'],
            ['descripcion' => 'JUAN BENIGNO VELA'],
            ['descripcion' => 'MONTALVO'],
            ['descripcion' => 'PASA'],
            ['descripcion' => 'PICAIGUA'],
            ['descripcion' => 'PILAGUIN (PILAHUIN)'],
            ['descripcion' => 'QUISAPINCHA (QUIZAPINCHA)'],
            ['descripcion' => 'SAN BARTOLOME DE PINLLO'],
            ['descripcion' => 'SAN FERNANDO (PASA SAN FERNANDO)'],
            ['descripcion' => 'SANTA ROSA'],
            ['descripcion' => 'TOTORAS'],
            ['descripcion' => 'CUNCHIBAMBA'],
            ['descripcion' => 'UNAMUNCHO'],
        ];
        $ambato = City::find(185);
        $ambato->parishes()->createMany($parishesAmbato);

        $parishesBanosAgua = [
            ['descripcion' => 'BAÑOS DE AGUA SANTA'],
            ['descripcion' => 'LLIGUA'],
            ['descripcion' => 'RIO NEGRO'],
            ['descripcion' => 'RIO VERDE'],
            ['descripcion' => 'ULBA'],
        ];
        $banosAgua = City::find(186);
        $banosAgua->parishes()->createMany($parishesBanosAgua);

        $parishesCevallos = [
            ['descripcion' => 'CEVALLOS'],
        ];
        $cevallos = City::find(187);
        $cevallos->parishes()->createMany($parishesCevallos);

        $parishesMocha = [
            ['descripcion' => 'MOCHA'],
            ['descripcion' => 'PINGUILI'],
        ];
        $mocha = City::find(188);
        $mocha->parishes()->createMany($parishesMocha);

        $parishesPatate = [
            ['descripcion' => 'PATATE'],
            ['descripcion' => 'EL TRIUNFO'],
            ['descripcion' => 'LOS ANDES'],
            ['descripcion' => 'SUCRE (CAB EN SUCRE-PATATE URCU)'],
        ];
        $patate = City::find(189);
        $patate->parishes()->createMany($parishesPatate);

        $parishesQuero = [
            ['descripcion' => 'QUERO'],
            ['descripcion' => 'RUMIPAMBA'],
            ['descripcion' => 'YANAYACU - MOCHAPATA (CAB. EN YANAYACU)'],
        ];
        $quero = City::find(190);
        $quero->parishes()->createMany($parishesQuero);

        $parishesSanPedroPelileo = [
            ['descripcion' => 'PELILEO (URBANO)'],
            ['descripcion' => 'PELIELO GRANDE'],
            ['descripcion' => 'PELILEO (RURAL)'],
            ['descripcion' => 'BENITEZ (PACHANLICA)'],
            ['descripcion' => 'BOLIVAR'],
            ['descripcion' => 'COTALO'],
            ['descripcion' => 'CHIQUICHA (CAB. EN CHIQUICHA GRANDE)'],
            ['descripcion' => 'EL ROSARIO (RUMICHACA)'],
            ['descripcion' => 'GARCIA MORENO (CHUMAQUI)'],
            ['descripcion' => 'GUAMBALO (HUAMBALO)'],
            ['descripcion' => 'SALASACA'],
        ];
        $sanPedroPelileo = City::find(191);
        $sanPedroPelileo->parishes()->createMany($parishesSanPedroPelileo);

        $parishesSantiagoPillaro = [
            ['descripcion' => 'CIUDAD NUEVA'],
            ['descripcion' => 'PILLARO (URBANO)'],
            ['descripcion' => 'PILLARO (RURAL)'],
            ['descripcion' => 'BAQUERIZO MORENO'],
            ['descripcion' => 'EMILIO MARIA TERAN (RUMIPAMBA)'],
            ['descripcion' => 'MARCOS ESPINEL (CHACATA)'],
            ['descripcion' => 'PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)'],
            ['descripcion' => 'SAN ANDRES'],
            ['descripcion' => 'SAN JOSE DE POALO'],
            ['descripcion' => 'SAN MIGUELITO'],
        ];
        $santiagoPillaro = City::find(192);
        $santiagoPillaro->parishes()->createMany($parishesSantiagoPillaro);

        $parishesTisaleo = [
            ['descripcion' => 'TISALEO'],
            ['descripcion' => 'QUINCHICOTE'],
        ];
        $tisaleo = City::find(193);
        $tisaleo->parishes()->createMany($parishesTisaleo);

        // ---------- PROVINCE ZAMORA CHINCHIPE -----------
        $parishesZamora = [
            ['descripcion' => 'EL LIMÓN'],
            ['descripcion' => 'ZAMORA'],
            ['descripcion' => 'CUMBARATZA'],
            ['descripcion' => 'GUADALUPE'],
            ['descripcion' => 'IMBANA (LA VICTORIA DE IMBANA)'],
            ['descripcion' => 'SABANILLA'],
            ['descripcion' => 'TIMBARA'],
            ['descripcion' => 'SAN CARLOS DE LAS MINAS'],
        ];
        $zamora = City::find(194);
        $zamora->parishes()->createMany($parishesZamora);

        $parishesChinchipe = [
            ['descripcion' => 'ZUMBA'],
            ['descripcion' => 'CHITO'],
            ['descripcion' => 'EL CHORRO'],
            ['descripcion' => 'LA CHONTA'],
            ['descripcion' => 'PUCAPAMBA'],
            ['descripcion' => 'SAN ANDRES'],
        ];
        $chinchipe = City::find(195);
        $chinchipe->parishes()->createMany($parishesChinchipe);

        $parishesNangaritza = [
            ['descripcion' => 'GUAYZIMI'],
            ['descripcion' => 'ZURMI'],
            ['descripcion' => 'NUEVO PARAISO'],
            ['descripcion' => 'NANKAIS'],
        ];
        $nangaritza = City::find(196);
        $nangaritza->parishes()->createMany($parishesNangaritza);

        $parishesYacuambi = [
            ['descripcion' => '28 DE MAYO'],
            ['descripcion' => 'LA PAZ'],
            ['descripcion' => 'TUTUPALI'],
        ];
        $yacuambi = City::find(197);
        $yacuambi->parishes()->createMany($parishesYacuambi);

        $parishesYantzaza = [
            ['descripcion' => 'YANTZAZA'],
            ['descripcion' => 'CHICAÑA'],
            ['descripcion' => 'LOS ENCUENTROS'],
        ];
        $yantzaza = City::find(198);
        $yantzaza->parishes()->createMany($parishesYantzaza);

        $parishesElPangui = [
            ['descripcion' => 'EL PANGUI'],
            ['descripcion' => 'EL GUISME'],
            ['descripcion' => 'PACHICUTZA'],
            ['descripcion' => 'TUNDAYME'],
        ];
        $elPangui = City::find(199);
        $elPangui->parishes()->createMany($parishesElPangui);

        $parishesCentinela = [
            ['descripcion' => 'ZUMBI'],
            ['descripcion' => 'TRIUNFO DORADO'],
            ['descripcion' => 'PANGUINTZA'],
        ];
        $centinela = City::find(200);
        $centinela->parishes()->createMany($parishesCentinela);

        $parishesPalanda = [
            ['descripcion' => 'PALANDA'],
            ['descripcion' => 'EL PORVENIR DEL CARMEN'],
            ['descripcion' => 'SAN FRANCISCO DEL VERGEL'],
            ['descripcion' => 'VALLADOLID'],
            ['descripcion' => 'LA CANELA'],
        ];
        $palanda = City::find(201);
        $palanda->parishes()->createMany($parishesPalanda);

        $parishesPaquisha = [
            ['descripcion' => 'PAQUISHA'],
            ['descripcion' => 'BELLAVISTA'],
            ['descripcion' => 'NUEVO QUITO'],
        ];
        $paquisha = City::find(202);
        $paquisha->parishes()->createMany($parishesPaquisha);

        // ---------- PROVINCE GALAPAGOS -----------
        $parishesSanCristobal = [
            ['descripcion' => 'PUERTO BAQUERIZO MORENO'],
            ['descripcion' => 'EL PROGRESO'],
            ['descripcion' => 'ISLA SANTA MARÍA (FLOREANA) (CAB. EN  PTO. VELASCO IBARRA)'],
        ];
        $sanCristobal = City::find(203);
        $sanCristobal->parishes()->createMany($parishesSanCristobal);

        $parishesIsabela = [
            ['descripcion' => 'PUERTO VILLAMIL'],
            ['descripcion' => 'TOMAS DE BERLANGA'],
        ];
        $isabela = City::find(204);
        $isabela->parishes()->createMany($parishesIsabela);

        $parishesSantaCruz = [
            ['descripcion' => 'PUERTO AYORA'],
            ['descripcion' => 'BELLA VISTA'],
            ['descripcion' => 'SANTA ROSA'],
        ];
        $santaCruz = City::find(205);
        $santaCruz->parishes()->createMany($parishesSantaCruz);

        // ---------- PROVINCE SUCUMBIOS -----------
        $parishesLagoAgrio = [
            ['descripcion' => 'NUEVA LOJA'],
            ['descripcion' => 'DURENO'],
            ['descripcion' => 'GENERAL FARFAN'],
            ['descripcion' => 'EL ENO'],
            ['descripcion' => 'PACAYACU'],
            ['descripcion' => 'JAMBELI'],
            ['descripcion' => 'SANTA CECILIA'],
            ['descripcion' => '10 DE AGOSTO'],
        ];
        $lagoAgrio = City::find(206);
        $lagoAgrio->parishes()->createMany($parishesLagoAgrio);

        $parishesGonzaloPizarro = [
            ['descripcion' => 'LUMBAQUI'],
            ['descripcion' => 'EL REVENTADOR'],
            ['descripcion' => 'GONZALO PIZARRO'],
            ['descripcion' => 'PUERTO LIBRE'],
        ];
        $gonzaloPizarro = City::find(207);
        $gonzaloPizarro->parishes()->createMany($parishesGonzaloPizarro);

        $parishesPutumayo = [
            ['descripcion' => 'PUERTO EL CARMEN DEL PUTUMAYO'],
            ['descripcion' => 'PALMA ROJA'],
            ['descripcion' => 'PUERTO BOLIVAR (PUERTO MONTUFAR)'],
            ['descripcion' => 'PUERTO RODRIGUEZ'],
            ['descripcion' => 'SANTA ELENA'],
            ['descripcion' => 'SANSAHUARI'],
        ];
        $putumayo = City::find(208);
        $putumayo->parishes()->createMany($parishesPutumayo);

        $parishesShushufindi = [
            ['descripcion' => 'SHUSHUFINDI'],
            ['descripcion' => 'LIMONCOCHA'],
            ['descripcion' => 'PAÑACOCHA'],
            ['descripcion' => 'SAN ROQUE (CAB. EN SAN VICENTE)'],
            ['descripcion' => 'SAN PEDRO DE LOS COFANES'],
            ['descripcion' => 'SIETE DE JULIO'],
        ];
        $shushufindi = City::find(209);
        $shushufindi->parishes()->createMany($parishesShushufindi);

        $parishesSucumbios = [
            ['descripcion' => 'LA BONITA'],
            ['descripcion' => 'EL PLAYON DE SAN FRANCISCO'],
            ['descripcion' => 'LA SOFIA'],
            ['descripcion' => 'ROSA FLORIDA'],
            ['descripcion' => 'SANTA BARBARA'],
        ];
        $sucumbios = City::find(210);
        $sucumbios->parishes()->createMany($parishesSucumbios);

        $parishesCascales = [
            ['descripcion' => 'EL DORADO DE CASCALES'],
            ['descripcion' => 'SANTA ROSA DE SUCUMBIOS'],
            ['descripcion' => 'SEVILLA'],
            ['descripcion' => 'NUEVA TRONCAL'],
        ];
        $cascales = City::find(211);
        $cascales->parishes()->createMany($parishesCascales);

        $parishesCuyabeno = [
            ['descripcion' => 'TARAPOA'],
            ['descripcion' => 'CUYABENO'],
            ['descripcion' => 'AGUAS NEGRAS'],
        ];
        $cuyabeno = City::find(212);
        $cuyabeno->parishes()->createMany($parishesCuyabeno);

        // ---------- PROVINCE ORELLANA -----------
        $parishesFranciscoOrellana = [
            ['descripcion' => 'EL COCA (PUERTO FRANCISCO DE ORELLANA)'],
            ['descripcion' => 'DAYUMA'],
            ['descripcion' => 'TARACOA (NUEVA ESPERANZA: YUCA)'],
            ['descripcion' => 'ALEJANDRO LABAKA'],
            ['descripcion' => 'EL DORADO'],
            ['descripcion' => 'EL EDEN'],
            ['descripcion' => 'GARCIA MORENO'],
            ['descripcion' => 'INES ARANGO (CAB. EN WESTERN)'],
            ['descripcion' => 'LA BELLEZA'],
            ['descripcion' => 'NUEVO PARAISO (CAB. EN UNION )'],
            ['descripcion' => 'SAN JOSE DE GUAYUSA'],
            ['descripcion' => 'SAN LUIS DE ARMENIA'],
        ];
        $franciscoOrellana = City::find(213);
        $franciscoOrellana->parishes()->createMany($parishesFranciscoOrellana);

        $parishesAguarico = [
            ['descripcion' => 'NUEVO ROCAFUERTE'],
            ['descripcion' => 'TIPUTINI'],
            ['descripcion' => 'NUEVO ROCAFUERTE (RURAL)'],
            ['descripcion' => 'CAPITAN AUGUSTO RIVADENEYRA'],
            ['descripcion' => 'CONONACO'],
            ['descripcion' => 'SANTA MARIA DE HUIRIRIMA'],
            ['descripcion' => 'YASUNI'],
        ];
        $aguarico = City::find(214);
        $aguarico->parishes()->createMany($parishesAguarico);

        $parishesLaJoya = [
            ['descripcion' => 'LA JOYA DE LOS SACHAS'],
            ['descripcion' => 'ENOKANQUI'],
            ['descripcion' => 'POMPEYA'],
            ['descripcion' => 'SAN CARLOS'],
            ['descripcion' => 'SAN SEBASTIAN DEL COCA'],
            ['descripcion' => 'LAGO SAN PEDRO'],
            ['descripcion' => 'RUMIPAMBA'],
            ['descripcion' => 'TRES DE NOVIEMBRE'],
            ['descripcion' => 'UNION MILAGREÑA'],
        ];
        $laJoya = City::find(215);
        $laJoya->parishes()->createMany($parishesLaJoya);

        $parishesLoreto = [
            ['descripcion' => 'LORETO'],
            ['descripcion' => 'AVILA (CAB. EN HUIRUNO)'],
            ['descripcion' => 'PUERTO MURIALDO'],
            ['descripcion' => 'SAN JOSE DE PAYAMINO'],
            ['descripcion' => 'SAN JOSE DE DAHUANO'],
            ['descripcion' => 'SAN VICENTE DE HUATICOCHA'],
        ];
        $loreto = City::find(216);
        $loreto->parishes()->createMany($parishesLoreto);

        // ---------- PROVINCE SANTO DOMINGO SE LOS TSACHILAS -----------
        $parishesSantoDomingo = [
            ['descripcion' => 'ABRAHAM CALAZACON'],
            ['descripcion' => 'BOMBOLI'],
            ['descripcion' => 'CHIGULPE'],
            ['descripcion' => 'RIO TOACHI'],
            ['descripcion' => 'RIO VERDE'],
            ['descripcion' => 'SANTO DOMINGO DE LOS COLORADOS (URBANO)'],
            ['descripcion' => 'ZARACAY'],
            ['descripcion' => 'SANTO DOMINGO DE LOS COLORADOS (RURAL)'],
            ['descripcion' => 'ALLURIQUIN'],
            ['descripcion' => 'PUERTO LIMON'],
            ['descripcion' => 'LUZ DE AMERICA'],
            ['descripcion' => 'SAN JACINTO DEL BUA'],
            ['descripcion' => 'VALLE HERMOSO'],
            ['descripcion' => 'EL ESFUERZO'],
            ['descripcion' => 'SANTA MARIA DEL TOACHI'],
        ];
        $santoDomingo = City::find(217);
        $santoDomingo->parishes()->createMany($parishesSantoDomingo);

        $parishesLaConcordia = [
            ['descripcion' => 'LA CONCORDIA'],
            ['descripcion' => 'MONTERREY'],
            ['descripcion' => 'LA VILLEGAS'],
            ['descripcion' => 'PLAN PILOTO'],
        ];
        $laConcordia = City::find(218);
        $laConcordia->parishes()->createMany($parishesLaConcordia);

        // ---------- PROVINCE SANTA ELENA -----------
        $parishesSantaElena = [
            ['descripcion' => 'BALLENITA'],
            ['descripcion' => 'SANTA ELENA (URBANO)'],
            ['descripcion' => 'SANTA ELENA (RURAL)'],
            ['descripcion' => 'ATAHUALPA'],
            ['descripcion' => 'COLONCHE'],
            ['descripcion' => 'CHANDUY'],
            ['descripcion' => 'MANGLARALTO'],
            ['descripcion' => 'SIMON BOLIVAR (JULIO MORENO)'],
            ['descripcion' => 'SAN JOSE DE ANCON'],
        ];
        $santaElena = City::find(219);
        $santaElena->parishes()->createMany($parishesSantaElena);

        $parishesLaLibertad = [
            ['descripcion' => 'LA LIBERTAD'],
        ];
        $laLibertad = City::find(220);
        $laLibertad->parishes()->createMany($parishesLaLibertad);

        $parishesSalinas = [
            ['descripcion' => 'CARLOS ESPINOZA LARREA'],
            ['descripcion' => 'GENERAL ALBERTO ENRIQUEZ GALLO'],
            ['descripcion' => 'VICENTE ROCAFUERTE'],
            ['descripcion' => 'SANTA ROSA'],
            ['descripcion' => 'SALINAS'],
            ['descripcion' => 'ANCONCITO'],
            ['descripcion' => 'JOSE LUIS TAMAYO'],
        ];
        $salinas = City::find(221);
        $salinas->parishes()->createMany($parishesSalinas);
        
    }
}
