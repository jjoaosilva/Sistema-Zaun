<?php

require_once "required.php";

function teste($indice, $array_consultas){
    
    try{
        
        $Dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
        $Options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
        $Conn = new PDO($Dsn, DBUSER, DBPASS, $Options);

        $SQL = $array_consultas[$indice];

        $result = $Conn->prepare($SQL);
        
        $result->execute();
        $dados = $result->fetchAll(PDO::FETCH_ASSOC);

        $colunas = array();
        
        if($dados != NULL){
            foreach($dados[0] as $membro=>$valor){
                array_push($colunas, $membro);
            }
        }
        else{
            echo "NAO HÁ ITENS PARA MOSTRAR!";
        }


        echo "<table border='1' class=\"bordered\">"; 

        echo "<tr>";
            foreach($colunas as $coluna) echo "<td>".$coluna."</td>";
        echo "</tr>"; 


        for($i = 0; $i < count($dados);$i = $i + 1){
            echo "<tr>";
                foreach($dados[$i] as $membro=>$dado) echo "<td>".$dado."</td>";
            echo "</tr>";   
        } 

    } 
    catch (PDOException $e){
        echo $e->getCode(). $e->getMessage();
    }
}
