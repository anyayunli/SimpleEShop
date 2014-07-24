<?

class Customermodel extends CI_Model{


public function __construct(){
		parent::__construct();
	}

public function get_customer_by_id($cid){

	$this->db->where("CustomerID", $cid);
	$query=$this->db->get("Customer");
	$data=$query->result_array();
	return $data[0];

}


}

?>
