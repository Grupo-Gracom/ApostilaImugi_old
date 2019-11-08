<?php
    class Atividade_model extends CI_Model{
        
        function inserir($data){
            $this->db->insert('atividade',$data);
            return true;
        }
    }

   