<?php defined('BASEPATH') or exit('No direct script access allowed');
$CI = get_instance();

//Layout -----------------//
$config['app_layout_ui'] = 'layout/ui-web/';
$config['title'] = "Ensome Landing Page";
// base_url ---------------- //
$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['base_url'] .= "://" . $_SERVER['HTTP_HOST'];
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
$config['bURL'] = $config['base_url'];
defined('BURL') or define('BURL', $config['base_url']);

// hmvc server ---------------- //
$config['server_name_root'] = $_SERVER['DOCUMENT_ROOT'] . str_replace('index.php', '',  $_SERVER['SCRIPT_NAME']);
$config['server_url_root'] = str_replace('ismsmvc/', '', BURL);
$config['FILE_PAGE'] = $config['server_url_root'] . 'assets/upload/page/';
$config['FILE_IMG'] = $config['server_url_root'] . 'assets/upload/images/';
$config['FILE_NONE'] = $config['server_url_root'] . 'assets/upload/none/';
// hmvc server ---------------- //
defined('FILE_PAGE') or define('FILE_PAGE', $config['FILE_PAGE']);
defined('FILE_IMG') or define('FILE_IMG', $config['FILE_IMG']);
defined('FILE_NONE') or define('FILE_NONE', $config['FILE_NONE']);

//Logo ----------------///
defined('WebFav') or define('WebFav', (BURL . 'assets/upload/logo/' . 'logo_c.png'));