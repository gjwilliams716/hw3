<h1>Players With Past Teams</h1>

<div class="card-group">
      <div><?php include "view-playerspast-newform.php" ?></div>
      <?php 
          while ($player = $players->fetch_assoc()){
          ?>
          <div class="card">
          <div class="card-body">
          <h5 class="card-title"><?php echo $player['player_name'] ?></h5>
          <p class="card-text">
                <ul class="list-group">
            <?php
              $teams = selectTeamsByPlayer($player['player_id']);
                while ($team = $teams->fetch_assoc()){
                    ?>
                      <li class="list-group-item"><?php include "view-playerspast-editform.php" ?><?php echo $player['player_name']; ?> - <?php echo $player['player_team']; ?></li>

                      <?php    
                }
            ?>
                </ul>
          </p>
          <p class="card-text"><small class="text-muted">Team(s): <?php echo $player['player_team'] ?></small></p>
    </div>
  </div>
       <?php
          }
      ?>
</div>
