<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>Connection</h1>
  <form action="auth.php" method="POST">
     <div>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" >
     </div>

     <div>
        <label for="password">Mot de passe: </label>
        <input type="password" name="password" id="password">
     </div>
     
     <div>
        <button type="submit">Connextion</button>
     </div>
  </form>
</body>
</html>