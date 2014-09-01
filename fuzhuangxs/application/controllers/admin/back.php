<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Back extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			$this->load->model("admin/admin_model");
			date_default_timezone_set('Asia/Shanghai');//设置时区
		}
// 管理员登录*******************************************		 
        function admin_login() {
			$this->load->view("admin/login.php");
		}
		function index()
		{
			$this->load->view("admin/index.php");
		}
		public function do_post() {
			$admin = array(
				'admin_name' => $this->input->post('admin_name'),
				'admin_pwd' => $this->input->post('admin_pwd')
			);
			
			$result = $this->admin_model->get_admin($admin);
			
			if($result) {
				$this -> session -> set_userdata('login_admin', $result);
				redirect("admin/back/get_user");
				
			}
			else {
				$this->load->view("admin/login");
			}		
		}
//管理员管理********************************************************
		public function get_admin()
		{
			$resule = $this->admin_model->get_all_admin();
			$data = array('admin' => $resule);
			$this->load->view("admin/admin_info",$data);			
		}
		public function add_admin_view() {
			$this->load->view("admin/add_admin");
		}
		
		public function add_admin() {
			$admin = array(
				'admin_name' => $this->input->post('admin_name'),
				'admin_pwd' => $this->input->post('admin_pwd'),
				'permission' => $this->input->post('permission')
			);
			$result = $this->admin_model->insert_admin($admin);
			if($result) {
				redirect("admin/back/get_admin");
			}
			else {
				echo "添加管理员失败";
			}
		}
		public function edit_admin_view($id) {
			$admin = array('id' => $id);
			$result = $this->admin_model->get_by_admin_id($admin);
			$data = array('admin' => $result);
			$this->load->view("admin/edit_admin",$data);
		}
		public function edit_admin() {
			$id = $this->input->post('id');
			$admin = array(	
				'admin_name' => $this->input->post('admin_name'),
				'admin_pwd' => $this->input->post('admin_pwd'),
				'permission' => $this->input->post('permission')
			);
			$result = $this->admin_model->update_admin($id,$admin);
			if($result) {
				redirect("admin/back/get_admin");
			}
			else {
				echo "修改用户失败";
			}
		}
		public function remove_admin() {
			$ids = $this ->input ->get('id');
			if($ids) {
				$result = $this->admin_model->delete_admin($ids);
				if($result) {
					echo "success";
					// redirect("blog/blogs");
				}
				else {
					echo "fail";
				}
			}
		}
		public function delete_admin($id) {
			$ids = $id;
			if($ids) {
				$result = $this->admin_model->delete_admin($ids);
				$this->get_admin();
			}
		}
		public function get_search_admin() {
			$submit = $this->input->post('submit');
			$search = $this->input->post('search');
			if(!empty($submit)) {
				$keys = "admin_name like '%".$search."%'";
			}
			else {
				$keys = 1;
			}
			$result = $this->admin_model->get_search_admin($keys);
			$data = array('admin' => $result);
			$this->load->view("admin/admin_info",$data);	
		}
		
//用户管理*********************************************************		
		public function get_user() {		
			$resule = $this->admin_model->get_all_user();
			$data = array('users' => $resule);
			$this->load->view("admin/admin_user",$data);			
		}
		
		public function add_user_view() {
			$this->load->view("admin/add_user");
		}
		
		public function add_user() {
			$user = array(
				'user_name' => $this->input->post('user_name'),
				'passwd' => $this->input->post('user_pwd'),
				'tel' => $this->input->post('user_tel'),
				'email' => $this->input->post('user_email'),
				'address' => $this->input->post('user_address')
			);
			$result = $this->admin_model->insert_user($user);
			if($result) {
				redirect("admin/back/get_user");
			}
			else {
				echo "添加用户失败";
			}
		}
		
		public function edit_user_view($user_id) {
			$user = array('user_id' => $user_id);
			$result = $this->admin_model->get_by_user_id($user);
			$data = array('user' => $result);
			$this->load->view("admin/edit_user",$data);
		}
		
		public function edit_user() {
			$user_id = $this->input->post('user_id');
			$user = array(	
				'user_name' => $this->input->post('user_name'),
				'passwd' => $this->input->post('user_pwd'),
				'tel' => $this->input->post('user_tel'),
				'email' => $this->input->post('user_email'),
				'address' => $this->input->post('user_address')
			);
			$result = $this->admin_model->update_user($user_id,$user);
			if($result) {
				redirect("admin/back/get_user");
			}
			else {
				echo "修改用户失败";
			}
		}
		
		
		public function remove_user() {
			$user_ids = $this ->input ->get('id');
			if($user_ids) {
				$result = $this->admin_model->delete_user($user_ids);
				if($result) {
					echo "success";
					// redirect("blog/blogs");
				}
				else {
					echo "fail";
				}
			}
		}
		public function delete_user($user_id) {
			$user_ids = $user_id;
			if($user_ids) {
				$result = $this->admin_model->delete_user($user_ids);
				$this->get_user();
			}
		}
		
		public function get_search_user() {
			$submit = $this->input->post('submit');
			$search = $this->input->post('search');
			if(!empty($submit)) {
				$keys = "user_name like '%".$search."%'";
			}
			else {
				$keys = 1;
			}
			$result = $this->admin_model->get_search_user($keys);
			$data = array('users' => $result);
			$this->load->view("admin/admin_user",$data);	
		}

//商品管理**************************************************
		public function get_product() {		
			$resule = $this->admin_model->get_all_product();
			$data = array('products' => $resule);
			$this->load->view("admin/admin_product",$data);			
		}
		
		public function add_product_view() {
			
			$this->load->view("admin/add_product");
		}
		
		public function add_product() {
			$config['upload_path'] = "./assets/images";
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);
			$config['max_size'] = '10240';
			$config['width'] = 230;
			$config['height'] = 250;
	
			$this -> load -> library('upload', $config);
	
			$field_name = "product_picture";
			$this -> upload -> do_upload($field_name);
	
			$upload_data = $this -> upload -> data();
			$product = array(
				'p_name' => $this->input->post('product_name'),
				'p_jiage' => $this->input->post('product_price'),
				'p_sex'=>$this->input->post('product_type'),
				'p_class' => $this->input->post('product_class'),
				'p_num' => $this->input->post('product_stock'),
				'url' => 'assets/images/'.$upload_data['file_name'],
				'p_info' => $this->input->post('product_content'),
				'p_date' => date("Y-m-d H:i:s")
			);
			// $product_name = $this->input->post('product_name');
			// $product_type = $this->input->post('product_type');
			// echo $product_name;
			// echo $product_type;
			// die;
			$result = $this->admin_model->insert_product($product);
			if($result) {
				redirect("admin/back/get_product");
			}
			else {
				echo "添加商品失败";
			}
		}
		
		public function edit_product_view($p_id) {
			$product = array('p_id' => $p_id);
			$result = $this->admin_model->get_by_product_id($product);
			$data = array('product' => $result);
			$this->load->view("admin/edit_product",$data);
		}
		
		public function edit_product() {
			$product_id = $this->input->post('product_id');
			$product = array(	
				'p_name' => $this->input->post('product_name'),
				'p_jiage' => $this->input->post('product_price'),
				'p_class' => $this->input->post('product_type'),
				'p_num' => $this->input->post('product_stock'),
				'url' => $this->input->post('product_picture'),
				'p_info' => $this->input->post('product_content'),
				'p_date' => date("Y-m-d H:i:s")
			);
			//print_r($product_id);die;
			$result = $this->admin_model->update_product($product_id,$product);
			if($result) {
				redirect("admin/back/get_product");
			}
			else {
				echo "修改商品失败";
			}
		}
		
		public function remove_product() {
			$product_ids = $this ->input ->get('p_id');
			if($product_ids) {
				$result = $this->admin_model->delete_product($product_ids);
				if($result) {
					echo "success";
					// redirect("blog/blogs");
				}
				else {
					echo "fail";
				}
			}
		}
		public function delete_product($p_id) {
			$product_ids = $p_id;
			if($product_ids) {
				$result = $this->admin_model->delete_product($product_ids);
				$this->get_product();
			}
		}
		
		public function get_search_product() {
			$submit = $this->input->post('submit');
			$search = $this->input->post('search');
			if(!empty($submit)) {
				$keys = "p_name like '%".$search."%'";
			}
			else {
				$keys = 1;
			}
			$result = $this->admin_model->get_search_product($keys);
			$data = array('products' => $result);
			$this->load->view("admin/admin_product",$data);	
		}

//订单***************************************************************************
		public function get_order() {		
			$resule = $this->admin_model->get_all_order();
			$data = array('orders' => $resule);
			$this->load->view("admin/admin_order",$data);			
		}
		public function get_total()
		{
			$resule = $this->admin_model->get_all_order();
			$data = array('orders' => $resule);
			$this->load->view("admin/form_total",$data);	
		}

		public function remove_order_form() {
			$order_ids = $this ->input ->get('id');
			// echo $order_ids;
			if($order_ids) {
				$result = $this->admin_model->delete_order_form($order_ids);
				if($result) {
					echo "success";
					// redirect("blog/blogs");
				}
				else {
					echo "fail";
				}
			}
		}
		public function delete_order_form($id) {
			$order_ids = $id;
			// echo $order_ids;
			if($order_ids) {
				$result = $this->admin_model->delete_order_form($order_ids);
				$this->get_order();
			}
		}
		
		public function get_search_order() {
			$submit = $this->input->post('submit');
			$search = $this->input->post('search');
			if(!empty($submit)) {
				$keys = "id like '%".$search."%'";
			}
			else {
				$keys = 1;
			}
			$result = $this->admin_model->get_search_order($keys);
			$data = array('orders' => $result);
			$this->load->view("admin/admin_order",$data);	
		}
		
		// public function update_order_dispose() {
			// $order_id = $this->input->get('order_id');
			// $order = array(
				// 'whether_dispose' => $this->input->get('whether_dispose'),
				// 'dispose' => date('Y-m-d H:i:s')
			// );
			// $result = $this->admin_model->update_order($order_id,$order);
			// if($result){
				// echo "success";
			// }
		// }
// 		
		public function update_order_shipments() {
			$id = $this->input->get('id');
			$order = array(
				'whether_shipments' => $this->input->get('whether_shipments'),
				'shipment' => date('Y-m-d H:i:s')
			);
			$result = $this->admin_model->update_order($id,$order);
			if($result){
				echo "success";
			}
		}
		public function order_detail($id){
			// $data = array('order_id',$order_id);
			$result = $this->admin_model->get_order_by_order_id($id);
			// print_r($result1);die;
			$order = array(
				'order' => $result
			);
			$this->load->view("admin/order_detail",$order);
		}
	
		
	}
