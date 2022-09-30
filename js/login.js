const handleLogin = async () => {
    const email = document.getElementById('username').value;
    const pass = document.getElementById('password').value
    if(handleEmail(email))
        return true;
       
}

const setErrorFor = (input, message) => {
    input.style.color = "red";
    input.innerText = message;
}
const setSuccessFor = (input, message) => {
    input.style.color = "green";
    input.innerText = message;
}
const isEmail = (email) => {
    const regex =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
}
function handleEmail(email) {

    if (isEmail(email)) {
        setSuccessFor(document.getElementById('validationUsername'), "Adresse mail valide");
        return true;
    } else {
        setErrorFor(document.getElementById('validationUsername'), "Adresse mail invalide");
        return false;
    }

}
function handlePassword(pass) {
    if (pass.match(/[0-9]/g) &&
        pass.match(/[A-Z]/g) &&
        pass.match(/[a-z]/g) &&
        pass.match(/[^a-zA-Z\d]/g) &&
        pass.length >= 8 ) {
        setSuccessFor(document.getElementById('validationPassword'),"")
        return true
    }else {
        const str = "1 majuscule, 1 minuscule, 1 caractere special, 1 chiffre, 8 caracteres"
        setErrorFor(document.getElementById('validationPassword'), str)
        return false
    }
      
}
