<?php

require_once 'vendor/autoload.php';

if (!empty($_POST['choose'])) {

    $this->userPlayer->setUserChoose($_POST['choose']);
    $this->cpuPlayer->setOption($this->rpsOptions);
    $option = [$this->userPlayer->getUserChoose(), $this->cpuPlayer->move($this->rpsOptions)];

    if ($this->userPlayer->move($this->rpsOptions) === $this->cpuPlayer->move($this->rpsOptions)) {
        $option[] = 'Draw';
        $_POST['option'] = $option;
        $this->gameService->addDraw();
    } elseif ($this->userPlayer->move($this->rpsOptions)->victory($this->cpuPlayer->move($this->rpsOptions))) {
        $option[] = 'You Won';
        $_POST['option'] = $option;
        $this->gameService->addVictory();
    } else {
        $option[] = 'You lost';
        $_POST['option'] = $option;
        $this->gameService->addLost();
    }
}

if (!empty($_GET['RESET'])) {
    $this->gameService->reset();
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php include('header.php'); ?>
<table style="width:30%">
    <tr>
        <th>Your Choose</th>
        <th>Cpu Choose</th>
    </tr>
    <tr>
        <td><img src="/app/images/<?= $_POST['option'][0] ?>.jpeg"
                 width="100" height="70" alt=""></td>
        <td><img src="/app/images/<?= $_POST['option'][1]->getName() ?>.jpeg"
                 width="100" height="70" alt=""></td>
    </tr>
</table>
<table style="width: 30%">
    <tr>
        <td><?= $_POST['option'][2] ?></td>
    </tr>
</table>
<a href="/">
    <button>Play Again?</button>
</a>
</body>
</html>
