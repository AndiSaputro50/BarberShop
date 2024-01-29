<?php

class M_model extends CI_Model
{
    public function update($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    function get_data($table)
    {
        return $this->db->get($table);
    }

    function getwhere($table, $data)
    {
        return $this->db->get_where($table, $data);
    }

    public function delete($table, $field, $id)
    {
        $data = $this->db->delete($table, array($field => $id));
        return $data;
    }

    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function get_by_id($tabel, $id_column, $id)
    {
        $data = $this->db->where($id_column, $id)->get($tabel);
        return $data;
    }

    public function get_status_perjanjian()
    {
        return $this->db->where_in('status', ['PROCESS', 'DONE', 'CANCEL'])
            ->get('customer');
    }

    public function get_customer_by_status() {
        $this->db->select('
            c.id,
            c.order_time,
            c.address,
            c.phone_number,
            c.date,
            c.status
        ');
        $this->db->from('customer c');
        $this->db->where_in('c.status', ['PROCESS']);
        $this->db->group_by('c.id');
    
        $query = $this->db->get();
        return $query->result();
    }

    public function set_status($id, $status)
{
    $data = array('status' => $status);
    $this->db->where('id', $id);
    return $this->db->update('customer', $data);
}

    public function get_user_id_by_username($username)
    {
        // Fungsi ini mengembalikan ID pengguna berdasarkan username
        $this->db->select('id');
        $this->db->from('user');
        $this->db->where('username', $username);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->id;
        }

        return null;
    }

    public function tambah_data_history_approve($data)
    {
        $this->db->insert('history_approve', $data);
        return $this->db->insert_id('history_approve');
    }

    public function ubah_data($tabel, $data, $where)
    {
        $data = $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }
}
