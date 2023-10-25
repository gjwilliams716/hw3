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
                      <li class="list-group-item"><?php include "view-playerspast-editform.php" ?>

                      <td>
                        <form method = "post" action = "">
                          <input type = "hidden" name = "pid" value="<?php echo $player['player_id']; ?>">
                          <input type = "hidden" name = "actionType" value = "Delete">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Are your sure?');">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                          <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                          </svg>
                        </button>
                      </form>  
                    </td>
                      
                      <?php echo $player['player_name']; ?> - <?php echo $player['player_team']; ?></li>

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
