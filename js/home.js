const anime = require('animejs'); //deklarasi animejs


function comentBtnExpandToInput() {
    if($('#form-comment').css('display') == 'none'){
        $('#form-comment').show('normal')
    }else{
        $('#form-comment').hide('normal')
    }
}