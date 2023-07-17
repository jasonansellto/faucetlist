<?php

require_once('includes/config.php');
require_once('includes/class/main.class.php');
require_once('includes/templates/header.php');

$main = New Main();
if($site_config['faucetlist_api'] == true) {
  $faucets = $main->cacheJson();
} else {
  $faucets = json_decode(file_get_contents($site_config['website_url'] . '/cache/faucets.json'), 2);
}


?>
<div class="hero">
   <div class="container">
      <h1>Earn free cryptocurrency</h1>
      <p>We list the top faucets for BTC, LTC, DOGE and more </p>
   </div>
</div>
<div class="container content">
  <div class="row">
    <div class="col-md-2">
      <div class="widget-ad">
        <?php
        include('includes/ad.php');
        ?>
      </div>
    </div>
    <div class="col-md-8">
      <ul class="nav nav-tabs">
      <li role="presentation" <?php echo (!isset($_GET['coin'])) ? 'class="active"' : ''; ?>><a href="<?php echo $site_config['website_url']; ?>">All Faucets <span class="badge"><?php echo number_format(count($faucets)); ?></span></a></li>
      <li role="presentation" <?php echo (isset($_GET['coin']) && $_GET['coin'] == 'BTC') ? 'class="active"' : ''; ?>><a href="<?php echo $site_config['website_url'] . '/?coin=BTC'; ?>">BTC</a></li>
      <li role="presentation" <?php echo (isset($_GET['coin']) && $_GET['coin'] == 'LTC') ? 'class="active"' : ''; ?>><a href="<?php echo $site_config['website_url'] . '/?coin=LTC'; ?>">LTC</a></li>
      <li role="presentation" <?php echo (isset($_GET['coin']) && $_GET['coin'] == 'DOGE') ? 'class="active"' : ''; ?>><a href="<?php echo $site_config['website_url'] . '/?coin=DOGE'; ?>">DOGE</a></li>
      <li role="presentation" <?php echo (isset($_GET['coin']) && $_GET['coin'] == 'BLK') ? 'class="active"' : ''; ?>><a href="<?php echo $site_config['website_url'] . '/?coin=BLK'; ?>">BLK</a></li>
      <li role="presentation" <?php echo (isset($_GET['coin']) && $_GET['coin'] == 'DASH') ? 'class="active"' : ''; ?>><a href="<?php echo $site_config['website_url'] . '/?coin=DASH'; ?>">DASH</a></li>
      <li role="presentation" <?php echo (isset($_GET['coin']) && $_GET['coin'] == 'PPC') ? 'class="active"' : ''; ?>><a href="<?php echo $site_config['website_url'] . '/?coin=PPC'; ?>">PPC</a></li>
      <li role="presentation" <?php echo (isset($_GET['coin']) && $_GET['coin'] == 'XPM') ? 'class="active"' : ''; ?>><a href="<?php echo $site_config['website_url'] . '/?coin=XPM'; ?>">XPM</a></li>
      <li role="presentation" <?php echo (isset($_GET['coin']) && $_GET['coin'] == 'BCH') ? 'class="active"' : ''; ?>><a href="<?php echo $site_config['website_url'] . '/?coin=BCH'; ?>">BCH</a></li>
    </ul>
<table class="table table-striped">
<thead> <tr> <th>Faucet Name</th> <th>Currency</th> <th>Reward</th> <th>Visit</th></tr> </thead>
<tbody>
<?php
if(isset($_GET['coin'])) {
  foreach($faucets as $faucet) {
    if($faucet['currency'] == $_GET['coin']) {
    echo '<tr class="srow"><td><strong class="name"><a href="' . $faucet['url'] . $ref[$faucet['currency']] . '" target="_blank">' . $faucet['name'] . '</a></strong></td><td>' . $faucet['currency'] . '</td><td>' . $faucet['reward'] . '</td><td><a href="' . $faucet['url'] . $ref[$faucet['currency']] . '" target="_blank" class="btn btn-xs btn-default btn-block">Visit</a></td>';
  }
}
} else {
  foreach($faucets as $faucet) {
    echo '<tr class="srow"><td><strong class="name"><a href="' . $faucet['url'] . $ref[$faucet['currency']] . '" target="_blank">' . $faucet['name'] . '</a></strong></td><td>' . $faucet['currency'] . '</td><td>' . $faucet['reward'] . '</td><td><a href="' . $faucet['url'] . $ref[$faucet['currency']] . '" target="_blank" class="btn btn-xs btn-default btn-block">Visit</a></td>';
  }
}
?>
</tbody>
</table>
</div>
<div class="col-md-2">
  <div class="widget-ad">
    <?php
    include('includes/ad.php');
    ?>
  </div>
</div>
</div>
</div>

<?php
require_once('includes/templates/footer.php');
?>
