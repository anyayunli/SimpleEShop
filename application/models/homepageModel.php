<?

class HomepageModel extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get_product(){
		$query=$this->db->get("Product");
		
		return $query->result_array();

	}


}
?>
