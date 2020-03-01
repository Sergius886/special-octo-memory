<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Форма</title>
 </head>
<body> 
<form action="form.php" method="post">
<p>
Ім'я:<input type="text" name="username"><br>
Роль:<select name="role_id"><?php require 'fetch_role.php'; ?>
</select>
</p>
<p>
</p>
<button type="submit" name="submit"> Додати</button>
</form>
<form action="fetch_users.php" method="post">
<button type="submit" name="submit">Показати всіх</button>
</form>
 </body>
</html>