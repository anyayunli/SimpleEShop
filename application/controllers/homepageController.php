<?
class HomepageController extends CI_Controller{

public function index(){
$this->load->model("productmodel", "model");

$data['product']=$this->model->get_product();
$this->load->view("homepageView.php", $data);

}


}



?>
