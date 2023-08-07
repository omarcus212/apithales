<?php

    namespace App\Models;

    final class TokenModel{

        /**
         * @var int
         */
        private $id;
        /**
         * @var string
         */
        private $token;
        /**
         * @var string
         */
        private $refresh_token;
        /**
         * @var string
         */
        private $expired_at;
        /**
         * @var int
         */
        private $usuarios;


        public function getId() : int {
            return $this -> id;
       }

        public function setId(int $id) : TokenModel{

        $this -> id = $id;

        return $this;

       }

       public function getToken() : string {

        return $this -> token;

      }

      public function setToken(string $token) : TokenModel {

           $this -> token = $token;

           return $this;

      }

      public function getRefresh_token() : string {

        return $this -> refresh_token;

      }

      public function setRefresh_token(string $refresh_token) : TokenModel {

           $this -> refresh_token = $refresh_token;

           return $this;

      }

      public function getExpired_at() : string {

        return $this -> expired_at;

      }

      public function setExpired_at(string $expired_at) : TokenModel {

           $this -> expired_at = $expired_at;

           return $this;

      }

      public function getUsuarios_id() : int {
        return $this -> usuarios;
   }

    public function setUsuarios(array $usuarios_id) : TokenModel{

        $this -> usuarios = $usuarios_id;

        return $this;

   }



    }