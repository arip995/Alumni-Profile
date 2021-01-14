
<?php
     include 'connection.php'; 
    session_start();
 ?>
 <!DOCTYPE html><html>
     <head>       
  <meta charset="UTF-8">  
        <title>ITSourceCode.Com</title>
    </head>   
 <body>    
 	    <?php   
 	         if (!isset($_SESSION['username'])) {
 	    ?>      
 	      <h5>Login</h5> 
 	           <form method="post" action="login-action.php">   
 	    	      <label>Username:</label><br>  
 	    	      <input type="text" name="username" /><br> 
 	    	      <label>Password:</label><br>    
 	    	     <input type="password" name="password" /><br> 
 	    	     <input type="submit" value="Login" />   
 	    	  </form>        Not a member yet? Click <a href="registration.php">here</a> to register.  
			 <?php }
			  else 
 	    	if (isset($_SESSION['username'])) { 
 	    		?>      
 	    		  <a href="profile.php?user=<?php echo $_SESSION['username'] ?>" title="View My Profile"><?php echo $_SESSION['username'] ?></a> | <a href="logout.php">Logout</a>       
 	    	     <?php }    
 	    	    ?>      
 	    	  <?php     
 	    	       if (isset($_SESSION['username'])) {   
 	    		     $users = $mysqli->query("SELECT * FROM users");
 	    	          while ($user_data = $users->fetch_assoc()) { ?><br><br> 
 	    	          <b>#<?php echo $user_data['user_id'] ?></b> 
 	    	 <?php echo $user_data['username'] ?> | <a href="profile.php?user=<?php echo $user_data['username'] ?>">View Profile</a>            
 	    	    <?php }          
 	    }      
 	    ?>    
 	</body>
 </html>