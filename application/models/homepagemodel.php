<?

class HomepageModel extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get_product(){
		$query=$this->db->get("Product");
		$data=array();
		foreach($query->result() as $row){
			$data['ProductID']=$row->ProductID;
			$data['ProductName']=$row->ProductName;

		}

		return $data;

	}


}
?>
