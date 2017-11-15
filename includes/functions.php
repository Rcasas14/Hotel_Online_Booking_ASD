<?php

function redirect_to($new_location){
    header("Location: " . $new_location);
    exit;
}

function mysql_prep($string){
	global $connection;

	$escaped_string = mysqli_real_escape_string($connection, $string);
	return $escaped_string;
}

function confirm_query($result_set) {
	if(!$result_set) {
		die("Database query failed.");
	}
}

function form_errors($errors = array()){
	$output = "";

	if(!empty($errors)){
		$output .= "<div class =\"error\">";
		$output .= "Please fix the following errors:";
		$output .= "<ul>";
			foreach($errors as $key => $error) {
				$output .= "<li>";
				$output .= htmlentities($error);
				$output .= "</li>";
			}
		$output .= "</ul>";
		$output .= "</div>";
	}
	return $output;
}


// ADMINS -------------------------------------------------------------------------

function find_all_admins() {
	global $connection;

	$query  = "SELECT * ";
	$query .= "FROM admins ";
	$query .= "ORDER BY username ASC";

	$admin_set = mysqli_query($connection, $query);
	confirm_query($admin_set);

	return $admin_set;  
}

function find_admin_by_id($admin_id) {
	global $connection;

	$safe_admin_id = mysqli_real_escape_string($connection, $admin_id);

	$query  = "SELECT * ";
	$query .= "FROM admins ";
	$query .= "WHERE id = {$safe_admin_id} ";
	$query .= "LIMIT 1";
	
	$admin_set = mysqli_query($connection, $query);
	confirm_query($admin_set);

	if($admin = mysqli_fetch_assoc($admin_set)) {
		return $admin;
	}else{
		return null;
	}
}

function find_admin_by_username($username){
	global $connection;

	$safe_username = mysqli_real_escape_string($connection, $username);

	$query  = "SELECT * ";
	$query .= "FROM admins ";
	$query .= "WHERE username = '{$safe_username}' ";
	$query .= "LIMIT 1";
	$admin_set = mysqli_query($connection, $query);
	confirm_query($admin_set);

	if($admin = mysqli_fetch_assoc($admin_set)){
		return $admin;
	}else{
		return null;
	}
}


//CLIENTS -------------------------------------------------------------------------

function find_all_clients() {
	global $connection;

	$query  = "SELECT * ";
	$query .= "FROM clients ";
	$query .= "ORDER BY username ASC";

	$client_set = mysqli_query($connection, $query);
	confirm_query($client_set);

	return $client_set;  
}

function find_client_by_id($client_id) {
	global $connection;

	$safe_client_id = mysqli_real_escape_string($connection, $client_id);

	$query  = "SELECT * ";
	$query .= "FROM clients ";
	$query .= "WHERE id = {$safe_client_id} ";
	$query .= "LIMIT 1";
	
	$client_set = mysqli_query($connection, $query);
	confirm_query($client_set);

	if($client = mysqli_fetch_assoc($client_set)) {
		return $client;
	}else{
		return null;
	}
}

function find_client_by_username($username){
	global $connection;

	$safe_username = mysqli_real_escape_string($connection, $username);

	$query  = "SELECT * ";
	$query .= "FROM clients ";
	$query .= "WHERE username = '{$safe_username}' ";
	$query .= "LIMIT 1";

	$client_set = mysqli_query($connection, $query);
	confirm_query($client_set);

	if($client = mysqli_fetch_assoc($client_set)){
		return $client;
	}else{
		return null;
	}
}

function find_client_by_username_password($username, $password){
	global $connection;

	$safe_username = mysqli_real_escape_string($connection, $username);
	$safe_password = mysqli_real_escape_string($connection, $password);

	$query  = "SELECT * ";
	$query .= "FROM clients ";
	$query .= "WHERE username = '{$safe_username}' AND ";
	$query .= "hashed_password = '{$safe_password}' ";
	$query .= "LIMIT 1";

	$client_set = mysqli_query($connection, $query);
	confirm_query($client_set);

	if($client = mysqli_fetch_assoc($client_set)){
		return $client;
	}else{
		return null;
	}
}



//ROOMS --------------------------------------------------------------------

function find_all_rooms() {
	global $connection;

	$query  = "SELECT * ";
	$query .= "FROM rooms";

	$room_set = mysqli_query($connection, $query);
	confirm_query($room_set);

	return $room_set;  
}

function find_room_by_id($room_id) {
	global $connection;

	$safe_room_id = mysqli_real_escape_string($connection, $room_id);

	$query  = "SELECT * ";
	$query .= "FROM rooms ";
	$query .= "WHERE room_id = {$safe_room_id} ";
	$query .= "LIMIT 1";
	
	$room_set = mysqli_query($connection, $query);
	confirm_query($room_set);

	if($room = mysqli_fetch_assoc($room_set)) {
		return $room;
	}else{
		return null;
	}
}

function find_room_by_category($category) {
	global $connection;

	$safe_category = mysqli_real_escape_string($connection, $category);

	$query  = "SELECT * ";
	$query .= "FROM rooms ";
	$query .= "WHERE Category = {$safe_category}";
	
	$category_set = mysqli_query($connection, $query);
	confirm_query($category_set);

	return $category_set;
}

function find_all_categories() {
	global $connection;

	$query  = "SELECT distinct Category ";
	$query .= "FROM rooms";

	$category_set = mysqli_query($connection, $query);
	confirm_query($category_set);

	return $category_set;  
}



//RESERVATIONS ------------------------------------------------------------------------

function is_Available($room_type) {
	global $connection;

	$safe_room_type = mysqli_real_escape_string($connection, $room_type);

	$query  = "SELECT * ";
    $query .= "FROM rooms ";
    $query .= "WHERE Room_Type = '{$safe_room_type}' AND ";
    $query .= "Available = 'Yes' ";
    $query .= "LIMIT 1";

    $available_set = mysqli_query($connection, $query);
    confirm_query($available_set);

    if($available = mysqli_fetch_assoc($available_set)) {
		return $available;
	}else{
		return false;
	}
}

function valid_date($check_in, $check_out){
	$night_in = new DateTime($check_in);
	$night_out = new DateTime($check_out);
    $now = new DateTime();

    if($night_in < $now || $night_out < $now){
        return false;
    }elseif($night_in > $night_out || $night_in == $night_out){
    	return false;
    }else{
    	return true;
    }
}


function dateDiff($check_in, $check_out) {
    $start_check_in = strtotime($check_in);
    $end_check_out = strtotime($check_out);
    $diff = $end_check_out - $start_check_in;

    return round($diff / 86400);
}




//PENDING RESERVATIONS -------------------------------------------------------

function find_all_pendings() {
	global $connection;

	$query  = "SELECT * ";
	$query .= "FROM pending ";

	$pending_set = mysqli_query($connection, $query);
	confirm_query($pending_set);

	return $pending_set;  
}

function find_pending_reservation_by_id($reservation_id) {
	global $connection;

	$safe_reservation_id = mysqli_real_escape_string($connection, $reservation_id);

	$query  = "SELECT * ";
	$query .= "FROM pending ";
	$query .= "WHERE id = {$safe_reservation_id} ";
	$query .= "LIMIT 1";
	
	$reservation_set = mysqli_query($connection, $query);
	confirm_query($reservation_set);

	if($reservation = mysqli_fetch_assoc($reservation_set)) {
		return $reservation;
	}else{
		return null;
	}
}




//APPROVED RESERVATIONS ----------------------------------------------------------------

function find_all_approved() {
	global $connection;

	$query  = "SELECT * ";
	$query .= "FROM approved ";

	$approved_set = mysqli_query($connection, $query);
	confirm_query($approved_set);

	return $approved_set;  
}

function find_approved_reservation_by_id($reservation_id) {
	global $connection;

	$safe_reservation_id = mysqli_real_escape_string($connection, $reservation_id);

	$query  = "SELECT * ";
	$query .= "FROM approved ";
	$query .= "WHERE id = {$safe_reservation_id} ";
	$query .= "LIMIT 1";
	
	$reservation_set = mysqli_query($connection, $query);
	confirm_query($reservation_set);

	if($reservation = mysqli_fetch_assoc($reservation_set)) {
		return $reservation;
	}else{
		return null;
	}
}



//DECLINED RESERVATIONS ----------------------------------------------------------------

function find_all_declined() {
	global $connection;

	$query  = "SELECT * ";
	$query .= "FROM declined ";

	$declined_set = mysqli_query($connection, $query);
	confirm_query($declined_set);

	return $declined_set;  
}

function find_declined_reservation_by_id($reservation_id) {
	global $connection;

	$safe_reservation_id = mysqli_real_escape_string($connection, $reservation_id);

	$query  = "SELECT * ";
	$query .= "FROM declined ";
	$query .= "WHERE id = {$safe_reservation_id} ";
	$query .= "LIMIT 1";
	
	$reservation_set = mysqli_query($connection, $query);
	confirm_query($reservation_set);

	if($reservation = mysqli_fetch_assoc($reservation_set)) {
		return $reservation;
	}else{
		return null;
	}
}




//ARCHIVED RESERVATIONS ----------------------------------------------------------------

function find_all_archived() {
	global $connection;

	$query  = "SELECT * ";
	$query .= "FROM archived ";

	$archived_set = mysqli_query($connection, $query);
	confirm_query($archived_set);

	return $archived_set;  
}

function find_archived_reservation_by_id($reservation_id) {
	global $connection;

	$safe_reservation_id = mysqli_real_escape_string($connection, $reservation_id);

	$query  = "SELECT * ";
	$query .= "FROM archived ";
	$query .= "WHERE id = {$safe_reservation_id} ";
	$query .= "LIMIT 1";
	
	$reservation_set = mysqli_query($connection, $query);
	confirm_query($reservation_set);

	if($reservation = mysqli_fetch_assoc($reservation_set)) {
		return $reservation;
	}else{
		return null;
	}
}




/* RECENT RESERVATION (INVOICE/RECEIPT) ------------------------------------------------------ */

function find_client_recent_reservation($username){
	global $connection;

	$safe_username = mysqli_real_escape_string($connection, $username);

	$query  = "SELECT * ";
	$query .= "FROM pending ";
	$query .= "WHERE Username = '{$safe_username}' ";
	$query .= "LIMIT 1";

	$pending_set = mysqli_query($connection, $query);
	confirm_query($pending_set);

	if($pending = mysqli_fetch_assoc($pending_set)){

		return $pending;

	}elseif(!$pending = mysqli_fetch_assoc($pending_set)){

		$query  = "SELECT * ";
		$query .= "FROM approved ";
		$query .= "WHERE Username = '{$safe_username}' ";
		$query .= "LIMIT 1";

		$approved_set = mysqli_query($connection, $query);
		confirm_query($approved_set);

		if($approved = mysqli_fetch_assoc($approved_set)){

			return $approved;

		}elseif(!$approved = mysqli_fetch_assoc($approved_set)){

			$query  = "SELECT * ";
			$query .= "FROM declined ";
			$query .= "WHERE Username = '{$safe_username}' ";
			$query .= "LIMIT 1";

			$declined_set = mysqli_query($connection, $query);
			confirm_query($declined_set);

			if($declined = mysqli_fetch_assoc($declined_set)){

				return $declined;

			}else{
				return null;
			}

		}


	}

}


function rate($rate) {
	$rate_value = str_replace("Php", "", $rate);

	return $rate_value;
}


//AUTHENTICATION ----------------------------------------------------------------------

function logged_in(){
	return isset($_SESSION["admin_id"]);
}

function confirm_logged_in(){
	if(!logged_in()){
		redirect_to("admin.php");
	}
}

function client_logged_in(){
	return isset($_SESSION["client_id"]);
}

function client_confirm_logged_in(){
	if(!client_logged_in()){
		redirect_to("login_as_client.php");
	}
}

function password_encrypt($password){
	$hash_format = "$2y$10$";	//tells PHP to use Blowfish with a cost of 10
	$salt_length = 22;	//blowfish salts should be 22-characters or more
	$salt = generate_salt($salt_length);
	$format_and_salt = $hash_format . $salt;
	$hash = crypt($password, $format_and_salt);

	return $hash;
}

function generate_salt($length){
	//not 100% unique, not 100% random, but good enough for a salt
	//MD5 returns 32 characters
	$unique_random_string = md5(uniqid(mt_rand(), true));

	//valid characters for a salt are [a-zA-Z0-9./]
	$base64_string = base64_encode($unique_random_string);

	//but not '+' which is valid in base64 encoding
	$modified_base64_string = str_replace('+', '.', $base64_string);

	//truncate string to the correct length
	$salt = substr($modified_base64_string, 0, $length);

	return $salt;
}

function password_check($password, $existing_hash){
	// existing hash contains format and salt at start
	$hash = crypt($password, $existing_hash);
	if($hash === $existing_hash){
		return true;
	}else{
		return false;
	}
}

function attempt_login($username, $password){
	$admin = find_admin_by_username($username);

	if($admin){
		//found admin, check password
		if(password_check($password, $admin["hashed_password"])){
			//password matches
			return $admin;
		}else{
			//password does not match
			return false;
		}

	}else{
		//admin not found
		return false;
	}
}

function client_attempt_login($username, $password){
	$client = find_client_by_username($username);

	if($client){
		//found admin, check password
		if(password_check($password, $client["hashed_password"])){
			//password matches
			return $client;
		}else{
			//password does not match
			return false;
		}

	}else{
		//admin not found
		return false;
	}
}
  
?>