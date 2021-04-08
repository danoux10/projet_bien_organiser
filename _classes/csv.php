<?php
    session_start();
    
	include '../controller/header.php';

    header('Content-Type: text/csv;');
    header('Content-Disposition: attachement; filename="ruche.csv"');
    
    $data = $bdd_ruche->query('SELECT * FROM ruche_data WHERE ruche_id="'.$_SESSION['ruche'].'" ORDER BY jour ASC');
?>
"id";"date";"heure";"poids";"temperature";"humidite"    
<?php
    while($value = $data->fetch()){
        $id = $value['ruche_id'];
        $datetime = $value['jour'];
        $poids = $value['poids'];
        $temperature = $value['temperature'];
        $humidite = $value['humidite'];
        
        //indentation date & heure
        $annee = substr($datetime, 0,4);
        $mois = substr($datetime, 5,2);
        $jours = substr($datetime, 8,2);
                    
        $heure = substr($datetime,11,8);
                    
        $date = $jours."/".$mois."/".$annee;
        
        echo '"ruche n '.$id.'";"'.$date.'";"'.$heure.'";"'.$poids.'";"'.$temperature.'";"'.$humidite.'"'."\n";
    }
?>