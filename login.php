<?
require "init/init.php";
include ($_SERVER['DOCUMENT_ROOT']."resources/template/header.php");
?>
    <div class="container">
        <h1>Тестовое задание!</h1>

        <div class="row d-flex justify-content-center align-content-center mt-5">
            <p>Неплохо было бы авторизоваться. Токен то получить надо!</p>
            <form class="col-8 form" id="loginForm" data-event="login">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 form-control-label">Логин</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="loginUser" name="login" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 form-control-label">Пароль</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="passUser" name="password" placeholder="Email">
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

<?
include ($_SERVER['DOCUMENT_ROOT']."/resources/template/footer.php");
?>