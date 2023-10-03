<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Player Number</th>
        <th>Name</th>
        <th>Team Name</th>
      </tr>  
    </thead>
    <tbody>
      <?php 
          while ($player = $players->fetch_assoc()){
          ?>
            <tr>
              <td><?php echo $player['player_id'] ?></td>
              <td><?php echo $player['player_name'] ?></td>
              <td><?php echo $player['player_team'] ?></td>
            </tr>
       <?php
          }
      ?>
    </tbody>
  </table>
</div>
