<h2> Animals List</h2>

<div class = animals>
<?php
$this->table->set_heading('ID', 'Name');
echo $this->table->generate($animals);
</div>
