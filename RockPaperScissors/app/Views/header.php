<!DOCTYPE html>

<html lang="en">
<head>
    <title>
        Rock, Paper, Scissors game!
    </title>
</head>
<body>
<table>
    <tr>
        <td>Victories: <?= $this->gameService->getVictory() ?></td>
        <td>Losts: <?= $this->gameService->getLost() ?></td>
        <td>Draws: <?= $this->gameService->getDraw() ?></td>
        <td>
            <form method="GET">
                <button type="submit" name="RESET" class="button"
                        value="RESET">
                    RESET
                </button>
            </form>
        </td>
    </tr>
</table>
</body>
</html>