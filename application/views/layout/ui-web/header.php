<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="80x80" href="<?php echo WebFav; ?>">
  <title><?php echo " " . $title; ?> - <?php echo $this->config->item('title'); ?></title>
  <?php // Tell the browser to be responsive to screen width 
  ?>
  <?php
  //Theme-----------------------
  echo $this->layout_ui->css('ui_templates' . '/' . 'template' . '/' . 'css/master.css');
  //Boostrap-------------------
  echo $this->layout_ui->css('ui_templates' . '/' . 'template' . '/' . 'vendor/boostrap/css/bootstrap.min.css');
  echo $this->layout_ui->css('ui_templates' . '/' . 'template' . '/' . 'vendor/boostrap/css/bootstrap-grid.min.css');
  ?>
  <?php
  //CSS Url
  if (isset($css_url)) {
    foreach ($css_url as $link_css) {
      echo $this->layout_ui->css_url($link_css);
    }
  }
  ?>
  <?php
  //CSS Info
  if (isset($css_info)) {
    foreach ($css_info as $link_css) {
      echo $this->layout_ui->css_info($link_css);
    }
  }
  ?>
  <?php
  //CSS Add
  if (isset($css_add)) {
    foreach ($css_add as $link_css) {
      echo $this->layout_ui->css_add($link_css);
    }
  }
  ?>
  
</head>