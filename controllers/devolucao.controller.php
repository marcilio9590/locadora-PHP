<?php
		require_once '../conexao/conexaoBD.php'; 
        
        $itens_locacao;
        $con = new ConexaoBD;
        $conexao = $con->ConnectBD();
        try {
            $res = $conexao->query("SELECT l.cod_locacao, 
        c.nome, l.data, l.total, l.status , f.cod_filme, f.nome as nomefilme, 
        l.cod_funcionario, e.nome as nomeFuncionario, c.cod_cliente, f.preco, il.codigo as codigoitemlocacao
        from locacoes l
        inner join funcionarios e on l.cod_funcionario = e.cod_funcionario
        inner join clientes c on l.cod_cliente = c.cod_cliente 
        left join itens_locacao il on il.cod_locacao = l.cod_locacao 
        left join filmes f on f.cod_filme = il.cod_filme WHERE l.status=0");
            $itens_locacao = $res->fetchAll();
        } catch (PDOException $e){
            echo "false";
    }

    if(isset($_REQUEST['realizarDevolucao'])){

     $codigoLocacao = $_REQUEST['codigoLocacao'];

     try {
                 $retorno = $conexao->prepare("UPDATE locacoes SET  status = 1 WHERE cod_locacao = :cod");
                 $retorno->bindParam(':cod', $codigoLocacao);


                 $flag = $retorno->execute();
                 if($flag==true){


                 $conexao->exec("UPDATE filmes f INNER JOIN itens_locacao il on f.cod_filme = il.cod_filme 
                    where il.cod_locacao = $codigoLocacao");
                 
                 $conexao->commit();


                 }
                 echo $flag;
             } catch (PDOException $e) {
                 echo "False";
             } finally{
                 $conexao = null;
             }


    }

?>
