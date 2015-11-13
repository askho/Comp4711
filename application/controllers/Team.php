<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends Application {

	function __construct()
    {
        parent::__construct();
    }

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['pagebody'] = 'Team';
		$this->load->model('roster');
		$this->data["roster"] = $this->roster->paginate(1);
		$pages = ceil($this->roster->size() / 12);
		$this->data['pages'] = $this->buildPagination($pages);
		$this->data['showLeft'] = "disabled";
		$this->data['showRight'] = $pages == 1 ? "disabled" : "";
		$this->data['previousPage'] = "";
		$this->data['nextPage'] = "/team/page/" + 2;
		$this->data['pageNum'] = 1;
		$this->render();
	}
	public function page($page, $mode = null)
	{
		//echo $_SESSION['teamMode'];
		echo isset($mode);
		if(isset($mode)) {
			$this->session->set_userdata('teamMode', $mode);
		} else if(!isset($_SESSION['teamMode'])){
			$this->session->set_userdata('teamMode', "team");
		} 
		//echo $_SESSION['teamMode'];
		$this->data['pagebody'] = $_SESSION['teamMode'];
		$this->load->model('roster');
		$this->data["roster"] = $this->roster->paginate($page);
		$pages = ceil($this->roster->size() / 12);
		$this->setPagination($pages, $page);
		$this->render();
	}
	private function buildPagination($pages) {
		$result = array();
		for($i = 0; $i < $pages; $i++) {
			$temp = array(
				"pageNum" => $i + 1
			);
			array_push($result, $temp);
		}
		return $result;
	}
	private function setPagination($pages, $page) {
		$this->data['pages'] = $this->buildPagination($pages);
		$this->data['showLeft'] = $page ==1 ? "disabled" : "";
		$this->data['showRight'] = $page >= $pages ? "disabled" : "";
		$this->data["previousPage"] = $page ==1 ? "" : "/team/page/"+$page - 1;
		$this->data['nextPage'] = $page >= $pages ? "" : "/team/page/"+$page+1;
	}
}
