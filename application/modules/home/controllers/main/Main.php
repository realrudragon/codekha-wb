<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Main extends MY_Controller // CI_Controller, MX_Controller MY_Controller
	{
	// Controller
		public function __construct()
		{
			parent::__construct();
			$this->load->library('layout_ui');
			$this->load->module('home');
		}

		public function index()
		{
			self::main();
		}

		public function main()
		{
			$data = array(
				'icon' => '',
				'title' => 'Home',
				'img_url' => BURL . 'assets/ui_templates/template/img/',
				// Add URL
				'css_url' => array(),
				'js_url' => array(),
				'plugins_js_url' => array(),
				// Add file
				'css_add' => array(
					// 'hosting/css/main/meni/meni.css',
				),
				'js_add' => array(
					// 'hosting/js/meni/meni/meni.js',
				),
				'plugins_js_add' => array(
					// 'hosting/plugins_js/meni/meni/meni.js',
				),
				// View
				// 'script' => "/main/main/script/main_script",
				'view' => "/main/main/main_view",
			);
			$this->load->view($this->config->item("app_layout_ui") . "layout-ui-tm", $data);
		}

	// Controller
	}
?>
