<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="main-login">
        <div class="container">
                <div class="div1">
                    <h1>LOGIN FORM</h1>
                </div>
                <div class="div2">
                 <form action="/home" method="post">
                @csrf
                    <div class="form">
                        <label for="fname">Firstname</label>
                        <input type="text" name="fname" id="fname">
                    </div>
                    <div class="form">
                        <label for="lname" style="margin-top: 50px;">Lastname</label>
                        <input type="text" name="lname" id="lname">
                    </div>
                    <div class="button">
                        <input type="submit" value="Log In">
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>