<html lang="en">
<body>
<?php include 'HomeView.php';?>
<form method="get" action="/app/Scripts/AddPeople.php">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <label for="personid">Person ID</label>
    <input type="text" id="personid" name="personid"><br><br>
    <button type="submit" formmethod="post">Submit using POST</button>
</form>
</body>
</html>
