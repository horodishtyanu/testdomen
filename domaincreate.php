<?
require "init/init.php";
include ($_SERVER['DOCUMENT_ROOT']."resources/template/header.php");

?>
<div class="container">
    <h1 class="text-center">Тестовое задание!</h1>

    <div class="row d-flex flex-column justify-content-between align-content-center mt-5">
        <div class="container">
            <form class="d-flex flex-wrap flex-column justify-content-between" id="newDomain" data-event="newDomain">
                <fieldset class="form-group row">
                    <legend class="col-form-legend col-sm-1-12">Создание клиента</legend>
                    <hr>
                </fieldset>
                <input type="hidden" name="legal" id="legal" value="person">
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Введите ФИО</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="nameLocal" id="nameLocal" placeholder="ФИО">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Дата рождения</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="birthday" id="birthday" placeholder="Дата рождения">
                    </div>
                </div>
                <input type="hidden" id="type" name="type" value="passport">

                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Серия паспорта</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="series" id="series" placeholder="Серия паспорта">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Номер паспорта</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="number" id="number" placeholder="Номер паспорта">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Кем выдан паспорт</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="issuer" id="issuer" placeholder="Кем выдан паспорт">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Когда выдан паспорт</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="issued" id="issued" placeholder="Когда выдан паспорт">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Введите e-mail</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="emails" id="emails" placeholder="Введите e-mail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Введите телефон</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="phones" id="phones" placeholder="Введите телефон">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Введите индекс</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="index" id="index" placeholder="Введите индекс">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Ввудите страну</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="country" id="country" placeholder="Страна напр. RU">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Введите город</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="city" id="city" placeholder="Введите город">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Введите улицу</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="street" id="street" placeholder="Введите улицу">
                    </div>
                </div>
                <fieldset class="form-group row">
                    <legend class="col-form-legend col-sm-1-12">Данные домена</legend>
                    <hr>
                </fieldset>
                <input type="hidden" name="comment" id="comment" value="created via API">
                <div class="form-group row">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Введите домен</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Введите домен">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?
include ($_SERVER['DOCUMENT_ROOT']."resources/template/footer.php");
?>
