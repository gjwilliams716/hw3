<h1>Contracts by Player</h1>
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
while ($contract = $contracts->fetch_assoc()) {
?>
<tr>
  <td><?php echo $contract['team_id']; ?></td>
  <td><?php echo $contract['team_name']; ?></td>
  <td><?php echo $contract['team_owner']; ?></td>
  <td><?php echo $contract['contract_length']; ?></td>
  <td><?php echo $contract['contract_amount']; ?></td>
  <td><?php echo $contract['contract_incentives']; ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
