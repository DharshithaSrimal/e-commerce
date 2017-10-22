<div id="bodyleft">
	<h3>Content Management</h3>
	<ul id="ul">
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php?viewall_cat">View all categories</a></li>
		<li><a href="index.php?viewall_sub_cat">View all sub categories</a></li>
		<li><a href="index.php?add_products">Add New Products</a></li>
		<li><a href="index.php?viewall_products">View All Products</a></li>
	</ul>
</div>
	<?php 
		if(isset($_GET['viewall_cat']))
	{
		include 'cat.php';
	}
	if(isset($_GET['viewall_sub_cat']))
	{
		include 'sub_cat.php';
	}
	if(isset($_GET['viewall_products']))
	{
		include 'viewall_products.php';
	}
	if(isset($_GET['add_products']))
	{
		include 'add_products.php';
	}

	?> 
