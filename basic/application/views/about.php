<!DOCTYPE html>
<html>
<body>

<h1>Welcome To About Page</h1>

<?php echo base_url(); ?>
<br><br><hr>
<!-- <a href="<?php //echo site_url('about'); ?>">About Us</a> -->
<?php echo anchor('home/about' , 'About Us', 'title="Our about"') ?> <br><br><hr> <br><br>
<?php echo anchor('home' , 'Home', 'title="Home page"') ?>
</body>
</html>
