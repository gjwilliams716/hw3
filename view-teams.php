<h1>Teams</h1>
<div class="table-responsive">
<table class="table">
<thead>
<tr>
  <th>Team ID</th>
  <th>Team Name</th>
  <th>Team Owner</th>
</tr>
</thead>
<tbody>
<?php
while (Scourse = $courses->fetch_assoc()) {
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
