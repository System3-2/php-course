<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.

$resource  = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($resource);
$info = curl_getinfo($resource, CURLINFO_HTTP_CODE);
// curl_close($resource);

echo $info;
echo $result;

// Get response status code

// set_opt_array

// Post request