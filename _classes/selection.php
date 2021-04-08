<?php

   session_start();

    $user = $bdd_utilisateur->query('SELECT * FROM utilisateur');
    $ruche = $bdd_ruche->query('SELECT DISTINCT ruche_id FROM ruche_data ORDER BY ruche_id ASC');
    //$datetime = $bdd-> query('SELECT DISTINCT jour FROM ruche_data WHERE ruche_id='.$_SESSION['ruche'].' ORDER BY jour ASC');
    
    //select user
    $select_user ="<select name='user'>";
    $select_user .="<option value='0'> choisir utilisateur </option>";

    while($utilisateur = $user->fetch()){
        $id_user = $utilisateur['id'];
        $email_user = $utilisateur['email'];
        
        $select_user .="<option value='$id_user'>$email_user</option>";
    }

    $select_user .="</select>";
    
    //select ruche
    $select_ruche = "<select name='ruche'>";
        $select_ruche .="<option selected value=0> choisir une ruche </option>";
    
        while($selection_ruche = $ruche->fetch()){
            $id_ruche = $selection_ruche['ruche_id'];
            
            $select_ruche .="<option value='$id_ruche'>ruche n°$id_ruche</option>";        
        }
    $select_ruche .="</select>";

?>