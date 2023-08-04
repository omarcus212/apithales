<?php

namespace App\BD\Contact;

class IccidBD extends connection
{

    public function __construct()
    {
        parent::__construct();

    }

    public function get_All()
    {
        $estoques = $this->pdo
            ->query("SELECT * FROM register;")
            ->fetchAll(\PDO::FETCH_ASSOC);
        return $estoques;

    }



}

?>