<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="downloadLink.php?file=file.pdf">Download MyFile</a>

</body>
</html>


<?php
    if (isset($_GET['file'])) {
    $file = "uploads/" . basename($_GET['file']);
    if (file_exists($file)) {
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=" . basename($file));
        readfile($file);
        exit;
    } else {
        die("File not found.");
    }
}

?>

