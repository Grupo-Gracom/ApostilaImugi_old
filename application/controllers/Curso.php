<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {
	public function index()
	{
                $this->load->model('menu_model');
                $menus = $this->menu_model->menus();
                $data = array('menus' => $menus);
                $this->load->view('template/header.php');
                $this->load->view('template/menu/sidebar.php', $data);
                $this->load->view('playgo/introducao/index.php');
                $this->load->view('template/footer.php');
    }
    
    public function pagina(int $id){
        $this->load->model('menu_model');
        $this->load->model('conteudo_model');
                $menus = $this->menu_model->menus();
                $conteudos = $this->conteudo_model->conteudo($id);
                $data = array('menus' => $menus);
                $data1 = array('conteudos' => $conteudos);
                $this->load->view('template/header.php');
                $this->load->view('template/menu/sidebar.php', $data);
                $this->load->view('playgo/pagina/index.php', $data1);
                $this->load->view('template/footer.php');
    }
}
