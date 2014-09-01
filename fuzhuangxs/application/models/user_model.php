<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	public function login($username,$password)
	{
		$data=array(
			"user_name"=>$username,
			"passwd"=>$password
		);
		$query=$this -> db -> get_where("t_user", $data);
		return $query->row();
	}
	function insert($table,$data){
			$this->db->insert($table,$data);
			return $this ->db -> insert_id();
	}
	function buy_product($table,$data){
			$this->db->insert($table,$data);
			return $this ->db -> insert_id();
	}
	function do_comment($table,$data)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	public function do_collection($table,$data){
		$this->db->insert($table,$data);
		return $this->db->affected_rows();
	}
	public function get_by_account($account){
		$query = $this -> db -> get_where("t_user", array("email" => $account));
		return $query -> row();
	}
	public function get_all_product(){
		
		return $this -> db -> get('product') -> result();
	}
	public function get_all_product_w(){
		
		return $this -> db -> get_where('product',array('p_sex'=>'女装')) -> result();
	}
	public function get_all_product_m(){
		
		return $this -> db -> get_where('product',array('p_sex'=>'男装')) -> result();
	}
	public function get_all_product_c(){
		
		return $this -> db -> get_where('product',array('p_sex'=>'童装')) -> result();
	}
	public function get_all_product_f(){
		
		return $this -> db -> get_where('product',array('p_class'=>'是')) -> result();
	}
	public function get_all_cart()
	{
		return $this -> db -> get('cart') -> result();
	}
	public function get_all_comments($p_id)
	{
		$data=array(
		'p_id'=>$p_id
		);
		$this->db->order_by('c_time','desc');
		return $this->db->get_where('p_comment',$data)->result();
	}
	public function get_one_product($p_id){
		$data=array(
		'p_id'=>$p_id
		);
		return $this->db->get_where('product',$data)->result();
	}
	public function get_like($p_class)
	{
		return $this->db->get_where('product',array('p_class'=>$p_class))->result();
	}
	
	public function get_by_id($p_id){
		
		return $this -> db -> get_where('product',array('p_id' => $p_id)) -> row();
	}
	public function get_user_form($user_name)
	{
		return $this->db->get_where('p_form',array('p_user'=>$user_name))->result();
	}
	public function get_user_collection($user_id)
	{
		return $this->db->get_where('t_collection',array('user_id'=>$user_id))->result();	
	}
	public function del_p($p_id){
		
		$this -> db -> delete('cart',array('id' => $p_id));
		
		return $this -> db -> affected_rows();
	}
	public function del_form($id){
		$this->db->delete('p_form',array('id'=>$id));
		return $this->db->affected_rows();
	}
	public function del_collection($id)
	{
		$this->db->delete('t_collection',array('id'=>$id));
		return $this->db->affected_rows();
	}
 }
?>