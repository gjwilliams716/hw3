<?php
  require_once("util-db.php");
  require_once("model-teams-by-player.php");
  
  $pageTitle= "Teams by Player";
  include "view-header.php";
  $teams = selectTeamsByInstructor($_GET['id']);
  include "view-courses-by-instructor.php";
  include "view-footer.php";
?>
