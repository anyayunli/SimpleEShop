<?
class ItemController extends CI_Controller{

public function showItem($pid){
//echo "itempage, $pid";
$this->load->helper('url');
$this->load->database();
$this->load->model("productmodel", "model");

$data['product']=$this->model->get_product_by_id($pid);
//print_r($data);
$this->load->view("itempageView", $data);

}




}



?>
