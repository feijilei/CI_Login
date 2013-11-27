<?php
    Class User extends CI_Model
    {
        function login($username, $password)
        {
            $salt1="nimda";
            $salt2="1@3$";
            $hash=sha1("$salt1$password$salt2");
            $this->db->select('id, user, password');
            $this->db->from('members');
            $this->db->where('user', $username);
            $this->db->where('password', $hash);
            $this->db->limit(1);


            $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                return false;
            }

        }
    }

?>