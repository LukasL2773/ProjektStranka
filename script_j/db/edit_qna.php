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
    echo 'Nemáte oprávnenie na editáciu otázky a odpovede.';
    exit;
}
$id = intval($id);  // Uistite sa, že ID je integer
$row = $qna->getQnAById($id);
if (!$row) {
    echo 'Otázka s daným ID nebola nájdená.';
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $qna->updateQnA($id, $_POST['question'], $_POST['answer']);
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
            <h1>Editácia otázky a odpovede</h1>
        </div>
    </section>
    <form action="edit_qna.php?id=<?php echo $id; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="row">
            <label for="question">Otázka:</label>
            <textarea name="question" id="question"><?php echo htmlspecialchars($row['otazka']); ?></textarea>
            <br>
            <label for="answer">Odpoveď:</label>
            <textarea name="answer" id="answer"><?php echo htmlspecialchars($row['odpoved']); ?></textarea>
        </div>
        <input type="submit" value="Uložiť">
        <button type="button" onClick="location.href='../starostlivost.php'">Zrušiť</button>
    </form>
</main>
</body>
</html>
