$('body').on('click','.btnContato', function(e){
    if(grecaptcha.getResponse() == ""){
        e.preventDefault();
        $(".recaptcha").append('<div class="alert alert-danger mt-4">O campo Não sou um robô é de preenchimento obrigatório.</div>');
    }
});

