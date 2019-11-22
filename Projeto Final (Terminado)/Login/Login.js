document.getElementById("login-form").onsubmit = e =>{
  e.preventDefault();
  const email = document.getElementById("email");
  const senha = document.getElementById("senha");
  if (!email.value || !senha.value){
    alert("Preencha todos os campos...");
  }
  else{
    document.getElementById("login-form").submit();
  }
}
