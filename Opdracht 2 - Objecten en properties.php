<?php
/**
 * Created by PhpStorm.
 * User: Gino
 * Date: 5-2-2019
 * Time: 13:04
 */

class klanten
{

    public $naam;
    public $straatnaam;
    public $postcode;
    public $huisnummer;
    public $email;
    public $nieuwsbrief;
    public $laatste_aankoop;
}

class auto {
    public $merk;
    public $model;
    public $kleur;
    public $kenteken;
    public $laatste_apk;

}

$klant1 = new klanten();
$klant1->naam = "Mücahid Heesen";
$klant1->straatnaam = "Spieghelweg";
$klant1->postcode = "3833 AH";
$klant1->huisnummer = "149";
$klant1->email = "MucahidHeesen@teleworm.us";
$klant1->laatste_aankoop = "Nooit";
$klant1->nieuwsbrief = "N";

$auto1 = new auto();
$auto1->merk = "Fiat";
$auto1->model = "Multipla";
$auto1->kleur = "Paars";
$auto1->kenteken = "69-69-NU";
$auto1->laatste_apk = "05-02-2019";


var_dump($klant1);
var_dump($auto1);


?>

<hr>
Klant:
<?php echo $klant1->naam; ?><br>ss
<?php echo $klant1->straatnaam; ?><br>
<?php echo $klant1->postcode; ?><br>
<?php echo $klant1->huisnummer; ?><br>
<?php echo $klant1->email; ?><br>
<?php echo $klant1->laatste_aankoop; ?><br>
<?php echo $klant1->nieuwsbrief; ?><br>
Auto :<br>
<?php echo $auto1->merk; ?><br>
<?php echo $auto1->model; ?><br>
<?php echo $auto1->kleur; ?><br>
<?php echo $auto1->kenteken; ?><br>
<?php echo $auto1->laatste_apk; ?><br>
