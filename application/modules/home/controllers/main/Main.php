<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Main extends MY_Controller // CI_Controller, MX_Controller MY_Controller
	{
	// Controller
		public function __construct()
		{
			parent::__construct();
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
				'title' => 'Web Hosting เว็บโฮสติ้ง',
				'image' => BURL . 'assets/upload/og_image/' . 'hosting.png' . '?imgl=' . date('ymdHis'),
				'control_name' => 'เว็บโฮสติ้ง Cloud Hosting',
				'control_url' => BURL . 'hosting',
				// Add URL
				'css_url' => array(),
				'js_url' => array(),
				'plugins_js_url' => array(),
				// Add file
				'css_add' => array(
					'hosting/css/meni/meni' . MIN_LOAD_FILE . '/meni.css' . '?logvsj=' . date('ymdHis'),
				),
				'js_add' => array(
					'hosting/js/meni/meni' . MIN_LOAD_FILE . '/meni.js' . '?logvsj=' . date('ymdHis'),
				),
				'plugins_js_add' => array(
					'hosting/plugins_js/meni/meni' . MIN_LOAD_FILE . '/meni.js' . '?logvsj=' . date('ymdHis'),
				),
				// View
				'script' => "/meni/meni/script/meni_script",
				'view' => "/meni/meni/meni_view",
			);
			$this->load->view($this->config->item(B_TP_VG_LAYUI) . B_TP_VI_LAYUI, $data);
		}

	// Controller
	}
?>
