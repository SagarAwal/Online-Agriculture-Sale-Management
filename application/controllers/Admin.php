<?php
class Admin extends CI_Controller{
		public function addproduct(){
		
		$config['upload_path']="assets/images/vegetable";
		$config['allowed_types']="*";
		
		
		$this->load->library('upload',$config);
		$this->upload->do_upload('file');
		
		$data=array('upload_data'=>$this->upload->data());
		
		$vegetable_name=$this->input->post('vegetable_name');
		$unit_cost=$this->input->post('unit_cost');
		$image=$data['upload_data']['file_name'];
		$this->load->model('usermodel');
		$this->usermodel->addProduct($vegetable_name,$unit_cost,$image);
		
		echo "<script>alert('Vegetable added');</script>";
		$this->load->view('addProduct',$data);
		
				
		}
		
		public function getProduct(){
		$this->load->model('usermodel');
		$data['list']=$this->usermodel->viewProduct();
		$this->load->view('EditProduct', $data);
		
		}
		
		
		public function deleteproduct(){
			$this->load->view('DeleteProduct');			
		}
}

?>