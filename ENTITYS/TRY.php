<?php
    class TRYS{
        private $idTry;
        private $Usuario;
        private $fecha;
        private $JSONrespuestas;

        public function __construct($idTry, $User, $fecha,$JSONrespuestas){
            $this->idTry = $idTry;
            $this->Usuario = $User;
            $this->fecha = $fecha;
            $this->JSONrespuestas = json_decode($JSONrespuestas);
        }

        public function getIdTry(){
            return $this->idTry;
        }

        public function setIdTry($idTry){
            $this->idTry = $idTry;
        }

        public function getidUser(){
            return $this->Usuario;
        }

        public function setJsonFileRespuestas($jsonRespuestas){
            $this->JSONrespuestas = json_encode($jsonRespuestas);
        }

        public function getJsonFileRespuestas(){
            return $this->JSONrespuestas;
        }
    }


?>