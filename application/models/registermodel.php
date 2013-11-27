<?php
    Class Registermodel extends CI_Model
    {
        function register($username, $password, $sex, $email, $full_name, $birthday)
        {
            $salt1 = "nimda";
            $salt2 = "1@3$";
            $hash = sha1("$salt1$password$salt2");

            $this->db->set('user', $username);
            $this->db->set('password', $hash);
            $this->db->set('sex', $sex);
            $this->db->set('email', $email);
            $this->db->set('full_name', $full_name);
            $this->db->set('birthday', $birthday);
            $this->db->insert('members');


            if ($this->db->affected_rows()) {
                return true;
            } else {
                return false;
            }

        }
    }

?>