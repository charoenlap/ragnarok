<?php 
	class HomeController extends Controller {
	    public function index() {
	    	$data = array();
	    	// $user = $this->call('User')->login();
	    	// $data['user'] = $user;
	    	$data = array();
	    	$data['title'] = "Home";
	    	$style = array(
	    		'assets/home.css'
	    	);
	    	$data['style'] 	= $style;
	    	// 1087 Orc Hero
	    	// 1190 Orc Lord

	    	$data['monsters'] = $this->model('monster')->getBioLab();
 	    	$this->view('home',$data); 
	    }
	}
?>