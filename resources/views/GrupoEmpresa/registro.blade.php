Prueba
<form action="{{url('/usuario')}}" method="post">
    @csrf
    <label for="username">Nombre de usuario</label><br>
    <input type="text" name="username"><br>
    <label for="pass">Contraseña</label><br>
    <input type="password" name="pass"><br>
    <label for="nombre">Nombre de Empresa</label><br>
    <input type="text" name="nombre"><br>
    <input type="submit" value="Registro"><br>
</form>
