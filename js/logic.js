let pageLocation = document.getElementById("msg").innerHTML =  window.location.href;

if(pageLocation == "http://wolf/welcome.php#msg"){
    let pageLocation = document.getElementById("msg").style.display = "block";
    pageLocation = document.getElementById("msg").innerHTML = "Cadastro realizado com sucesso!";
}