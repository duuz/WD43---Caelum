<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Checkout Mirror Fashion</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha!</h1>
			<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
		</div>
	</div>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title">Sua Compra</h2>
			</div>

			<div class="panel-body">
				<img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive">
				<dl>
					<dt>Cor</dt>
					<dd>
						<?= $_POST['cor']?>
					</dd>
					<dt>Tamanho</dt>
					<dd>
						<?= $_POST['tamanho']?>
					</dd>
					<dt>Produto</dt>
					<dd>
						<?= $_POST['nome']?>
					</dd>
					<dt>Valor</dt>
					<dd>
						<?= $_POST['valor']?>
					</dd>
				</dl>
			</div>
		</div>
		<form action="">
			<fieldset>
				<legend>Dados pessoais</legend>
				<div class="form-group">
					<label for="nome">Nome completo</label>
					<input type="text" class="form-control" id="nome" name="nome" autofocus autocomplete="on" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
				</div>
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
				</div>
				<div class="form-group">
					<label for="checkbox">
						<input type="checkbox" value="sim" name="spam" checked>Quero receber spam da Mirror Fashion</label>
				</div>
			</fieldset>
			<fieldset>
				<legend>Cartão de crédito</legend>
				<div class="form-group">
					<label for="numero-cartao">Número - CVV</label>
					<input type="text" class="form-control" id="numero-cartao" name="numero-cartao" required>
				</div>
				<div class="form-group">
					<label for="bandeira-cartao">Bandeira</label>
					<select name="bandeira-cartao" id="bandeira-cartao" class="form-control" required>
						<option value="master">MasterCard</option>
						<option value="visa">VISA</option>
						<option value="amex">American Express</option>
					</select>
				</div>
				<div class="form-group">
					<label for="validade-cartao">Validade</label>
					<input type="month" class="form-control" id="validade-cartao" name="validade-cartao" required>
				</div>
			</fieldset>
			<button type="submit" class="btn btn-primary btn-lg pull-right">
				<span class="glyphicon glyphicon-usd"></span> Confirmar pedido</button>
		</form>
	</div>
</body>

</html>
