<?php 
//gerçek adresi
$gercekadresi =  realpath('./../home/');
$datafile = $gercekadresi . '/data.json';
echo $datafile;
