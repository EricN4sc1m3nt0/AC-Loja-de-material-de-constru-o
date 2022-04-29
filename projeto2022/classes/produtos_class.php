<?php
class produtos{
    public $preco;
    public $estoque;
    public $marcas;
    public $codigo_barras;
    public $produtor;

    public function entrada_estoque($quantidade){
        $this->estoque = $this->$estoque + $quantidade; 
    }

    public function saida_estoque($quantidade){
        $this->estoque = $this->estoque - $quantidade;
    }
    public function setPreco($p){
        $this->preco = $p;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setEstoque($e){
        $this->estoque = $e;
    }
    public function getEstoque(){
        return $this->estoque;

    public function setMarcas($m){
        $this->preco = $m;
    }
    public function getMarcas(){
        return $this->marcas;
    }
    public function setCodigo_barras($cb){
        $this->preco = $cb;
    }
    public function getCodigo_barras(){
        return $this->codigos_barras;
    }
    public function setPreco($pr){
        $this->preco = $pr;
    }
    public function getProdutor(){
        return $this->produtor;
    
    public function adicionar(){
        $sql = "INSET INTO produto (preco, estoque, marcas, cosigos_barras, produtor)
        VALUES(???)";

    try{
        $con = DB::conexao();
        $stmt = $conexao->prepare($sql);
        
        $con = DB::conexao();
        $stmt = $con->prepare($sql);
        $stmt->bindParam(1, $this->getPreco());
        $stmt->bindParam(2, $this->getEstoque());
        $stmt->bindParam(3, $this->getMarcas());
        $stmt->bindParam(4, $this->getCodigo_barras());
        $stmt->bindParam(5, $this->getProdutor());
        $stmt->execute();
    }
    catch(PDOException $e){
        echo "Erro no adicionar produto". $e->getMessage();
    }

    }
    public static function listar(){
        $sql = "SELECT * FROM produto";
        $produto = array();
        try{
            $con = DB::conexao();
            $stmt = $conexao->($sql);
            $stmt->execute();
            $registros = $stmt->fetchAll();

            foreach($registro as $registro){
                $temp = new produto();
                $temp->setld($registro["id"]);
                $temp->setPreco($registro["preco"]);
                $temp->setMarca($registro["marca"]);
                $temp->setCodigo_Barras($registro["codigo_barras"]);
                $temp->setProdutor($registro["produtor"]);
            }
        }
        catch(PDOException $e){
            echo "Erro no lista Produto:".
            $e->getMessage();
        }
        return $produto;
    }
    public function atualizar(){}
    public function excluir(){}

    }





?>