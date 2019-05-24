<?
include ($_SERVER['DOCUMENT_ROOT']."/testdomen/resources/template/header.php");
require "init/init.php";
?>
	<body>
		<div class="container">
			<h1>Тестовое задание!</h1>

			<div class="row d-flex justify-content-center align-content-center mt-5">
				<p>Неплохо было бы авторизоваться. Токен то получить надо!</p>
				<form class="col-8">
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 form-control-label">Логин</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-2 form-control-label">Пароль</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-secondary">Войти</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
<?
include ($_SERVER['DOCUMENT_ROOT']."/testdomen/resources/template/footer.php");
?>