<?php // load header?>
<?php $this->load->view($this->config->item ('layout_ui_web') . 'header')?>

<?php // load Menu?>
<?php //$this->load->view($this->config->item ('layout_ui_web') . 'menu')?>

<?php //View?>
<?php if(isset($view)){ $this->load->view($view); } ?>

<?php //Script ?>
<?php if(isset($script)){ $this->load->view($script); } ?>

<?php // load Footer?>
<?php $this->load->view($this->config->item ('layout_ui_web') . 'footer')?>

<?php // load Jquery Add?>
<?php $this->load->view($this->config->item ('layout_ui_web') . 'jqueryadd')?>

<?php // load Jquery?>
<?php $this->load->view($this->config->item ('layout_ui_web') . 'jquery')?>

<?php //$this->load->view($this->config->item ('layout_ui_web') . 'tag_on')?>
