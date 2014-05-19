#!/usr/bin/php
<?php

$config = file_get_contents( "/home/dnaphas/.commentbot/config.json" );
$config_json = json_decode( $config, true );
$query_url = $config_json[ 'services' ][ 'JIRA' ][ 'accounts'][ '1' ][ 'url' ] . '/rest/api/2/search?fields=summary,assignee&jql=id=PE-338';
$ch = curl_init( $query_url );
var_dump( $ch );
curl_setopt( $ch, CURLOPT_USERPWD, $config_json[ 'services' ][ 'JIRA' ][ 'accounts' ][ '1' ][ 'username' ] . ":" .
				   $config_json[ 'services' ][ 'JIRA' ][ 'accounts' ][ '1' ][ 'password' ] );
curl_exec( $ch );
curl_close( $ch );

?>
