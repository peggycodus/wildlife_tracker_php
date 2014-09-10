<?php echo validation_errors();?>
<?php echo $this->upload->display_errors('<div class="alert alert-error">', '</div>');?>
<
?php echo form_open_multipart();?>
<div>
    <?php echo form_label('Region Name');?>
    <?php echo form_input('name', set_value('name'));?>
</div>

<div>
    <?php echo form_submit('save', 'Save');?>
</div>

<?php echo form_close();?><html>
<head>
    <title>403 Forbidden</title>
</head>
<body>

<p>Directory access is forbidden.</p>

</body>
</html>
