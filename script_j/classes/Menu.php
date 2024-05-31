<?php
class Menu {
private array $validateMenuTypes = ["header", "footer"];

  public function isValidMenuType(string $type): bool {
    return in_array($type, $this->validateMenuTypes);
}
  public function getMenuData(string $type): array {
    if (!$this->isValidMenuType($type)) {
        throw new InvalidArgumentException("Invalid menu type: $type");
    }
    $menuData = [
        "header" => [
            'home' => [
                'name' => 'Domov',
                'path' => 'index.php',
            ],
            'starostlivost' => [
                'name' => 'Starostlivosť',
                'path' => 'starostlivost.php',
            ],
            'zaujimavosti' => [
                'name' => 'Zaujímavosti',
                'path' => 'zaujimavosti.php',
            ],
            'galeria' => [
                'name' => 'Galéria',
                'path' => 'galeria.php',
            ],
            'pomoc' => [
                'name' => 'Pomoc',
                'path' => 'pomoc.php',
            ],
            'prihlasit/registrovat' => [
                'name' => 'Prihlásiť/Registrovať',
                'path' => 'signin.php',
            ],
        ],
    ];
    return $menuData[$type];
}
  public function printMenu(array $menu): void {
    foreach ($menu as $menuName => $menuItem) {
        echo '<li><a href="' . $menuItem['path'] . '">' . $menuItem['name'] . '</a></li>';
    }
  }

    public function printLoginRegister(): void{
        session_start();
        if (isset($_SESSION['login'])) {
            echo '<li> <a href= db/logout.php >Prihlásený:' . $_SESSION['login'] . ' (' . $_SESSION['rola'] . ')'.'</a> </li> ';
        } else {
            echo '<li> <a href="http://localhost/ProjektStranka/script_j/signin.php">Prihlásiť/Registrovať</a> </li>';
        }
    }
}