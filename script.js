function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function handleEmail() {
  var formulario = document.forms[0];

  var nome = document.getElementById("nome").value;
  var telefone = document.getElementById("telefone").value;
  var email = document.getElementById("email").value;
  var mensagem = document.getElementById("mensagem").value;

  var msg = mensagem.split("\n");
  mensagem = msg.join("%0D%0A");

  formulario.submit();

  /*if (validateEmail(email))
    window.open(
      "mailto:gmbiel1@gmail.com?body=" +
        mensagem +
        "%0D%0AInformações de contato: " +
        telefone +
        " - " +
        nome +
        "%0D%0AEmail: " +
        email +
        "&subject=VAMOS CONVERSAR from: " +
        nome
    );*/
}
