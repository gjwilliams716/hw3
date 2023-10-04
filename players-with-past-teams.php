<?php
  require_once("util-db.php");
  require_once("model-players-with-past-teams.php");
  
  $pageTitle= "Players";

  include "view-header.php";

  $players = selectPlayers();
  include "view-players-with-past-teams.php";

  include "view-footer.php";
?>
