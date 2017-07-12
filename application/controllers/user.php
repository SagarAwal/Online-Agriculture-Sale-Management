<?php
class User extends CI_Controller{
	public function addUser(){
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$username=$this->input->post('uname');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$contact=$this->input->post('contact');
		$email=$this->input->post('email');
		$this->load->model('usermodel');
		$data['modelmsg']=$this->usermodel->insertUser($fname,$lname,$username,$password,$address,$contact,$email);
		echo "<script>alert('Registration Successful');</script>";
		$this->load->view('login');
		
	}
	public function login(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','username',
					'required|trim|min_length[1]|max_length[20]');
					
			$this->form_validation->set_rules('password','password',
					'required|trim|min_length[1]|max_length[15]');
		if ($this->form_validation->run()){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			
			$this->load->model('usermodel');
			$result=$this->usermodel->checkLogin($username,$password);
			if ($result){
				if ($result==1){
					$this->load->library('session');
					$this->session->set_userdata('id',$result);
					return redirect('user/admin');
				}else{
					$this->load->library('session');
					$this->session->set_userdata('id',$result);
					return redirect('user/selectProducts');

					
				}
			}else{
				echo ("password or Username donot match");
				$this->load->view('login');
			}
			}
			else{
				$this->load->view('login');
				
			}			
	}
	
	
	
	public  function home(){
		$this->load->model('usermodel');
		$result=$this->usermodel->home();
		$data['productlist']=$result;
		$this->load->view('index',$data);
	}	
	
	public  function selectProducts(){
		$this->load->model('userModel');
		$result=$this->userModel->selectProducts();
		$data['productlist']=$result;
		$this->load->view('index1',$data);
	}
	
	public function admin(){
		$this->load->model('ordermodel');
		$result=$this->ordermodel->orderDetails();
		$data['orderlist']=$result;
		$this->load->view('adminpanel',$data);
	}
	
	public function addToCart($vegetable_id){
		$user_id=$this->session->userdata('id');
		if ($user_id!=''){
			$this->load->model('usermodel');
			$result=$this->usermodel->addToCart($vegetable_id,$user_id);
			redirect('user/selectproducts');			
		}else{
			redirect ('user/home');
		}		
	}
	
	public function showCart(){
		$user_id=$this->session->userdata('id');
		if ($user_id!=''){
			$this->load->model('usermodel');
			$result['data']=$this->usermodel->showCart($user_id);
			$this->load->view('order',$result);
		}else{
			redirect ('user/home');
		}		
	}
	
	public function deleteProduct($cart_id){
		$this->load->model('usermodel');
		$this->usermodel->deleteProduct($cart_id);
		redirect('user/showCart');
	}
	
	public function deleteProduct1($vegetable_id){
		$this->load->model('usermodel');
		$this->usermodel->deleteProduct1($vegetable_id);
		redirect('Admin/getProduct');
	}
	
	public function logout(){
		$this->session->sess_destroy();
		return redirect('welcome/login');
	}
	
	public function selectForEdit(){
		$user_id=$this->session->userdata('id');
		if ($user_id!=''){
			$this->load->model('usermodel');
			$result['data']=$this->usermodel->selectForEdit($user_id);
			$this->load->view('updateprofile',$result);
		}else{
			redirect ('user/home');
		}	
	}
	
	public function selectForEdit1(){
		$user_id=$this->session->userdata('id');
		if ($user_id!=''){
			$this->load->model('usermodel');
			$result['data']=$this->usermodel->selectForEdit($user_id);
			$this->load->view('updateProfile1',$result);
		}else{
			$this->load->view('adminpanel');
		}	
	}
	
	public function updateProfile(){
		$id=$this->input->post('id');
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$username=$this->input->post('uname');
		$password=$this->input->post('password');
		$email=$this->input->post('email');		
		$address=$this->input->post('address');
		$contact=$this->input->post('contact');
		$this->load->model('usermodel');
		$this->usermodel->updateProfile($id,$fname,$lname,$username,$password,$email,$address,$contact);
		
			redirect ('user/selectProducts');
	}
	
	public function updateProfile1(){
		$id=$this->input->post('id');
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$username=$this->input->post('uname');
		$password=$this->input->post('password');
		$email=$this->input->post('email');		
		$address=$this->input->post('address');
		$contact=$this->input->post('contact');
		$this->load->model('usermodel');
		$this->usermodel->updateProfile1($id,$fname,$lname,$username,$password,$email,$address,$contact);
		
			redirect ('user/admin');
	}

	public function edit(){
			$vegetable_id=$this->input->post('vegetable_id');
			$vegetable_name=$this->input->post('vegetable_name');
			$unit_cost=$this->input->post('unit_cost');
			
		
			$this->load->model('usermodel');
			$result['data']=$this->usermodel->updateProduct($vegetable_id,$vegetable_name,$unit_cost);
			$this->load->view('edit', $result);
	
	}
	
	
	
	
}
?>