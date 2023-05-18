
//variables
var btn_open_dashadmin =document.getElementById('btn-open-dashadmin');
var btn_close_dashadmin =document.getElementById('btn-close-dashadmin');
var span_dash_name= document.getElementsByName('span-dash');
//eventos
btn_open_dashadmin.addEventListener('click',()=>{
    document.getElementById('offcanvasExample').style.cssText=' width: 280px; ';
    document.getElementById('offcanvasExampleLabel').classList.remove("invalid-feedback");
    document.getElementById('btn-close-dashadmin').classList.remove("invalid-feedback");  
    document.getElementById('btn-open-dashadmin').classList.add("invalid-feedback");
    document.getElementById('btn-open-dashadmin').classList.remove("btn");

    /* span de dash, nombre de las opciones del dash */
  
    for(i=0;i<=span_dash_name.length;i++){
       
        span_dash_name[i].classList.remove("invalid-feedback");  
    }
});
btn_close_dashadmin.addEventListener('click',()=>{
    document.getElementById('offcanvasExample').style.cssText=' width: 80px;';
    document.getElementById('offcanvasExampleLabel').classList.add("invalid-feedback");
    document.getElementById('btn-close-dashadmin').classList.add("invalid-feedback");
    document.getElementById('btn-open-dashadmin').classList.remove("invalid-feedback");
    document.getElementById('btn-open-dashadmin').classList.add("btn");
     /* span de dash, nombre de las opciones del dash */
    for(i=0;i<=span_dash_name.length;i++){
        span_dash_name[i].classList.add("invalid-feedback");  
    }
   
});


/* */
