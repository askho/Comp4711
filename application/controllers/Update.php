<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends Application {

	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->model('Standings'); 
		$this->Standings->updateDatabase();
		header('Location: ' . '/' );
		exit;
	}
}
