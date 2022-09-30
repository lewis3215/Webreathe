//alert('disfonctionnement');
let count=0;
if(!localStorage.getItem('count')){
    localStorage.setItem('count',0);
}
count = localStorage.getItem('count');

const fetchAllState = async()=>{ fetch('http://localhost/Webreathe/backEnd/getAllState.php',{
    //mode:'no-cors',
    header: {
        "Access-Control-Allow-Origin": "*"
    }
})
.then(res=>res.json())
.then(data=>data.map(state=>{
    if(state === "0" ){
        count++;
    }
}))
}
let small = document.getElementById('notif');
let notif = document.createElement('h2');

//Ceci se réalise toutes les 30 secondes
setInterval(()=>{
    notif.textContent = count;
    small.prepend(notif);
    fetchAllState();
    count=0

    
},30000)

