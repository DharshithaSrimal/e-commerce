<?php
	function add_cat()
	{
		include 'inc/db.php';
		if(isset($_POST['add_cat']))
		{
			$cat_name=$_POST['cat_name'];
			//prepare statement is used to avoid SQL injection
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
	}

	function add_sub_cat()
	{
		include 'inc/db.php';
	if(isset($_POST['add_sub_cat']))
	{
		$cat_id=$_POST['main_cat'];
		$sub_cat_name=$_POST['sub_cat_name'];
		//prepare statement is used to avoid SQL injection
		$add_sub_cat=$con->prepare("insert into sub_cat(sub_cat_name,cat_id)values('$sub_cat_name','$cat_id')");
		
		if($add_sub_cat->execute())
		{
			echo "<script>alert('Sub Category added succesfully')</script>";
		}
		else
		{
			echo "<script>alert('Sub Category not added succesfully')</script>";
		}
	}
	}
	function add_product()
	{
		include 'inc/db.php';
	if(isset($_POST['add_product']))
	{
		$pro_name=$_POST['pro_name'];
		$cat_id=$_POST['cat_name'];
		$sub_cat_id=$_POST['sub_cat_name'];

		$pro_img1=$_FILES['pro_img1']['name'];
		$pro_img1_temp=$_FILES['pro_img1']['tmp_name'];

		$pro_img2=$_FILES['pro_img2']['name'];
		$pro_img2_temp=$_FILES['pro_img2']['tmp_name'];

		$pro_img3=$_FILES['pro_img3']['name'];
		$pro_img3_temp=$_FILES['pro_img3']['tmp_name'];

		$pro_img4=$_FILES['pro_img4']['name'];
		$pro_img4_temp=$_FILES['pro_img4']['tmp_name'];

		move_uploaded_file($pro_img1, "../img/pro_img/$pro_img1");
		move_uploaded_file($pro_img2, "../img/pro_img/$pro_img2");
		move_uploaded_file($pro_img3, "../img/pro_img/$pro_img3");
		move_uploaded_file($pro_img4, "../img/pro_img/$pro_img4");

		$pro_feature1=$_POST['pro_feature1'];
		$pro_feature2=$_POST['pro_feature2'];
		$pro_feature3=$_POST['pro_feature3'];
		$pro_feature4=$_POST['pro_feature4'];
		$pro_feature5=$_POST['pro_feature5'];

		$pro_price=$_POST['pro_price'];
		$pro_model=$_POST['pro_model'];
		$pro_warranty=$_POST['pro_warranty'];
		$pro_keyword=$_POST['pro_keyword'];

		//prepare statement is used to avoid SQL injection
		$add_product=$con->prepare("insert into products(pro_name,cat_id,sub_cat_id,pro_img1,pro_img2,pro_img3,pro_img4,pro_feature1,pro_feature2,pro_feature3,pro_feature4,pro_feature5,pro_price,pro_model,pro_warranty,pro_keyword,pro_added_date)
			values('$pro_name','$cat_id','$sub_cat_id','$pro_img1','$pro_img2','$pro_img3','$pro_img4','$pro_feature1','$pro_feature2','$pro_feature3','$pro_feature4','$pro_feature5','$pro_price','$pro_model','$pro_warranty','$pro_keyword',NOW())");
		
		if($add_product->execute())
		{
			echo "<script>alert('Product added succesfully')</script>";
		}
		else
		{
			echo "<script>alert('Product not added succesfully')</script>";
		}
	}
	}

	function viewall_cat()
	{

							include 'inc/db.php';
							$fetch_cat=$con->prepare("SELECT * FROM main_cat");
							$fetch_cat->setFetchMode(PDO::FETCH_ASSOC);
							$fetch_cat->execute();
							
							while($row=$fetch_cat->fetch())
								echo "<option value='".$row['cat_id']."'>".$row['cat_name']."</option>";
							//endwhile;
						
	}

	function viewall_products()
	{
		include("inc/db.php");

		$fetch_pro=$con->prepare("SELECT * FROM products");
		$fetch_pro->setFetchMode(PDO::FETCH_ASSOC);
		$fetch_pro->execute();
		$i=1;
		while($row=$fetch_pro->fetch()):
			echo"<tr>
					<td>".$i++."</td>
					<td><a href='index.php?ecit_pro=".$row['pro_id']."'>Edit</a></td>
					<td><a href='#'>Delete</a></td>
					<td>".$row['pro_name']."</td>
					<td style='min-width:200px;'> 
						<img src='../imgs/pro_img/".$row['pro_img1']."'>
						<img src='../imgs/pro_img/".$row['pro_img2']."'>
						<img src='../imgs/pro_img/".$row['pro_img3']."'>
						<img src='../imgs/pro_img/".$row['pro_img4']."'>


					</td>
					<td>".$row['pro_feature1']."</td>
					<td>".$row['pro_feature2']."</td>
					<td>".$row['pro_feature3']."</td>
					<td>".$row['pro_feature4']."</td>
					<td>".$row['pro_feature5']."</td>
					<td>".$row['pro_price']."</td>
					<td>".$row['pro_model']."</td>
					<td>".$row['pro_warranty']."</td>
					<td>".$row['pro_keyword']."</td>
					<td style='min-width:200px'>".$row['pro_added_date']."</td>
				</tr>";
				endwhile;
	}

	function viewall_category()
	{
		
							include 'inc/db.php';
		$fetch_cat=$con->prepare("SELECT * FROM main_cat ORDER BY cat_name");
							$fetch_cat->setFetchMode(PDO::FETCH_ASSOC);
							$fetch_cat->execute();
							$i=1;
							while($row=$fetch_cat->fetch()):
								echo "<tr><td>".$i++."</td>
										<td>".$row['cat_name']."</td>
										<td><a href='index.php?edit_cat=".$row['cat_id']."'>Edit</a></td>
										<td><a href='#'>Delete</a></td>
										</tr>";
						
							endwhile;
	}

	function viewall_sub_category()
	{
		
							include 'inc/db.php';
		$fetch_cat=$con->prepare("SELECT * FROM sub_cat ORDER BY sub_cat_name");
							$fetch_cat->setFetchMode(PDO::FETCH_ASSOC);
							$fetch_cat->execute();
							$i=1;
							while($row=$fetch_cat->fetch()):
								echo "<tr><td>".$i++."</td>
										<td>".$row['sub_cat_name']."</td>
										<td><a href='index.php?edit_sub_cat=".$row['sub_cat_id']."'>Edit</a></td>
										<td><a href='#'>Delete</a></td>
										</tr>";
						
							endwhile;
	}


	function viewall_sub_cat()
	{

							include 'inc/db.php';
							$fetch_sub_cat=$con->prepare("SELECT * FROM sub_cat");
							$fetch_sub_cat->setFetchMode(PDO::FETCH_ASSOC);
							$fetch_sub_cat->execute();
							
							while($row=$fetch_sub_cat->fetch())
								echo "<option value='".$row['cat_id']."'>".$row['sub_cat_name']."</option>";
							//endwhile;
						
	}

	function edit_cat()
	{
		include 'inc/db.php';
		if(isset($_GET['edit_cat']))
		{
			$cat_id=$_GET['edit_cat'];
			$fetch_cat_name=$con->prepare("SELECT * FROM main_cat WHERE cat_id='$cat_id'");
			$fetch_cat_name->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_cat_name->execute();
			$row=$fetch_cat_name->fetch();

			echo "<form  method='post'>
		<table>
			<tr>
				<td>Update Category Name</td>
				<td><input type='text' name='up_cat_name' value='".$row['cat_name']."'></td>
			</tr>
			
				
			</tr>
		</table>
		<center><button name='update_cat'>Update Category</button></center>
	</form>";

	if(isset($_POST['update_cat']))
	{
		$up_cat_name=$_POST['up_cat_name'];
		$update_cat=$con->prepare("UPDATE main_cat SET cat_name='$up_cat_name' WHERE cat_id='$cat_id'");
		if($update_cat->execute())
		{
			echo "<script>alert('Category Updated Successfully');</script>";
			echo "<script>window.open('index.php?viewall_cat','_self')</script>";
		}
	}
	}

	}
	function edit_sub_cat()
	{
		include 'inc/db.php';
		if(isset($_GET['edit_sub_cat']))
		{
			$sub_cat_id=$_GET['edit_sub_cat'];
			$fetch_sub_cat=$con->prepare("SELECT * FROM sub_cat WHERE sub_cat_id='$sub_cat_id'");
			$fetch_sub_cat->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_sub_cat->execute();
			$row=$fetch_sub_cat->fetch();
			$cat_id=$row['cat_id'];

			$fetch_cat=$con->prepare("SELECT * FROM main_cat WHERE cat_id='$cat_id'");
			$fetch_cat->setFetchMode(PDO::FETCH_ASSOC);
			$fetch_cat->execute();
			$row_cat=$fetch_cat->fetch();

			

			//echo $row['sub_cat_name'];

			echo " 
					<form method='post'>
						<table>
							<tr>
								<td>Select Main Category Name</td>
								<td>
									<select name='main_cat'>
										<option value='".$row_cat['cat_id']."'>".$row_cat['cat_name']."</option>";
										echo viewall_cat(); 
									echo "</select>
								</td>
							</tr>
							<tr>
								<td>Update Category Name</td>
								<td><input type='text' name='up_sub_cat' value='".$row['sub_cat_name']."'></td>
							</tr>
						</table>
						<center><button name='update_sub_cat'>Update Sub Category</button></center>
						</form>";

						if(isset($_POST['update_sub_cat']))
						{
							$cat_name=$_POST['main_cat'];
							$sub_cat_name=$_POST['up_sub_cat'];

							$update_cat=$con->prepare("UPDATE sub_cat SET sub_cat_name='$sub_cat_name',cat_name='$cat_name' sub_cat_id='$sub_cat_id'");
							if($update_cat->execute())
							{
								echo "<script>alert('Subcategory updated successfuly');</script>";
								echo "<script>window.open('index.php?viewall_sub_cat','_self');</script>";
							}
						}

		}
	}
?> 