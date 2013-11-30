<?php
    Class Checkemail extends CI_Model
    {
        function check($email)
        {
            $this->db->select('email');
            $this->db->from('members');
            $this->db->where('email', $email);
            $this->db->limit(1);

            $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                echo "Email Doesn't Exists";
                return false;
            }
        }

        function reset($new, $email)
        {
            $salt1 = "nimda";
            $salt2 = "1@3$";
            $hash = sha1("$salt1$new$salt2");

            $this->db->where('email', $email);
            $this->db->update('members', array('password' => $hash));

            if ($this->db->affected_rows()) {
                return true;
            } else {
                return false;
            }

        }

    }
