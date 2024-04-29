<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
    <link href="welcome.css" rel="stylesheet">
</head>
<body class="container">
    <h1>SELAMAT DATANG!</h1>
    <p>Terima kasih telah bergabung di website kami. Media belajar kita bersama!</p>
    Nama = <?php echo $_POST["first-name"]; ?> 
    <?php echo $_POST["last-name"]; ?><br>
    Jenis Kelamin = <?php echo $_POST["gender"]; ?><br>
    Kewarganegaraan = <?php echo $_POST["nationality"]; ?><br>
    Bahasa yang dikuasai = <?php echo $_POST["language"]; ?><br>
    Bio = <?php echo $_POST["bio"]; ?><br>
</body>
</html>