<html lang="en">
<body>
<?php include 'HomeView.php'; ?>
<form method="get">
    <label for="name">First name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="surname">Last name:</label>
    <input type="text" id="surname" name="surname"><br><br>
    <label for="personid">Person ID(without '-')</label>
    <input type="text" id="personid" name="personid"><br><br>
    <button type="submit" formmethod="post">Submit</button>
</form>
</body>
</html>
<?php
if (isset($_POST['name'], $_POST['surname'], $_POST['personid'])) {
    if (preg_match('/^\p{Latin}+$/u', $_POST['name'])
        && preg_match('/^\p{Latin}+$/u', $_POST['surname'])
        && ctype_digit($_POST['personid'])
        && strlen($_POST['personid']) === 11) {
        $this->personService->addPerson($_POST['name'], $_POST['surname'], $_POST['personid']);
        echo 'You added ' . $_POST['name'];
    } else {
        echo 'Input correct data!';
    }
}