<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Player Number</th>
        <th>Name</th>
        <th>Team Name</th>
        <th></th>
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
              <td><a href="teams-by-player.php?id=<?php echo $player['player_id'] ?>">Teams</a></td>
            </tr>
       <?php
          }
      ?>
    </tbody>
  </table>
</div>
