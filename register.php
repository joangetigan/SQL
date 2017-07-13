<?php
require 'connection.php';
$message = '';

if (isset($_POST['register'])) {
	$firstname = $_POST['firstname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$retype = $_POST['retype'];
	$email = $_POST['email'];
	$file = $_FILES["file"]["name"];

	if ($password==$retype) {
		$password = sha1($password);

		$sql = "INSERT INTO users(firstname,username,password,email,ebook)
		VALUES('$firstname','$username','$password','$email','$file')";
		mysqli_query($connect,$sql);
		mkdir("uploads/$username");
		$target_dir = "uploads/$username/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$uploadOk = 1;
		$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
		move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

		$message = "Registered successfully.<br>Your application requires approval from the admin.<br>We'll get back to you the soonest as we can.";
	} else {
		$message = "Passwords did not match.";
	}

}
 ?>

<?php 
function get_title() {
	echo "Sign Up - Book Musketeers";
}

function display_content() {
	global $message;
	echo '
	<form method="POST" enctype="multipart/form-data">
	<ul class="form-signup">
		<h2>Signup, Share and Read</h2>
		<li><label>First Name<span class="required">*</span></label><input type="text" name="firstname" id="firstname" required></li>

	    <li><label>Username<span class="required">*</span></label><input type="text" name="username" id="username" required><br><span id="confirm" autocomplete="off"></span></li>

	    <li><label>Password<span class="required">*</span></label><input type="password" name="password" required></li>

	    <li><label>Retype Password<span class="required">*</span></label><input type="password" name="retype" required></li>

	    <li><label>Email<span class="required">*</span></label><input type="email" name="email" required><br><span id="validate" autocomplete="off"></span></li>

		<li><label>Ebook<span class="required">*</span></label><input type="file" name="file" required></li><br>

	    <li><input type="submit" name="register" value="Submit" id="submit"></li>
	</ul>
	</form>
	    '.$message.'<br>';
}

require_once 'template.php';

 ?>


<script>
$("#username").blur(function(){
    var username = $('#username').val();

    $.post("check_username.php",
    {
        username: username,
    },
    function(data, status){
        $('#confirm').html(data);

        if (data=="Username available.") {
        	$('#submit').prop("disabled",false);
    	} 
    });
});

</script>
