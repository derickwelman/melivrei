<?php
	$con = new PDO("mysql:host=localhost;dbname=melivrei", "root", ""); 
    $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $con->exec("SET CHARACTER SET utf8");  //  return all sql requests as UTF-8  

    function sqlToDate($sql){
    	return substr($sql, 8, 2) . "/" . substr($sql, 5, 2) . "/" . substr($sql, 0, 4);
    }

    function formataTelefone($ddd, $telefone){
        return "(" . $ddd . ") " . substr($telefone, 0, 4) . "-" . substr($telefone, 4, strlen($telefone)-4);
    }

    function formataTelefoneSemHifen($ddd, $telefone){
        return "(" . $ddd . ")" . $telefone;
    }

    function sqlToDecimal($sql){
    	return str_replace(".", ",", $sql);
    }
?>