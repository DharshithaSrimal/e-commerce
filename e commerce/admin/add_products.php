<style type="text/css">
	#bodyright
{
	width: 73.5%;
	min-height: 750px !important;
	background: #800080;
	margin: 20px 10px 10px 0px;
	border-radius: 5px;
	float: left;
	font-family: "Baloo";
}

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
	<h3>Add New Products From Here</h3>
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Enter Product Name</td>
				<td><input type="text" name="pro_name"></td>
			</tr>
			<tr>
				<td>Select Category Name</td>
				<td>
					<select id="select_cat" name="cat_name"><?php include 'inc/function.php'; echo viewall_cat(); ?></select>
				</td>
			</tr>
			<tr>
				<td>Select Sub Category Name</td>
				<td>
					<select id="select_cat" name="sub_cat_name"><?php echo viewall_sub_cat(); ?></select>
				</td>
			</tr>
			<tr>
				<td>Select Product Image 1</td>
				<td><input type="file" name="pro_img1"></td>
			</tr>
			<tr>
				<td>Select Product Image 2</td>
				<td><input type="file" name="pro_img2"></td>
			</tr>
			<tr>
				<td>Select Product Image 3</td>
				<td><input type="file" name="pro_img3"></td>
			</tr>
			<tr>
				<td>Select Product Image 4</td>
				<td><input type="file" name="pro_img4"></td>
			</tr>
			<tr>
				<td>Enter Feature1</td>
				<td><input type="text" name="pro_feature1"></td>
			</tr>
			<tr>
				<td>Enter Feature2</td>
				<td><input type="text" name="pro_feature2"></td>
			</tr>
			<tr>
				<td>Enter Feature3</td>
				<td><input type="text" name="pro_feature3"></td>
			</tr>
			<tr>
				<td>Enter Feature4</td>
				<td><input type="text" name="pro_feature4"></td>
			</tr>
			<tr>
				<td>Enter Feature5</td>
				<td><input type="text" name="pro_feature5"></td>
			</tr>
			<tr>
				<td>Enter Price</td>
				<td><input type="text" name="pro_price"></td>
			</tr>
			<tr>
				<td>Enter Model No.</td>
				<td><input type="text" name="pro_model"></td>
			</tr>
			<tr>
				<td>Enter Model Warranty</td>
				<td><input type="text" name="pro_warranty"></td>
			</tr>
			<tr>
				<td>Enter Keyword</td>
				<td><input type="text" name="pro_keyword"></td>
			</tr>

		</table>
		<center><button name="add_product">Add Product</button></center>
	</form>
</div>

<?php
	 echo add_product();
?>