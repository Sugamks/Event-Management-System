<?php
class loginmodel extends CI_Model
{
    public function isvaladm($username,$password)
    {
        $q=$this->db->where(['admin_id'=>$username,'pass'=>$password])
                    ->get('admin');
            if($q->num_rows())
            {
                return $q->row()->admin_id;
            }  
            else    
                return false;
    }
    public function isvalus($usrname,$passwrd)
    {
        $a=$this->db->where(['user_id'=>$usrname,'pass'=>$passwrd])
                    ->get('users');
            if($a->num_rows())
                return $a->row()->user_id;
            else   
                return false;
    }
    public function isvalwor($usrname,$passwrd)
    {
        $a=$this->db->where(['worker_id'=>$usrname,'pass'=>$passwrd])
                    ->get('workers');
            if($a->num_rows())
                return $a->row()->worker_id;
            else   
                return false;
    }
}
?>