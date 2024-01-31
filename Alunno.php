<?php
  class Alunno {
    // Properties
    protected $nome;
    protected $cognome;
    protected $eta;
    // Methods
    

    function Alunno($nome,$cognome,$eta){

      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->eta = $eta;

    }

    function get_name() {
      return $this->nome;
    }

    function get_cognome(){

      return $this->cognome;

    }
    function get_eta(){

      return $this->eta;

    }

    function set_nome(){

      $this->nome = $nome;

    }
    function set_cognome(){

      $this->cognome = $cognome;

    }
    function set_eta(){

      $this->eta = $eta;

    }

    function stampa(){
      
      return "nome:". $this->nome ." cognome:" . $this->cognome . " eta:" . $this->eta;

    }

  }
?>