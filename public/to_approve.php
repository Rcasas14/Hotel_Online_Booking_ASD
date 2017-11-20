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

				$query  = "INSERT INTO approved (";
                $query .= " First_Name, Last_Name, Username, Email, Address, Check_in, Check_out, Number_Of_Nights, Room_Type, Payment, Status";
                $query .= ") VALUES (";
                $query .= " '{$firstname}', '{$lastname}', '{$username}', '{$email}', '{$address}', '{$check_in}', '{$check_out}', {$nights}, '{$room_type}', '{$payment}', 'APPROVED'";
                $query .= ")";

                $result = mysqli_query($connection, $query);

                /*
                if($result){
                    // success
                	$room_type = $pending["Room_Type"]; 

                	$query  = "UPDATE rooms SET ";
					$query .= "Available = 'No' ";
					$query .= "WHERE Room_Type = '{$room_type}' ";
					$query .= "LIMIT 1";

					$result = mysqli_query($connection, $query);
				*/
					if($result && mysqli_affected_rows($connection) == 1){
						// success
						$id = $pending["id"];	

	                    $query = "DELETE FROM pending WHERE id = {$id} LIMIT 1";

						$result = mysqli_query($connection, $query);

						if($result && mysqli_affected_rows($connection) == 1){

							$room_type = $pending["Room_Type"];	
							$check_in = $pending["Check_in"]; 
							$check_out = $pending["Check_out"]; 

							$query  = "SELECT * ";
							$query .= "FROM pending ";
							$query .= "WHERE Room_Type = '{$room_type}' AND Check_in = '{$check_in}' AND Check_out = '{$check_out}' ";

							$pending_set = mysqli_query($connection, $query);

							if($pending_set  && mysqli_affected_rows($connection) >= 1){

								while($pending = mysqli_fetch_assoc($pending_set)) {

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

									$query  = "INSERT INTO declined (";
					                $query .= " First_Name, Last_Name, Username, Email, Address, Check_in, Check_out, Number_Of_Nights, Room_Type, Payment, Status";
					                $query .= ") VALUES (";
					                $query .= " '{$firstname}', '{$lastname}', '{$username}', '{$email}', '{$address}', '{$check_in}', '{$check_out}', {$nights}, '{$room_type}', '{$payment}', 'DECLINED'";
					                $query .= ")";

					                $result = mysqli_query($connection, $query);

					                if($result){

					                	$query = "DELETE FROM pending WHERE Room_Type = '{$room_type}' AND Check_in = '{$check_in}' AND Check_out = '{$check_out}' ";

										$result = mysqli_query($connection, $query);

										if($result){
											// success
											//$_SESSION["message"] = "Reservation has been successfully approved!";
											//redirect_to("pending_reservations.php");
											$message = "Reservation has been successfully approved!";
               				 				echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"pending_reservations.php\");</script>"; 
										}else{
											//failure
											//$_SESSION["message"] = "Sorry, an error occured while approving the reservation. ";
											//redirect_to("pending_reservations.php");
											$message = "Sorry, an error occured while approving the reservation. ";
               				 				echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"pending_reservations.php\");</script>"; 
										}

					                }
								}

							}elseif($pending_set  && mysqli_affected_rows($connection) == 0){
								//$_SESSION["message"] = "Reservation has been successfully approved!";
								//redirect_to("pending_reservations.php");
								$message = "Reservation has been successfully approved!";
               				 	echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"pending_reservations.php\");</script>"; 
							}

							
						}		

					}else{
                    //failure
                    //$_SESSION["message"] = "Sorry, an error occured while approving the reservation. ";
					 	$message = "Sorry, an error occured while approving the reservation. ";
               			echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"pending_reservations.php\");</script>"; 
               		}
				
       
                //}
				
		?>
