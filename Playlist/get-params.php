<?php
require 'aws.phar'
session_start();


use Aws\Ssm\SsmClient;
use Aws\Exception\AwsException;

$ssm_client = new Aws\Ssm\SsmClient([
    'region'  => 'us-west-2',
    'version' => 'latest'
]);

try {
    $result = $ssm_client->GetParametersByPath(['Path' => '/MyPlaylist/']);

    foreach ($result['Parameters'] as $p) {
        switch ($p['Name']) {
            case '/MyPlaylist/endPoint':
                $_SESSION['endPoint'] = $p['Value'];
                break;
            case '/MyPlaylist/userName':
                $_SESSION['userName'] = $p['Value'];
                break;
            case '/MyPlaylist/pwd':
                $_SESSION['pwd'] = $p['Value'];
                break;
            case '/MyPlaylist/dbName':
                $_SESSION['dbName'] = $p['Value'];
                break;
            default:
                // Handle unexpected parameter names if necessary
                break;
        }
    }
} catch (AwsException $e) {
    // Handle AWS API errors
    echo 'Error retrieving parameters: ' . $e->getMessage();
}
?>
