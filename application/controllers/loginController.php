<?
class LoginController extends CI_Controller{

public function index(){
  $this->load->view("loginView");
  }

public function login(){
	$email=$this->input->post('email');
	$password=$this->input->post('password');
	if(!$email || !$password){
		echo'<script> alert ("Enter Valid Login Information");</script>';
		$this->load->view("loginView");

	}
	else{	
		$this->load->model("customermodel", "model");
		$user=$this->model->get_customer_by_login($password, $email);

		if($user){
			$data=array("userid"=>$user['CustomerID']);
			$this->session->set_userdata($data);
			redirect(base_url().'index.php/cartController');

		}
		else{
			echo'<script> alert ("No Record found, plese sign up");</script>';
			$this->load->view("loginView");

		}
	}  
}

public function signup(){
	$this->load->view("signupView");
	$email=$this->input->post('email');
	$password=$this->input->post('password');
	$this->load->model("customermodel", "model");
        if(!$email || !$password){
		return;

	}
	$user=$this->model->get_customer_by_login($password, $email);
	if($user){
		echo'<script> alert ("Already Registered, plese Log in");</script>';

	}else{
         $this->model->insert_by_signup($password, $email);
	 $user=$this->model->get_customer_by_login($password, $email);
         $data=array("userid"=>$user['CustomerID']);
	 $this->session->set_userdata($data);
         redirect(base_url().'index.php/myaccountController');
       	

	}


}

}
?>
