<?php
  require 'aws-autoloader.php';

  $ssm_client = new Aws\Ssm\SsmClient([
    'region'  => 'us-west-2',
    'version' => 'latest'
  ]);

  $result = $ssm_client->GetParametersByPath(['Path' => '/MyPlaylist/']);
  
  foreach($result['Parameters'] as $p) {
    if ($p['Name'] == '/MyPlaylist/endPoint') {
      $_SESSION['endPoint'] = $p['Value'];
    } elseif ($p['Name'] == '/MyPlaylist/userName') {
      $_SESSION['userName'] = $p['Value'];
    } elseif ($p['Name'] == '/MyPlaylist/pwd') {
      $_SESSION['pwd'] = $p['Value'];
    } elseif ($p['Name'] == '/MyPlaylist/dbName') {
      $_SESSION['dbName'] = $p['Value'];
    }
      
  }
?>
