<?php
	include '../controller/header.php';

    require_once '../_function/pdf/autoload.inc.php';

    use Dompdf\Dompdf;

session_start();

$ruche_selectionner = $bdd_ruche->query('SELECT * FROM ruche_data WHERE ruche_id='.$_SESSION['ruche'].' ORDER BY jour ASC');

$document = new Dompdf();

$html = "
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<table>
	<tr>
		<th>id</th>
		<th>date</th>
		<th>heure</th>
		<th>poids</th>
		<th>temperature</th>
		<th>humidite</th>
	</tr>
";

while($ruche_data = $ruche_selectionner ->fetch())
{
    $id = $ruche_data['ruche_id'];
    $datetime = $ruche_data['jour'];
    $poids = $ruche_data['poids'];
    $temperature = $ruche_data['temperature'];
    $humiditer = $ruche_data['humidite'];
	
    //indentation date & heure
    $annee = substr($datetime, 0,4);
    $mois = substr($datetime, 5,2);
    $jours = substr($datetime, 8,2);
                    
    $heure = substr($datetime,11,8);
    
    $date = $jours."/".$mois."/".$annee;
    
    $html .= '
		<tr>
			<td>'.$id.'</td>
			<td>'.$date.'</td>
			<td>'.$heure.'</td>
			<td>'.$poids.'</td>
			<td>'.$temperature.'</td>
			<td>'.$humiditer.'</td>
		</tr>
	';
}
    
    
$html .='</table>';

$document->loadHtml($html);

//set page size and orientation

$document->setPaper('A4', 'landscape');

//Render the HTML as PDF

$document->render();


$id = 'ruche n°'.$_SESSION['ruche'];
$document->stream($id, array("Attachment"=>1));
?>