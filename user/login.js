console.log("fttxtxtx");
const form = document.getElementById("form");

const email = document.getElementById("email");
const password = document.getElementById("password");





const smallEmail = document.querySelector("#emailMessage");

const smallPassword = document.querySelector("#passwordMessage");



let emailState = false;

let passwordState = false;


email.addEventListener("keyup", emailTracker);
function emailTracker() {
  let emailValue = email.value;
  if (emailValue.includes("@")&&emailValue.includes("com")) {
    smallEmail.style.visibility = "hidden";
    emailState = true;
  } else {
    smallEmail.style.visibility = "visible";
    smallEmail.style.color = "red";
    smallEmail.innerHTML = "Invalid email";
  }
}



password.addEventListener("keyup", passwordTracker);
function passwordTracker() {
  if (password.value.length >= 8) {
    smallPassword.style.visibility = "hidden";
    passwordState = true;
  } else {
    smallPassword.style.visibility = "visible";
    smallPassword.style.color = "red";
    smallPassword.innerHTML = "Password must be 8 or more";
  }
}


let submit = document.querySelector("#sub-btn");
submit.addEventListener("click", (e) => {
  if (!emailState) {
    // e.preventDefault();
    smallEmail.style.visibility = "visible";
    smallEmail.innerHTML = "Cannot be empty";
    smallEmail.style.color = "red";    
  }
 
  if (!passwordState) {
    // e.preventDefault();
    smallPassword.style.visibility = "visible";
    smallPassword.innerHTML = "Cannot be empty";
    smallPassword.style.color = "red";
  }
 
});