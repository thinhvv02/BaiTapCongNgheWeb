<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKEditor Example</title>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> <!-- Thêm đường dẫn CDN của CKEditor -->
</head>

<body>
    <textarea name="editor1"></textarea> <!-- Tạo một vùng text area với tên "editor1" -->
    <script>
        CKEDITOR.replace('editor1'); // Khởi tạo CKEditor cho vùng text area có tên "editor1"
    </script>
</body>

</html>