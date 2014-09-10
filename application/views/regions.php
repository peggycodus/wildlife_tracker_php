<h2> Regions List</h2>

<div class = regions>
<?php
$this->table->set_heading('ID', 'Name');
echo $this->table->generate($regions);
</div>
