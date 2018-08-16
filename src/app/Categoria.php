<?php

require_once "Base.php";

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author ecode 01
 */
class Categoria extends Base{
    
    private $id;
    private $nome;
    private $table = "categoria";
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function insert(){
        $sql = "INSERT INTO $this->table (id, nome) VALUES (NULL, ?)";
        $insert = $this->preparar($sql);
        $insert->bindValue(1, $this->getNome() );
        $insert->execute();
        return $this->objPDO->lastInsertId();
    }
    
    public function update($param){
        $sql = "UPDATE $this->table SET nome = ? WHERE id = ? LIMIT 1";
        $update = $this->preparar($sql);
        $update->bindValue(1, $this->getNome());
        $update->bindValue(2, $param);
        if( $update->execute() ){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function delete($param){
        $sql = "DELETE FROM $this->table WHERE id = ? LIMIT 1";
        $delete = $this->preparar($sql);
        $delete->bindParam(1, $param);
        if( $delete->execute() ){
            return TRUE;
        }else {
            return FALSE;
        }
//        return $delete->fetch();
    }
    
    public function getAll(){
        $sql = "SELECT id, nome FROM $this->table ORDER BY nome";
        $busca = $this->preparar($sql);
        $busca->execute();
        return $busca->fetchAll();
    }
    
    public function getOne($param){
        
        $sql = "SELECT id, nome FROM $this->table WHERE id = ? ORDER BY nome LIMIT 1 ";
        $busca = $this->preparar($sql);
        $busca->bindParam(1, $param);
        $busca->execute();
        return $busca->fetch();
    }
}
