<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área Restrita</title>
</head>
<body>
 <div class="container">
 <div class="col-4">
  <h2 class="float-left">Área Restrita</h2>
   <form action="verificar-login.php" method="post">
    <label for="text" name="login" class="form-control">Login:</label>
    <input type="text"class="form">
    <label for="">Senha:</label>
    <input type="password" class="form-control">
   <input type="submit" value="Entrar" class="btn btn-sucess mt-2">
   <div class="col-4">
           <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Manter-me Conectado</label>
          </div>
       </div>
</form>
</div>
</div>  
</body>
</html>