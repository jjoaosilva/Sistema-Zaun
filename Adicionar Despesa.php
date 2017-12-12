<DOCTYPE! html>
<html lang="pt-br" >
    <head>
        <link href="Style-ADD.css" type="text/css" rel="stylesheet">
        <link rel="shortcut icon" href="Imagens/icon.ico">
        <title>Adicionando Despesa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
    </head>
    <body>
        <main>
            <div class="navbar-fixed">
            <nav>
                <div class="">
                  <a href="#" class="brand-logo"><img src="Imagens/botao.png"></a>
                  <ul id="menu" class="right hide-on-med-and-down">
                    <li><a href="Adicionar%20Despesa.php">Adicionar Despesa</a></li>
                    <li><a href="Consultas.php">Consultas</a></li>
                    <li><a href="Sistema%20de%20Contas%20a%20Pagar.html" class="active">Sair</a></li>
                  </ul>
                </div>
            </nav>
            </div> <!--MENU-->
            
            <div class="container">
                <br>
                <h3 class="center-align" >Nova Despesa</h3>
            </div>
            
            <div class="container form-group">
                <div class="row">
                    <div class="section">
                        <h4 class="col s7">Selecione o tipo de pagamento:</h4>
                        <br>
                        <input type="button" id="a" class="btn col s2 offset" data-toggle="collapse" data-target="#vista" value="À vista">
                        <input type="button" id="b" class="btn col s2 offset right" data-toggle="collapse" data-target="#prazo" value="À prazo">
                    </div>
                </div>
            </div>
            
            <div class="container form-group">  
                <div class="section">
                <div id="vista" class="col s6 form-goup collapse">
                    <form  action = "" method="post"> 
                        <label class="control-label">Credor:</label>
                        <input type="text" placeholder="-" name = "Avista_credor">
                        
                        <label class="control-label">Valor da despesa:</label>
                        <input type="number" placeholder="-"name = "Avista_valor">

                        <label class="control-label">Data do pagamento:</label>
                        <input type="date" name = "Avista_data">

                        <p><a href=""><input id="c" type="submit" class="btn btn-danger" value="OK" name = "aVista"></a></p>
                    </form>
                    <br><br><br>
                </div>

                <div class="pl">
                <div id="prazo" class="col s6 form-goup collapse">
                    <form  action = "" method="post"> 
                        <label class="control-label">Credor:</label>
                        <input type="text" placeholder="-" name = "Aprazo_credor">
                        
                        <label class="control-label">Valor da despesa:</label>
                        <input type="number" placeholder="-" name = "Aprazo_valor">
                        
                        <label class="control-label">Data do pagamento:</label>
                        <input type="date" name = "Aprazo_dataPagamento"> 
                        
                        <label class="control-label">Quantidade de parcelas:</label>
                        <input type="number" placeholder="-" name = "Aprazo_qtdParcelas">
                        
                        <label class="control-label">Data de Vencimento:</label>
                        <input type="date" name = "Aprazo_dataVencimento">

                        <label class="control-label">Juros:</label>
                        <input type="number" placeholder="-" name = "Aprazo_juros">

                        <label class="control-label">Multa:</label>
                        <input type="number" placeholder="-" name = "Aprazo_multa">

                        <p><a href=""><input id="d" type="submit" class="btn btn-danger" value="OK" name = "aPrazo"></a></p>
                    </form>
                    <br><br><br><br><br>
                    </div> </div> 
            </div>
            </div>
        </main>
    
        <?php

            require_once 'config.inc.php';
            require_once 'dp_conn.model.php';

            error_reporting(0);
            
            $SQL = "SELECT credor from credores";

            $result = $Conn->prepare($SQL);
            
            $result->execute();
            $dados = $result->fetchAll(PDO::FETCH_ASSOC);

            $credores = array();

            for($i = 0; $i < count($dados); $i = $i + 1){
                foreach($dados[$i] as $membro=>$dado) array_push($credores, $dado);
            } 

            $SQL = "SELECT COUNT(codcompra) FROM compras";
            
            $result = $Conn->prepare($SQL);
            
            $result->execute();
            $dados = $result->fetchAll(PDO::FETCH_ASSOC);
            
            for($i = 0; $i < count($dados); $i = $i + 1){
                foreach($dados[$i] as $membro=>$dado) $quantidadeCompras = $dado;
            }

            if(isset($_POST["aVista"])){
                $nomeCredor  = $_POST["Avista_credor"];
                $valorCompra = $_POST["Avista_valor"];
                $dataCompra  = $_POST["Avista_data"];

                if(empty( $_POST["Avista_credor"]) or
                   empty( $_POST["Avista_valor"] ) or 
                   empty( $_POST["Avista_data"]  )  ) echo "Formulário não foi devidamente preenchido!";
                   
                else{
                    $index = array_search($nomeCredor, $credores); 
                    /* echo "valor: ". $index . "!!!"; */
                    
                    if($index === false){
                        /* echo "<h1>AQUI2</h1>"; */
                        
                        $SQL = (String)("INSERT INTO credores (CodCredor, Credor) VALUES(") . 
                                                      (String)(count($credores) + 1)        . ",'" . 
                                                      (String)($nomeCredor)                 . "')" ;
    
                        /* echo $SQL; */
                        $result = $Conn->prepare($SQL);
                        
                        $result->execute(); 
                                    
                        $SQL = (String)("INSERT INTO compras(CodCompra, CodCredor, dataCompra, valor, tipo) VALUES (").
                                                            (String)($quantidadeCompras + 1) . ","  .
                                                            (String)(count($credores)   + 1) . ",'" .
                                                            (String)($dataCompra           ) . "'," .
                                                            (String)($valorCompra          ) . ","  .
                                                            (String)(1                     ) . ")"  ;
                                        /* echo $SQL; */
                        $result = $Conn->prepare($SQL);
                        
                        $result->execute(); 
                    }
                    else{
                        
                        /* echo "<h1>AQUI1</h1>"; */
                        $SQL = (String)("INSERT INTO compras(CodCompra, CodCredor, dataCompra, valor, tipo) VALUES (").
                                                    (String)($quantidadeCompras + 1) . ","  .
                                                    (String)($index             + 1) . ",'" .
                                                    (String)($dataCompra           ) . "'," .
                                                    (String)($valorCompra          ) . ","  .
                                                    (String)(1                     ) . ")"  ;
                        /* echo $SQL; */
                        $result = $Conn->prepare($SQL);
    
                        $result->execute();   
                    } 
                } 
            }
            elseif(isset($_POST["aPrazo"])){
                $nomeCredor     = $_POST["Aprazo_credor"];
                $valorCompra    = $_POST["Aprazo_valor"];
                $dataPagamento  = $_POST["Aprazo_dataPagamento"];
                $dataVencimento = $_POST["Aprazo_dataVencimento"];
                $qtdParcelas    = $_POST["Aprazo_qtdParcelas"];
                $juros          = $_POST["Aprazo_juros"];
                $multa          = $_POST["Aprazo_multa"];

                if(empty( $_POST["Aprazo_credor"]        ) or
                   empty( $_POST["Aprazo_valor"]         ) or 
                   empty( $_POST["Aprazo_dataPagamento"] ) or
                   empty( $_POST["Aprazo_dataVencimento"]) or
                   empty( $_POST["Aprazo_qtdParcelas"]   ) or
                   empty( $_POST["Aprazo_juros"]         ) or
                   empty( $_POST["Aprazo_multa"]         )) echo "Formulário não foi devidamente preenchido!";

                else{
                    $valorParcelas = $valorCompra/$qtdParcelas;
                    $index = array_search($nomeCredor, $credores); 
                    /* echo "valor: ". $index . "!!!"; */
                    
                    if($index === false){
                        /* echo "<h1>AQUI2</h1>"; */
                        
                        $SQL = (String)("INSERT INTO credores (CodCredor, Credor) VALUES(") . 
                                                      (String)(count($credores) + 1)  . ",'" . 
                                                      (String)($nomeCredor)           . "')" ;
    
                        /* echo $SQL; */
                        
                        $result = $Conn->prepare($SQL);
                        
                        $result->execute(); 
                                    
                        $SQL = (String)("INSERT INTO compras(CodCompra, CodCredor, dataCompra, valor, tipo) VALUES (").
                                                            (String)($quantidadeCompras + 1) . ","  .
                                                            (String)(count($credores)   + 1) . ",'" .
                                                            (String)($dataPagamento        ) . "'," .
                                                            (String)($valorCompra          ) . ","  .
                                                            (String)(2                     ) . ")"  ;
                                        /* echo $SQL; */
                        $result = $Conn->prepare($SQL);
                        
                        $result->execute(); 
                        
                        for($i = 1; $i <= $qtdParcelas; $i = $i + 1){
                            $SQL = (String)("INSERT INTO parcelas(CodCompra, sequencia, valor, dataVencimento, dataPagamento, multa, juros) VALUES (").
                                                        (String)($quantidadeCompras + 1) . ","   .
                                                        (String)($i                    ) . ","   .
                                                        (String)($valorParcelas        ) . ",'"  .
                                                        (String)($dataVencimento       ) . "','" .
                                                        (String)($dataPagamento        ) . "',"  .
                                                        (String)($multa                ) . ","   .
                                                        (String)($juros                ) . ")"   ;
                            /* echo $SQL; */
                            $result = $Conn->prepare($SQL);
                            
                            $result->execute();  
                        }
                    }
                    else{
                        
                        /* echo "<h1>AQUI1</h1>"; */
                        $SQL = (String)("INSERT INTO compras(CodCompra, CodCredor, dataCompra, valor, tipo) VALUES (").
                                                    (String)($quantidadeCompras + 1) . ","  .
                                                    (String)($index             + 1) . ",'" .
                                                    (String)($dataPagamento        ) . "'," .
                                                    (String)($valorCompra          ) . ","  .
                                                    (String)(2                     ) . ")"  ;
                        /* echo $SQL; */

                        $result = $Conn->prepare($SQL);

                        $result->execute(); 

                        for($i = 1; $i <= $qtdParcelas; $i = $i + 1){
                            $SQL = (String)("INSERT INTO parcelas(CodCompra, sequencia, valor, dataVencimento, dataPagamento, multa, juros) VALUES (").
                                                (String)($quantidadeCompras + 1) . ","   .
                                                (String)($i                    ) . ","   .
                                                (String)($valorParcelas        ) . ",'"  .
                                                (String)($dataVencimento       ) . "','" .
                                                (String)($dataPagamento        ) . "',"  .
                                                (String)($multa                ) . ","   .
                                                (String)($juros                ) . ")"   ;
                            /* echo "<br>".$SQL; */
                            $result = $Conn->prepare($SQL);

                            $result->execute();  
                        } 
                    } 
                }
            }
            else{
            }  
    ?>

    </body>
</html>