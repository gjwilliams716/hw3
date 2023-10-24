<?php
function selectTeams() {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("SELECT team_id, team_name, team_owner FROM `team`");
$stmt->execute();
$result = $stmt->get_result();
$conn->close();
return $result;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}

function insertTeam($tName, $tOwner) {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("INSERT INTO `team` (`team_name`, `team_owner`) VALUES (?, ?)");
$stmt->bind_param("ss", $tName, $tOwner);
$success = $stmt->execute();
$conn->close();
  return success;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}


function updateTeam($tName, $tOwner, $tid) {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("update `team` set `team_name` = ?, 'team_owner` = ? WHERE team_id = ?");
$stmt->bind_param("ssi", $tName, $tOwner, $tid);
$success = $stmt->execute();
$conn->close();
  return success;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}


function deleteTeam($tid) {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("delete from `team` where team_id=?");
$stmt->bind_param("i", $tid);
$success = $stmt->execute();
$conn->close();
  return success;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}
?>
