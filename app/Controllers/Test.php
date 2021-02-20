<?php namespace App\Controllers;
use App\Models\UserModel;
class Test extends BaseController
{
	function __construct() { 
		helper(['form','url','session']);
		$this->session = \Config\Services::session();
		$this->users = new UserModel();
	}
	public function test()
	{
		return view('form/form');
	}
	
	public function form()
	{
		 if($this->request->getMethod() == 'post'){
		 
			$input = $this->validate([
                'name' => 'required',
                'email' => 'required|valid_email',
                'mobile' => 'required'
            ]);
			
			if (!$input){
				echo view('form/form', [
					'validation' => $this->validator
				]);
			}else{
				
				$usersData = [
				'name' => $this->request->getPost('name'),
				'email'  => $this->request->getPost('email'),
				'mobile'  => $this->request->getPost('mobile')
				];
				
				$this->users->insert($usersData);
				//echo "Successfully added your record! ";
				//$this->session->set_flashdata('success', 'User Updated successfully');
				return view('form/form');
				
            }

		}
	}

}
