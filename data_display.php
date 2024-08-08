<?php
//session start every time used for session store or get value.
//Week 5 Pa Lacie Hendershot
session_start();
//isset function used for if user submit throug button then condition of button set or not
if (isset($_POST['submit'])) {
	$_SESSION['dob']=$_POST['dob'];
	//setcookie used for value set in cookie argumnet like cookie_name,cookie value, time how long u take this cookie 
	setcookie("cookie_name", $_POST['name'], time() + (86400 * 30), "/"); // 86400 = 1 day
	// echo $_COOKIE['cookie_name'];
	//cookie set and value assign to post name $_COOKIE['cookie_name']
	$_COOKIE['cookie_name']=$_POST['name'];
	echo "<h2>The name in the Cookie is:".$_COOKIE['cookie_name']."</h2>";
	echo "<h2>The Birthdate in the Session is:".$_SESSION['dob']."</h2>";
	
}
//else part if user enter this page without submit
else{
	echo "<h2>The name in the Cookie is:".$_COOKIE['cookie_name']."</h2>";
	echo "<h2>The Birthdate in the Session is:".$_SESSION['dob']."</h2>";

}
//link for back to entry page
echo "<br><br><a href='data_entry.php'>Back to Data Entry Page</a>";
?>