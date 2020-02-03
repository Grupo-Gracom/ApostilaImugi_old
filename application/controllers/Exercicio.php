<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicio extends CI_Controller {
    public function exercicioAction(){
        $this->load->model('atividade_model');
        $urlFormulario = $_POST["urlFormulario"]; 
        $usuario_id = $_POST["usuario_id"];
        $atividade_id = $_POST["atividade_id"];
        $unidade_id = $_POST["unidade_id"];
        $respostas_respostas = $_POST["respostas_respostas"];                
        $resposta_data = $_POST["resposta_data"];
        $resposta_hora = $_POST["resposta_hora"];
        $resposta_id = $_POST["resposta_id"];
        $query = array(
            'usuario_id' => "$usuario_id",
            'unidade_id' => "$unidade_id",
            'atividade_id'=> "$atividade_id",
            'resposta_respostas'=> "$respostas_respostas",
            'resposta_data'=> "$resposta_data",
            'resposta_hora'=> "$resposta_hora"
                                
            );

        if($this->atividade_model->verificaExistencia($resposta_id) == true){
            $this->atividade_model->update($resposta_id, $query);
            // echo $controlerFornecedor;
            // redirect($urlFormulario); 
            echo "fez update";
            // echo $resposta_hora;
        }else{
            $this->atividade_model->inserir($query);
            // redirect($urlFormulario);
            echo "fez insert";
            // echo $resposta_hora;
        }
            
            // var_dump($query);           
        // }
        // echo $respostas;
        // $this->load->view("playgo/unidade$unidade/grammar/index.php");
    }
}