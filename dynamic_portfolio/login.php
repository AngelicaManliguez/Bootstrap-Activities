<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="wrap col-md-8 col-md-offset-2">
                    <form action="login_process.php" method="POST">
                        <h1 class="logintitle text-center">PORTFOLIO</h1>
                        
                        <div class="form-group">
                            <label for="username">Username:</label><br>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Enter Your Username" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label><br>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-default ">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>