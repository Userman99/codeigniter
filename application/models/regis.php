<?php
    Class Regis extends CI_Model
    {
        function login (){
            return $this->db->get('sekolah');;
        }
    }
?>