<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký và đăng nhập </title>
    <link rel="stylesheet" type="text/css" href="./SignUp&Login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cactus+Classical+Serif&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Đăng ký</label>
                <input type="text" name="txt" placeholder="Tên tài khoản" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="number" name="broj" placeholder="Số điện thoại" required="">
                <input type="password" name="pswd" placeholder="Mật khẩu" required="">
                <button>Đăng ký</button>
            </form>
        </div>

        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Đăng nhập </label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Mật khẩu" required="">
                <button>Đăng nhập</button>
            </form>
        </div>
    </div>
</body>

</html>