<?php

namespace App;

class Config {

    public $tipo;
    public $host;
    public $porta;
    public $base;
    public $usuario;
    public $senha;
    public $dsn;

    public function __construct($tipo, $host, $porta, $base, $usuario, $senha) {
        $this->tipo = $tipo;
        $this->host = $host;
        $this->porta = $porta;
        $this->base = $base;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

}
