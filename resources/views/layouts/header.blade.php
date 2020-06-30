<!DOCTYPE <html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&amp;subset=cyrillic-ext">
    <title>Главная</title>
</head>

<header>
    <div class="topnav">
        <a class="active" href="/index">Главная</a>
        <a href="/sorokodin">1941</a>
        <a href="/sorokdva">1942</a>
        <a href="/soroktri">1943</a>
        <a href="/sorokchetire">1944</a>
        <a href="/sorokpyat">1945</a>
    </div>

    <div class="sidebar">
        @if (!Auth::check ())
        <h2>Вход</h2>
            <form method="get" action="/auth" id="login">
                <input type="text" name="login" placeholder="логин" />
                <input type="password" name="password" placeholder="пароль" />
                <input type="submit" class="btn" value="вход" />
                <div class="lables_passreg_text">
                    <span><a href="#">Забыли пароль?</a></span> | <span><a href="#">Регистрация</a></span>
                </div>
            </form>
        @else
            <a href="/logout">Выход</a>
        @endif
    </div>

</header>

<body>

<div class="no see this"> <br><br></div>
@yield('content')

</body>

<footer>
    <a href="https://vk.com/ontonowskey">©Антонов, "ИАТ", ПКС-18-1</a>
</footer>

</html>
