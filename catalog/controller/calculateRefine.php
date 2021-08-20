<?php 
	class CalculateRefineController extends Controller {
	    public function index() {
	    	$data = array();
	    	// $user = $this->call('User')->login();
	    	// $data['user'] = $user;
	    	$data = array();
	    	$data['title'] = "CalculateRefine";
	    	// $style = array(
	    	// 	'assets/home.css'
	    	// );
	    	// $data['style'] 	= $style;
	    	$data['title'] = "Ragnarok - Calculate refine";
	    	$data['descreption'] = "คำนวนอัตราการตีบวก";

	    	// $data['monsters'] = $this->model('monster')->getBioLab();
 	    	$this->view('calculate/refine',$data); 
	    }
	}
?>