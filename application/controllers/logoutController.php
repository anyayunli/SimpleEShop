<?
class LogoutController extends CI_Controller{

public function index(){

//$this->session->unset_userdata('userid');
//$this->session->unset_userdata('starttime');
$this->session->sess_destroy();
$this->load->model("productmodel", "model");

$data['product']=$this->model->get_product();
$this->load->view("homepageView.php", $data);

}
}


?>
