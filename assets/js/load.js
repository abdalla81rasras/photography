var load_more = document.getElementById("load");
let countItem = 6;

load_more.addEventListener("click" , function(){

    const boxs=[...document.querySelectorAll(".no-gutters .gallery-areas")];

    for(let i = countItem ; i < countItem + 6 ; i++){
        boxs[i].style.display = 'block';
    }

    countItem += 6; 

    if(countItem >= boxs.length){
        load_more.style.display = 'none';
    }
    
});