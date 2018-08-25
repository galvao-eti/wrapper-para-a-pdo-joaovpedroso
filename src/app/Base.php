<?php

require_once "Config.php";

class Base {

    protected $config;
    protected $objPDO;

    public function __construct($config) {
        $this->config = $config;
        $this->conectar();
    }

    public function conectar() {

        try {
            $this->objPDO = new PDO($this->config->tipo . ":host=" . $this->config->host . ";dbname=" . $this->config->base . ";charset=utf8", $this->config->usuario, $this->config->senha);
            return $this->objPDO;
        } catch (Exception $ex) {
            echo "ERRO: Falha ao conectar a base de dados.";
        }
    }

    public function preparar($sql) {
        return $this->objPDO->prepare($sql);
    }

    public function desconectar() {
        $this->objPDO = NULL;
    }

}
