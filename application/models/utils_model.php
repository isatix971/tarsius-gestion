<?php

//birds_model.php (Array of Objects)
class Utils_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    function get_cliente($q) {
        $this->db->select('*');
        $this->db->like('nombre_rzn_social', $q);
        $query = $this->db->get('cliente');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['nombre_rzn_social']));
                $new_row['value'] = htmlentities(stripslashes($row['rut']));
                $row_set[] = $new_row; //build an array
            }
            return json_encode($row_set); //format the array into json data
        }
    }

    function get_contacto($q) {
        $this->db->select('*');
        $this->db->where('rut_cliente', $q);
        $query = $this->db->get('contacto');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['nombre']));
                $new_row['value'] = htmlentities(stripslashes($row['rut_contacto']));
                $row_set[] = $new_row; //build an array
            }
            return json_encode($row_set); //format the array into json data
        }
    }

    function get_despachador() {
        
        $this->db->select('*');
        $this->db->like('perfil', '2');
        $query = $this->db->get('usuario');

        
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['nombre']));
                $new_row['value'] = htmlentities(stripslashes($row['id']));
                $row_set[] = $new_row; //build an array
            }
            return json_encode($row_set); //format the array into json data
        }
    }
    function get_pedido(){
        //escribir.....
    }

    function get_last_pedido() {
        $this->db->select('*');

        $query = $this->db->get('pedido_seq');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $valor = htmlentities(stripslashes($row['last_value']));
            }
            return $valor + 1; //se agrega 1 para ver valor real
        }
    }

}
