#!/usr/bin/php
<?php
// var_dump($argv);

$command = '/usr/local/bin/twdiff -resume -wait "'.$argv[2].'" "'.$argv[5].'" | cat';
exec($command);
?>