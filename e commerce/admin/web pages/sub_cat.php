<div id="bodyright">
	<h3>Add New Sub Category From Here</h3>
	<form method="post">
		<table>
			<tr>
				<td>Select Main Category Name</td>
				<td><select name="main_cat">
					<?php
						include 'inc/db.php';
						$fetch_cat=$con->prepare("select * from main_cat");
						$fetch_cat->setFetchMode(PDO:: FETCH_ASSOC);
						$row=$fetch_cat->fetch();

						echo "<option>".$row['cat_name']."</option>";
					?>
				</select></td>
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
	include 'inc/db.php';
	if(isset($_POST['add_cat']))
	{
		$cat_name=$_POST['cat_name'];
		$add_cat=$con->prepare("insert into main_cat(cat_name)values('$cat_name')");
		
		if($add_cat->execute())
		{
			echo "<script>alert('Category added succesfully')</script>";
		}
		else
		{
			echo "<script>alert('Category not added succesfully')</script>";
		}
	}
?>