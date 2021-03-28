
let slider =document.querySelector(".slider_contenedor")
let sliderIndividual =document.querySelectorAll(".contenido_slider")
let contador=1;
let width= sliderIndividual[0].clientWidth;
let intervalo = 8000;

window.addEventListener("resize",function(){
    width= sliderIndividual[0].clientWidth;
})

setInterval(function(){
     slides();
},intervalo);

function slides(){
    slider.style.transform= "translate("+(-(width)*contador)+"px)";
    slider.style.transition= "transform .8s";
    contador++;

    if(contador==sliderIndividual.length){
        setTimeout(function(){
            slider.style.transform= "translate(0px)";
            slider.style.transition= "transform 0s";
            contador=1;
        },1500)
    }
}


/*bara de menu oculto*/

let ubicacion_principal=window.pageYOffset;

window.addEventListener("scroll",function(){
    let desplazamiento_actual=window.pageYOffset;
    if(ubicacion_principal>=desplazamiento_actual){
        document.getElementsByTagName("nav")[0].style.top ="0px"
    }else{
        document.getElementsByTagName("nav")[0].style.top ="-100px"
    }
    ubicacion_principal=desplazamiento_actual;
})
/* menu */

let enlaces_menu= document.querySelectorAll(".menu")[0];
let semaforo=true;

document.querySelectorAll(".hamburguer")[0].addEventListener("click",function(){
    if (semaforo) {
        document.querySelectorAll(".hamburguer")[0].style.color="#fff";
        semaforo=false;
    }else{
        document.querySelectorAll(".hamburguer")[0].style.color="#000";
        semaforo=true;
    }
    enlaces_menu.classList.toggle("menu-oculto")
})

