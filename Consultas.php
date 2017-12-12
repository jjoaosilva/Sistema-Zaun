<DOCTYPE! html>
<html lang="pt-br" >
    <head>
        <link href="Style-Consultas.css" type="text/css" rel="stylesheet">

        <title>Consultas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="jquery-3.2.1.min.js"></script>

    </head>
    <body>
        <div class="navbar-fixed">
            <nav>
                <div class="menu">
                  <a href="#" class="brand-logo"><img src="Imagens/botao.png"></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="Adicionar%20Despesa.php">Adicionar Despesa</a></li>
                    <li><a href="Consultas.php">Consultas</a></li>
                    <li><a href="Sistema%20de%20Contas%20a%20Pagar.html" class="active">Sair</a></li>
                  </ul>
                </div>
            </nav>
        </div><!--Menu-->
        
        <div class="container">
            <br>
            <h3 class="center-align">Consultas</h3>
        </div>
            
        <div class="container form-group">
            <div class="row">
                <div class="section">
                <!--    <h4 class="col s7">Escolha uma consulta:</h4> <br>-->     
                    <form  method="post">
                        <ul id='dropdown2' class="dropdown-content">
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#01" value="Questao 01" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#02" value="Questao 02" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#03" value="Questao 03" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#04" value="Questao 04" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#05" value="Questao 05" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#06" value="Questao 06" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#07" value="Questao 07" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#08" value="Questao 08" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#09" value="Questao 09" name = "1"></a></li>                            
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#10" value="Questao 10" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#11" value="Questao 11" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#12" value="Questao 12" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#13" value="Questao 13" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#14" value="Questao 14" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#15" value="Questao 15" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#16" value="Questao 16" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#17" value="Questao 17" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#18" value="Questao 18" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#19" value="Questao 19" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#20" value="Questao 20" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#21" value="Questao 21" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#22" value="Questao 22" name = "1"></a></li>
                            <li><a href=""><input type="submit" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#23" value="Questao 23" name = "1"></a></li>
                        </ul>
                        <a class="btn dropdown-button" href="" data-activates="dropdown2">Escolha uma consulta<i class="material-icons right"></i></a>
                        </form> 
                
                </div>

            </div>
        </div>

        <?php
            require_once 'consultas\required.php';
            require_once 'consultas\config.inc.php';
            require_once 'consultas\dp_conn.model.php';

            if(isset($_POST["1"])){
                switch($_POST["1"]):

                    case "Questao 01":
                        teste(0, $array_consultas);
                        break;

                    case "Questao 02":
                        teste(1, $array_consultas);
                        break;

                    case "Questao 03":
                        teste(2, $array_consultas);
                        break;

                    case "Questao 04":
                        teste(3, $array_consultas);
                        break;

                    case "Questao 05":
                        teste(4, $array_consultas);
                        break;

                    case "Questao 06":
                        teste(5, $array_consultas);
                        break;

                    case "Questao 07":
                        teste(6, $array_consultas);
                        break;

                    case "Questao 08":
                        teste(7, $array_consultas);
                        break;

                    case "Questao 09":
                        teste(8, $array_consultas);
                        break;

                    case "Questao 10":
                        teste(9, $array_consultas);
                        break;

                    case "Questao 11":
                        teste(10, $array_consultas);
                        break;

                    case "Questao 12":
                        teste(11, $array_consultas);
                        break;

                    case "Questao 13":
                        teste(12, $array_consultas);
                        break;

                    case "Questao 14":
                        teste(13, $array_consultas);
                        break;

                    case "Questao 15":
                        teste(14, $array_consultas);
                        break;

                    case "Questao 16":
                        teste(15, $array_consultas);
                        break;

                    case "Questao 17":
                        teste(16, $array_consultas);
                        break;

                    case "Questao 18":
                        teste(17, $array_consultas);
                        break;

                    case "Questao 19":
                        teste(18, $array_consultas);
                        break;  
                        
                    case "Questao 20":
                        teste(19, $array_consultas);
                        break;

                    case "Questao 21":
                        teste(20, $array_consultas);
                        break;

                    case "Questao 22":
                        teste(21, $array_consultas);
                        break;

                    case "Questao 23":
                        teste(22, $array_consultas);
                        break;        
                                   
                    default:
                        break;
                endswitch;
            }

        ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
        
    </body>
</html>