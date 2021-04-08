<?php
$ruche_1 = "<div class='graph'><iframe class='graphique' src='http://localhost:3000/d-solo/02l6qGQMz/testament?orgId=1&refresh=5s&from=1616072355814&to=1616074155814&theme=light&panelId=2' frameborder='0'></iframe></div>";
    $ruche_2 = "<div class='graph'><iframe class='graphique' src='http://localhost:3000/d-solo/lJ4zigwMz/ruche-test?orgId=1&from=3&to=61&theme=light&panelId=4' frameborder='0'></iframe></div>";
    $ruche_3 = "<div class='graph'><iframe class='graphique' src='http://localhost:3000/d-solo/lJ4zigwMz/ruche-test?orgId=1&from=3&to=61&theme=light&panelId=6' frameborder='0'></iframe></div>";
    $ruche_4 = "<div class='graph'><iframe class='graphique' src='http://localhost:3000/d-solo/lJ4zigwMz/ruche-test?orgId=1&from=3&to=61&theme=light&panelId=8' frameborder='0'></iframe></div>";
    $ruche_5 = "<div class='graph'><iframe class='graphique' src='http://localhost:3000/d-solo/lJ4zigwMz/ruche-test?orgId=1&from=3&to=61&theme=light&panelId=10' frameborder='0'></iframe></div>";
    $ruche_6 = "<div class='graph'><iframe class='graphique' src='http://localhost:3000/d-solo/lJ4zigwMz/ruche-test?orgId=1&from=3&to=61&theme=light&panelId=12'  frameborder='0'></iframe></div>";
    $ruche_7 = "<div class='graph'><iframe class='graphique' src='http://localhost:3000/d-solo/lJ4zigwMz/ruche-test?from=2&to=100&orgId=1&theme=light&panelId=14' frameborder='0'></iframe></div>";
    $ruche_8 = "<div class='graph'><iframe class='graphique' src='http://localhost:3000/d-solo/lJ4zigwMz/ruche-test?from=2&to=100&orgId=1&theme=light&panelId=16'  frameborder='0'></iframe></div>";
    $ruche_9 = "<div class='graph'><iframe class='graphique' src='http://localhost:3000/d-solo/lJ4zigwMz/ruche-test?from=2&to=100&orgId=1&theme=light&panelId=18' frameborder='0'></iframe></div>";
    $ruche_10 = "<div class='graph'><iframe class='graphique' src='http://localhost:3000/d-solo/lJ4zigwMz/ruche-test?from=2&to=100&orgId=1&theme=light&panelId=20' frameborder='0'></iframe></div>";

            
        if($_SESSION['ruche'] == 0){
            echo "<p> </p>";
        }
        
        if($_SESSION['ruche'] == 1){
            echo $ruche_1;
        }
        
        if($_SESSION['ruche'] == 2){
            echo $ruche_2;
        }
        
        if($_SESSION['ruche'] == 3){
            echo $ruche_3;
        }
                
        if($_SESSION['ruche'] == 4){
            echo $ruche_4;
        }
        
        if($_SESSION['ruche'] == 5){
            echo $ruche_5;
        }
        
        if($_SESSION['ruche'] == 6){
            echo $ruche_6;
        }
        
        if($_SESSION['ruche'] == 7){
            echo $ruche_7;
        }
        
        if($_SESSION['ruche'] == 8){
            echo $ruche_8;
        }
        
        if($_SESSION['ruche'] == 9){
            echo $ruche_9;
        }
        
        if($_SESSION['ruche'] == 10){
            echo $ruche_10;
        }
?>