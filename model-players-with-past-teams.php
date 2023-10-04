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
?>
