<?php
    class users extends CI_Controller
    {
        public $unm;
        public function index()
	    {
            /*if(!$this->session->userdata('id'))
                redirect('users/login');*/
		    $this->load->view('home');
	    }
        public function login()
	    {
		    $this->load->view('users/login');
	    }
        public function register()
	    {
		    $this->load->view('users/register');
	    }
        public function halls()
        {
          $this->load->view('users/Halls/halls');  
        }
        public function food()
        {
          $this->load->view('users/Food/food');  
        }
        public function Ank()
        {
          $this->load->view('users/Halls/ANK');  
        }
        public function Pmc()
        {
          $this->load->view('users/Halls/PMC');  
        }
        public function Ckg()
        {
          $this->load->view('users/Halls/CKG');  
        }
        public function Rsim()
        {
          $this->load->view('users/Food/RSIM');  
        }
        public function Rnim()
        {
          $this->load->view('users/Food/RNIM');  
        }
        public function Em()
        {
          $this->load->view('users/Food/EM');  
        }
        public function Sim()
        {
          $this->load->view('users/Food/SIM');  
        }
        public function aler()
        {
            echo '<script> alert("Please Login to continue")</script>';
            $this->load->view('users/login');
        }
        public function homeM()
        {
            $this->load->view('homeM');
        }
        public function deco()
        {
            $this->load->view('users/Decorations/decorations');
        }
        public function logout()
        {
            echo '<script> alert("LogOut Successful")</script>';
            $this->session->unset_userdata('id');
            return redirect('user/login');
        }
        public function suc()
        {
            $conn = mysqli_connect("localhost", "root", "", "mini");
            $this->load->library('form_validation');
            $this->form_validation->set_rules('uname','UserName','required|alpha_numeric|max_length[10]|min_length[6]');
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
                if($_REQUEST['pass'] == $_REQUEST['conpas'])
                {    
                    $sql = "INSERT INTO users VALUES('$uname','$pass','$name','$mob','$addres')";
                    if(mysqli_query($conn, $sql)){
                        echo '<script> alert("Registered Successfully\nLogin Again to Use")</script>';
                        $this->load->view('users/login');
                    } 
                    else{
                        echo "ERROR: Hush! Sorry $sql. " 
                            . mysqli_error($conn);
                    }
                }  
            }
            else
            {
                $this->load->view('users/register');
            }
        }
        public function succhk()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('uname','UserName','required|alpha_numeric');
            $this->form_validation->set_rules('pass','Password','required|alpha_numeric|max_length[15]|min_length[5]');
            if($this->form_validation->run())
            {
                $uname=$this->input->post('uname');
                $pass=$this->input->post('pass');
                $this->load->model('loginmodel');
                $id = $this->loginmodel->isvalus($uname,$pass);
                if($id)
                {
                    $this->load->library('session');
                    $this->session->set_userdata('id',$id);
                    return redirect('http://localhost/mini/users/homeM');
                }
                else   
                    echo "details not ok";
            }
            else
            $this->load->view('users/register');
        }
        
        public function ordank()
        {
            $conn = mysqli_connect("localhost", "root", "", "mini");
            if(isset($_REQUEST['submit']))
            {
                $uname=$_REQUEST['uname'];
                $date=$_REQUEST['date'];
                $pro=$_REQUEST['pro'];
                $pl = 'hal1(ANK)';
                $sql = "INSERT INTO program_user VALUES('$pro','$uname','$date','$pl')";
                if(mysqli_query($conn,$sql))
                {
                    echo '<script> alert("Convention Center is Booked")</script>';
                    $this->load->view('users/Food/food');
                }
                else
                {
                    echo'<script> alert("Please enter all the details correctly or The date selected may be already booked")</script>';
                    $this->load->view('users/Halls/ANK');
                }
                
            }
        }
        public function ordpmc()
        {

            $conn = mysqli_connect("localhost", "root", "", "mini");
            if(isset($_REQUEST['submit']))
            {
                $uname=$_REQUEST['uname'];
                $date=$_REQUEST['date'];
                $pro=$_REQUEST['pro'];
                $pl = 'hal2(PMC)';

                $sql = "INSERT INTO program_user VALUES('$pro','$uname','$date','$pl')";
                if(mysqli_query($conn,$sql))
                {
                    echo '<script> alert("Convention Center is Booked")</script>';
                    $this->load->view('users/Food/food');
                }
                else
                {
                    echo'<script> alert("Please enter all the details correctly or The date selected may be already booked")</script>';
                    $this->load->view('users/Halls/PMC');
                }
                
            }
        }
        public function ordckg()
        {

            $conn = mysqli_connect("localhost", "root", "", "mini");
            if(isset($_REQUEST['submit']))
            {
                $uname=$_REQUEST['uname'];
                $date=$_REQUEST['date'];
                $pro=$_REQUEST['pro'];
                $pl = 'hal3(CKG)';
                $sql = "INSERT INTO program_user VALUES('$pro','$uname','$date','$pl')";
                if(mysqli_query($conn,$sql))
                {
                    echo '<script> alert("Convention Center is Booked")</script>';
                    $this->load->view('users/Food/food');
                }
                else
                {
                    echo'<script> alert("Please enter all the details correctly or The date selected may be already booked")</script>';
                    $this->load->view('users/Halls/CKG');
                }
                
            }
        }
        public function ordfood()
        {
            $conn = mysqli_connect("localhost", "root", "", "mini");
            if(isset($_POST['submit']))
            {
                $uname=$_POST['uname'];
                $foo=$_POST['food'];
                $date=$_POST['date'];
                $sql = "INSERT INTO food_user VALUES('$uname','$foo','$date')";
                if(mysqli_query($conn,$sql))
                {
                    echo '<script> alert("Food Package Added")</script>';
                    $this->load->view('users/Food/food');
                }
                else
                {
                    echo'<script> alert("Please enter all the details correctly or The date selected may be already booked")</script>';
                    $this->load->view('users/Food/food');
                }
                
            }
        }    
    }



?>