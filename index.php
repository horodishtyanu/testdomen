<?
require "init/init.php";
include ($_SERVER['DOCUMENT_ROOT']."resources/template/header.php");

?>
		<div class="container">
			<h1 class="text-center">Тестовое задание!</h1>

			<div class="row d-flex flex-column justify-content-between align-content-center mt-5">
                <a name="" id="" class="btn btn-primary" href="/testdomen/domaincreate.php" role="button">Регистрация доменного имени</a><br>
                <a href="/testdomen/dnsupdate.php" class="btn btn-success">Обновление DNS для домена</a>
            </div>
		</div>

<?
include ($_SERVER['DOCUMENT_ROOT']."resources/template/footer.php");
?>