<html>
<head>
	<title>Confirmação de envio de formulário</title>
<script language="JavaScript"> 
function pergunta(){ 
   if (confirm('Tem certeza que quer enviar este formulário?')){ 
      document.seuformulario.submit() 
   } 
} 
</script> 
</head>
 
<body>
<form name=seuformulario action="http://www.codigofonte.com.br">
<input type="text" name="teste">
<input type=button onclick="pergunta()" value="Enviar"> 
</form>
 
</body>
</html>