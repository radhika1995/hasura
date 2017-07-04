
        <?php 
        $db = pg_connect('host=c100.hasura.me dbname=postgres user=admin password=1f2d1e2e67df'); 

        $fname= pg_escape_string($_POST['fname']); 
        $lname = pg_escape_string($_POST['lname']);
		$Mobile_no = pg_escape_string($_POST['mobileno']);
        $email = pg_escape_string($_POST['email']);
		$gender= pg_escape_string($_POST['gender']);
		$DOB= pg_escape_string($_POST['dob']);
		$password = pg_escape_string($_POST['password']);
		

		
		
		
        $query = "INSERT INTO user_detail(fname, lname,Mobile_no, email,gender,DOB,password) VALUES('" . $fname . "', '" . $lname . "', '" . $mobileno . "', '" . $email . "', '" . $gender . "', '" . $DOB . "', '" . $password . "')"; 
      

	  $result = pg_query($query); 
        if (!$result) { 
            $errormessage = pg_last_error(); 
            echo "Error with query: " . $errormessage; 
            exit(); 
        } 
        printf ("These values were inserted into the database - %s %s %s", $firstname, $surname, $emailaddress); 
        pg_close(); 
        ?> 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           