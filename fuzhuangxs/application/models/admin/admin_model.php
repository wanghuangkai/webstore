<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Admin_model extends CI_Model{

//管理员****************************************			
		public function get_admin($data) {
			
			$query = $this->db->get_where('admin',$data);
			return $query->row();
		}
		public function get_all_admin()
		{
			return $this->db->get('admin')->result();
		}
		public function get_by_admin_id($data) {
			$query=$this->db->get_where("admin",$data);
			return $query->row();
		}
		public function update_admin($id,$data) {
			//$this->db->where('id',$id);
			$this -> db -> update('admin', $data,array('id'=>$id));
			return TRUE;
		}
		public function insert_admin($data) {
			$this->db->insert('admin',$data);
			return TRUE;
		}
		public function delete_admin($ids) {
			$this->db->query("delete from admin where id in($ids)");
			if($this->db->affected_rows()>0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		public function get_search_admin($keys) {
			$query = $this->db->query("select * from admin where $keys order by admin_name desc limit 10");
			// $this->db->select('*');
			// $this->db->from('news');
			// $this->db->where($keys.order by id);
			return $query->result();
		}
//用户********************************************		
		public function get_all_user() {
			$query = $this->db->get("t_user");
			return $query->result();
		}
		
		public function insert_user($data) {
			$this->db->insert('t_user',$data);
			return TRUE;
		}
		
		public function get_by_user_id($data) {
			$query=$this->db->get_where("t_user",$data);
			return $query->row();
		}
		
		public function update_user($user_id,$data) {
			$this->db->where('user_id',$user_id);
			$this -> db -> update('t_user', $data);
			return TRUE;
		}

		public function delete_user($user_ids) {
			$this->db->query("delete from t_user where user_id in($user_ids)");
			if($this->db->affected_rows()>0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		
		public function get_search_user($keys) {
			$query = $this->db->query("select * from t_user where $keys order by user_id desc limit 10");
			// $this->db->select('*');
			// $this->db->from('news');
			// $this->db->where($keys.order by id);
			return $query->result();
		}
		
//商品****************************************************
		public function get_all_product() {
			$query = $this->db->get("product");
			return $query->result();
		}

		public function insert_product($data) {
			$this->db->insert('product',$data);
			return TRUE;
		}
		
		public function get_by_product_id($data) {
			$query=$this->db->get_where("product",$data);
			return $query->row();
		}
		
		public function update_product($product_id,$data) {
			//$this->db->where('p_id',$prodoct_id);
			$this -> db -> update('product', $data,array('p_id'=>$product_id));
			return TRUE;
		}
		
		public function delete_product($product_ids) {
			$this->db->query("delete from product where p_id in($product_ids)");
			if($this->db->affected_rows()>0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		
		public function get_search_product($keys) {
			$query = $this->db->query("select * from product where $keys order by p_id desc limit 10");
			return $query->result();
		}
		
		
		
		
//订单****************************************************************
		public function get_all_order() {
			$query = $this->db->get("p_form");
			return $query->result();
		}	
		
		public function delete_order_form($order_ids) {
			echo $order_ids;
			$this->db->query("delete from p_form where id in($order_ids)");
			if($this->db->affected_rows()>0) {
				return TRUE;
			}
			else {
				return FALSE;
			}	
		}	
		
		public function get_search_order($keys) {
			$query = $this->db->query("select * from p_form where $keys order by id desc limit 10");
			return $query->result();
		}
		
		public function update_order($order_id,$order) {
			//$this->db->where('id',$order_id);
			$this -> db -> update('p_form', $order,array('id'=>$order_id));
			return TRUE;
		}
		
		public function get_order_by_order_id($id){
			$query = $this->db->query("select * from p_form where p_form.id = $id");
			return $query->row();
		}
		
		public function get_order_detail($order_id){
			$query = $this->db->query("select * from p_form where p_form.id = $id");
			return $query->result();;
		}
		
		
		
				
	}		
			
?>
		