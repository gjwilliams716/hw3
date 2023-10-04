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
  <td><?php echo $course['course_id']; ?></td>
  <td><?php echo $course['course_number']; ?></td>
  <td><?php echo $course['course_description']; ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
