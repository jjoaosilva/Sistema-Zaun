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
              <a href="#" class="brand-logo"><img src="../Imagens/botao.png"></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="../Adicionar%20Despesa.php">Adicionar Despesa</a></li>
                <li><a href="../Consultas.php">Consultas</a></li>
                <li><a href="../Sistema%20de%20Contas%20a%20Pagar.html" class="active">Sair</a></li>
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
                    <ul id='dropdown2' class="dropdown-content">
                        <li><a href="consultas01.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#01" value="Questao01"></a></li>
                        <li><a href="consultas02.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#02" value="Questao 02"></a></li>
                        <li><a href="consultas03.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#03" value="Questao 03"></a></li>
                        <li><a href="consultas04.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#04" value="Questao 04"></a></li>
                        <li><a href="consultas05.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#05" value="Questao 05"></a></li>
                        <li><a href="consultas06.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#06" value="Questao 06"></a></li>
                        <li><a href="consultas07.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#07" value="Questao 07"></a></li>
                        <li><a href="consultas08.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#08" value="Questao 08"></a></li>
                        <li><a href="consultas09.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#19" value="Questao 09"></a></li>                            
                        <li><a href="consultas10.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#09" value="Questao 10"></a></li>
                        <li><a href="consultas11.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#10" value="Questao 11"></a></li>
                        <li><a href="consultas12.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#11" value="Questao 12"></a></li>
                        <li><a href="consultas13.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#12" value="Questao 13"></a></li>
                        <li><a href="consultas14.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#13" value="Questao 14"></a></li>
                        <li><a href="#!"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#14" value="Questao 15"></a></li>
                        <li><a href="consultas16.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#15" value="Questao 16"></a></li>
                        <li><a href="consultas17.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#16" value="Questao 17"></a></li>
                        <li><a href="consultas18.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#17" value="Questao 18"></a></li>
                        <li><a href="consultas19.php"><input type="button" id="a" class="btn col s7 offset " data-toggle="collapse" data-target="#18" value="Questao 19"></a></li>
                    </ul>
                    <a class="btn dropdown-button" href="#!" data-activates="dropdown2">Escolha uma consulta<i class="material-icons right"></i></a>
                
                </div>

            </div>
        </div>

        <?php
            require_once 'required.php';
            require_once 'config.inc.php';
            require_once 'dp_conn.model.php';

            teste(14, $array_consultas);
        ?> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
        
    </body>
</html>