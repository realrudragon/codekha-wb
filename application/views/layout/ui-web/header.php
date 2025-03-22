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
  <?php //Add
  //EX
  echo $this->layout_ui->css('ui_templates' . '/' . 'roofing_web' . '/' . 'vendor/swiper/swiper-bundle.min.css' . '?loadst=' . Date('ymdHis'));
  echo $this->layout_ui->css('ui_templates' . '/' . 'roofing_web' . '/' . 'css/theme.css');
  echo $this->layout_ui->css('ui_templates' . '/' . 'roofing_web' . '/' . 'css/style.css');
  ?>
  <?php //Add Libs
  //EX
  echo $this->layout_ui->css_info('lobibox/css/lobibox.min.css');
  //toastr
  echo $this->layout_ui->css_info('jquerypopupbox/css/toastrsuccessicon.css');
  //growl-notification
  echo $this->layout_ui->css_info('growl-notification/css/dark-theme.min.css');
  echo $this->layout_ui->css_info('growl-notification/css/colored-theme.min.css');
  echo $this->layout_ui->css_info('growl-notification/css/light-theme.min.css');
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