
const inscription = document.getElementById("inscription");
const username = document.getElementById("username");
const email = document.getElementById("email1");
const password = document.getElementById("pas1");
const password2 = document.getElementById("pas2");
let valid = true ;
console.log(inscription);
console.log(email);

inscription.addEventListener("submit", (e) => {
    validateInputs();
    if (valid == false) {
        e.preventDefault(); 
    }
  
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.alert');

    errorDisplay.innerText = message;
    errorDisplay.classList.add('alert-danger');
    valid = false ;
}
const setSuccess = (element , message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.alert');

    errorDisplay.innerText = message;
    errorDisplay.classList.add('alert-success');
    errorDisplay.classList.remove('alert-danger')
    valid = true ;
    
};


const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === '') {
        console.log("username est vide")
        setError(username, 'Username est vide');
    } else {
        console.log(`username est valid`)
        setSuccess(username, 'Username est valid' );
    }

    if(emailValue === '') {
        console.log(`email est vide`)
        setError(email, 'Email est vide');
    }
    //  else if (!isValidEmail(emailValue)) {
    //     setError(email, 'Provide a valid email address');
    // }
     else {
        console.log(`email est valid`)
        setSuccess(email , 'email est valid');
    }

    if(passwordValue === '') {
        console.log(`password est vide : ${passwordValue}`)
        setError(password, 'Password est vide');
    } else if (passwordValue.length < 8 ) {
        console.log(`password est insufusante : ${passwordValue}`)
        setError(password, 'Password must be at least 8 character.')
    } else {
        console.log(`password est valid : ${passwordValue}`)
        setSuccess(password , 'password est valid');
    }

    if(password2Value === '') {
        console.log(`password est vide : ${password2Value}`)
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        console.log(`password ${passwordValue} est defferentre de ${password2Value}`)
        setError(password2, "Passwords est defferent de 1er code");
    } else {
        console.log(`password est valid : ${password2Value}`)
        setSuccess(password2, 'password est valid');
    }

};
