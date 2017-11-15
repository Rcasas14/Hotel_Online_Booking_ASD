<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
	$approved = find_approved_reservation_by_id($_GET["id"]);
?>


		<?php 
				$firstname = $approved["First_Name"];  
				$lastname = $approved["Last_Name"];  
				$username = $approved["Username"]; 
				$email = $approved["Email"];
				$address = $approved["Address"];  
				$check_in = $approved["Check_in"]; 
				$check_out = $approved["Check_out"]; 
				$nights = $approved["Number_Of_Nights"]; 
				$room_type = $approved["Room_Type"]; 
				$payment = $approved["Payment"];  
				$status = $approved["Status"];
				
		?>	

		<?php

				$query  = "INSERT INTO archived (";
                $query .= " First_Name, Last_Name, Username, Email, Address, Check_in, Check_out, Number_Of_Nights, Room_Type, Payment, Status";
                $query .= ") VALUES (";
                $query .= " '{$firstname}', '{$lastname}', '{$username}', '{$email}', '{$address}', '{$check_in}', '{$check_out}', {$nights}, '{$room_type}', '{$payment}', 'ARCHIVED'";
                $query .= ")";

                $result = mysqli_query($connection, $query);

               if($result){
                    // success

                    $id = $approved["id"];	

                    $query = "DELETE FROM approved WHERE id = {$id} LIMIT 1";
					$result = mysqli_query($connection, $query);

					if($result && mysqli_affected_rows($connection) == 1){
						// success
						 $_SESSION["message"] = "Reservation has been successfully archived!";
						redirect_to("approved_reservations.php");
					}else{
						//failure
						redirect_to("approved_reservations.php");
					}
             
                }else{
                    //failure
                    $_SESSION["message"] = "Sorry, an error occured while archiving the reservation. ";
                }

		?>
