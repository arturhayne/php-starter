<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Hello!!!!";
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
