<?php /* fichier cnam/nfa083/2017-cf1/inc/question-insert.inc.php 20180604-PBO */

/* RECUP USER LISTE ============================================================ */
    if(isset($question_pseudo)){                                  /* uniquement si non vide */
        $requete21="INSERT INTO question(question_id, question_pseudo, question_texte) 
                   VALUES ('','$question_pseudo','$question_texte')";
        $resultat21 = $con->query($requete21);           /* Pour préparer et executer la requete */
    } ?>
