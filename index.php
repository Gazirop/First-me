<html>
<head>
    <meta charset="UTF-8">
    <title>Victor Alyohin</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data"/>
<input type="file" name="img[]" multiple/>
<br>
    <input type="submit"/>
</br>
</form>
<?php var_dump ($_FILES['img']); ?>
</body>
</html>

