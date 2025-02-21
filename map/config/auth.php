<?php
require_once "db.php";

function authenticate() {
    if (!isset($_GET["api_key"]) || $_GET["api_key"] !== API_KEY) {
        echo json_encode(["error" => "Unauthorized"]);
        http_response_code(401);
        exit();
    }
}
?>
