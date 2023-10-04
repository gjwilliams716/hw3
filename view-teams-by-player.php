<h1>Teams by Player (Contracts)</h1>
<div class="table-responsive">
<table class="table">
<thead>
<tr>
  <th>ID</th>
  <th>Team Name</th>
  <th>Team Owner</th>
  <th>Contract Length</th>
  <th>Contract Amount</th>
  <th>Contract Incentives</th>
</tr>
</thead>
<tbody>
<?php
while (Steam = $teams->fetch_assoc()) {
?>
<tr>
  <td><?php echo $team['team_id']; ?></td>
  <td><?php echo $team['team_name']; ?></td>
  <td><?php echo $team['team_owner']; ?></td>
  <td><?php echo $team['contract_length']; ?></td>
  <td><?php echo $team['contract_amount']; ?></td>
  <td><?php echo $team['contract_incentives']; ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
