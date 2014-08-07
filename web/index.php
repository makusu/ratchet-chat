<?php

/**
 * This file is part of the Frolik.com.
 *
 * (c) Max Meiden Dasuki <max@frolik.com>
 */

require_once 'bootstrap.php';
require_once 'Chat.php';

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;


$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    1234
);

$server->run();
