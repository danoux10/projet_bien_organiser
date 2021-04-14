<!DOCTYPE html>

<?php include '../controller/header.php';?>
<title>Observer Ruche</title>
</head>
<body>
	 <?php
        if(isset($_POST['valide_ruche'])){
            $_SESSION['ruche'] = $_POST['ruche'];
            $ruche=$_POST['ruche'];
            echo $ruche;
        }              
        
        if(isset($_POST['valide_date'])){
            $_SESSION['date'] = $_POST['date'];
            $date = $_POST['date'];
            echo $date;
        }
    ?>
    
    <div>
        <!--form selection ruche-->
        <form method="post">
            <?php 
                print $select_ruche; 
            ?>
            <input type="submit" value="valider ruche" name="valide_ruche">
        </form>
        
        <!--form selection date-->
        <!--<form method="post">
            <?php 
                //print $select_date;
            ?>
            <input type="submit" value="valider date" name="valide_date">
        </form>-->
        
        <!--form csv-->
        <form method="post" action="csv.php">
            <input type="submit" value="fichier csv" name="csv">        
        </form>
    
        <!--form pdf-->
        <form method="post" action="pdf.php">
            <input type="submit" value="fichier pdf" name="pdf">        
        </form>
        
        <!--form affichage tableau/graphique-->
        <form method="post">
            <input type="submit" value="afficher tableau" name="tableau">
            <input type="submit" value="afficher graphique" name="graphique">
            <input type="submit" value="afficher graphique et tableau" name="graph_table">
        </form>
        
       <!-- <form method="post">
            <input type="submit" value="choisir date" name="date">
        </form>-->
        
    </div>

    <?php     
        if(isset($_POST['graphique'])){
            include '../_classes/graphique.php';
        }
        
        if(isset($_POST['tableau'])){
            include '../_classes/tableau.php';
        }
        
        if(isset($_POST['graph_table'])){
            include '../_classes/graphique.php';
            include '../_classes/tableau.php';
        }
    ?>
</body>
</html>