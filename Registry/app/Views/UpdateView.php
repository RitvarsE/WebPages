<html lang="en">
<body>
<?php include 'HomeView.php';?>
<form method="get">
    <label for="personid">Find the person for whom to add note by person ID(without '-')</label>
    <input type="text" id="personid" name="personid"><br><br>
    <button type="submit" formmethod="post">FIND</button>
</form>
<?php if (isset($_POST['personid'])) : ?>

    <?php $data = $this->personService->findPerson($_POST['personid']); ?>
    <?php if (isset($data[0])) : ?>
        <form method="get">
            <label for="note">Add note for <?= $data[0]['name'] . ' ' . $data[0]['surname']?></label>
            <input type="text" id="note" name="note"><br><br>
            <button type="submit" name="findPerson" value="<?=$data[0]['personid']?>" formmethod="post">Submit</button>
        </form>

    <?php else : ?>
        We didn`t find that person in our Registry!
    <?php endif; ?>
<?php endif; ?>
<?php
if(isset($_POST['note']))
{
    $this->personService->updatePersonsNote($_POST['findPerson'], $_POST['note']);
    echo 'You successfully added note';
}
?>
<?php include 'footer.php';?>
</body>
</html>