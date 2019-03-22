<!DOCTYPE html>
<html>
<head>
	<title>Login to Admin dashboard</title>
</head>
<body>
	<h3>Enter your login credentials to login to the Admin Dashboard</h3>
	<form action="singlePage.php" method="post">
		<label>Username :
			<input type="text" name="user" placeholder="Enter your Username">
			
		</label><br>
		<label>Password :
			<input type="Password" name="pass" placeholder="Enter Password">
			
		</label><br>
		<button type="submit" name="Login" >Log me in!</button>
	</form><br><hr>

	<h3>Trial</h3>
	<form action="singlePage.php" method="get">
		<p>Length :
			<input type="number" name="Length">
			
		</p>
		<p>Width :
			<input type="number" name="Length">
			
		</p><br>
		<button type="submit" name="calculate">Calculate!!</button>
	</form>
	<?php 
     function calculateArea($l, $w){
     	$area = $l * $w;
     	return $area;

     	if (isset($_GET['calculate'])) {
     		$Length = $_GET['Length'];
     		$Width = $_GET['Width'];

     		echo "The area of a rectangle with length $Length and width $Width =" . calculateArea($Length, $Width);
     	}

     }

	 ?>

	 <h3><hr>Assignment <br></h3>
	 <form action="singlePage.php"  method="post">
	 	<label>CITY :
	 		<input type="text" name="CITY" placeholder="Enter your CITY?">
		</label><br>
		<label>Month :
		<form>
	<select>
		<option>January</option>
		<option>February</option>
		<option>March</option>
		<option>April</option>
		<option>May</option>
		<option>June</option>
		<option>July</option>
		<option>August</option>
		<option>September</option>
		<option>October</option>
		<option>November</option>
		<option>December</option>
		<?php 
       for ($i=January; $i <=December ; $i++) { 
       	echo "<option>$i</option>";
       }
		 ?>
	</select>
</form>
	</label><br>
		<label> Year:
	 		<input type="text" name="year" placeholder="Which Year?">
		</label><br>

		<label> Weather:
		<input type="checkbox" name="weather[]" value="sunny">sunshine
		<input type="checkbox" name="weather[]" value="rainy">rainy
		<input type="checkbox" name="weather[]" value="cloudy">cloudy
		<input type="checkbox" name="weather[]" value="hails" >hails
		<input type="checkbox" name="weather[]" value="windy">windy
		<input type="checkbox" name="weather[]" value="snowy">snowy
	 	</label><br>
	 	<button type="submit"  name="check">submit</button>
	 </form>

</body>
</html>

<?php 
    //check if submit button has been clicked
if(isset($_POST['Login'])){
	$Username = $_POST['user'];
	$pass = $_POST['pass'];
	$_SESSION['user'] = $Username;

    //echo "User" . $Username . " : Password :" . $pass;
    if ($Username == "Admin" && $pass == "1234") {
    	//login successful
    	//redirect to admin dashboard
    	header("Location: Admin.php");
    }else {
    	echo "<h5>Wrong Username/Password </h5>";
    }

}

 ?>
 <?php 
     echo "<h2>submit the Form</h2>";
     echo "<pre>";
     print_r($_POST);
     echo "</pre>";
     if (isset($_POST['submit'])) {
     	$CITY = $_POST['city'];
     	$Year = $_POST['Year'];
     	$Month = $_POST['Month'];

     	echo "In " .$CITY ." the month of " . $Month . " " . $Year . "you experienced the following weather condition :";

     	$Weather = $_POST['Weather'];
     	echo "<ul>";
     	foreach ($Weather as $condition) {
     		echo "<li>$condition</li>";
     	}
     	echo "</ul>";
     }

      echo "<hr>";
     $transportationModes = array("Automobile", "Jet", "Ferry", "Subway");
     //print array
     echo "<pre>";
     echo $transportationModes;
     print_r($transportationModes);
     echo "</pre>";
     echo "Travel takes many forms,whether across town ,across the country or around the world. Here are some common modes of transportation.";
     
	  ?>


	  <h2>User input exercise 2</h2>
	  <p><b>In this exercise you will create an array, print it to the browser, then ask the user to add to it</b><b><br>Create an array of modes of transportation ,including <mark>Automobile, Jet , Ferry, Subway.</mark>Print the following statement to the. <mark>Travel takes many forms,whether across town,across country or around t5he world. Here is a list of some common modes of transportation :</mark>Follow this with an unorderd list created by iterating through the array variable you created.  </p>


	  