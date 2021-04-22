
enviaForm = document.getElementById('envia')
enviaForm.addEventListener('click', function validaInputs(){
    validaForm = document.getElementById('nome1').value
    if(validaForm =='' || validaForm.length < 5 ){
        alert('Seu login e senha não pode estar em branco e precisa ter mais do que 4 caracteres.')
        event.preventDefault()
    }
})