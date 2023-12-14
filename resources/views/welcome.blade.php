<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dropify</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/trix@1.3.1/dist/trix.css">

    <!-- Tautan ke Dropify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">

    <!-- Tautan ke jQuery (diperlukan oleh Dropify) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Tautan ke Dropify JS -->
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>
</head>
<body>
    <!-- Formulir dengan elemen input Dropify -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- Elemen input Dropify -->
        <input type="file" name="file" class="dropify" data-height="200" />

        <!-- Tombol submit -->
        <button type="submit">Upload</button>
    </form>

    <div>
        <label for="my-editor">Isi:</label>
        <input id="my-editor" type="hidden" name="content">
        <trix-editor input="my-editor"></trix-editor>
    </div>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/trix@1.3.1/dist/trix.js"></script>
    <!-- Inisialisasi Dropify pada elemen input dengan class "dropify" -->
    <script>
        $(document).ready(function(){
            $('.dropify').dropify();
        });
    </script>
</body>
</html>
