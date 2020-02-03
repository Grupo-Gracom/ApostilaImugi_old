<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conteudo extends CI_Controller {

    public function __construct(){
        parent::__construct();
        session_start();
        if( ! isset ($_SESSION["matricula"])){
            $this->matricula = 0 ;
        }else{
            $this->matricula = $_SESSION["matricula"];
        }            
        $this->load->model('atividade_model');  
        $this->id = $this->uri->segment(3);      
        $respostas = $this->atividade_model->consultar($this->matricula);
        // if(empty($respostas)) validada se string está vazia        
        $quantUnidades = 8;        
        $this->data = array(            
            'quantUnidades' => $quantUnidades,
            'respostas' => $respostas,
            'id' => $this->id,
            'user' => $this->matricula
        );      
    }

    // public $quantUnidades = 32;
    // public $menus = $this->menu_model->menus();
    // public $data = array('menus' => $menus, 'quantUnidades' => $quantUnidades);

	public function index()
	{   
        if($this->matricula > 0){
        $this->load->view('template/header.php');
        $this->load->view('template/menu/sidebar.php', $this->data);
        $this->load->view('playgo/introducao/index.php');
        $this->load->view('template/footer.php');
        }else{
            redirect($urlFormulario);
        }
    }
    
    public function vocabulary()
    {                   
        if($this->matricula > 0){ 
            $this->load->view('template/header.php');
            $this->load->view('template/menu/sidebar.php', $this->data);
            $this->load->view("playgo/unidade$this->id/vocabulary/index.php");
            $this->load->view('template/footer.php');
        }else{
            redirect($urlFormulario);        
        }
    }

    public function grammar()
    {    
        if($this->matricula > 0){
            $this->load->view('template/header.php');
            $this->load->view('template/menu/sidebar.php', $this->data);
            $this->load->view("playgo/unidade$this->id/grammar/index.php");
            $this->load->view('template/footer.php');
        }else{
            redirect($urlFormulario);
        }
    }

    public function listening()
    {    
        if($this->matricula > 0){   
            $this->load->view('template/header.php');
            $this->load->view('template/menu/sidebar.php', $this->data);
            $this->load->view("playgo/unidade$this->id/listening/index.php");
            $this->load->view('template/footer.php');
        }else{
            redirect($urlFormulario);
        }
    }

    public function understanding()
    {
        if($this->matricula > 0){
            $this->load->view('template/header.php');
            $this->load->view('template/menu/sidebar.php', $this->data);
            $this->load->view("playgo/unidade$this->id/understanding/index.php");
            $this->load->view('template/footer.php');
        }else{
            redirect($urlFormulario);
        }
    }
}
