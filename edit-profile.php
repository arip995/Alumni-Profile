<?php
include 'connection.php'; 
   if (isset($_GET['user'])) {
	  $user = $_GET['user'];
	  $get_user = $mysqli->query("SELECT * FROM users WHERE username = '$user'");
	  $user_data = $get_user->fetch_assoc();
    } else {
	   header("Location: index.php");
    }?>
<!DOCTYPE html>
<html>
    <head>  
	<meta charset="UTF-8">
		<title><?php echo $user_data['username'] ?>'s Profile Settings</title>
    </head> 
	<body>        <a href="index.php">Home</a> | Back to <a href="profile.php?user=<?php echo $user_data['username'] ?>"><?php echo $user_data['username'] ?></a>'s Profile        
		<h3>Update Profile Information</h3> 
		       <form method="post" action="update-profile-action.php?user=<?php echo $user_data['username'] ?>">            			<label>Name:</label><br> 
			         <input type="text" name="fullname" value="<?php echo $user_data['full_name'] ?>" /><br> 
			         <label>Age:</label><br>
			         <input type="text" name="age" value="<?php echo $user_data['age'] ?>" /><br> 
			         <label>Gender:</label><br> 
			         <input type="text" name="gender" value="<?php echo $user_data['gender'] ?>" /><br>
			         <label>Address:</label><br>          
			         <input type="text" name="address" value="<?php echo $user_data['address'] ?>" /><br><br>  
			         <input type="submit" name="update_profile" value="Update Profile" />        
		</form>    
	</body>
</html>