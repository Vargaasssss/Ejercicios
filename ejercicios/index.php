index.php
<?php
include 'figuras.php';
$onjfigura=new figuras();
echo "<from action='index.php' method='post' name='formu>
<table border=1>
<tr><td colspan=2 alig='center'><b>Calcular  Area</b></td></tr>
<tr>
<td alig= 'rigth'> Selecciona la figura:</td>
<td>
<select name='figura'>
<option value=1>cuadrado</option>
<option value=2>rectangulo</option>
<option value=3>triangulo</option>
<option value=4>circulo</option>
</select>
</td>
</tr>
<tr>
<td alig='right'>base:<td>
<td><input type='text' name='base'></td>
</tr>
<tr>
<td alig='right'>base:<td>
<td><input type='text' name='altura'></td>
</tr>
<tr>
<td alig='right'>radio:<td>
<td><input type='text' name='radio'></td>
</tr>
<tr>
<td alig='right'>radio:<td>
<td><input type='text' name='calcular'></td>
</tr>
<tr>
<selec name='calcular'>
<option value=1>area</option>
<option value=2>perimetro</option>
</select>
</td>
</tr>
<tr>
<td colspan=2 alig='center'><input type='submit' value='calcular'></td>
</tr>
</table>
</form>";
if (!empty($_post['calcular']))
{
    if ($_REQUEST['figura']==1)
{
    $objfigura ->cuadrado($REQUEST['base'],$_REQUEST['altura']); $REQUEST['calcular'];

}
}
?>
<php>
