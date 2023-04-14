<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use App\Models\Provinces;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $citiesAzuay = [
            ['descripcion' => 'CUENCA'],
            ['descripcion' => 'GIRON'],
            ['descripcion' => 'GUALACEO'],
            ['descripcion' => 'NABON'],
            ['descripcion' => 'PAUTE'],
            ['descripcion' => 'PUCARA'],
            ['descripcion' => 'SAN FERNANDO'],
            ['descripcion' => 'SANTA ISABEL'],
            ['descripcion' => 'SIGSIG'],
            ['descripcion' => 'OÑA'],
            ['descripcion' => 'CHORDELEG'],
            ['descripcion' => 'EL PAN'],
            ['descripcion' => 'SEVILLA DE ORO'],
            ['descripcion' => 'GUACHAPALA'],
            ['descripcion' => 'CAMILO PONCE ENRIQUEZ'],
        ];
        $azuay = Province::find(1);
        $azuay->cities()->createMany($citiesAzuay);
        
        $citiesBolivar = [
            ['descripcion' => 'GUARANDA'],
            ['descripcion' => 'CHILLANES'],
            ['descripcion' => 'CHIMBO'],
            ['descripcion' => 'ECHEANDIA'],
            ['descripcion' => 'SAN MIGUEL'],
            ['descripcion' => 'CALUMA'],
            ['descripcion' => 'LAS NAVES'],
        ];
        $bolivar = Province::find(2);
        $bolivar->cities()->createMany($citiesBolivar);

        $citiesCanar = [
            ['descripcion' => 'AZOGUES'],
            ['descripcion' => 'BIBLIAN'],
            ['descripcion' => 'CAÑAR'],
            ['descripcion' => 'LA TRONCAL'],
            ['descripcion' => 'EL TAMBO'],
            ['descripcion' => 'DELEG'],
            ['descripcion' => 'SUSCAL'],
        ];
        $canar = Province::find(3);
        $canar->cities()->createMany($citiesCanar);

        $citiesCarchi = [
            ['descripcion' => 'TULCAN'],
            ['descripcion' => 'BOLIVAR'],
            ['descripcion' => 'ESPEJO'],
            ['descripcion' => 'MIRA'],
            ['descripcion' => 'MONTUFAR'],
            ['descripcion' => 'SAN PEDRO DE HUACA'],
        ];
        $carchi = Province::find(4);
        $carchi->cities()->createMany($citiesCarchi);

        $citiesCotopaxi = [
            ['descripcion' => 'LATACUNGA'],
            ['descripcion' => 'LA MANA'],
            ['descripcion' => 'PANGUA'],
            ['descripcion' => 'PUJILI'],
            ['descripcion' => 'SALCEDO'],
            ['descripcion' => 'SAQUISILI'],
            ['descripcion' => 'SIGCHOS'],
        ];
        $cotopaxi = Province::find(5);
        $cotopaxi->cities()->createMany($citiesCotopaxi);

        $citiesChimborazo = [
            ['descripcion' => 'RIOBAMBA'],
            ['descripcion' => 'ALAUSI'],
            ['descripcion' => 'COLTA'],
            ['descripcion' => 'CHAMBO'],
            ['descripcion' => 'CHUNCHI'],
            ['descripcion' => 'GUAMOTE'],
            ['descripcion' => 'GUANO'],
            ['descripcion' => 'PALLATANGA'],
            ['descripcion' => 'PENIPE'],
            ['descripcion' => 'CUMANDA'],
        ];
        $chimborazo = Province::find(6);
        $chimborazo->cities()->createMany($citiesChimborazo);

        $citiesElOro = [
            ['descripcion' => 'MACHALA'],
            ['descripcion' => 'ARENILLAS'],
            ['descripcion' => 'ATAHUALPA'],
            ['descripcion' => 'BALSAS'],
            ['descripcion' => 'CHILLA'],
            ['descripcion' => 'EL GUABO'],
            ['descripcion' => 'HUAQUILLAS'],
            ['descripcion' => 'MARCABELI'],
            ['descripcion' => 'PASAJE'],
            ['descripcion' => 'PIÑAS'],
            ['descripcion' => 'PORTOVELO'],
            ['descripcion' => 'SANTA ROSA'],
            ['descripcion' => 'ZARUMA'],
            ['descripcion' => 'LAS LAJAS'],
        ];
        $elOro = Province::find(7);
        $elOro->cities()->createMany($citiesElOro);

        $citiesEsmeraldas = [
            ['descripcion' => 'ESMERALDAS'],
            ['descripcion' => 'ELOY ALFARO'],
            ['descripcion' => 'MUISNE'],
            ['descripcion' => 'QUININDE'],
            ['descripcion' => 'SAN LORENZO'],
            ['descripcion' => 'ATACAMES'],
            ['descripcion' => 'RIOVERDE'],
        ];
        $esmeraldas = Province::find(8);
        $esmeraldas->cities()->createMany($citiesEsmeraldas);

        $citiesGuayas = [
            ['descripcion' => 'GUAYAQUIL'],
            ['descripcion' => 'ALFREDO BAQUERIZO MORENO'],
            ['descripcion' => 'BALAO'],
            ['descripcion' => 'BALZAR'],
            ['descripcion' => 'COLIMES'],
            ['descripcion' => 'DAULE'],
            ['descripcion' => 'DURAN'],
            ['descripcion' => 'EL EMPALME'],
            ['descripcion' => 'EL TRIUNFO'],
            ['descripcion' => 'MILAGRO'],
            ['descripcion' => 'NARANJAL'],
            ['descripcion' => 'NARANJITO'],
            ['descripcion' => 'PALESTINA'],
            ['descripcion' => 'PEDRO CARBO'],
            ['descripcion' => 'SAMBORONDON'],
            ['descripcion' => 'SANTA LUCIA'],
            ['descripcion' => 'SALITRE'],
            ['descripcion' => 'SAN JACINTO DE YAGUACHI'],
            ['descripcion' => 'PLAYAS'],
            ['descripcion' => 'SIMON BOLIVAR'],
            ['descripcion' => 'CORONEL MARCELINO MARIDUEÑA'],
            ['descripcion' => 'LOMAS DE SARGENTILLO'],
            ['descripcion' => 'NOBOL'],
            ['descripcion' => 'GENERAL  ANTONIO ELIZALDE'],
            ['descripcion' => 'ISIDRO AYORA'],
        ];
        $guayas = Province::find(9);
        $guayas->cities()->createMany($citiesGuayas);

        $citiesImbabura = [
            ['descripcion' => 'IBARRA'],
            ['descripcion' => 'ANTONIO ANTE'],
            ['descripcion' => 'COTACACHI'],
            ['descripcion' => 'OTAVALO'],
            ['descripcion' => 'PIMAMPIRO'],
            ['descripcion' => 'SAN MIGUEL DE URCUQUI'],
        ];
        $imbabura = Province::find(10);
        $imbabura->cities()->createMany($citiesImbabura);

        $citiesLoja = [
            ['descripcion' => 'LOJA'],
            ['descripcion' => 'CALVAS'],
            ['descripcion' => 'CATAMAYO'],
            ['descripcion' => 'CELICA'],
            ['descripcion' => 'CHAGUARPAMBA'],
            ['descripcion' => 'ESPINDOLA'],
            ['descripcion' => 'GONZANAMA'],
            ['descripcion' => 'MACARA'],
            ['descripcion' => 'PALTAS'],
            ['descripcion' => 'PUYANGO'],
            ['descripcion' => 'SARAGURO'],
            ['descripcion' => 'SOZORANGA'],
            ['descripcion' => 'ZAPOTILLO'],
            ['descripcion' => 'PINDAL'],
            ['descripcion' => 'QUILANGA'],
            ['descripcion' => 'OLMEDO'],
        ];
        $loja = Province::find(11);
        $loja->cities()->createMany($citiesLoja);

        $citieslosRios = [
            ['descripcion' => 'BABAHOYO'],
            ['descripcion' => 'BABA'],
            ['descripcion' => 'MONTALVO'],
            ['descripcion' => 'PUEBLOVIEJO'],
            ['descripcion' => 'QUEVEDO'],
            ['descripcion' => 'URDANETA'],
            ['descripcion' => 'VENTANAS'],
            ['descripcion' => 'VINCES'],
            ['descripcion' => 'PALENQUE'],
            ['descripcion' => 'BUENA FE'],
            ['descripcion' => 'VALENCIA'],
            ['descripcion' => 'MOCACHE'],
            ['descripcion' => 'QUINSALOMA'],
        ];
        $losRios = Province::find(12);
        $losRios->cities()->createMany($citieslosRios);
        
        $citiesManabi = [
            ['descripcion' => 'PORTOVIEJO'],
            ['descripcion' => 'BOLIVAR'],
            ['descripcion' => 'CHONE'],
            ['descripcion' => 'EL CARMEN'],
            ['descripcion' => 'FLAVIO ALFARO'],
            ['descripcion' => 'JIPIJAPA'],
            ['descripcion' => 'JUNIN'],
            ['descripcion' => 'MANTA'],
            ['descripcion' => 'MONTECRISTI'],
            ['descripcion' => 'PAJAN'],
            ['descripcion' => 'PICHINCHA'],
            ['descripcion' => 'ROCAFUERTE'],
            ['descripcion' => 'SANTA ANA'],
            ['descripcion' => 'SUCRE'],
            ['descripcion' => 'TOSAGUA'],
            ['descripcion' => '24 DE MAYO'],
            ['descripcion' => 'PEDERNALES'],
            ['descripcion' => 'OLMEDO'],
            ['descripcion' => 'PUERTO LOPEZ'],
            ['descripcion' => 'JAMA'],
            ['descripcion' => 'JARAMIJO'],
            ['descripcion' => 'SAN VICENTE'],
        ];
        $manabi = Province::find(13);
        $manabi->cities()->createMany($citiesManabi);
        
        $citiesMS = [
            ['descripcion' => 'MORONA'],
            ['descripcion' => 'GUALAQUIZA'],
            ['descripcion' => 'LIMON INDANZA'],
            ['descripcion' => 'PALORA'],
            ['descripcion' => 'SANTIAGO'],
            ['descripcion' => 'SUCUA'],
            ['descripcion' => 'HUAMBOYA'],
            ['descripcion' => 'SAN JUAN BOSCO'],
            ['descripcion' => 'TAISHA'],
            ['descripcion' => 'LOGROÑO'],
            ['descripcion' => 'PABLO SEXTO'],
            ['descripcion' => 'TIWINTZA'],
        ];
        $ms = Province::find(14);
        $ms->cities()->createMany($citiesMS);
        
        $citiesNapo = [
            ['descripcion' => 'TENA'],
            ['descripcion' => 'ARCHIDONA'],
            ['descripcion' => 'EL CHACO'],
            ['descripcion' => 'QUIJOS'],
            ['descripcion' => 'CARLOS JULIO AROSEMENA TOLA'],
        ];
        $napo = Province::find(15);
        $napo->cities()->createMany($citiesNapo);
        
        $citiesPastaza = [
            ['descripcion' => 'PASTAZA'],
            ['descripcion' => 'MERA'],
            ['descripcion' => 'SANTA CLARA'],
            ['descripcion' => 'ARAJUNO'],
        ];
        $pastaza = Province::find(16);
        $pastaza->cities()->createMany($citiesPastaza);
        
        $citiesPichincha = [
            ['descripcion' => 'DISTRITO METROPOLITANO DE QUITO'],
            ['descripcion' => 'CAYAMBE'],
            ['descripcion' => 'MEJIA'],
            ['descripcion' => 'PEDRO MONCAYO'],
            ['descripcion' => 'RUMIÑAHUI'],
            ['descripcion' => 'SAN MIGUEL DE LOS BANCOS'],
            ['descripcion' => 'PEDRO VICENTE MALDONADO'],
            ['descripcion' => 'PUERTO QUITO'],
        ];
        $pichincha = Province::find(17);
        $pichincha->cities()->createMany($citiesPichincha);
        
        $citiesTungurahua = [
            ['descripcion' => 'AMBATO'],
            ['descripcion' => 'BAÑOS DE AGUA SANTA'],
            ['descripcion' => 'CEVALLOS'],
            ['descripcion' => 'MOCHA'],
            ['descripcion' => 'PATATE'],
            ['descripcion' => 'QUERO'],
            ['descripcion' => 'SAN PEDRO DE PELILEO'],
            ['descripcion' => 'SANTIAGO DE PILLARO'],
            ['descripcion' => 'TISALEO'],
        ];
        $tungurahua = Province::find(18);
        $tungurahua->cities()->createMany($citiesTungurahua);
        
        $citiesZC = [
            ['descripcion' => 'ZAMORA'],
            ['descripcion' => 'CHINCHIPE'],
            ['descripcion' => 'NANGARITZA'],
            ['descripcion' => 'YACUAMBI'],
            ['descripcion' => 'YANTZAZA'],
            ['descripcion' => 'EL PANGUI'],
            ['descripcion' => 'CENTINELA DEL CONDOR'],
            ['descripcion' => 'PALANDA'],
            ['descripcion' => 'PAQUISHA'],
        ];
        $sc = Province::find(19);
        $sc->cities()->createMany($citiesZC);
        
        $citiesGalapagos = [
            ['descripcion' => 'SAN CRISTOBAL'],
            ['descripcion' => 'ISABELA'],
            ['descripcion' => 'SANTA CRUZ'],
        ];
        $galapagos = Province::find(20);
        $galapagos->cities()->createMany($citiesGalapagos);

        $citiesSucumbios = [
            ['descripcion' => 'LAGO AGRIO'],
            ['descripcion' => 'GONZALO PIZARRO'],
            ['descripcion' => 'PUTUMAYO'],
            ['descripcion' => 'SHUSHUFINDI'],
            ['descripcion' => 'SUCUMBIOS'],
            ['descripcion' => 'CASCALES'],
            ['descripcion' => 'CUYABENO'],
        ];
        $sucumbios = Province::find(21);
        $sucumbios->cities()->createMany($citiesSucumbios);

        $citiesOrellana = [
            ['descripcion' => 'FRANCISCO DE ORELLANA'],
            ['descripcion' => 'AGUARICO'],
            ['descripcion' => 'LA JOYA DE LOS SACHAS'],
            ['descripcion' => 'LORETO'],
        ];
        $orellana = Province::find(22);
        $orellana->cities()->createMany($citiesOrellana);

        $citiesSD = [
            ['descripcion' => 'SANTO DOMINGO'],
            ['descripcion' => 'LA CONCORDIA'],
        ];
        $sd = Province::find(23);
        $sd->cities()->createMany($citiesSD);

        $citiesSE = [
            ['descripcion' => 'SANTA ELENA'],
            ['descripcion' => 'LA LIBERTAD'],
            ['descripcion' => 'SALINAS'],
        ];
        $sE = Province::find(24);
        $sE->cities()->createMany($citiesSE);

    }
}
