<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotasController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        $this->load->model('nota');
 
    }

    public function all(){
    	$r = $this->nota->getAll();

    	if($r){
    		$datos["estado"] = 1;
    		$datos["datos"] = $r;
    		print json_encode($datos);
    	}else{
    		print json_encode(array(
    			"estado" => 2,
    			"mensaje" => "Ha ocurrido un error"
    		));
    	}
    	///print_r(json_encode($r));
    }
	/*public function index()
	{
		$this->load->view('welcome_message');
	}*/
}