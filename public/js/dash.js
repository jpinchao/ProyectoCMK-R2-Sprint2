
  //variables
  var link_e=document.getElementById('link-b');
  var btn_open=document.getElementById('off-btn');
  var btn_close=document.getElementById('btn-clos');
  var over_offc=document.getElementById('offcanvasExample');
  var boton_nav=document.getElementById('boton-icon-nav');
  var contar=0;
  //eventos
  
  btn_open.addEventListener('click',()=>{
     
      let intro=document.getElementById('offcanvasExample');
      intro.style.cssText = 'width: 250px;';
      let intro_btn=document.getElementById('off-btn');
      intro_btn.style.cssText = 'display: none;';
      document.getElementById('offcanvasExampleLabel').style.cssText='display: inline;';
      document.getElementById('btn-clos').style.cssText='display: inline;'; 
      //ativamos la etiqueta span de la informacion de contenido de cada boton   
      let list=document.getElementsByName("sp");
      for(i=0;i<=list.length;i++){
        list[i].style.cssText="display: inline;";
      }
  })


  btn_close.addEventListener('click',()=>{

   
    //para espandir 
      let introt=document.getElementById('offcanvasExample');
      introt.style.cssText = 'width:100px;';

      document.getElementById('offcanvasExampleLabel').style.cssText='display: none;';
      //boton que cierra el desplegable del menu izquiero
      document.getElementById('btn-clos').style.cssText='display:none;';
      //boton de las opciones de menu izquiero 
      document.getElementById('off-btn').style.cssText='display: inline;';
      //desativamos la etiqueta span de la informacion de contenido de cada boton   
      let list=document.getElementsByName("sp");
      for(i=0;i<=list.length;i++){
        list[i].style.cssText="display: none;";
      }

  })
 
  over_offc.addEventListener('mouseover',()=>{
    let list=document.getElementsByName("sp");
    for(i=0;i<=list.length;i++){
      list[i].style.cssText="display: inline;";
    }

  });

  over_offc.addEventListener('mouseout' ,()=>{
    let list=document.getElementsByName("sp");
    for(i=0;i<=list.length;i++){
      list[i].style.cssText="display: none;";
    }

  });



 
