<?php
//require('..\inc\connect.php');
//session_start();
//Creates new record as per request
    //Connect to database
    $servername = "localhost";		//example = localhost or 192.168.0.0
    $username = "root";		//example = root
    $password = "";	
    $dbname = "cpms";
   // $plot = $_SESSION["plot"];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE status
    SET slotStatus 
    = CASE ID
    WHEN '1' THEN '".$_POST['ldrvalue']."'
    WHEN '2' THEN '".$_POST['ldrvalue2']."'
    WHEN '3' THEN '".$_POST['ldrvalue3']."'
    WHEN '4' THEN '".$_POST['ldrvalue4']."'
    ELSE slotStatus
    END
    WHERE ID IN('1', '2', '3', '4')";


    //if(empty($_POST['ldrvalue']))
    //{
		//$slot = $_POST['ldrvalue'];
        //$sql = "UPDATE status SET slot1Status = '".$_POST['ldrvalue']."' WHERE ID=1, SET slot1Status = '".$_POST['ldrvalue2']."' WHERE ID=2,slot1Status = '".$_POST['ldrvalue3']."' WHERE ID=3, slot1Status = '".$_POST['ldrvalue4']."' WHERE ID=4"; 
    //    }
    //else if(empty($_POST['ldrvalue2']))
      //  {
       // $slot2 = $_POST['ldrvalue2'];
       // $sql = "UPDATE status SET slotStatus = '".$_POST['ldrvalue2']."' WHERE ID=2"; 
      //  }
    //else if(empty($_POST['ldrvalue3']))
       // {
       // $slot3 = $_POST['ldrvalue3'];
      //  $sql = "UPDATE status SET slotStatus = '".$_POST['ldrvalue3']."' WHERE ID=3"; 
       // }
    //else if(empty($_POST['ldrvalue4']))
     //   {
       // $slot4 = $_POST['ldrvalue4'];
        //$sql = "UPDATE status SET slotStatus = '".$_POST['ldrvalue4']."' WHERE ID=4"; 
      //  }
       // $sql = "INSERT INTO status (slotStatus) VALUES ('".$slot."')" ;
	    
		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	//}


	$conn->close();
?>