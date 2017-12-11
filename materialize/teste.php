<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <?php
        define("DBHOST", "localhost");
        define("DBNAME", "sistemacontas");
        define("DBUSER", "root");  //userTeste
        define("DBPASS", "Jose1996");

        try{
            $Dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
            $Options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
            $Conn = new PDO($Dsn, DBUSER, DBPASS, $Options);

            $SQL = "SELECT * FROM credores";
            $SQL2 = "INSERT INTO credores (CodCredor, Credor) VALUES(6, 'Yara Sampaio');";
    
            $result = $Conn->prepare($SQL);
            
            $result->execute();
            $dados = $result->fetchAll(PDO::FETCH_ASSOC);

            $colunas = array();

            foreach($dados[0] as $membro=>$valor){
                array_push($colunas, $membro);
            }

            echo "<table border='1' class=\"highlight\">"; 

            echo "<tr>";
                foreach($colunas as $coluna) echo "<td>".$coluna."</td>";
            echo "</tr>"; 


            for($i = 0; $i < count($dados);$i = $i + 1){
                echo "<tr>";
                    foreach($dados[$i] as $membro=>$dado) echo "<td>".$dado."</td>";
                echo "</tr>";   
            } 
    
        } catch (PDOException $e){
            echo $e->getCode(). $e->getMessage();
        }
    ?> 
          <table class = "bordered">
        <thead>
          <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>

    </body>
</html>



