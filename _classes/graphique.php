<?php
	$ruche_1 = "<div class='graph'><iframe class='graphique' src='http://192.168.1.39:3000/d-solo/hylbiWWRz/ruche?orgId=1&from=1618118557776&to=1618140157776&theme=light&panelId=2' frameborder='0'></iframe></div>";
    $ruche_2 = "<div class='graph'><iframe class='graphique' src='http://192.168.1.39:3000/d-solo/hylbiWWRz/ruche?orgId=1&from=1618118576035&to=1618140176035&theme=light&panelId=4' frameborder='0'></iframe></div>";
    $ruche_3 = "<div class='graph'><iframe class='graphique' src='http://192.168.1.39:3000/d-solo/hylbiWWRz/ruche?orgId=1&from=1618118598026&to=1618140198026&theme=light&panelId=6' frameborder='0'></iframe></div>";
    $ruche_4 = "<div class='graph'><iframe class='graphique' src='http://192.168.1.39:3000/d-solo/hylbiWWRz/ruche?orgId=1&from=1618118607901&to=1618140207901&theme=light&panelId=8' frameborder='0'></iframe></div>";
    $ruche_5 = "<div class='graph'><iframe class='graphique' src='http://192.168.1.39:3000/d-solo/hylbiWWRz/ruche?orgId=1&from=1618118621820&to=1618140221820&theme=light&panelId=10' frameborder='0'></iframe></div>";
    $ruche_6 = "<div class='graph'><iframe class='graphique' src='http://192.168.1.39:3000/d-solo/hylbiWWRz/ruche?orgId=1&from=1618118632363&to=1618140232363&theme=light&panelId=12' frameborder='0'></iframe></div>";
    $ruche_7 = "<div class='graph'><iframe class='graphique' src='http://192.168.1.39:3000/d-solo/hylbiWWRz/ruche?orgId=1&from=1618118645181&to=1618140245181&theme=light&panelId=14' frameborder='0'></iframe></div>";
    $ruche_8 = "<div class='graph'><iframe class='graphique' src='http://192.168.1.39:3000/d-solo/hylbiWWRz/ruche?orgId=1&from=1618118656858&to=1618140256858&theme=light&panelId=16' frameborder='0'></iframe></div>";
    $ruche_9 = "<div class='graph'><iframe class='graphique' src='http://192.168.1.39:3000/d-solo/hylbiWWRz/ruche?orgId=1&from=1618118669644&to=1618140269644&theme=light&panelId=18' frameborder='0'></iframe></div>";
    $ruche_10 = "<div class='graph'><iframe class='graphique' src='http://192.168.1.39:3000/d-solo/hylbiWWRz/ruche?orgId=1&from=1618118680526&to=1618140280527&theme=light&panelId=20' frameborder='0'></iframe></div>";

            
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