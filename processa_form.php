<?php 

#primeira etapa é recuperar as variaveis do formulário 


# vou recuperar apenas um como exemplo

$nome = $_POST['nome']; # note que, como estou utilizando o method POST, eu preciso usar a variavel global $_POST para recuperar o dado enviado pelo formulário. o parametro passado dentro da variavel $_POST deve ser exatamente o "name" do formulario, nesse exemplo o valor setado no formulario deve ser name='nome'.

#Para imprimir e visualizar esse valor na tela 

echo 'Nome digitado no formulario: ' . $nome # estou usando o " . " para concatenar o texto com a variavel

?>
