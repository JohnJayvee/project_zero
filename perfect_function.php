<?php

function getConnection()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project_zero";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection Failed: " . $conn->connect_error);
	}

	return $conn;
}

function get($table_name)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name";

	$result = $conn->query($sql);
	return $result;
}
function get_all($table_name, $value1, $value2)
{
	$conn = getConnection();
	$sql = "SELECT * $table_name1 WHERE strand_id=$strand_id AND year_level=$year_level_id";
	$result = $conn->query($sql);
	return $result;


}
function get_where($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where id=$id";
	$result = $conn->query($sql);
	return $result;
}

function _get_firstname_from_id($id)
{
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $firstname = $row['firstname'];
	}
}
function get_filter($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name  
           WHERE studid=$id and datetoday BETWEEN '" . $_POST["from_date"] . "' AND '" . $_POST["to_date"] . "' ";
	$result = $conn->query($sql);
	return $result;
}
function get_where_checked($table_name1, $table_name2, $column, $value)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE not $table_name2.attendance_status=$status";

	$result = $conn->query($sql);
	return $result;
}




function get_where_strand_id($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where strand_id=$id";
	$result = $conn->query($sql);
	return $result;
}


function get_where_id($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where studid=$id";
	$result = $conn->query($sql);
	return $result;
}

function get_where_section_id($table_name, $section_id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where section_id=$section_id";
	$result = $conn->query($sql);
	return $result;
}

function get_where_custom($table_name, $column, $value)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where " . $column . "='" . $value . "'";
	$result = $conn->query($sql);
	return $result;
}
function get_where_custom_id($table_name, $id, $column, $value)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where studid=$id " . $column . "='" . $value . "'";
	$result = $conn->query($sql);
	return $result;
}

function insert($data, $table_name)
{
	$conn = getConnection();
	$fields = "";
	$values = "";

	foreach ($data as $key => $value) {
		$fields = $fields . "$key" . ",";
		$values = $values . "'" . $value . "',";
	}

	$cnt_fields = strlen($fields);
	$cnt_values = strlen($values);

	$fields = substr($fields, 0, $cnt_fields - 1);
	$values = substr($values, 0, $cnt_values - 1);

	$sql = "INSERT INTO $table_name (" . $fields . ") values (" . $values . ")";

	if ($conn->query($sql) === TRUE) {
		$result = "Record created successfully";
	} else {
		$result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function update($data, $id, $table_name)
{
	$conn = getConnection();
	$str = "";

	foreach ($data as $key => $value) {
		$str = $str . $key . "='" . $value . "',";
	}

	$cnt_str = strlen($str);

	$str = substr($str, 0, $cnt_str - 1);

	$sql = "UPDATE $table_name set " . $str . " where id='" . $id . "'";

	if ($conn->query($sql) === TRUE) {
		$result = " ";
	} else {
		$result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}
function update_section($data, $sectionid, $table_name)
{
	$conn = getConnection();
	$str = "";

	foreach ($data as $key => $value) {
		$str = $str . $key . "='" . $value . "',";
	}

	$cnt_str = strlen($str);

	$str = substr($str, 0, $cnt_str - 1);

	$sql = "UPDATE $table_name set " . $str . " where section_id='" . $sectionid . "'";

	if ($conn->query($sql) === TRUE) {
		$result = " ";
	} else {
		$result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function updatestatus($data, $table_name, $status)
{
	$conn = getConnection();

	$sql = "UPDATE $table_name set attendance_status=$status where id='$data'";
	// echo $sql;
	if ($conn->query($sql) === TRUE) {
		$result = " ";
	} else {
		$result = "Error: " . $sql . "<br>" . $conn->error;
	}

	return $result;
}

function updatedate($data, $table_name, $date)
{
	$conn = getConnection();

	$sql = "UPDATE $table_name set date=$date where studid=$data";
	if ($conn->query($sql) === TRUE) {
		$result = " ";
	} else {
		$result = "Error: " . $sql . "<br>" . $conn->error;
	}

	return $result;
}


function delete($id, $table_name)
{
	$conn = getConnection();
	$sql = "DELETE FROM $table_name where id=$id";
	if ($conn->query($sql) == TRUE) {
		$result = "Record deleted successfully";
	} else {
		$result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function custom_query($mysql_query)
{
	//for select statements only
	$conn = getConnection();
	$sql = $mysql_query;
	$result = $conn->query($sql);
	return $result;
}

function base_url()
{
	$project_name = "project_zero";
	return "http://" . $_SERVER['SERVER_NAME'] . '/' . $project_name . '/';
}

function get_where_double($col1, $value1, $col2, $value2)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where $col1=$value1 and $col2=$value2";
	$result = $conn->query($sql);
	return $result;
}

function _hash_string($str)
{
	$hashed_string = password_hash($str, PASSWORD_BCRYPT, array('cost' => 11));
	return $hashed_string;
}

function _verify_hash($plain_text_str, $hashed_string)
{
	$result = password_verify($plain_text_str, $hashed_string);
	return $result; //[1]TRUE or [0]FALSE
}

function _get_pword_from_username($username, $table_name)
{
	$user_data = get_where_custom($table_name, "username", $username);
	foreach ($user_data as $key => $row) {
		return $password = $row['password'];
	}

}

function generate_random_string($length)
{
	$characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}

function _get_photo_from_id($table_name, $id)
{
	$user_data = get_where($table_name, $id);
	foreach ($user_data as $key => $row) {
		return $photo = $row['photo'];
	}
}

function _get_sliderpic_from_id($table_name, $id)
{
	$sliderpic_data = get_where($table_name, $id);
	foreach ($sliderpic_data as $key => $row) {
		return $picture = $row['picture'];
	}
}

function count_rows($table_name)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name";
	$result = $conn->query($sql);
	$rowcount = mysqli_num_rows($result);
	return $rowcount;
}

function _fire_email($target_email, $subject, $msg)
{
	$to = $target_email;
	$subject = $subject;
	$message = $msg;
	$headers = "From: cbabaranjr@gmail.com\r\n";
	$headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";
	mail($to, $subject, $message, $headers);
}

function get_max($table_name)
{
	$mysql_query = "SELECT MAX(id) as last_id FROM $table_name";
	$result = custom_query($mysql_query);
	foreach ($result as $key => $row) {
		return $row['last_id'];
	}
}

function _get_id_from_token($token)
{
	$result = get_where_custom("tokens", "token", $token);
	foreach ($result as $key => $row) {
		return $row['user_id'];
	}
}

function _get_id_from_username($username)
{
	$result = get_where_custom("users", "username", $username);
	foreach ($result as $key => $row) {
		return $row['id'];
	}
}


function _get_status_from_id($id)
{
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $status = $row['status'];
	}
}

function _get_username_from_id($id)
{
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $status = $row['username'];
	}
}

function _get_accttype_from_id($id)
{
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $acct_type = $row['acct_type'];
	}
}

function save_logs($text)
{
	$log_data = array(

		"text" => $text,
		"datetime" => time()
	);
	insert($log_data, "logs");
}



function get_fullname_from_id($id)
{
	$user_data = get_where("users", $id);
	foreach ($user_data as $key => $row) {
		return $fullname = $row['firstname'] . " " . $row['lastname'];
	}
}


function get_strand_from_id($table_name, $id)
{
	$user_data = get_where($table_name, $id);
	foreach ($user_data as $key => $row) {
		return $strand = $row['strand'];
	}
}


function get_year_from_id($table_name, $id)
{
	$user_data = get_where($table_name, $id);
	foreach ($user_data as $key => $row) {
		return $school_yr = $row['school_yr'];
	}
}



function get_profile($table_name, $username)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where username=$username";
	$result = $conn->query($sql);
	return $result;
}

function count_attendance($setName, $studid)
{

	$conn = getConnection();
	$sql = "SELECT COUNT(*) FROM attendance_records WHERE studid='$studid' AND attendance_status='$setName' ";

	$result = $conn->query($sql);
	$row = $result->fetch_array(MYSQLI_NUM);

	return $row[0];

}

function getattendance($table_name, $table_name1, $value)
{
	$conn = getConnection();
	$sql = "INSERT INTO $table_name SELECT $table_name1 FROM $value";
	$result = $conn->query($sql);
}
function getstudent_where($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where id=$id";
	$result = $conn->query($sql);
	return $result;

}

function get_where_join($table_name1, $table_name2, $column, $value)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name1.section_id=$value";
	$result = $conn->query($sql);
	return $result;
}

function get_section_join($table_name1, $table_name2, $column)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . "";
	$result = $conn->query($sql);
	return $result;
}
function get_alumni_join($table_name1, $table_name2, $column)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . "";
	$result = $conn->query($sql);
	return $result;
}

function get_join_date($table_name1, $table_name2, $column, $value)
{
	$datetoday = date("Y-m-d");
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name1.section_id=$value AND date(datetoday)='$datetoday' AND status=0";

	$result = $conn->query($sql);
	return $result;
}

function get_where_join_boom($table_name1, $table_name2, $column)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . "";
	$result = $conn->query($sql);
	return $result;
}


function get_join_column($table_name1, $table_name2, $column, $value)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name1." . $column . "=$value";
	$result = $conn->query($sql);
	return $result;
}
function get_join_strand($table_name1, $table_name2, $column, $section_id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name1." . "section_id=$section_id";
	$result = $conn->query($sql);
	return $result;
}


function get_join_attendance($table_name1, $table_name2, $column, $status, $value)
{
	$conn = getConnection();
	$current = date("Y-m-d");
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name2.attendance_status=$status AND date(datetoday)='$current' AND $table_name1.section_id=$value";
	//echo ($sql);
	$result = $conn->query($sql);
	return $result;
}

function get_join_all_attendance($table_name1, $table_name2, $column, $status, $value)
{
	$conn = getConnection();
	$current = date("Y-m-d");
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name2.attendance_status=$status AND $table_name1.section_id=$value AND attendance_day=0";

	$result = $conn->query($sql);
	return $result;
}
function get_join_attendance_student($table_name1, $table_name2, $column, $status, $id)
{
	$conn = getConnection();
	$current = date("Y-m-d", time());
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name2.attendance_status=$status AND date(datetoday)='$current'WHERE $table_name1.section_id=$id";

	$result = $conn->query($sql);
	return $result;
}

function get_join_student_attendance($table_name1, $table_name2, $column, $status, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name1.section_id='$id'";

	$result = $conn->query($sql);
	return $result;
}
function get_join_section($table_name1, $table_name2, $column, $id)
{
	$conn = getConnection();
	$current = date("Y-m-d");
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . "WHERE $table_name.strand_id=$id";

	$result = $conn->query($sql);
	return $result;
}
function get_join_section_id($table_name1, $table_name2, $column, $id, $studid)
{
	$conn = getConnection();
	$current = date("Y-m-d");
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name2.strand_id=$id";


	$result = $conn->query($sql);
	return $result;
}

function get_join_student($table_name1, $table_name2, $column, $studid)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name1.$studid=$studid";

	$result = $conn->query($sql);
	return $result;
}



function get_present_try($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where attendance_status = 1 AND studid = $id";
	$result = $conn->query($sql);
	return $result;
}
function get_all_try($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where attendance_status >0 AND studid = $id";
	$result = $conn->query($sql);
	return $result;
}
function get_wet_try($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where strand_id=$id";

	$result = $conn->query($sql);
	return $result;
}
function get_late_try($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where attendance_status = 2 AND studid = $id";
	$result = $conn->query($sql);
	return $result;
}
function get_absent_try($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where attendance_status = 3 AND studid = $id";
	$result = $conn->query($sql);
	return $result;
}


function distinct($table_name)
{
	$conn = getConnection();
	$sql = "SELECT DISTINCT date FROM $table_name";
	$result = $conn->query($sql);
	return $result;
}
function get_date($table_name1, $table_name2, $column, $date)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name2.date=$date";
	$result = $conn->query($sql);
	return $result;
}
function get_join_students($table_name1, $table_name2, $column, $value)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name1.studid=$studid AND status=0";
	$result = $conn->query($sql);
	return $result;
}
function get_tables($table_name, $column, $column2, $table_name2, $value)
{
	$conn = getConnection();
	$sql = "INSERT  INTO  $table_name ($column) select ($column2) from $table_name2  where $table_name2.section_id=$value";

	$result = $conn->query($sql);
	return $result;
}

function counting_rows($section)
{
	$current = date("Y-m-d");
	$conn = getConnection();
	$sql = "select * from attendance_records ar join students st ON ar.studid=st.studid where date(datetoday)='$current' AND section_id='$section'";

	$result = $conn->query($sql);
	return $result->num_rows;
}

function get_studid_from_id($id)
{
	$user_data = get_where("students", $id);
	foreach ($user_data as $key => $row) {
		return $studid = $row['studid'];
	}
}

function get_where_section($table_name, $sectionid)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where section_id=$sectionid";
	$result = $conn->query($sql);
	return $result;
}
function get_section_from_id($table_name, $sectionid)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where section_id=$sectionid";
	$result = $conn->query($sql);
	return $result;
}
function get_join_all_everything_attendance($table_name1, $table_name2, $column, $status)
{
	$conn = getConnection();
	$current = date("Y-m-d");
	$sql = "SELECT * FROM $table_name1 JOIN $table_name2 ON $table_name1." . $column . "=$table_name2." . $column . " WHERE $table_name2.attendance_status=$status AND attendance_day=0";

	$result = $conn->query($sql);
	return $result;
}