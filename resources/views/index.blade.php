<html>

<form action="\calculoimc" method="post">
    Altura cm><br><input type="number" name="altura">
    Peso kg<br><input type="number" name="peso">
    {{ csrf_field() }}
    <input type="submit" value="Calcular">
</form>