<?php

class DB{
    public static $servidor = "localhost";
    public static $usuario = "root";
    public static $senha = "123456789";
    public static $nome_banco = "aula_php";

    public static conexao(){
        $conexao = null;
    try{   
    }
    catch(PDOException $e){
        echo "Erro de conexão:".$e->getMessage();
    }
        return $conexao;
    }
}






?>