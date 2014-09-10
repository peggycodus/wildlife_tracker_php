<?php
// Quick and dirty navigation.
$menu_item_default = 'index';
$menu_items        = array(
	'index' => array(
		'label' => 'Home',
		'desc'  => 'A list of all recent sightings',
	),
	'animals' => array(
		'label' => 'Animals',
		'desc'  => 'Add or delete Animals',
	),
	'regions' => array(
		'label' => 'Regions',
		'desc'  => 'Add or delete Regions',
	),
	'my_sightings' => array(
		'label' => 'My Sightings',
		'desc'  => 'Add or edit my sightings',
	)
);

// Determine the current menu item.
$menu_current = $menu_item_default;
// If there is a query for a specific menu item and that menu item exists...
if (@array_key_exists($this->uri->segment(2), $menu_items)) {
	$menu_current = $this->uri->segment(2);
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>My Magazines | <?php html_escape($menu_items[$menu_current]['label']);?></title>
        <meta name="description" content="<?php html_escape($menu_items[$menu_current]['desc']);?>">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="/css/main.css">

        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>s
    <body>
        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="/">Peggy's WildLife Tracker</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
<?php
foreach ($menu_items as $item => $item_data) {
	echo '<li' . ($item == $menu_current ? ' class="active"' : '') . '>';
	echo '<a href="/index.php/sighting/' . $item . '" title="' . $item_data['desc'] . '">' . $item_data['label'] . '</a>';
	echo '</li>';
}
?>
</ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
