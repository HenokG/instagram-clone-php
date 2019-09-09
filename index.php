<!DOCTYPE html>
<?php 
	error_reporting(0);
	require_once("connect.php");
 ?>
<html lang="en-us">
	<head>
		<title>Like Habesha</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-width=1">
		<meta name="author" content="Henok G">
		<meta name="copyright" content="Roha Software Solutions">
		<link rel="stylesheet" type="text/css" href="CSS/css/bootstrap.css">
		<link rel="stylesheet" href="CSS/index.css">
		<script src="JS/jQuery.js"></script>
		<script src="JS/bootstrap.js"></script>
		<noscript>
			<b><strong>Please Turn ON JavaScript To Visit My Site</strong></b>
			<style>.noJS{display: none;}</style>
		</noscript>
	</head>
	<style>
		body{
			background-image: url("Images/background_one.jpg");
			background-attachment: fixed;
			background-repeat: no-repeat;
			background-size: 100% 100%;
			color: white;
			font-family: helvetica,arial,sans-serif;
		}
	</style>
	<body>
	<div class="noJS">
		<h1>Like Habesha</h1>
		<p id="amazing">For Amazing Photo Sharing Experiene</p>
		<div class="maindiv">
			<button id="signupbutton" title="ለአዲስ ተጠቃሚዎች">Sign Up For New Account</button><br>
			<button id="signinbutton" title="ለነባር ተጠቃሚዎች">Sign In</button>
		</div>
		<a class="showmaindiv"><i class="icon-chevron-left icon-white"></i></a>
		<div class="signupdiv">
			<form method="POST" class="form-horizontal" onsubmit="return false;">
				<input type="text" id="first_name" name="first_name" placeholder="First Name" title="የራስዎ ስም" value="<?php echo $_POST['first_name'];?>">
				<input type="text" id="last_name" name="last_name" placeholder="Last Name" title="የአባት ስም" value="<?php echo $_POST['last_name'];?>"><br>
				Sex: <select name="sex" id="sex" title="ፆታ">
					<option>Male</option>
					<option>Female</option>
				</select><br>
                Birth Date: <select id="bdate" name="birth_month" title="የተወለዱበት ወር">
					<option>Jan</option>
					<option>Feb</option>
					<option>Mar</option>
					<option selected>Apr</option>
					<option>May</option>
					<option>Jun</option>
					<option>Jul</option>
					<option>Aug</option>
					<option>Sep</option>
					<option>Oct</option>
					<option>Nov</option>
					<option>Dec</option>
				</select>
				<select id="bdate" name="birth_date" title="የተወለዱበት ቀን">
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
				</select>
				<select id="bdate" name="birth_year" title="የተወለዱበት አመት">
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
					<option>2004</option>
					<option>2005</option>
					<option>2006</option>
					<option>2007</option>
					<option>2008</option>
					<option>2009</option>
					<option>2010</option>
					<option>2011</option>
					<option>2012</option>
					<option>2013</option>
					<option>2014</option>
					<option>2015</option>
					<option>2016</option>
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					<option>2021</option>
					<option>2022</option>
					<option>2023</option>
					<option>2024</option>
					<option>2025</option>
					<option>2026</option>
					<option>2027</option>
					<option>2028</option>
					<option>2029</option>
					<option>2030</option>
				</select><br>
				<input type="email" id="email" placeholder="Email Address" name="email" title="የኢሜይል አድራሻዎ" value="<?php echo $_POST['email'];?>"><br>
				<div class="input-prepend" >
				 	<span class="add-on" >09</span>
					<input type="text" id="phone" name="phone" placeholder="Phone Number" class="span2" title="ስልክ ቁጥርዎ '09' ን ሳይጨምር" value="<?php echo $_POST['phone'];?>">
				</div><br>
				<input type="text" id="country" name="country" placeholder="Home Town" title="የመኖርያ ከተማ" value="<?php echo $_POST['country'];?>"><br>
				<input type="text" id="username" name="username" placeholder="Username" title="መጠቀሚያ ስም" value="<?php echo $_POST['username'];?>"><br>
				<input type="password" id="password_one" name="password_one" placeholder="Enter A Password" title="የሚስጥር ቁጥርዎ" value="<?php echo $_POST['password_one'];?>"><br>
				<input type="password" id="password_two" name="password_two" placeholder="Retype Your Password" title="የሚስጥር ቁጥርዎን ይድገሙ" value="<?php echo $_POST['password_two'];?>"><br>
				<button title="መዝግብ" id="signupafterform" name="signup" onclick="clear_inputs();">Sign Up</button><br>
				<span id="errors"></span>
			</form>
		</div>
		<div class="signindiv" action="">
			<form method="POST" onsubmit="return false;">
				<input type="text" id="signin_email" placeholder="Email Address" class="signininputs" name="signin_email" title="መጠቀሚያ ስም" value="<?php echo $_POST['signin_email'];?>"><br>
				<input type="password" id="signin_password" placeholder="Password" class="signininputs" name="signin_password" title="የሚስጥር ቁጥርዎ" value="<?php echo $_POST['signin_password'];?>"><br>
				<button title="ግባ" id="signinafterform" name="signin" onclick="clear_signin_inputs();">Sign In</button><br>
				<span id="signinerrors"></span>
			</form>
		</div>
	</div>
	</body>
	<script>
		$(function(){
			$("#signupbutton").click(function(){
				$(".maindiv").fadeOut("slow",function(){
					$(".signupdiv").fadeIn("slow");
					$(".showmaindiv").fadeIn("slow");
				});
			});
			$(".showmaindiv").click(function(){
				$(".signindiv").fadeOut("slow",function(){
					$(".signupdiv").fadeOut("slow",function(){
						$(".maindiv").fadeIn("slow");
						$(".showmaindiv").fadeOut("slow");
					});
				});
			});
			$("#signinbutton").click(function(){
				$(".maindiv").fadeOut("slow",function(){
					$(".signindiv").fadeIn("slow");
					$(".showmaindiv").fadeIn("slow");
				});
			});
		});
		function clear_inputs(){
			var error_report = document.getElementById("errors");
			var first_name = document.getElementById('first_name');
			var last_name = document.getElementById('last_name');
			var email = document.getElementById('email');
			var phone = document.getElementById('phone');
			var country = document.getElementById('country');
			var username = document.getElementById('username');
			var password_one = document.getElementById('password_one');
			var password_two = document.getElementById('password_two');

			if(first_name.value==""){
				error_report.innerHTML = "You Must Enter Your First Name.";
			}
			else if (first_name.value.search(/[^a-z,^A-Z]/)!=-1) {
				error_report.innerHTML = "Your First Name Should Only Contain Alphabetic Letters.";
			}
			else if (first_name.value.length>30) {
				error_report.innerHTML = "Your First Name Should Not Be Greater Than 30 Characters.";
			}
			else if (first_name.value.length<2) {
				error_report.innerHTML = "Your First Name Should Not Be Less Than 2 Characters.";
			}
			else if(last_name.value==""){
				error_report.innerHTML = "You Must Enter Your Last Name.";
			}
			else if (last_name.value.search(/[^a-z,^A-Z]/)!=-1) {
				error_report.innerHTML = "Your Last Name Should Only Contain Alphabetic Letters.";
			}
			else if (last_name.value.length>30) {
				error_report.innerHTML = "Your Last Name Should Not Be Greater Than 30 Characters.";
			}
			else if (last_name.value.length<2) {
				error_report.innerHTML = "Your Last Name Should Not Be Less Than 2 Characters.";
			}
			else if (email.value==""){
				error_report.innerHTML = "You Must Enter Your Email Address.";
			}
			else if (!(email.value.search(/@yahoo.com/i)!=-1 || email.value.search(/@gmail.com/i)!=-1 || email.value.search(/@hotmail.com/i)!=-1 || email.value.search(/@outlook.com/i)!=-1)){
				error_report.innerHTML = "Only Email Addresses From Google, Yahoo, Hotmail And Outlook Are Allowed.";
			}
			else if (email.value.length>30){
				error_report.innerHTML = "Your Email Address Should Not Be Greater Than 30 Characters.";
			}
			else if (phone.value==""){
				error_report.innerHTML = "You Must Enter Your Phone Number.";
			}
			else if (phone.value.search(/[^0-9]/)!=-1){
				error_report.innerHTML = "You Phone Number Should Only Contain Numeric Value.";
			}
			else if (phone.value.length!=8){
				error_report.innerHTML = "Your Phone Number Is Not Valid.";
			}
			else if (country.value==""){
				error_report.innerHTML = "You Must Enter Your Home Town.";
			}	
			else if (country.value.search(/[^a-z,^" ",^A-Z]/)!=-1){
				error_report.innerHTML = "Your Home Town Should Only Contain Alphabetic Letters.";
			}
			else if (country.value.length>30) {
				error_report.innerHTML = "Your Home Town Should Not Be Greater Than 30 Characters.";
			}
			else if (country.value.length<3) {
				error_report.innerHTML = "Your Home Town Should Not Be Less Than 3 Characters.";
			}
			else if (username.value==""){
				error_report.innerHTML = "You Must Enter Username.";
			}
			else if (username.value.length>30){
				error_report.innerHTML = "Your Username Should Not Be Greater Than 30 Characters.";
			}
			else if (username.value.length<3) {
				error_report.innerHTML = "Your Username Should Not Be Less Than 3 Characters.";
			}
			else if (password_one.value==""){
				error_report.innerHTML = "You Must Enter Password.";
			}
			else if (password_one.value.length>16){
				error_report.innerHTML = "Your Password Should Not Be Greater Than 16 Characters.";
			}
			else if (password_one.value.length<4) {
				error_report.innerHTML = "Your Password Should Not Be Less Than 4 Characters.";
			}
			else if (password_two.value==""){
				error_report.innerHTML = "You Must Retype Password.";
			}
			else if (password_two.value.length>16){
				error_report.innerHTML = "Your Password Should Not Be Greater Than 16 Characters.";
			}
			else if (password_two.value.length<4) {
				error_report.innerHTML = "Your Password Should Not Be Less Than 4 Characters.";
			}
			else if (password_one.value!=password_two.value){
				error_report.innerHTML = "Your Passwords Are Different From Each Other. You Must Enter Exact Passwords.";
			}
			else{
				$("form").attr("onsubmit","return true;");
			}
		}
		function clear_signin_inputs(){
			var error_report = document.getElementById("signinerrors");
			var email = document.getElementById("signin_email");
			var password = document.getElementById("signin_password");
			if (email.value==""){
				error_report.innerHTML = "You Must Enter Your Email Address.";
			}
			else if (!(email.value.search(/@yahoo.com/i)!=-1 || email.value.search(/@gmail.com/i)!=-1 || email.value.search(/@hotmail.com/i)!=-1 || email.value.search(/@outlook.com/i)!=-1)){
				error_report.innerHTML = "Only Email Addresses From Google, Yahoo, Hotmail And Outlook Are Allowed.";
			}
			else if (email.value.length>30){
				error_report.innerHTML = "Your Email Address Should Not Be Greater Than 30 Characters.";
			}
			else if (password.value==""){
				error_report.innerHTML = "You Must Enter Your Password.";
			}
			else if (password.value.length<4) {
				error_report.innerHTML = "Your Password Should Not Be Less Than 4 Characters.";
			}
			else if (password.value.length>16) {
				error_report.innerHTML = "Your Password Should Not Be Greater Than 16 Characters.";
			}
			else{
				$("form").attr("onsubmit","return true;");
			}
		}	
	</script>
<?php 
	$first_name = strip_tags(htmlspecialchars(stripslashes(trim($_POST['first_name']))));	
	$last_name = strip_tags(htmlspecialchars(stripslashes(trim($_POST['last_name']))));
	$sex = strip_tags(htmlspecialchars(stripslashes(trim($_POST['sex']))));
	$birth_date = strip_tags(htmlspecialchars(stripslashes(trim($_POST['birth_date']))));
	$birth_month = strip_tags(htmlspecialchars(stripslashes(trim($_POST['birth_month']))));
	$birth_year = strip_tags(htmlspecialchars(stripslashes(trim($_POST['birth_year']))));
	$birth = $birth_month."-".$birth_date."-".$birth_year;
	$email = strip_tags(htmlspecialchars(stripslashes(trim($_POST['email']))));
	$phone = strip_tags(htmlspecialchars(stripslashes(trim($_POST['phone']))));	
	$country = strip_tags(htmlspecialchars(stripslashes(trim($_POST['country']))));		
	$username = strip_tags(htmlspecialchars(stripslashes(trim($_POST['username']))));	
	$password_one = $_POST['password_one'];
	$password_two = $_POST['password_two'];
	$signin_email = strip_tags(htmlspecialchars(stripslashes(trim($_POST['signin_email']))));
	$signin_password = $_POST['signin_password'];
	$date = date("M-d-Y");

	if (isset($_POST['signup'])){
		if (!($first_name=="")){
			if (!(preg_match('/[^a-zA-Z]/', $first_name))) {
				if (!(strlen($first_name)>30)) {
					if (!(strlen($first_name)<2)) {
						if (!($last_name=="")){
							if (!(preg_match('/[^a-zA-Z]/', $last_name))) {
								if (!(strlen($last_name)>30)) {
									if (!(strlen($last_name)<2)) {
										if (!($email=="")){
											if (!(!(stripos($email, "@gmail.com")!=false || stripos($email, "@yahoo.com")!=false || stripos($email, "@hotmail.com")!=false || stripos($email, "@outlook.com")!=false))){
												if (!(strlen($email)>30)){
													if (!($phone=="")){
														if (!(preg_match("/[^0-9]/", $phone))){
															if (!(strlen($phone)!=8)){
														if (!($country=="")){	
													if (!(preg_match('/[^a-zA-Z" "]/', $country))){
												if (!(strlen($country)>30)) {
											if (!(strlen($country)<3)) {
										if (!($username=="")){
									if (!(strlen($username)>30)){
								if (!(strlen($username)<3)) {
							if (!($password_one=="")){
						if (!(strlen($password_one)>16)){
					if (!(strlen($password_one)<4)) {
				if (!($password_two=="")){
			if (!(strlen($password_two)>16)){
		if (!(strlen($password_two)<4)) {
	if (!($password_one!=$password_two)){
			$duplicate_email_check = "SELECT * FROM users WHERE email='$email' LIMIT 1";
			$duplicate_username_check = "SELECT * FROM users WHERE username='$username' LIMIT 1";
			$insert_command = "INSERT INTO users(first_name, last_name, sex, birth_date, email, phone_number, home_town, username, password, signup_date) VALUES('$first_name', '$last_name', '$sex', '$birth', '$email', '$phone'	, '$country', '$username', '$password_one', '$date')";
			$stmt1 = $conn->prepare($duplicate_email_check);
			$stmt3 = $conn->prepare($duplicate_username_check);
			$stmt1->execute();
			$stmt3->execute();
			if ($stmt1->rowCount()==1) {
				echo "<label>Email Address Has Already Been Registered.</label>";
			}
			else if($stmt3->rowCount()==1){
				echo "<script>document.getElementById('errors').innerHTML = 'Username Has Been Taken Use A Different One';</script>";
				echo "<script>$('.maindiv').hide();$('.signupdiv').show();$('.showmaindiv').show();</script>";
			}
			else{
				session_start();
				$stmt = $conn->prepare($insert_command);
				$stmt->execute();
				$_SESSION['first_name'] = $first_name;
				$_SESSION['last_name'] = $last_name;
				$_SESSION['sex'] = $sex;
				$_SESSION['birth_date'] = $birth;
				$_SESSION['email'] = $email;
				$_SESSION['phone_number'] = $phone_number;
				$_SESSION['home_town'] = $home_town;
				$_SESSION['username'] = $username;
				$_SESSION['signup'] = $_POST['signup'];
				$_SESSION['signup_date'] = $date;
				$_SESSION['profile_picture'] = "Profile_Pictures/default_profile_picture.jpg";
	    		echo "<meta http-equiv=\"refresh\" content=\"0; url=welcome.html\">";                    
			}
		}}}}}}}}}}}}}}}}}}}}}}}}}}}}}
	else if (isset($_POST['signin'])) {
		if(!($signin_email=="")){
			if(!(!(stripos($signin_email, "@gmail.com")!=false || stripos($signin_email, "@outlook.com")!=false || stripos($signin_email, "@yahoo.com")!=false || stripos($signin_email, "@hotmail.com")!=false))){
				if(!(strlen($signin_email)>30)){
				if(!($signin_password=="")){
			if(!(strlen($signin_password)<4)) {
		if(!(strlen($signin_password)>16)){
			session_start();
			$select_command = "SELECT * FROM users WHERE email='$signin_email' AND password='$signin_password' LIMIT 				1";
			$stmt2 = $conn->prepare($select_command);
			$stmt2->execute();
			if ($stmt2->rowCount()==1){
				foreach ($stmt2 as $rows) {
					$_SESSION['first_name'] = $rows['first_name'];
					$_SESSION['last_name'] = $rows['last_name'];
					$_SESSION['sex'] = $rows['sex'];
					$_SESSION['birth_date'] = $rows['birth_date'];
					$_SESSION['email'] = $rows['email'];
					$_SESSION['username'] = $rows['username'];
					$_SESSION['phone_number'] = $rows['phone_number'];
					$_SESSION['home_town'] = $rows['home_town'];
					$_SESSION['signup_date'] = $rows['signup_date'];
					$_SESSION['profile_picture'] = $rows['profile_picture'];
				}
    			echo "<meta http-equiv=\"refresh\" content=\"0; url=welcome.html\">";                    
			}
			else{
				echo "<script>document.getElementById('signinerrors').innerHTML = 'Incorrect Email Or Password';</script>";
				echo "<script>$('.maindiv').hide();$('.signindiv').show();$('.showmaindiv').show();</script>";
			}
	}}}}}}}
 ?>
</html>