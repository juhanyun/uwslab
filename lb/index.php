<?php

    $hostname = getHostName();

    echo "<h3>hostname : $hostname</h3>";



    $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

    socket_connect($sock, "8.8.8.8", 53);

    socket_getsockname($sock, $ipaddr);

    echo "<h3>ip address : $ipaddr</h3><br>";

?>
