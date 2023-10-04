<h1>Players With Past Teams</h1>

<div class="card-group">
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
                      <li class="list-group-item"><?php echo $team['team_name']; ?> - <?php echo $contract['team_owner']; ?> - <?php echo $contract['contract_length']; ?> - <?php echo $contract['contract_amount']; ?> - <?php echo $contract['contract_incentives']; ?></li>
                    <td><?php echo $contract['team_id']; ?></td>
                    <td><?php echo $contract['team_name']; ?></td>
                    <td><?php echo $contract['team_owner']; ?></td>
                    <td><?php echo $contract['contract_length']; ?></td>
                    <td><?php echo $contract['contract_amount']; ?></td>
                    <td><?php echo $contract['contract_incentives']; ?></td>
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
