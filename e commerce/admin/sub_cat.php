<style type="text/css">
	#select_cat
{
	width: 102.5%;
	height: 30px;
	border-radius: 5px;
	border:1px solid #fff;
	padding-left:2% ;
}
</style>
<div id="bodyright">
	<h3>View all sub categories</h3>
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<th>Sr No.</th>
				<th>Sub Category Name</th>
				<th>Edit</th>
				<th>Delete</th>
				
			</tr>
			<?php include("inc/function.php"); echo viewall_sub_category(); ?>
		</table>
	</form>
	<h3 id="add_cat">Add New Sub Category From Here</h3>
	<form method="post">
		<table>
			<tr>
				<td>Select Category Name</td>
				<td>
					<select name="main_cat" id="select_cat">
						<?php
							 echo viewall_sub_cat();
						?>
					</select>
				</td>
			</tr> 
			<tr>
				<td>Enter Sub Category Name</td>
				<td><input type="text" name="sub_cat_name"></td>
			</tr>
		</table>
		<center><button name="add_sub_cat">Add Category</button></center>
	</form>
</div>

<?php
	include 'inc/function.php'; 
echo add_sub_cat();
?>