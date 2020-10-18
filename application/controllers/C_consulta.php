<?php
 
class C_consulta extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->model('M_consulta');
    }
    
    public function buscar()
	{
        // var_dump($_POST);
        $nombre = $_POST['nombre'];
        // echo 'hola soy '.$nombre;
        // teniendo el valor del nombre a buscar, se realiza la consulta
        $consulta = $this->M_consulta->buscar($nombre);
        // echo '<pre>';
        // print_r($consulta);
        // echo '</pre>';

        echo 'hola soy '.$consulta[0]['nombre'].' tengo '.$consulta[0]['edad'].' años';
	}
}
