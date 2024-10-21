<!DOCTYPE html>
<html>
<head>
    <title>Unggah Gambar</title>
</head>
<body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="files" multiple accept="image/*"> <!-- Menambahkan 'multiple' dan 'accept' -->
        <input type="submit" name="submit" value="Unggah">
        <div id="status"></div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="upload.js"></script>
</body>
</html>
