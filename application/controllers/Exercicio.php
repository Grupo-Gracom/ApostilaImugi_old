<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicio extends CI_Controller {
    public function exercicio(){
        $this->load->model('atividade_model');
        
        if (isset($_POST['submit'])){
            $resposta_a = $this->imput->post["resposta_a"];
            $resposta_b = $this->imput->post["resposta_b"];
            $resposta_c = $this->imput->post["resposta_c"];
            $resposta_d = $this->imput->post["resposta_d"];
            $resposta_e = $this->imput->post["resposta_e"];
            $resposta_f = $this->imput->post["resposta_f"];

            $data = array('resposta_a'=>$resposta_a,
                        'resposta_b'=>$resposta_b,
                        'resposta_c'=>$resposta_c,
                        'resposta_d'=>$resposta_d,
                        'resposta_e'=>$resposta_e,
                        'resposta_f'=>$resposta_f);
                        /* $this->atividade_model->inserir($data); */
            var_dump($data);
        }
    }
}