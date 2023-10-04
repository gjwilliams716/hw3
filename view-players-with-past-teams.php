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
              $teams = selectTeamsByPlayer($player['player_id']);
                while ($team = $teams->fetch_assoc()){
                    ?>
                      
                  <?php    
                }
            ?>
          </p>
          <p class="card-text"><small class="text-muted">Team(s): <?php echo $player['player_team'] ?></small></p>
    </div>
  </div>
       <?php
          }
      ?>
</div>
