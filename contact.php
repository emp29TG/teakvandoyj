<!DOCTYPE html>
<html>
<head>
    <title>تماس با ما</title>
</head>
<body>
    <h1>تماس با ما</h1>
    <form action="contact.php" method="post">
        <label for="name">نام:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">ایمیل:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="message">پیام:</label>
        <textarea id="message" name="message" required></textarea><br>
        <input type="submit" value="ارسال">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        echo "<p>پیام شما با موفقیت ارسال شد. متشکریم، $name!</p>";
    }
    ?>
    <nav>
        <ul>
            <li><a href="index.php">صفحه اصلی</a></li>
            <li><a href="register.php">ثبت‌نام</a></li>
        </ul>
    </nav>
</body>
</html>
