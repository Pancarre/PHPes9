<?php
    include'Alunno.php';

    $alunni = array(

        new Alunno("Ale","Pan",20),
        new Alunno("alex","bot",19),
        new Alunno("mab","iri",20),

    );
    

    foreach($alunni as $Alunno){

        echo $Alunno->stampa()."<br>";

    }

?>