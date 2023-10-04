<h1>Players With Past Teams</h1>

<div class="card-group">
      <?php 
          while ($player = $players->fetch_assoc()){
          ?>
          <div class="card">
          <div class="card-body">
          <h5 class="card-title"><?php echo $player['player_name'] ?></h5>
          <p class="card-text">
            <?php
              $teams = selectPlayersWith ***********************
            ?>
          </p>
          <p class="card-text"><small class="text-muted">Team(s): <?php echo $player['player_team'] ?></small></p>
    </div>
  </div>
            <tr>
              <td><?php echo $player['player_id'] ?></td>
              <td><?php echo $player['player_name'] ?></td>
              <td><?php echo $player['player_team'] ?></td>
              <td><a href="teams-by-player.php?id=<?php echo $player['player_id'] ?>">Teams</a></td>
            </tr>
       <?php
          }
      ?>
</div>
