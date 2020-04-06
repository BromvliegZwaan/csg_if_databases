<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$tekst="Ik heb een bijbaantje bij de Aldi. De Aldi betaalt goed.";
echo "$tekst";
$tekst=str_replace('Aldi','Albert Heijn',$tekst);
$tekst=strstr($tekst,"De");
echo  $tekst;
$lengte=strlen($tekst);
echo '<i>De string $tekst bestaat uit <b>'.$lengte.' </b>karakters.</i><br>';
$tekst=substr($tekst,10,5);
/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
 