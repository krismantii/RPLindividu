<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
	   $this->data['hasil']= $this->model_crud->getUser('user');
		$this->load->view('welcome_message',$this->data);
  
	}
    
    public function form_input()
	{
	   
		$this->load->view('form-input');
  
	}
    
    public function form_edit($id)
	{
	   	$this-> data['dataEdit'] = $this->model_crud->dataEdit('user',$id);
  $this->load->view('form-edit',$this->data);
	}
    
    public function insert()
	{ 
	   $kode =$_POST['kode'];
	   $username =$_POST['username'];
       $password =$_POST['password'];
       $data = array('kode' => $kode,'username' => $username, 'password' => $password);
	  $tambah =$this->model_crud->tambahData('user',$data);
      if($tambah > 0){
        redirect('welcome/index');
      }
      else{
        echo 'gagal disimpan!';
        }
      }
      
      public function delete($id)
	{
	   
		$hapus=$this->model_crud->hapusData('user',$id);
  if($hapus > 0){
        redirect('welcome/index');
      }
      else{
        echo 'gagal disimpan!';
        }
	}
    
    
    
    
    public function update($id)
	{ 
	   $kode =$_POST['kode'];
	   $username =$_POST['username'];
       $password =$_POST['password'];
       $data = array('kode' => $kode,'username' => $username, 'password' => $password);
	  $edit =$this->model_crud->editData('user',$data,$id);
      if($edit > 0){
        redirect('welcome/index');
      }
      else{
        echo 'gagal disimpan!';
        }
      }
    
}