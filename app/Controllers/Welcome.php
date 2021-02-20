<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class Welcome extends Controller{

	public function index(){
		echo"Hello welcome";
	}

	public function text($name =null){
		echo "Welcome ".$name;

	}

	function _remap($method, $parem2 =null, $parem3 =null){
	    if(method_exists($this, $method)){
	      return $this->$method($parem2, $parem3);
	    }else{
	       $this->index();
	    }
	}

}