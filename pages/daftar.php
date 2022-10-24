<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="container">
          <h1>CREATE YOUR ACCOUNT!</h1>
            <form method="POST" action="../index.php">

                <input type="hidden" name="tujuan" value="DAFTAR">

                <label>Email</label>
                <br>
                <input name="email" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>
				<label>Rewrite Password</label>
				<br>
				<input name="password" type="password">
				<br>
                <button>Sign Up</button>
                
                  <a href="login.php">Sign in</a>
            </form>
        </div>
    </body>
</html>