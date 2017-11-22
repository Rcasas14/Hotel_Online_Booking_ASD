<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>


<?php
	$pending = find_pending_reservation_by_id($_GET["id"]);
?>


		<?php 
				$firstname = $pending["First_Name"];  
				$lastname = $pending["Last_Name"];  
				$username = $pending["Username"]; 
				$email = $pending["Email"];
				$address = $pending["Address"];  
				$check_in = $pending["Check_in"]; 
				$check_out = $pending["Check_out"]; 
				$nights = $pending["Number_Of_Nights"]; 
				$room_type = $pending["Room_Type"]; 
				$payment = $pending["Payment"];  
				$status = $pending["Status"];
				
		?>	

		<?php

				$query  = "INSERT INTO declined (";
                $query .= " First_Name, Last_Name, Username, Email, Address, Check_in, Check_out, Number_Of_Nights, Room_Type, Payment, Status";
                $query .= ") VALUES (";
                $query .= " '{$firstname}', '{$lastname}', '{$username}', '{$email}', '{$address}', '{$check_in}', '{$check_out}', {$nights}, '{$room_type}', '{$payment}', 'DECLINED'";
                $query .= ")";

                $result = mysqli_query($connection, $query);

                if($result){
                    // success

                    $id = $pending["id"];	

                    $query = "DELETE FROM pending WHERE id = {$id} LIMIT 1";
					$result = mysqli_query($connection, $query);

					if($result && mysqli_affected_rows($connection) == 1){
						// success
						 $_SESSION["message"] = "Reservation has been successfully declined!";
						redirect_to("pending_reservations.php");
					}else{
						//failure
						redirect_to("pending_reservations.php");
					}
             
                }else{
                    //failure
                    $_SESSION["message"] = "Sorry, an error occured while declining the reservation. ";
                }

		?>
