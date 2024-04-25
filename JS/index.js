//VALIDACAO DO E MAIL PARA BOTAO DDE RECUPRAR SENHA / FINALIDADE DE MOSTRAR OU NAO A MENSAGEM DE ERRO NA TELA DO USUARIO CASO ELE DIGITE ALGUMA INFORMACAO INVÁLIDA.
function validateFields() {
    toggleButtonsDisable();
    toggleEmailErro();
    togglePasswordErro()
}
//TOGGLE
function toggleButtonsDisable() {
    //validacao email
    const emailValid = isEmailValid();
    form.recoverPassword().disabled = !emailValid;
    //validacao senha
    const passwordValid = isPasswordValid();
    form.loginButton().disabled = !emailValid || !passwordValid;
}
//VALIDADE DO EMAIL
function isEmailValid() {
    const email = form.email().value;
    if (!email) {
        return false;
    }
    return validateEmail(email);
}
//VALIDADE DA SENHA
function isPasswordValid() {
    const password = form.password().value;
    if (!password) {
        return false;
    }
    return true;
}
//BIBLIOTECA DAS FUNCOES
const form = {
    email: () => document.getElementById('email'),
    emailRequiredErro: () => document.getElementById('email-required-erro'),
    emailInvalidErro: () => document.getElementById('email-invalid-erro'),
    loginButton: () => document.getElementById('login-button'),
    password: () => document.getElementById('password'),
    passwordRequiredErro: () => document.getElementById('password-required-erro'),
    recoverPassword: () => document.getElementById('recover_password-button')
}

// VERIFICAR SE O EMAIL É VÁLIDO
function validateEmail(email) {
    return /\S+@\S+\.\S/.test(email);
}


//mostrar ou econder os erros de email
function toggleEmailErro() {
    const email = form.email().value;
    if(!email){
        form.emailRequiredErro().style.display = "block";
    }else {
        form.emailRequiredErro().style.display = "none";
    }
    if(validateEmail(email)){
        form. emailInvalidErro().style.display = "none";
    }else {
        form. emailInvalidErro().style.display = "block";
    }

}
function togglePasswordErro() {
    const password = form.password().value;
    if(!password){
        form.passwordRequiredErro().style.display = "block";
    }else {
        form.passwordRequiredErro().style.display = "none";
}
}

// DIRECIONANDO USUARIO PARA DENTRO DE SISTEMA

function login(){
    window.location.href = "02menu.html";
}