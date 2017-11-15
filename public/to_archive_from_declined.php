<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
	$declined = find_declined_reservation_by_id($_GET["id"]);
?>


		<?php 
				$firstname = $declined["First_Name"];  
				$lastname = $declined["Last_Name"];  
				$username = $declined["Username"]; 
				$email = $declined["Email"];
				$address = $declined["Address"];  
				$check_in = $declined["Check_in"]; 
				$check_out = $declined["Check_out"]; 
				$nights = $declined["Number_Of_Nights"]; 
				$room_type = $declined["Room_Type"]; 
				$payment = $declined["Payment"];  
				$status = $declined["Status"];
				
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

                    $id = $declined["id"];	

                    $query = "DELETE FROM declined WHERE id = {$id} LIMIT 1";
					$result = mysqli_query($connection, $query);

					if($result && mysqli_affected_rows($connection) == 1){
						// success
						 $_SESSION["message"] = "Reservation has been successfully archived!";
						redirect_to("declined_reservations.php");
					}else{
						//failure
						redirect_to("declined_reservations.php");
					}
             
                }else{
                    //failure
                    $_SESSION["message"] = "Sorry, an error occured while archiving the reservation. ";
                }

		?>
