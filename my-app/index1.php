<?php
$ip_server = $_SERVER['SERVER_ADDR'];
$server_name =  $_SERVER['SERVER_NAME'];
$server_os = $_SERVER['SERVER_SOFTWARE'];

echo "<h1>Hello from Kubernetes</h1><br>";
echo "Server IP Address is: $ip_server", "<br><p>";
echo "Server name is:$server_name", "<br><p>";
echo "Server software is: $server_os", "<br><p>";
echo "Made by <font color=red> test k8s web2";

?>