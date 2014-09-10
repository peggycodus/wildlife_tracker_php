<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to Wildlife Tracker</title>
</head>
<body>

<div id="container">
  <h1>Welcome to Wildlife Tracker</h1>
<br>
<h2>Recent Wildlife Sightings</h2>

  <div id="body">

  <?php
$this->table->set_heading('Animal', 'Date', 'Region', 'Latitude', 'Longitude', 'Sighted by');
echo $this->table->generate($sightings);

  </div>

</div>

</body>
</html>
