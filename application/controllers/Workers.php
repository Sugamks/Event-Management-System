<?php
class workers extends CI_Controller
{
    public function login()
    {
        $this->load->view('worker/login');
    }
    public function reg()
    {
        $this->load->view('worker/register');
    }
    public function dashboard()
    {
        $this->load->view('worker/dashboard');
    }
    public function suc()
    {
        $conn = mysqli_connect("localhost", "root", "", "mini");
        $this->load->library('form_validation');
        $this->form_validation->set_rules('uname','User Name','required|alpha_numeric|max_length[10]|min_length[6]');
        $this->form_validation->set_rules('pass','Password','required|alpha_numeric|max_length[15]|min_length[5]');
        $this->form_validation->set_rules('nam','Name','required|alpha_numeric_spaces');
        $this->form_validation->set_rules('mob','Phone Number','required|numeric');
        $this->form_validation->set_rules('add','Address','required|alpha_numeric');

        if($this->form_validation->run())
        {
            $uname =  $_REQUEST['uname'];
            $pass = $_REQUEST['pass'];
            $conpas = $_REQUEST['conpas'];
            $name =  $_REQUEST['nam'];
            $mob = $_REQUEST['mob'];
            $addres = $_REQUEST['add'];
            if($_REQUEST['pass'] === $_REQUEST['conpas']){
                
                $sql = "INSERT INTO workers VALUE('$uname','$name','$pass','$mob','$addres')";
                if(mysqli_query($conn, $sql)){
                    echo '<script> alert("Registered Successfully\nLogin Again to Use")</script>';
                    $this->load->view('worker/login');
                } 
                else{
                    echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn);
                }
            }    
        }
        else
        {
            $this->load->view('worker/login');
        }
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
                $id = $this->loginmodel->isvalwor($uname,$pass);
                if($id)
                {
                    $this->load->library('session');
                    $this->session->set_userdata('id',$id);
                    return redirect('workers/dashboard');
                }
                else  { 
                    echo '<script> alert("Incorrect Details\n Please Try Again ")</script>';
                    $this->load->view('worker/login');
                }
            }
            else
                $this->load->view('worker/login');
        }
}


?>