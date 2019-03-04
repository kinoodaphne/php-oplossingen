<?php

  function canLogin($username, $password) {
    if ($username != "apache" || $password != "game") {
      return false;
    } else {
      return true;
    }
  }

  if (!empty( $_POST ) ) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ( canLogin($username, $password) ) {
      session_start();
			$_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;

      header("Location: index.php");
    } else {
      $error = true;
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>twitch login</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="login">
  <header>
    <nav class="nav hidden">
      <a href="#">Browse</a>
      <a href="#">Get desktop</a>
      <a href="#">Try prime</a>
      <a href="#" class="loggedIn">
        <div class="user--avatar"><img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=ddcb7ec744fc63472f2d9e19362aa387"
            alt=""></div>
        <h3 class="user--name">Username here</h3>
        <span class="user--status">Watching dakotaz</span>
      </a>
      <a href="logout">Log out?</a>
    </nav>
  </header>

  <div id="app">
    <h1>Log in to Twitch</h1>
    <nav class="nav--login">
      <a href="#" id="tabLogin">Log in</a>
      <a href="#" id="tabSignIn">Sign up</a>
    </nav>

    <div class="form form--login">
      <form action="" method="post">

      <?php if( isset($error) ): ?>
				<div class="form__error">
					<p>
						Sorry, we can't log you in with that email address and password. Can you try again?
					</p>
				</div>
			<?php endif; ?>

        <label for="username">Username</label>
        <input type="text" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">

        <input type="submit" value="Log in" class="btn" id="btnSubmit">
      </form>
    </div>

    <!-- <div class="form form--signup hidden">
      <label for="username2">Username</label>
      <input type="text" id="username2" name="username2">

      <label for="password2">Password</label>
      <input type="password" id="password2" name="password2">

      <label for="email">Email</label>
      <input type="text" id="email" name="email">
    </div>

    <a href="#" class="btn" id="btnSubmit">Log In</a> -->
  </div>

</body>
</html>