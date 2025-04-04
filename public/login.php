<?php 
require_once('config.php');
session_start();
?>

<link rel="stylesheet" type="text/css" href="../css/signin.css">
    <title>Sign in</title>
</head>

<?php
if (isset($_POST['Submit'])) {
    if ($_POST['Username'] == $Username && $_POST['Password'] == $Password) {
        $_SESSION['Username'] = $Username;
        $_SESSION['Active'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = 'Incorrect Username or Password';
    }
}
?>

<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" >Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>

    </form>
</div>
</body>
</html>
