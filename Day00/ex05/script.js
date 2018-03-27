  var state = -1;
  var answer = document.getElementById("answer");

  document.getElementById("piscine").addEventListener("click", function()
  {
    if (state == 2 || state >= 4)
    {
      document.getElementById("ryan").setAttribute("src", "./ressources/oss.png")
      document.getElementById("ryan").style.left="-430px";
      document.getElementById("center_image").setAttribute("src", "./ressources/piscine.jpg");
      document.getElementById("dialog").innerHTML = "Écoutez mon ptit, là j'viens d'tuer un croco'. Alors si vous voulez qu'on travaille d'égal à égal, faudrait vous y mettre";
      state = 4;
    }
  })
  document.getElementById("livre").addEventListener("click",function()
  {
    if (state == 3 || state >= 4)
    {
      document.getElementById("center_image").setAttribute("src", "./ressources/bibliotheque.jpg");
      document.getElementById("dialog").innerHTML = "Nous voila a la bibliotheque, tu peux changer d'endroit en prenant un objet quand tu auras fini d'etudier";
      state = 4;
    }
  })
  document.getElementById("brick").addEventListener("click",function()
  {
    if (state == 3 || state >= 4)
    {
      document.getElementById("ryan").setAttribute("src", "./ressources/mario.png")
      document.getElementById("center_image").setAttribute("src", "./ressources/mario.jpg");
      document.getElementById("dialog").innerHTML = "Hello ! Tu as eu raison, rien de tels qu'un peu de retrogaming pour se changer l'esprit !";
      state = 4;
      document.getElementById("ryan").style.left = "-350px";

    }
  })
  document.getElementById("button").addEventListener("click", function()
  {
    console.log(state);
    if (state == -1 && answer.value)
    {
      if (answer.value.toLowerCase() == "oui")
        document.getElementById("dialog").innerHTML = "Genial je suis la depuis longtemps moi aussi.";
      else if (answer.value.toLowerCase() == "non")
        document.getElementById("dialog").innerHTML = "Genial je viens d'arriver moi aussi.";
      else
        document.getElementById("dialog").innerHTML = "J'aurais pense que tu repondrais par oui ou par non mais peu importe.";
      document.getElementById("dialog").innerHTML += " Comment tu t'apelles au fait ?";
      state = 0;
      document.getElementById("initial_text").style.display = "none";
    }
    else if (!state && answer.value)
    {
      var name = answer.value;
      state = 1;
      document.getElementById("dialog").innerHTML = "Bonjour "+name+", moi c'est Ryan est ce que tu es venu la pour travailler ?"
    }
    else if (state == 1)
    {
      if (!answer.value)
        document.getElementById("dialog").innerHTML = "Ne sois pas timide "+name+", reponds moi : est ce que tu es la pour travailler ?"
      else if (answer.value.toLowerCase() == "non")
      {
          document.getElementById("dialog").innerHTML = "Alors allons a la piscine, attrape ta serviette !";
          state = 2;
      }
      else if (answer.value.toLowerCase() == "oui")
      {
          document.getElementById("dialog").innerHTML = "Ok, je vais prendre mon livre, je te laisse trouver le tien et nous pourrons aller a la bibliotheque";
          state = 3;
      }
      else
      {
          state = 4;
          document.getElementById("dialog").innerHTML = "Tu ne m'as pas l'air décidé, tu peux prendre un objet et il se passera peut être quelque chose";
      }
    }
  })
