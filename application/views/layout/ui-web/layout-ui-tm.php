<?php // load header?>
<?php $this->load->view($this->config->item ('app_layout_ui') . 'header')?>

<?php // load Menu?>
<?php //$this->load->view($this->config->item ('app_layout_ui') . 'menu')?>

<?php //View?>
<?php if(isset($view)){ $this->load->view($view); } ?>

<?php //Script ?>
<?php if(isset($script)){ $this->load->view($script); } ?>

<?php // load Footer?>
<?php //$this->load->view($this->config->item ('app_layout_ui') . 'footer')?>

<?php // load Jquery Add?>
<?php $this->load->view($this->config->item ('app_layout_ui') . 'jqueryadd')?>

<?php // load Jquery?>
<?php $this->load->view($this->config->item ('app_layout_ui') . 'jquery')?>

<?php //$this->load->view($this->config->item ('app_layout_ui') . 'tag_on')?>
