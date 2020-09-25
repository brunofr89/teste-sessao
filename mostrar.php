<?
session_start();
if 
($_SESSION[nome]==""){
echo "Voce nao esta logado.";
exit;
}
$nome = $_SESSION[nome];
echo "Você está logado com a seção:$nome";
?>
<!DOCTYPE html>
<body>
</form>
</br>
<p></p>
<form method="POST" action="sair.php">
<input type="submit" value="Encerrar seção">
</form>
<body>
