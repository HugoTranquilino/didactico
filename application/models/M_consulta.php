<?php

class M_consulta extends CI_Model 
{
    public function __construct() {
        parent::__construct();
    }

    public function buscar($nombre)
    {
        # consulta a la base
        $consulta = "SELECT * FROM usuario WHERE nombre = '$nombre'";
        $sql = $this->db->query($consulta);
        return $sql->result_array();
    }
}
