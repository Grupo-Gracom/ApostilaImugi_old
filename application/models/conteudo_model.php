<?php
    class Conteudo_model extends CI_Model{
        function conteudo($id){
            $query = $this->db->get_where('conteudo', array('pagina_id' => $id));
            $conteudos = $query->result();
            return $conteudos;
        }
    }

   