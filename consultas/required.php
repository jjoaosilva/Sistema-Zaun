<?php

    define("SQL01", "SELECT * FROM credores");
    define("SQL02", "SELECT codcredor, credor FROM credores ORDER BY credor");
    define("SQL03", "SELECT credor, codcompra, datacompra, valor FROM compras, credores WHERE credores.codcredor = compras.codcredor ORDER BY credor, datacompra");
    define("SQL04", "SELECT codcompra, datacompra, valor FROM compras, credores WHERE credores.codcredor = compras.codcredor AND credores.codcredor=2");
    define("SQL05", "SELECT * FROM compras WHERE valor>5000;");
    define("SQL06", "SELECT credor, tipo, sequencia, parcelas.valor, datavencimento FROM credores, compras, parcelas WHERE credores.codcredor=compras.codcredor and compras.codcompra = parcelas.codcompra and datapagamento IS NULL");
    define("SQL07", "SELECT codcredor, datacompra, tipo, sequencia, parcelas.valor, datavencimento, datapagamento, multa, juros FROM compras, parcelas WHERE compras.codcompra = parcelas.codcompra AND compras.codcompra = 4");
    define("SQL08", "SELECT datapagamento, parcelas.valor, multa, juros, credor, compras.valor FROM credores, compras, parcelas WHERE credores.codcredor = compras.codcredor AND compras.codcompra = parcelas.codcompra ORDER BY datapagamento, credor");
    define("SQL09", "SELECT codcompra, sequencia, parcelas.valor FROM parcelas WHERE datavencimento = '2018-01-03';");
    define("SQL10", "SELECT credor, compras.codcompra, datacompra FROM credores, compras, parcelas WHERE credores.codcredor = compras.codcredor AND compras.codcompra = parcelas.codcompra AND datavencimento < CURRENT_DATE() AND datapagamento IS NULL GROUP BY compras.codcompra");
    define("SQL11", "SELECT credor, datavencimento, datapagamento,parcelas.valor,multa, juros, parcelas.valor + multa + juros as total_pago FROM credores, compras, parcelas WHERE credores.codcredor = compras.codcredor AND compras.codcompra = parcelas.codcompra AND datapagamento > datavencimento");
    define("SQL12", "SELECT codcompra, sequencia, datavencimento, parcelas.valor FROM parcelas WHERE datapagamento IS NULL ORDER BY datavencimento");
    define("SQL13", "SELECT datacompra, SUM(compras.valor) as valor_total FROM compras GROUP BY datacompra");
    define("SQL14", "SELECT credor, SUM(compras.valor) as valor_total FROM credores, compras WHERE credores.codcredor = compras.codcredor GROUP BY credor");
    define("SQL15", "SELECT datapagamento, parcelas.valor + juros + multa as valor_total FROM parcelas WHERE datapagamento BETWEEN '2014-01-01' AND '2018-01-05' GROUP BY datapagamento");
    define("SQL16", "SELECT credor, SUM(parcelas.valor) as valor_divida FROM credores, compras, parcelas WHERE credores.codcredor = compras.codcredor AND compras.codcompra = parcelas.codcompra AND datapagamento is NULL GROUP BY credor");
    define("SQL17", "SELECT credor, COUNT(codcompra) FROM credores, compras WHERE credores.codcredor = compras.codcredor GROUP BY credor");
    define("SQL18", "SELECT credor, AVG(compras.valor) FROM credores, compras WHERE credores.codcredor = compras.codcredor GROUP BY credor");
    define("SQL19", "SELECT compras.codcompra, datacompra, COUNT(sequencia) as num_parcelas FROM compras, parcelas WHERE compras.codcompra = parcelas.codcompra GROUP BY compras.codcompra");
    define("SQL20", "SELECT credor, MAX(compras.valor) as maior_compra FROM credores, compras WHERE credores.codcredor = compras.codcredor GROUP BY credor");
    define("SQL21", "SELECT compras.*, COUNT(sequencia) as num_parcelas FROM compras, parcelas WHERE compras.codcompra = parcelas.codcompra GROUP BY codcompra HAVING COUNT(sequencia) > 2");
    define("SQL22", "SELECT credor, SUM(compras.valor) as total_compras FROM credores, compras WHERE credores.codcredor = compras.codcredor GROUP BY compras.codcredor HAVING SUM(compras.valor) > 1000");
    define("SQL23", "SELECT credor, AVG(compras.valor) as valor_medio FROM credores, compras WHERE credores.codcredor = compras.codcredor   AND datacompra BETWEEN '2014-10-02' AND '2017-11-11' GROUP BY compras.codcredor");
    
    $array_consultas = array(SQL01, SQL02, SQL03, SQL04, SQL05, SQL06, SQL07, SQL08, SQL09, SQL10, 
                             SQL11, SQL12, SQL13, SQL14, SQL15, SQL16, SQL17, SQL18, SQL19, SQL20,
                             SQL21, SQL22, SQL23);
?>

