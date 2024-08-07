<!DOCTYPE html>
<html>
<head>
    <title>ثبت‌نام</title>
</head>
<body>
    <h1>ثبت‌نام</h1>
    <form action="register.php" method="post">
        <label for="username">نام کاربری:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">رمز عبور:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="ثبت‌نام">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        echo "<p>ثبت‌نام شما با موفقیت انجام شد. خوش آمدید، $username!</p>";
    }
    ?>
    <nav>
        <ul>
            <li><a href="index.php">صفحه اصلی</a></li>
            <li><a href="contact.php">تماس با ما</a></li>
        </ul>
    </nav>
</body>
</html>
