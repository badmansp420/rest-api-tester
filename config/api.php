<?php
include('server.php');


header("Access-Control-Allow-Origin: *");
// get request method

$method = $_SERVER['REQUEST_METHOD'];

header('Content-Type:application/json');

// This Is GET Request 
if ($method == 'GET') {
	try {
		// echo "THIS IS A GET REQUEST";
		$query = mysqli_query($con, "SELECT * FROM `student`");
		if ($query->num_rows > 0) {
			while ($row = mysqli_fetch_assoc($query)) {
				$arr[] = $row;
			}
			echo json_encode(['status' => 'true', 'msg' => 'Data found', 'count' => $query->num_rows, 'data' => $arr]);

		} else {
			echo json_encode(['status' => 'true', 'msg' => 'No data found', 'count' => $query->num_rows]);

		}
	} catch (Exception $e) {
		echo $e;
	}
}


// This Is POSt Request 

if ($method == 'POST') {
	// echo "THIS IS A POST REQUEST";
	try {
		
		$query = "INSERT INTO student(st_name, fa_name, email, psw, active_session, last_active) VALUES ('sarkar Logo','logo sarakr','sarkar@hma.452','shfegk',0,0)";
		
		$stmt = $con->prepare($query);
		$stmt->execute();

		if ($query) {
			// foreach($query as $rr)
			echo "Data inserted successfully";
			echo json_encode(['status' => 'true', 'msg' => 'Data found', 'count' => $query]);
			// echo '<pre>';
			// echo $query;

		} else {
			echo json_encode(['status' => 'true', 'msg' => 'No data found']);

		}
	} catch (Exception $e) {
		echo "Error Is: ".$e;
	}
}

if ($method == 'PUT') {
	// echo "THIS IS A PUT REQUEST";
	// $data = 35;
	try {
		$query = mysqli_query($con, "SELECT * FROM `student` where `sl.no.` = ?");

		if ($query->num_rows > 0) {
			while ($row = mysqli_fetch_assoc($query)) {
				$arr[] = $row;
			}
			echo json_encode(['status' => 'true', 'msg' => 'Data found', 'count' => $query->num_rows, 'data' => $arr]);

		} else {
			echo json_encode(['status' => 'true', 'msg' => 'No data found', 'count' => $query->num_rows]);

		}
	} catch (Exception $e) {
		echo $e;
	}
}


if ($method == 'DELETE') {
	echo "THIS IS A DELETE REQUEST";
}