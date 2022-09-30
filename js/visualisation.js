/* Cette fonction permet d'afficher le graphe des valeurs mésurés part un module
Moi j'ai choisit d'afficher les 7 dernieres valeurs enrégistrés, c'est un choix purement personnel.
Il est tout de même possible également d'affichr le graphe selon un période bien précise ce qui serait
l'idéale. Par exemple on pourrait afficher le graphe des mésure par jour(ceci en modifiant notre requettes
sql de facon à récuperer les valeurs enregistré pour un jour précis saisie au clavier par l'utilisateur)  */
const printGraph = (data, label) => {
    const barCanvas = document.getElementById("barCanvas");

    const barChart = new Chart(barCanvas, {
        type: "bar",
        data: {
            labels: label,
            datasets: [{
                data: data,
                backgroundColor: ['#33B8FF', '#338DFF', '#334CFF)'
                ]
            }]
        }
    })
}
const datasets = JSON.parse(localStorage.getItem("dataset"));
const vma = localStorage.getItem("vma");
document.getElementById('vma').innerText = vma;

/*Etant donnée que nous mesurons et incrémentons la durée toutes les 2 min, pour avoir la durée en heure on
va devoir recupérer le reste de la division entière de du double de la durée enregistré */

const duree = localStorage.getItem("duree")*2;
document.getElementById('duree').innerText =': '+ Math.trunc(duree/60)+'h'+duree%60+'min';

const nbData = localStorage.getItem("nbData");
document.getElementById('nbData').innerText = nbData;
const etat = localStorage.getItem("etat");
document.getElementById('etat').innerText = (etat==0)?"Ce module ne fonctionne pas":"Ce module fonctionne parfaitement";

printGraph(datasets.val.reverse(), datasets.date.reverse());

