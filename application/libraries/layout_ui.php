<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Layout_ui
  {
    // add main
    public function css($path_and_filename, $attr = array())
    {
      $rel_preload = '<link rel="preload" href="' . base_url() . 'assets/' . $path_and_filename . '" as="style" ' . $this->conv_to_text($attr) . '/>' . "\r\n\t\t";
      $rel_style = '<link href="' . base_url() . 'assets/' . $path_and_filename . '" rel="stylesheet" type="text/css" ' . $this->conv_to_text($attr) . '/>' . "\r\n\t\t";
      return $rel_preload . ' ' . $rel_style;
    }
    public function js($path_and_filename, $attr = array())
    {
      return '<script src="' . base_url() . 'assets/' . $path_and_filename . '" type="text/javascript" ' . $this->conv_to_text($attr) . '></script>' . "\r\n\t\t";
    }
    public function plugins_js($path_and_filename, $attr = array())
    {
      return '<script src="' . base_url() . 'assets/' . $path_and_filename . '" type="text/javascript" ' . $this->conv_to_text($attr) . '></script>' . "\r\n\t\t";
    }

    // add info
    public function css_info($path_and_filename, $attr = array())
    {
      $rel_preload = '<link rel="preload" href="' . base_url() . 'assets/libs/' . $path_and_filename . '" as="style" ' . $this->conv_to_text($attr) . '/>' . "\r\n\t\t";
      $rel_style = '<link href="' . base_url() . 'assets/libs/' . $path_and_filename . '" rel="stylesheet" type="text/css" ' . $this->conv_to_text($attr) . '/>' . "\r\n\t\t";
      return $rel_preload . ' ' . $rel_style;
    }
    public function js_info($path_and_filename, $attr = array())
    {
      return '<script src="' . base_url() . 'assets/libs/' . $path_and_filename . '" type="text/javascript" ' . $this->conv_to_text($attr) . '></script>' . "\r\n\t\t";
    }
    public function plugins_js_info($path_and_filename, $attr = array())
    {
      return '<script src="' . base_url() . 'assets/libs/' . $path_and_filename . '" type="text/javascript" ' . $this->conv_to_text($attr) . '></script>' . "\r\n\t\t";
    }
  
    // url
    public function css_url($path_and_filename, $attr = array())
    {
      $rel_preload = '<link rel="preload" href="' . $path_and_filename . '" as="style" ' . $this->conv_to_text($attr) . '/>' . "\r\n\t\t";
      $rel_style = '<link href="' . $path_and_filename . '" rel="stylesheet" type="text/css" ' . $this->conv_to_text($attr) . '/>' . "\r\n\t\t";
      return $rel_preload . ' ' . $rel_style;
    }
    public function js_url($path_and_filename, $attr = array())
    {
      return '<script src="' . $path_and_filename . '" type="text/javascript" ' . $this->conv_to_text($attr) . '></script>' . "\r\n\t\t";
    }
    public function plugins_js_url($path_and_filename, $attr = array())
    {
      return '<script src="' . $path_and_filename . '" type="text/javascript" ' . $this->conv_to_text($attr) . '></script>' . "\r\n\t\t";
    }

    // add file
    public function css_add($path_and_filename, $attr = array())
    {
      $rel_preload = '<link rel="preload" href="' . base_url() . 'assets/ui_templates' . '/addcontrollers/' . $path_and_filename . '" rel="stylesheet" type="text/css" ' . $this->conv_to_text($attr) . '/>' . "\r\n\t\t";
      $rel_style = '<link href="' . base_url() . 'assets/ui_templates' . '/addcontrollers/' . $path_and_filename . '" rel="stylesheet" type="text/css" ' . $this->conv_to_text($attr) . '/>' . "\r\n\t\t";
      return $rel_preload . ' ' . $rel_style;
    }
    public function js_add($path_and_filename, $attr = array())
    {
      return '<script src="' . base_url() . 'assets/ui_templates' . '/addcontrollers/' . $path_and_filename . '" type="text/javascript" ' . $this->conv_to_text($attr) . '></script>' . "\r\n\t\t";
    }
    public function plugins_js_add($path_and_filename, $attr = array())
    {
      return '<script src="' . base_url() . 'assets/ui_templates' . '/addcontrollers/' . $path_and_filename . '" type="text/javascript" ' . $this->conv_to_text($attr) . '></script>' . "\r\n\t\t";
    }

    // Layout_begin Path
    public function full($path_and_filename)
    {
      return $path_and_filename;
    }
    // Add Layout_begin
    public function conv_to_text($array)
    {
      return implode(' ', array_map(function ($value, $key)
      {
        return $key . '="' . $value . '"';
      },
      $array, array_keys($array)));
    }
  }
?>
