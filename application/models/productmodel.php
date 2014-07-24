<?

class Productmodel extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get_product(){
		$query=$this->db->get("Product");
		$data=array();
		
		return $data=$query->result_array();

	}
	public function get_product_by_id($pid){
		$this->db->where("ProductID", $pid);
		$query=$this->db->get("Product");
		$data=$query->result_array();
		return $data[0];

	}




}
?>
