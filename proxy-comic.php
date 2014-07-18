<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


if (isset($_GET['relevant'])) {
  $relevant = $_GET['relevant'];
  $url = 'http://relevantxkcd.appspot.com/process?action=xkcd&query='.$relevant;
}
else {
  $comic = isset($_GET['comic']) ? $_GET['comic'] : '';
  $url = 'http://dynamic.xkcd.com/api-0/jsonp/comic/'.$comic;
}

echo file_get_contents($url);
