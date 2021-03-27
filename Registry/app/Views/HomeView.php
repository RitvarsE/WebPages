<!DOCTYPE html>
<html lang="lv">
<head>
    <style>
        .btn {
            border: none;
            background-color: inherit;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
        }

        .btn:hover {
            background: #eee;
        }

        .success {
            color: green;
        }
    </style>
    <title>Person registry</title>
</head>
<body>

<h2>Person registry</h2>
<table>
    <td>
        <form method="post" action="/add">
            <button name="add" value="add" class="btn success">Add people</button>
        </form>
    </td>
    <td>
        <form method="post" action="/update">
            <button name="update" value="update" class="btn success">Update people</button>
        </form>
    </td>
    <td>
        <form method="post" action="/delete">
            <button name="delete" value="delete" class="btn success">Delete people</button>
        </form>
    </td>
</table>
</body>
</html>

