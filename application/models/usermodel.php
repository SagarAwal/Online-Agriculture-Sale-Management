<?php
class Usermodel extends CI_Model{
	public function insertUser($fname,$lname,$username,$password,$address,$contact,$email){
		$arr=array(
		"fname"=>$fname,
		"lname"=>$lname,
		"username"=>$username,
		"password"=>$password,
		"address"=>$address,
		"contact"=>$contact,
		"email"=>$email);

		$this->db->insert('user',$arr);
		return "data inserted";
		
	}
	
	public function checkLogin($username,$password){
		$query=$this->db->where(['username'=>$username,'password'=>$password])
								->get('user');
		if($query->num_rows()){
			return $query->row()->id;
		} else {
			return FALSE;
		}
		
	}
	
	public function home(){
		$product=$this->db->get('vegetable');
		return $product->result();
	}
	public function selectProducts(){
		$product=$this->db->get('vegetable');
		return $product->result();
	}
	
	public function addToCart($vegetable_id,$user_id,$quantity){
		$arr=array(
		"user_id"=>$user_id,
		"vegetable_id"=>$vegetable_id
		);

		$this->db->insert('cart',$arr);
		$this->usermodel->selectProduct($vegetable_id);

	}
	
	
	public function selectProduct($vegetable_id){
		$this->db->where('vegetable_id',$vegetable_id);
		$result=$this->db->get("vegetable");
		return $result->result();
			
	}
	public function updateVegetable($vegetable_id,$name,$price){
		$arr=array(
			"vegetable_id"=>$vegetable_id,	
			"vegetable_name"=>$name,	
			"unit_cost"=>$price);
		$this->db->where("vegetable_id",$vegetable_id);
		$this->db->update('vegetable',$arr);	
	}
	public function showCart($user_id){
		$this->db->where('user_id',$user_id);
		$result=$this->db->get("cart");
		return $result->result();
	}		
	
	public function deleteProduct($cart_id){
		
		$this->db->where("cart_id",$cart_id);
		$this->db->delete('cart');
		return "data deleted";
		
	}
	
	public function deleteProduct1($vegetable_id){
		$this->db->where("vegetable_id",$vegetable_id);
		$this->db->delete('vegetable');
	}
	
	public function selectForEdit($user_id){
		$this->db->where("id", $user_id);
			$result=$this->db->get("user");
			
			return $result->result();
	}
	
	public function updateProfile($id,$fname,$lname,$username,$password,$email,$address,$contact){
		$arr=array(
		"id"=>$id,
		"fname"=>$fname,
		"lname"=>$lname,
		"username"=>$username,
		"password"=>$password,
		"email"=>$email,
		"address"=>$address,
		"contact"=>$contact);
		$this->db->where("id",$id);
		$this->db->update('user',$arr);
		return "data updated";
		
	}
	
	public function updateProfile1($id,$fname,$lname,$username,$password,$email,$address,$contact){
		$arr=array(
		"id"=>$id,
		"fname"=>$fname,
		"lname"=>$lname,
		"username"=>$username,
		"password"=>$password,
		"email"=>$email,
		"address"=>$address,
		"contact"=>$contact);
		$this->db->where("id",$id);
		$this->db->update('user',$arr);
		return "data updated";
		
	}
	
	public function updateProduct($vegetable_id,$vegetable_name,$unit_cost){
		$arr=array(
		"vegetable_id"=>$vegetable_id,
		"vegetable_name"=>$vegetable_name,
		"unit_cost"=>$unit_cost);
		$this->db->where("vegetable_id",$vegetable_id);
		$this->db->update('vegetable',$arr);
	}
	
	public function addProduct($vegetable_name,$unit_cost,$image){
		$arr=array(
		"vegetable_name"=>$vegetable_name,
		"unit_cost"=>$unit_cost,
		"vegetable_image"=>$image);
		$this->db->insert("vegetable",$arr);
		
	}
	
	public function selectProductId($vegetable_id){
		$this->db->where("vegetable_id", $vegetable_id);
		$result=$this->db->get('vegetable');
			
		return $result->result();
	}
	
	public function viewProduct(){
		$query=$this->db->get('vegetable');
		return $query->result();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	public function retData($name){
		$this->db->where('product_name',$name);
		 $query=$this->db->get('product');
		 return $query->result();
	
	}
	

	
	public function userDetails($session)
		{
			$this->db->where('user_id',$session);
			$query=$this->db->get('user');
			return $query->result();
		}
		
	
	
	public function userListDetails()
		{
			$query=$this->db->get('user');
			return $query->result();
		}
		

     
	
	public function updateDetails()
		{
			$query=$this->db->get('product');
			return $query->result();
		}
	
	
		

	
	
	public function select(){
		$image=$this->db->get('product');
		return $image->result();
	}
}
?>