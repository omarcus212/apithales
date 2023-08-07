<?php

namespace App\BD\Contact;

use App\Model\TokenModel;
use App\Model\UsuarioModel;

class AuthBD extends connection
{

    public function __construct()
    {
        parent::__construct();

    }

    public function Post_Login($email, $name, $pass) : ? UsuarioModel
    {

     
        $statement = $this->pdo
            ->query('SELECT id,email,nome,senha from tbl_Login where email = '."'$email'".' or nome = '."'$name'".' and senha = '."'$pass'".';');

        $users = $statement->fetchAll(\PDO::FETCH_ASSOC);

        if (count($users) === 0)
            return null;

        $usuario = new UsuarioModel();
        $usuario->setId($users[0]['id'])
            ->setEmail($users[0]['email'])
            ->setNome($users[0]['nome'])
            ->setSenha($users[0]['senha']);
        return $usuario;

    }



    public function createToken (TokenModel $tokenModel) : void{
    
        $statement = $this -> pdo
        -> prepare("insert into tbl_Token (toke,refresh_token,data,idLogin) value	(:token,:refresh_token,:date_token,:id_user);");
    
        $statement -> execute([
          'token' => $tokenModel -> getToken(),
          'refresh_token' => $tokenModel -> getRefresh_token(),
          'date_token' => $tokenModel -> getExpired_at(),
          'id_user' => $tokenModel -> getUsuarios_id(),
      ]);
    
      }



}

?>