<style>
	body {
		background: black;
		color: white;
	}
</style>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

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
	function __construct() {
		parent::__construct();
		echo "SE"."<br>";
	}

	public function index()
	{
		
		$data['name'] = "Thanakit";
		$data['email'] = "614259034@gmail.com";
		$this->load->view('hello_view',$data);
	}

	public function show($name=null,$lastname=null)
	{
		echo "Hello ".$name." ".$lastname;
		
	}

	public function _display()
	{
		//echo "<br>"."SE2";
		$data['student'] = array("614259034","thanakit","tinop","SE");
		$this->load->view("hello_view",$data);
	}
}
?>