let nbrModule
const fetchNbrs = async()=>{ fetch('http://localhost/Webreathe/backEnd/getNbrOfModule.php',{
    //mode:'no-cors',
    header: {
        "Access-Control-Allow-Origin": "*"
    }
})
.then(res=>res.json())
.then(data=> nbrModule = data)
}
/* Ce script nous permet de générer de facon aléatoire l'état d'un module
ainsi on réussit à simuler le disfonctionnement et la réparation des modules */
//Ce scripts s'exécute touts les 1 min
setInterval(()=>{
    fetchNbrs();
    const id = Math.floor(Math.random() * nbrModule) + 1;

    fetch('http://localhost/Webreathe/backEnd/breakDown.php?id='+id,)
    .then(function (response) {
     // console.log(response);
    })
    .catch(function (error) {
      console.log(error);
    });
},60000)