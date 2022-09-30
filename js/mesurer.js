let nbrModules
const fetchNbr = async () => {
  fetch('http://localhost/Webreathe/backEnd/getNbrOfModule.php', {
    //mode:'no-cors',
    header: {
      "Access-Control-Allow-Origin": "*"
    }
  })
    .then(res => res.json())
    .then(data => nbrModules = data)
}
//Cette fonction s'exécute toute les 2 minutes
setInterval(() => {
  fetchNbr();
  /* On recupère toutes les 2 minutes le nombre total de module enregistré puis on 
  génère de facon aléatoire la valeur mésuré et on l'attribut ensuite au un module 
  de fecon aléatoire (ceci nous permet de simuler la mésure effectué part les modules) */
  const val = Math.floor(Math.random() * (100 - (-100))) + (-100);
  const id = Math.floor(Math.random() * nbrModules) + 1;

  fetch('http://localhost/Webreathe/backEnd/postMesure.php?id=' + id + '&val=' + val,)
    .then(function (response) {
      //console.log(response);
    })
    .catch(function (error) {
      console.log(error);
    });
}, 12000)

