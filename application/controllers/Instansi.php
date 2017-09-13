<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Instansi extends CI_Controller {
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
	public function index()
	{
		$var['content']="instansi/dashboard";
		$var['var_content']=array();
		$var['var_footer']=array();
		$var['var_nav']=array("title"=>"SAS");
		$var['var_header']=array("title"=>"Dashboard","content"=>"");
		$var['var_menu']=array();
		$var['var_breadcumb']=array();
		$this->load->view('main',$var);
	}
	public function psb()
	{
		$var['content']="instansi/pendaftaran";
		$var['var_content']=array();
		$var['var_footer']=array();
		$var['var_nav']=array("title"=>"SAS");
		$var['var_header']=array("title"=>"PSB","content"=>"Pendaftaran Siswa Baru");
		$var['var_menu']=array();
		$var['var_breadcumb']=array();
		$this->load->view('main',$var);
	}
}
