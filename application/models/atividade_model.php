<?php
    
    class Atividade_model extends CI_Model
    {
        function __construct() 
        {
            parent::__construct();
        }

        function inserir($query){
        // Inserting in Table(students) of Database(college)
        $this->db->insert('respostas', $query);
        }

        function consultar($user){     

            $this->db->select("*");
            $this->db->from("respostas");
            $this->db->where("usuario_id", $user);
            $query = $this->db->get();
            
            // foreach  ( $query -> result()  as  $row ) 
            //     { 
            //            $query = $row->resposta_respostas; 
                        
            //     }
            // if ($query->num_rows() > 0){}
                return $query-> result();
            
        }

        function verificaExistencia($resposta_id){
            $this->db->select("*");
            $this->db->from("respostas");
            $this->db->where("resposta_id", $resposta_id);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return true;
            }else{
                return false;
            }
            
        }

        function update($resposta_id, $query){
            // $this->db->where("usuario_id", $user);
            $this->db->where("resposta_id", $resposta_id);
            $this->db->update('respostas', $query);
            }
    }
    
?>

