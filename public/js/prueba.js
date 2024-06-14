function prueba(){
    var input =  $('#prueba')

    console.log(input.val());

    input.val('sfsfsdfsdfsd')

}

function mouse(estado,num){
if(estado){
    $('.circulo' + num).css("background-color","#3B4480");
    $('.circulo' + num).css("border", "solid 4px #12AA9E");
    $('.icono' + num).css("-webkit-filter","grayscale(100%)");
    $('.texto' + num).css("color", "#12AA9E");
}else{
    $('.circulo' + num).css("background-color","transparent");
    $('.circulo' + num).css("border", "solid 3px #3B4480");
    $('.icono' + num).css("-webkit-filter","grayscale(0%)");
    $('.texto' + num).css("color", "#3B4480");
}

}

function crear(url){
    var token = $('input[name=_token]').val();
    var input = $('#input1')
    console.log(url);
    console.log(input.val());

    $.ajax({
        type: 'POST',
        headers: {'X-CSRF-TOKEN': token},
        url: url,
        data: {customer:input.val()},
        success: function(data) {

            $('#tabla').empty()
            console.log(data);


            var tr;

            for (i = 0; i < data.length; i++) {
                tr += ` <tr>
                            <td>${data[i]['id']}</td>
                            <td>${data[i]['name']}</td>
                            <td>vacio</td>
                        </tr>`
            }

            $('#tabla').append(tr)

        },
        error: function(data) {
            console.log(data);
        }
    });

}
