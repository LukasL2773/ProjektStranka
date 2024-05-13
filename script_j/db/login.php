<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/classes/Users.php');

$email = $_POST['email'];
$password = $_POST['password'];

// Overenie údajov
if (empty($email) || empty($password)) {
    die('Chyba: Všetky polia sú povinné!');
}

// Prihlásenie používateľa
try {
    $user = new Users();
    $user->login($email, $password);
    // Presmerovanie na hlavnú stránku po úspešnom prihlásení
    header('Location: http://localhost/ProjektStranka/script_j/index.php');
    exit();
} catch (Exception $e) {
    // Ak nastane chyba pri prihlásení, zobrazíme chybové hlásenie
    http_response_code(404);
    echo("Chyba pri prihlásení: " . $e->getMessage());
}
?>
