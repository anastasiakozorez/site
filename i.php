<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <script src="/public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-light bg-dark"><i class = "fas fa-ankh"></i> Теневая библиотека</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-light bg-dark " href="header.php">Домой<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light bg-dark" href="pageone.php">Архив</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light bg-dark" href="pagetwo.php">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled text-light bg-dark" href="dbconnect.php">Disabled</a>
            </li>
            <a class="nav-link text-light bg-dark">   </a>
            <a class="btn btn-light" href="https://vk.com/cosinusnasty" role="button"> Вк </a>
            <a class="nav-link text-light bg-dark">   </a>
            <a class="btn btn-light" href="https://www.facebook.com/profile.php?id=100006517981659" role="button"> Fb </a>
            <a class="nav-link text-light bg-dark">   </a>
            <a class="btn btn-outline-primary" href="registration.php" role="button"> Присоединиться </a>
            <a class="nav-link text-light bg-dark">   </a>





        </ul>
    </div>
</nav>
<form action="test.php" method="post">

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
    <p>
        <label>Ваш логин:<br></label>
        <input name="login" type="text" size="15" maxlength="15">
    </p>

    <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->

    <p>

        <label>Ваш пароль:<br></label>
        <input name="password" type="password" size="15" maxlength="15">
    </p>

    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->

    <p>
        <input type="submit" name="submit" style="nav-link text-light bg-dark" value="Войти">

        <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** -->
        <br>
    </p></form>
<br>
<?php
// Проверяем, пусты ли переменные логина и id пользователя
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость<br><a href='#'>Моя библиотека</a>";
}
else
{

    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='http://lib.local/application/libr.php'>Моя библиотека</a>";
}
?>

<body style="background-image: url('https://images.wallpapersden.com/image/download/starry-sky-night-stars_20971_1280x800.jpg')">
</body>
</html>