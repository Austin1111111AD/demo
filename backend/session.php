<?php
if(session_status()===PHP_SESSION_NONE){session_start();}
header('Content-Type: application/json');
function require_user(){if(!isset($_SESSION['user_id'])){http_response_code(401);echo json_encode(['error'=>'Unauthorized']);exit;}return $_SESSION['user_id'];}
function require_admin(){if(!isset($_SESSION['admin_id'])){http_response_code(401);echo json_encode(['error'=>'Admin unauthorized']);exit;}return $_SESSION['admin_id'];}
?>