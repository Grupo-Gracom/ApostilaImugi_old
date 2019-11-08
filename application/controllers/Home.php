<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
}
