<html lang="en">
<body>
<?php include 'HomeView.php';?>
<form method="get">
    <label for="personid">Find the person to delete by person ID(without '-')</label>
    <input type="text" id="personid" name="personid"><br><br>
    <button type="submit" formmethod="post">FIND</button>
</form>
<?php if (isset($_POST['personid'])) : ?>

    <?php $data = $this->personService->findPerson($_POST['personid']); ?>
    <?php if (isset($data[0])) : ?>

        Are you sure you want to delete: <?= $data[0]['name'] . ' ' . $data[0]['surname'] . ' ' . $data[0]['personid'] ?>
        <form method="get">
            <button type="submit" name="yes" value="<?= $_POST['personid'] ?>" formmethod="post">Yes</button>
            <button type="submit" name="no" formmethod="post">No</button>
        </form>
    <?php else : ?>
        We didn`t find that person in our Registry!
    <?php endif; ?>
<?php endif; ?>
<?php
if (isset($_POST['yes'])) {
    $this->personService->deleteUser($_POST['yes']);
    echo "You successfully deleted!";
}
?>
<?php include 'footer.php';?>
</body>
</html>