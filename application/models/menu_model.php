<?php
    class Menu_model extends CI_Model{
        function menus() {
            $this->db->select("*");
            $this->db->from("menus");
            $q = $this->db->get();
        
            $final = array();
            if ($q->num_rows() > 0) {
                foreach ($q->result() as $row) {
        
                    $this->db->select("*");
                    $this->db->from("itens");
                    $this->db->where("menu_id", $row->id_menu);
                    $q = $this->db->get();
                    if ($q->num_rows() > 0) {
                        $row->children = $q->result();
                    }
                    array_push($final, $row);
                }
            }
            return $final;
        }
    }

   