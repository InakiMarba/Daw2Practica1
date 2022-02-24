<?php
function elimiNot($eleElim){
    list ($serNom, $usuNom, $contra, $nomBD, $nick, $nonCog, $mail, $edat, $nivell) = sessioExist();
    $conn = new mysqli($serNom, $usuNom, $contra, $nomBD);
    if(!empty($eleElim)){
        $sql = "DELETE FROM noticies WHERE codin='$eleElim'";
        if ($conn->query($sql) === TRUE) {
            header("location:gestioNot.php");
          }
    }
}
?>