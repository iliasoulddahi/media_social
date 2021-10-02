const anime = require('animejs'); //deklarasi animejs


function comentBtnExpandToInput() {
    if($('#form-comment').css('display') == 'none'){
        $('#form-comment').show('slow')
    }else{
        $('#form-comment').hide('slow')
    }
}