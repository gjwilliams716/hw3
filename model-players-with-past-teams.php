<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, player_name, player_team FROM `player`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectTeamsByPlayer($pid) {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("SELECT t.team_id, team_name, team_owner, contract_length, contract_amount, contract_incentives FROM `team` t join contract c on t.team_id = c.team_id where c.player_id = ?");
$stmt->bind_param("i", $pid);
$stmt->execute();
$result = $stmt->get_result();
$conn->close();
return $result;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}

function insertPlayer($pName, $pTeam) {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("INSERT INTO `player` (`player_name`, `player_team`) VALUES (?, ?)");
$stmt->bind_param("ss", $tName, $tOwner);
$success = $stmt->execute();
$conn->close();
  return $success;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}


function updatePlayer($pName, $pTeamr, $pid) {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("update `player` set `player_name` = ?, `player_team` = ? WHERE player_id = ?");
$stmt->bind_param("ssi", $tName, $tOwner, $pid);
$success = $stmt->execute();
$conn->close();
  return $success;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}


function deletePlayer($pid) {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("delete from `player` where player_id=?");
$stmt->bind_param("i", $pid);
$success = $stmt->execute();
$conn->close();
  return $success;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}

function selectPlayersInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, player_name, player_team FROM `player` order by player_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectTeamInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name, team_owner FROM `team` order by team_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
