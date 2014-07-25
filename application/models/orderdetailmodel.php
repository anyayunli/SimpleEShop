<?
class Orderdetailmodel extends CI_Model{

public function insert($data){
$this->db->insert("OrderDetail", $data);

}

public function get_order_by_orderid($oid){
	$this->db->where("OrderID", $oid);
	$query=$this->db->get("OrderDetail");
	$data=$query->result_array();
	if($query->num_rows()>0)
	return $data;
        else
        return false;

}

}




?>
