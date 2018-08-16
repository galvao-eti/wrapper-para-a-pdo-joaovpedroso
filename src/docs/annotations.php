<?php

/*
  OK ** 1 - Deve possuir uma classe Config que constrói um objeto que possui os atributos: tipo, host, porta, base, usuario, senha e dsn;
  OK ** 2 - Deve possuir uma classe Base que recebe em seu construtor um objeto Config por injeção de dependência. Esta classe deve possuir o atributo:
  OK  -- ATRIBUTOS
  OK  - objetoPDO
  OK  -- MÉTODOS:
  OK  - conectar,
  OK  - preparar,
  OK  - desconectar.
  OK ** 3 - O método conectar deve atribuir ao atributo obetoPDO um objeto PDO;
  OK ** 4 - O método preparar deve receber uma string SQL e retornar um objeto PDOStatement;
            Desconsiderar trabalhar com prepared statements para simplificar as coisas.
  OK ** 5 - O método desconectar deve atribuir NULL para o atributo objetoPDO, causando portanto a desconexão com a base;
  OK ** 6 - Não perca tempo com CSS/JavaScript/etc... Esse trabalho é de backend.
  OK ** Evidentemente que o trabalho de vocês deve fazer um CRUD (
  OK Insert,
  OK Select,
  OK Update
  OK Delete
  OK comprovando o funcionamento. Podem fazer o CRUD em apenas uma tabela
    (categoria, por exemplo, a mais simples das duas) para facilitar a vida, sem
    problema.
 */