<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="container">
          <h1>COMPANY</h1>
            <form method="POST" action="../index.php">

                <!-- tipe hidden tidak akan tampil pada website --> 
                <input name="tujuan" type="hidden" value="LOGIN" >

                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>

                <button>Log In</button>
                
				<p>Don't have an acount?
                  <a href="daftar.php">Create an acount</a>
                </p>
            </form>
        </div>
    </body>
</html>