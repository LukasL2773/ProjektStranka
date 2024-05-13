<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/classes/Users.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Overenie údajov
if (empty($username) || empty($email) || empty($password)) {
    die('Chyba: Všetky polia sú povinné!');
}

// Uloženie používateľa do databázy
try {
    $user = new Users();
    $user->register($username, $email, $password);
    // Presmerovanie naspäť na tú istú stránku s úspešnou správou
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?success=1');
    exit();
} catch (Exception $e) {
    http_response_code(404);
    die('Chyba pri registrácii: ' . $e->getMessage());
}
?>
