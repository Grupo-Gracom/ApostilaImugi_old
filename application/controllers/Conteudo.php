<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conteudo extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('menu_model');
    }

	public function index()
	{
        $menus = $this->menu_model->menus();
        $data = array('menus' => $menus);
        $this->load->view('template/header.php');
        $this->load->view('template/menu/sidebar.php', $data);
        $this->load->view('playgo/introducao/index.php');
        $this->load->view('template/footer.php');
    }
    
    public function vocabulary(){
        $menus = $this->menu_model->menus();
        $data = array('menus' => $menus);
        $this->load->view('template/header.php');
        $this->load->view('template/menu/sidebar.php', $data);
        $this->load->view('playgo/unidade1/vocabulary/index.php');
        $this->load->view('template/footer.php');
    }

    public function grammar(){
        $menus = $this->menu_model->menus();
        $data = array('menus' => $menus);
        $this->load->view('template/header.php');
        $this->load->view('template/menu/sidebar.php', $data);
        $this->load->view('playgo/unidade1/grammar/index.php');
        $this->load->view('template/footer.php');
    }

    public function listening(){
        $menus = $this->menu_model->menus();
        $data = array('menus' => $menus);
        $this->load->view('template/header.php');
        $this->load->view('template/menu/sidebar.php', $data);
        $this->load->view('playgo/unidade1/listening/index.php');
        $this->load->view('template/footer.php');
    }

    public function understanding(){
        $menus = $this->menu_model->menus();
        $data = array('menus' => $menus);
        $this->load->view('template/header.php');
        $this->load->view('template/menu/sidebar.php', $data);
        $this->load->view('playgo/unidade1/understanding/index.php');
        $this->load->view('template/footer.php');
    }
}
