<?
class Ordermodel extends CI_Model{

public function insert($data){
$this->db->insert("Order", $data);

}

public function get_order_by_customerid($cid){
	$this->db->where("CustomerID", $cid);
	$query=$this->db->get("Order");
	$data=$query->result_array();
	if($query->num_rows()>0)
	return $data;
        else
        return false;

}



}


?>
