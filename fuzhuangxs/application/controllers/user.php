<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		date_default_timezone_set('Asia/Shanghai');//设置时区
	}
	public function check_name(){
		$account = $this -> input -> get("account");
		$result = $this -> user_model -> get_by_account($account);
		if($result){
			echo "fail";
		}else{
			echo "success";
		}
	}	
	public function check_nickname()
	{
		$nick = $this -> input -> get("nick");
		if(($nick<='z'&&$nick>='a')||($nick<='Z'&&$nick>='A'))
		{
			echo "success";
		}
		else{
			echo "fail";
		}
	}
	public function check_mima()
	{
		$nick = $this -> input -> get("mima");
		if(strlen($nick)<6)
		{
			echo "fail";
		}
		else{
			echo "success";
		}
	}
	public function index(){
		$result = $this->user_model->get_all_product();
		$result1 = $this->user_model->get_all_cart();
		//$result1= $this->user_model->get_like();
		$product=array('product'=>$result,
					   'cart'=>$result1);
		//$product1=array('product'=>$result);
		$this->load->view('index',$product);
	}
	public function reg(){
		$this->load->view("reg");
	}
	public function leisure_listing(){
		$result = $this->user_model->get_all_product_w();
		$result1 = $this->user_model->get_all_cart();
		$product=array('product'=>$result
						,'cart'=>$result1);
		$this->load->view("leisure_listing",$product);
	}
	public function leisure_listing1(){
		$result = $this->user_model->get_all_product_m();
		$result1 = $this->user_model->get_all_cart();
		$product=array('product'=>$result,
						'cart'=>$result1);
		$this->load->view("leisure_listing1",$product);
	}
	public function leisure_listing2(){
		$result = $this->user_model->get_all_product_c();
		$result1 = $this->user_model->get_all_cart();
		$product=array('product'=>$result,
						'cart'=>$result1);
		$this->load->view("leisure_listing2",$product);
	}
	public function leisure_listing3(){
		$result = $this->user_model->get_all_product_f();
		$result1 = $this->user_model->get_all_cart();
		$product=array('product'=>$result,
						'cart'=>$result1);
		$this->load->view("leisure_listing3",$product);
	}
	public function leisure_detail($p_id)
	{
		$result = $this->user_model->get_all_product(); 
		$result1=$this->user_model->get_one_product($p_id);
		$result2 = $this->user_model->get_all_cart();
		$comment=$this->user_model->get_all_comments($p_id);
		$product=array(
         'product'=>$result,
		'product1'=>$result1,
		'cart'=>$result2,
		'comment'=>$comment);
		$this->load->view("leisure_detail",$product);
	}
	public function leisure_cart()
	{
		$result = $this->user_model->get_all_cart();
		$cart=array('cart'=>$result);
		$this->load->view("leisure_cart",$cart);
	}
	
	public function leisure_checkout1()
	{
		$result = $this->user_model->get_all_cart();
		$cart=array('cart'=>$result);
		$this->load->view("leisure_checkout1",$cart);
	}
	public function comment()
	{
		$this->load->view("comment");
	}
	public function buy_product($total,$yunfei)
	{	$total=$total;
		$p_user=$this->input->get("user");
		$nickname=$this->input->get("name");
		$email=$this->input->get("tel");
		$address=$this->input->get("address");
		$beizhu=$this->input->get("beizhu");
		$p_time=date("Y-m-d H:i:s");
		$data=array(
		"nickname"=>$nickname,
		"email"=>$email,
		"address"=>$address,
		"remark"=>$beizhu,
		"p_time"=>$p_time,
		"p_user"=>$p_user,
		"total"=>$total
		);
		$this->user_model->buy_product('p_form',$data);
	}
	
	public function form($user_name)   //用户订单管理
	{
		$result=$this->user_model->get_user_form($user_name);
		$result1 = $this->user_model->get_all_cart();
		$form=array('form'=>$result,
					'cart'=>$result1);
		$this->load->view('form',$form);
	}
	public function collections($user_id)
	{
		$result=$this->user_model->get_user_collection($user_id);
		$result1 = $this->user_model->get_all_cart();
		$collection=array('collection'=>$result,
					'cart'=>$result1);
		$this->load->view('collections',$collection);
	}
	public function do_comment()  //评论
	{
		$comment=$this->input->post('beizhu');
		$user_name=$this->input->post('user_name');
		$user_id=$this->input->post('user_id');
		$p_id=$this->input->post('p_id');
		$c_time=date("Y-m-d H:i:s");
		$data=array(
		'user_id'=>$user_id,
		'user_name'=>$user_name,
		'comment'=>$comment,
		'p_id'=>$p_id,
		'c_time'=>$c_time
		);
		$this->user_model->do_comment('p_comment',$data);
		redirect('user/leisure_detail/'.$p_id);
	}
	public function do_login(){
		$username=$this->input->post("username");
		$password=$this->input->post("pwd");
		$result=$this->user_model->login($username,$password);
		if($result)
		{
			$this -> session -> set_userdata('login_user', $result);
			redirect('user/index');
		}else{
			redirect('user/index');
		}
	}
	public function do_reg()
	{
		$email=$this->input->post("email");
		$name=$this->input->post("nickname");
		$pwd=$this->input->post("password");
		$tel=$this->input->post("tel");
		$address=$this->input->post("address");
		$user=array(
		"email"=>$email,
		"user_name"=>$name,
		"passwd"=>$pwd,
		"tel"=>$tel,
		"address"=>$address
		);
		//$this->load->model('user_model');
		$this->user_model->insert('t_user',$user);
		redirect('user/index');
	}
	public function do_collection()
	{
		$user_id=$this->input->post('user_id');
		$user_name=$this->input->post('user_name');
		$p_id=$this->input->post('p_id');
		$p_name=$this->input->post('p_name');
		$p_info=$this->input->post('p_info');
		$url=$this->input->post('url');
		$c_time=date("Y-m-d H:i:s");
		$data=array(
		"user_id"=>$user_id,
		"user_name"=>$user_name,
		"p_id"=>$p_id,
		"p_name"=>$p_name,
		"p_info"=>$p_info,
		"url"=>$url,
		"c_time"=>$c_time
		);
		$result=$this->user_model->do_collection('t_collection',$data);
		if($result){
			redirect('user/index');
			alert("收藏成功！");
		}
	}
	public function product(){
		$result = $this->user_model->get_all_product();
		$product=array('product'=>$result);
		$this->load->view('index',$product);
		
	}
	public function get_like()
	{
		
	}
	public function add_cart()
	{
		$p_id = $this -> input -> get('p_id');
		$result = $this -> user_model -> get_by_id($p_id);
		$result1 = $this -> user_model -> insert('cart',$result);
		//print_r($result);die;
		if($result1){
			echo "success";
		}else{
			echo "fail";
		}
	}
	
	public function Exit0()
	{
		$this -> session -> set_userdata('login_user', "");
		redirect('user/index');
	}
	
	public function del($id){
		
		$result = $this -> user_model -> del_p($id);
		if($result){
			redirect('user/leisure_cart');
		}
	}
	public function del_form($id){
		$result=$this->user_model->del_form($id);
		if($result){
			redirect('user/index');
		}
	}
	public function del_collection($id)
	{
		$result=$this->user_model->del_collection($id);
		redirect('user/index');
	}
}
?>