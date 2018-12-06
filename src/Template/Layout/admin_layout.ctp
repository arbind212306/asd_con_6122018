
<!-- code to include header -->
<?php echo $this->element('header'); ?>
<script>
<?php echo 'var webroot ="' . $this->Url->build('/') . '"'; ?>
</script>
<!-- asidebar loads here -->
<?php echo $this->element('asidebar'); ?>
<!-- asidebar ends here -->

<!-- code to load content dynamically -->
<?php echo $this->fetch('content'); ?>
<!-- content loading ends here -->

<!-- code to load footer -->
<?php echo $this->element('footer'); ?>
<!-- footer loading ends here -->
<!-- control sidebar starts loading here -->
<?php echo $this->element('control_asidebar'); ?>
<!-- control sidebars loading ends here -->


