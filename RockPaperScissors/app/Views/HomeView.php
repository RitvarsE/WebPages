<!DOCTYPE html>

<html lang="en">
<body>
<?php include('header.php'); ?>
<table>
    <?php foreach ($this->rpsOptions->getOptionsNames() as $name): ?>
        <tr>
            <td>
                <form method="POST">
                    <button type="submit" name="choose" class="button"
                            value="<?= $name ?>">
                        <img src="/app/images/<?= $name ?>.jpeg"
                             width="100" height="70">
                    </button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
<?php
if (!empty($_GET['RESET'])) {
    $this->gameService->reset();
    header('Location: /');
}