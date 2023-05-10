<?php
	  
	
	require("dbconnect.php");            
        
        $i_firstname = $_POST['firstName'];
        $i_lastname = $_POST['lastName'];
        $i_email = $_POST['Email'];
    	  $i_phone = $_POST['phone'];
	  $i_message = $_POST['message'];
	  $i_reason = $_POST['reason'];
			
			
	   
    $sql = "INSERT INTO contact "."(fname, lname, email, phone, reason, message) "."VALUES ".
               "('$i_firstname','$i_lastname','$i_email', '$i_phone','$i_reason','$i_message')";
            
			//mysqli_select_db($conn,'university');
    $retval = mysqli_query($conn, $sql); // procedural execution of query
         
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }
    ?>   
    <html>
  <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Success</title>
    <style>
      body {
        background-color: #DCD1CB;
        font-family: Arial, sans-serif;
      }

    </style>
    
  </head>
  <body>
    <body style="background-color:#DCD1CB ;">
      <h1 style="color:#54463F; padding:20px;">Thanks! Your message has been sent!</h1>
      
      <div class="container" >
      <form action="https://capstone-project.guyramos.repl.co/"
        target="_blank">
        <button style="color:#54463F; margin-left: 300px; " type="submit" ><b>Home</b></button>
      </form>
    </div>
     
  </body>
</html>
			
<?php		
    mysqli_close($conn);    

?>
