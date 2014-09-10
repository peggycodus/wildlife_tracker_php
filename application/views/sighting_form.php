<?php echo validation_errors();?>
<?php echo $this->upload->display_errors('<div class="alert alert-error">', '</div>');?>

<?php echo form_open_multipart();?>
<div>
<?php echo form_label('Animal Name', 'animal_id');?>
<?php echo form_dropdown('animal_id', $sighting_form_options, set_value('animal_id'));?>
</div>

<div>
<?php echo form_label('Region Name', 'region_id');?>
<?php echo form_dropdown('region_id', $sighting_form_options, set_value('region_id'));?>
</div>

<div>
<?php echo form_label('Latitude', 'latitude');?>
<?php echo form_input('latitude', set_value('latitude'));?>
</div>

<div>
<?php echo form_label('Longitude', 'longitude');?>
<?php echo form_input('longitude', set_value('longitude'));?>
</div>

<div>
<?php echo form_label('Date sighted', 'sight_date');?>
<?php echo form_input('sight_date', set_value('sight_date'));?>
</div>

<div>
<?php echo form_label('Sighted by', 'person');?>
<?php echo form_input('person', set_value('person'));?>
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
