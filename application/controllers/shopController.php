<?
class ShopController extends CI_Controller{

public function index(){

$this->load->model("productmodel", "model");

$data['cate_sale1']=$this->model->get_sales_product_by_cate(1);
$data['cate_normal1']=$this->model->get_normal_product_by_cate(1);

$data['cate_sale2']=$this->model->get_sales_product_by_cate(2);
$data['cate_normal2']=$this->model->get_normal_product_by_cate(2);

$data['cate_sale3']=$this->model->get_sales_product_by_cate(3);
$data['cate_normal3']=$this->model->get_normal_product_by_cate(3);

$data['cate_sale4']=$this->model->get_sales_product_by_cate(4);
$data['cate_normal4']=$this->model->get_normal_product_by_cate(4);
$this->load->view("shopView", $data);

//print_r($data);
}



}


?>
