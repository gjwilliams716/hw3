<?php
  require_once("util-db.php");
  require_once("model-contracts-by-player.php");
  
  $pageTitle= "Contracts by Player";
  include "view-header.php";
  $contract = selectContractsByCourse($_POST['cid']);
  include "view-contracts-by-player.php";
  include "view-footer.php";
?>
