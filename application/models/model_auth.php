<?php
class Model_auth extends CI_Model{
    public function cek_login($username, $password)
    {
        $result = $this->db->where('username', $username)
                           ->get('user');

        if ($result->num_rows() == 1) {
            $user = $result->row();
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }
}
