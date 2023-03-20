<?php
    class admin extends CI_Controller{
        /*public function __construct()
        {
            parent::__construct();
            if(!$this->session->userdata('id'))
                return redirect('admin/login');
        }*/
        public function login()
	    {
		    $this->load->view('admin/login');
	    }
        public function succheck()
	    {
		    $this->load->library('form_validation');
            $this->form_validation->set_rules('uname','UserName','required|alpha_numeric');
            $this->form_validation->set_rules('pass','Password','required|alpha_numeric|max_length[15]|min_length[5]');

            if($this->form_validation->run())
            {
                $uname=$this->input->post('uname');
                $pass=$this->input->post('pass');
                $this->load->model('loginmodel');
                $id = $this->loginmodel->isvaladm($uname,$pass);
                if($id)
                {
                    $this->load->library('session');
                    $this->session->set_userdata('id',$id);
                    return redirect('admin/welcome');
                }
                else   {
                    echo '<script> alert("Details not Ok")</script>';
                    $this->load->view('admin/login');
                }
                    
            }
            else
            {
                $this->load->view('admin/login');
            }
	    }
        public function welcome()
        {
            $this->load->view('admin/dashboard');
        }
        public function logout()
        {
            echo '<script> alert("LogOut Successful")</script>';
            $this->session->unset_userdata('id');
            return redirect('admin/login');
        }
        public function delete()
        {
            $user_id = $_GET['user_id'];
            $conn=mysqli_connect('localhost','root','','mini');
            $sql1="Delete from food_user where user_id='".$user_id."'";
            $id=mysqli_query($conn,$sql1);
            if($id)
            {
                echo '<script> alert("Data Deleted Successfully")</script>';
                $this->load->view('admin/dashboard');
            }
            else
            {
                echo '<script> alert("Data not Deleted")</script>';
                $this->load->view('admin/dashboard');  
            }
        }
        public function deleteo()
        {
            $user_id = $_GET['user_id'];
            $conn=mysqli_connect('localhost','root','','mini');
            $sql1="Delete from program_user where user_id='".$user_id."'";
            $id=mysqli_query($conn,$sql1);
            if($id)
            {
                echo '<script> alert("Data Deleted Successfully")</script>';
                $this->load->view('admin/dashboard');
            }
            else
            {
                echo '<script> alert("Data not Deleted")</script>';
                $this->load->view('admin/dashboard');  
            }
        }
    }



?>