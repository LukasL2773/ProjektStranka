<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/QnA.php');
use otazkyodpovede\QnA;
session_start();

if (!isset($_SESSION['rola']) || !$_SESSION['user_id']) {
    header('Location: db/login.php');
    exit;
}
$id = $_GET['id'];
$qna = new QnA();
$admin = new Users();
if (!$admin->isAdmin()) {
    echo 'Nemáte oprávnenie na mazanie otázky a odpovede.';
    exit;
}
$id = intval($id);  // Uistite sa, že ID je integer
$row = $qna->getQnAById($id);
if (!$row) {
    echo 'Otázka s daným ID nebola nájdená.';
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $qna->deleteQnA($id);
    header('Location: ../starostlivost.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <!-- hlavička -->
</head>
<body>
<main>
    <section class="banner">
        <div class="container text-white">
            <h1>Vymazanie otázky a odpovede</h1>
        </div>
    </section>
    <div class="row">
        <p>Ste si istí, že chcete vymazať túto otázku a odpoveď?</p>
        <p><?php echo htmlspecialchars($row['otazka']); ?></p>
        <p><?php echo htmlspecialchars($row['odpoved']); ?></p>
        <form action="delete_qna.php?id=<?php echo $id; ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="row">
                <input type="submit" value="Vymazať">
                <button type="button" onClick="location.href='../starostlivost.php'">Zrušiť</button>
            </div>
        </form>
    </div>
</main>
</body>
</html>