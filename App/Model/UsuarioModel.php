<?php

namespace App\Model;

final class UsuarioModel
{

     /**
      * @var int
      */
     private $id;

     /**
      * @var string
      */
     private $email;


     /**
      * @var string
      */
     private $username;

     /**
      * @var string
      */

     private $password;


     public function getId(): int
     {
          return $this->id;
     }

     public function setId(int $id): UsuarioModel
     {

          $this->id = $id;

          return $this;

     }
 
     public function getEmail(): string
     {

          return $this->email;

     }

     public function setEmail(string $email): UsuarioModel
     {

          $this->email = $email;

          return $this;

     }

     
     public function getNome(): string
     {

          return $this->username;

     }

     public function setNome(string $username): UsuarioModel
     {

          $this->username = $username;

          return $this;

     }


     public function getSenha(): string
     {

          return $this->password;

     }

     public function setSenha(string $password): UsuarioModel
     {

          $this->password = $password;

          return $this;

     }

}