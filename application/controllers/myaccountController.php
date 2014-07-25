<?

class MyaccountController extends CI_Controller{

	public function index(){
		$userid=$this->session->userdata('userid');
		$this->load->model("customermodel","model");
		$data['row']=$this->model->get_customer_by_id($userid);
		$this->load->view("myaccountView", $data);

		if($this->input->post("updateaccount")){
			$firstname=$this->input->post("firstname");
			$lastname=$this->input->post("lastname");
			$password=$this->input->post("password");
			$email=$this->input->post("email");
			$country=$this->input->post("address5");
			$gender=$this->input->post("gender");
			if(!is_numeric($this->input->post("address4"))){
				echo "<script>alert('Enter Valid Postal Number');</script>";
				return;
			}
			$addr=$this->input->post("address1").','.$this->input->post("address2").','.$this->input->post("address3").','.$this->input->post("address4").','.$country;
			if(is_numeric($this->input->post("phone1"))&& is_numeric($this->input->post("phone2"))&&is_numeric($this->input->post("phone3")))
			$phone=$this->input->post("phone1").$this->input->post("phone2").$this->input->post("phone3");
			else{
				echo "<script>alert('Enter Valid Phone Number');</script>";
				return;
			}
			$data=array("FirstName"=>$firstname,"LastName"=>$lastname,
"Address"=>$addr, "Gender"=>$gender, "PhoneNo"=>$phone, "Email"=>$email, "Password"=>$password,
				   );

			$this->model->update_by_id($userid, $data);

			redirect($this->uri->uri_string());
			//print_r( $data);
			//echo $userid;
		}


}



}


?>
