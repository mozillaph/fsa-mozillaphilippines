<?php
include 'database.php';
$id = $_GET['form'];
if ($id=='newfsa') {
	if(isset($_POST['submit'])){
		$var1 = $_POST['first_name'];
		$var2 = $_POST['last-name'];
		$var3 = $_POST['email-add'];
		$var4 = $_POST['phone_number'];
		$var5 = $_POST['birthday'];
		$var6 = $_POST['school'];
		$var7 = $_POST['degree'];
		$var8 = $_POST['program'];
		$var9 = $_POST['year-entered'];
		$var10 = $_POST['expected-grad'];
		$var11 = $_POST['home-add'];
		$var12 = $_POST['city-add'];
		$var13 = $_POST['fb'];
		$var14 = $_POST['twitter'];
		$var15 = $_POST['blog-web'];
		$var16 = $_POST['ntl-orgs'];
		$var17 = $_POST['uni-orgs'];

       $query = "INSERT INTO newfsa(First_Name, Last_Name, Email_Add, Phone_Number, Birthday, School, Degree, Program, Year_Entered, Expected_Grad, Home_Add, City_Add, Fb_Link, Twitter_Link, Blog_Web, Ntl_Org, Uni_Org, date_reg)  VALUES('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7', '$var8', '$var9', '$var10', '$var11', '$var12', '$var13', '$var14', '$var15', '$var16', '$var17', NOW())";
       mysqli_query($dbc, $query);
              echo "<script>window.location.replace('../success.html');</script>";
   }
}else if ($id=='renewfsa') {
	if(isset($_POST['submit'])){
		$var1 = $_POST['first_name'];
		$var2 = $_POST['last-name'];
		$var3 = $_POST['email-add'];
		$var4 = $_POST['phone_number'];
		$var5 = $_POST['birthday'];
		$var6 = $_POST['school'];
		$var7 = $_POST['degree'];
		$var8 = $_POST['program'];
		$var9 = $_POST['year-entered'];
		$var10 = $_POST['expected-grad'];
		$var11 = $_POST['home-add'];
		$var12 = $_POST['city-add'];
		$var13 = $_POST['fb'];
		$var14 = $_POST['twitter'];
		$var15 = $_POST['blog-web'];
		$var16 = $_POST['ntl-orgs'];
		$var17 = $_POST['uni-orgs'];

       $query = "INSERT INTO renewfsa(First_Name, Last_Name, Email_Add, Phone_Number, Birthday, School, Degree, Program, Year_Entered, Expected_Grad, Home_Add, City_Add, Fb_Link, Twitter_Link, Blog_Web, Ntl_Org, Uni_Org, date_reg)  VALUES('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7', '$var8', '$var9', '$var10', '$var11', '$var12', '$var13', '$var14', '$var15', '$var16', '$var17', NOW())";
       mysqli_query($dbc, $query);
              echo "<script>window.location.replace('../success.html');</script>";
   }
}else if ($id=='fsaalumni') {
	if(isset($_POST['submit'])){
		echo 'ew';
		$var1 = $_POST['first_name'];
		$var2 = $_POST['last-name'];
		$var3 = $_POST['email-add'];
		$var4 = $_POST['phone_number'];
		$var5 = $_POST['birthday'];
		$var6 = $_POST['school'];
		$var8 = $_POST['program'];
		$var11 = $_POST['home-add'];
		$var12 = $_POST['city-add'];
		$var13 = $_POST['fb'];
		$var14 = $_POST['twitter'];
		$var15 = $_POST['blog-web'];

       $query = "INSERT INTO alumni(First_Name, Last_Name, Email_Add, Phone_Number, Birthday, School, Program, Home_Add, City_Add, Fb_Link, Twitter_Link, Blog_Web, date_reg)  VALUES('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var8', '$var11', '$var12', '$var13', '$var14', '$var15', NOW())";
       mysqli_query($dbc, $query);
       echo "<script>window.location.replace('../success.html');</script>";
   }
}else{
	if(isset($_POST['submit'])){
		echo 'ew';
		$var1 = $_POST['first_name'];
		$var2 = $_POST['last-name'];
		$var3 = $_POST['email-add'];
		$var4 = $_POST['phone_number'];
		$var5 = $_POST['birthday'];
		$var6 = $_POST['school'];
		$var8 = $_POST['program'];
		$var11 = $_POST['home-add'];
		$var12 = $_POST['city-add'];
		$var13 = $_POST['fb'];
		$var14 = $_POST['twitter'];
		$var15 = $_POST['blog-web'];

       $query = "INSERT INTO fsaadmin(First_Name, Last_Name, Email_Add, Phone_Number, Birthday, School, Program, Home_Add, City_Add, Fb_Link, Twitter_Link, Blog_Web, date_reg)  VALUES('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var8', '$var11', '$var12', '$var13', '$var14', '$var15', NOW())";
       mysqli_query($dbc, $query);
              echo "<script>window.location.replace('../success.html');</script>";
   }

}

?>