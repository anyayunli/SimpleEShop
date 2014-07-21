<?
class HomepageController extends CI_Controller{

public function index(){
$this->load->database();
$this->load->helper('url');
$this->load->model("homepagemodel", "model");


//$data=array(array());
 $i=0;
foreach($this->model->get_product() as $row){
	$data['product'][$i][]=$row;
$i++;
}

$this->load->view("homepage.php", $data);

}


}



?>
