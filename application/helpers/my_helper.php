<?php
function tampil_id_byemail($email)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('email', $email)->get('user');
    foreach ($result->result() as $c) {
        $stmt = $c->id;
        return $stmt;
    }
}
