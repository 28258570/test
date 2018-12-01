<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>CREATE</h1>
    <form action="/admin/index" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="file">Filename:</label>
        <input type="file" name="heading" id="file" />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>

</body>
</html>
