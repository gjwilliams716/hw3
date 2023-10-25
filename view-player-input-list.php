<select class="form-select" id="pName" name="pName">
  <?php
    while ($playerItem = $playerList->fetch_assoc()){
      ?>
      <option value=" <?php echo $playerItem['player_id']; ?> "><?php echo $playerItem['player_name']; ?></option>
      <?php
    }
?>
</select>
