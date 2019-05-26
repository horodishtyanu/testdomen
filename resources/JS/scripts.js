/**
 * Created by Alexander on 25.05.2019.
 */
$(document).on('ready', function () {

}).on('submit', '#loginForm', function (event) {
    event.preventDefault();
    let data = {'event': $(this).attr('data-event')};
    data['data'] = $(this).serialize();
    $.ajax({
        type: "POST",
        data: data,
        success:function (mess) {
            let jData = JSON.parse(mess);
            if(jData.error){
                alert(jData.error.message);
            }else {
                window.location.replace("/testdomen/index.php");
            }
        }
    });
}).on('submit', '#newDomain', function (event) {
    event.preventDefault();
    let data = {'event': $(this).attr('data-event')};
    data['data'] = $(this).serialize();
    console.log(data);
    $.ajax({
        type: "POST",
        data: data,
        success:function (mess) {
            // let jData = JSON.parse(mess);
            console.log(mess);
        }
    });
})
