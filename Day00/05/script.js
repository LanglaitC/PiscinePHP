$(document).ready(function()
{
  var state = -1;
  var answer = $("#answer");

  $("#piscine").click(function()
  {
    if (state == 2 || state >= 4)
    {
      $("#ryan").attr("src", "./img/oss.png")
      $("#ryan").css("left", "-430px");
      $("#center_image").attr("src", "./img/piscine.jpg");
      $("#dialog").html("Écoutez mon ptit, là j'viens d'tuer un croco'. Alors si vous voulez qu'on travaille d'égal à égal, faudrait vous y mettre");
      state = 4;
    }
  })
  $("#livre").click(function()
  {
    if (state == 3 || state >= 4)
    {
      $("#center_image").attr("src", "./img/bibliotheque.jpg");
      $("#dialog").html("Nous voila a la bibliotheque, tu peux changer d'endroit en prenant un objet quand tu auras fini d'etudier");
      state = 4;
    }
  })
  $("#brick").click(function()
  {
    if (state == 3 || state >= 4)
    {
      $("#ryan").attr("src", "./img/mario.png")
      $("#center_image").attr("src", "./img/mario.jpg");
      $("#dialog").html("Hello ! Tu as eu raison, rien de tels qu'un peu de retrogaming pour se changer l'esprit !");
      state = 4;
      $("#ryan").css("left", "-350px");

    }
  })
  $("#button").click(function()
  {
    if (state == -1 && answer.val())
    {
      if (answer.val().toLowerCase() == "oui")
        $("#dialog").html("Genial je suis la depuis longtemps moi aussi.");
      else if (answer.val().toLowerCase() == "non")
        $("#dialog").html("Genial je viens d'arriver moi aussi.");
      else
        $("#dialog").html("J'aurais pense que tu repondrais par oui ou par non mais peu importe.");
      $("#dialog").append(" Comment tu t'apelles au fait ?");
      state = 0;
      $("#initial_text").css("display", "none");
    }
    else if (!state && answer.val())
    {
      var name = answer.val();
      state = 1;
      $("#dialog").html("Bonjour "+name+", moi c'est Ryan est ce que tu es venu la pour travailler ?")
    }
    else if (state == 1)
    {
      if (!answer.val())
        $("#dialog").html("Ne sois pas timide "+name+", reponds moi : est ce que tu es la pour travailler ?")
      else if (answer.val().toLowerCase() == "non")
      {
          $("#dialog").html("Alors allons a la piscine, attrape ta serviette !");
          state = 2;
      }
      else if (answer.val().toLowerCase() == "oui")
      {
          $("#dialog").html("Ok, je vais prendre mon livre, je te laisse trouver le tien et nous pourrons aller a la bibliotheque");
          state = 3;
      }
      else
      {
          state = 4;
          $("#dialog").html("Tu ne m'as pas l'air décidé, tu peux prendre un objet et il se passera peut être quelque chose");
      }
    }
  })
});
