
function randomNumberAdress()
{
  let nr=Math.floor(Math.random()*25);
  let text=document.getElementById("numar");
  text.textContent=text.textContent+`${nr}`+".";
}

function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

function validateForm(){
  var user_name = document.forms["form"]["name"].value;
  var email = document.forms["form"]["email"].value;
  var message = document.forms["form"]["message"].value;
  var array = [user_name, email, message];

  for(i=0;i<array.length; i++){
      if(array[i] == ""){
          alert("Toate campurile trebuie completate.");
          return false;
      }
  }

  ValidateEmail(email);
}

/*Functie preluata de pe https://www.w3resource.com/javascript/form/email-validation.php*/
function ValidateEmail(mail)
{
  var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if(mail.match(mailformat)){
      alert("Formularul a fost trimis cu succes.");
      return true;
  }
  else{
      alert("Ati introdus o adresa de email invalida.");
      return false;
  }

}

function clickCounter() {
if(typeof(Storage) !== "undefined") {
  if (localStorage.clickcount) {
    localStorage.clickcount = Number(localStorage.clickcount)+1;
  } else {
    localStorage.clickcount = 1;
  }
  document.getElementById("result").innerHTML = "You have attempted to message us " + localStorage.clickcount + " time(s).";
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
}
}
window.onload=randomNumberAdress;
