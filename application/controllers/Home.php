<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{                
                session_start();
                
                if( ! isset ($_SESSION["matricula"])){
                    $matricula = 0 ;
                }else{
                    $matricula = $_SESSION["matricula"];
                }
                
                $quantUnidades = 8;             
                 
                $data = array(
                    'quantUnidades' => $quantUnidades
                );                
                
                if($matricula > 0){
                $this->load->view('template/header.php');
                $this->load->view('template/menu/sidebar.php', $data);
                $this->load->view('playgo/introducao/index.php');
                $this->load->view('template/footer.php');
                }else{
                    redirect("https://imugi.com.br/site/portaldoaluno");
                }
                // session_destroy();
	}
}
