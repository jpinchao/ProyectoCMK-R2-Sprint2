// Define los productos
const products = [
    {id: 1, name: "Article/product", price: 15.99,  description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img1.jpg"},

    {id: 2, name: "Article/product", price: 39.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img2.jpg"},
    
    {id: 3, name: "Article/product", price: 9.99,  description: "Descipción del artículo", imageUrl: "/static/imagenes/img_productos/img3.jpg"},

    {id: 4, name: "Article/product", price: 49.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img4.jpg"},
    
    {id: 5, name: "Article/product", price: 99.99, description:"Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img5.jpg"},
      
    {id: 6, name: "Article/product", price: 79.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img6.jpg"},
  
    {id: 7, name: "Article/product", price: 59.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img7.jpg"},

    {id: 8, name: "Article/product", price: 99.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img8.jpg"},
     
    {id: 9, name: "Article/product", price: 79.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img9.jpg"},
      
    {id: 10, name: "Article/product", price: 59.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img10.jpg"},
      
    {id: 11, name: "Article/product", price: 29.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img11.jpg"},
    
    {id: 12, name: "Article/product", price: 39.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img12.jpg"},
      
    {id: 13, name: "Article/product", price: 9.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img13.jpg"},
    
    {id: 14, name: "Article/product", price: 49.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img14.jpg"},
    
    {id: 15, name: "Article/product", price: 15.99,  description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img1.jpg"},

    {id: 16, name: "Article/product", price: 39.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img2.jpg"},
    
    {id: 17, name: "Article/product", price: 9.99,  description: "Descipción del artículo", imageUrl: "/static/imagenes/img_productos/img3.jpg"},

    {id: 18, name: "Article/product", price: 49.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img4.jpg"},
    
    {id: 19, name: "Article/product", price: 99.99, description:"Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img5.jpg"},
      
    {id: 20, name: "Article/product", price: 79.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img6.jpg"},
    
    {id: 21, name: "Article/product", price: 59.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img7.jpg"},

    {id: 22, name: "Article/product", price: 99.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img8.jpg"},
     
    {id: 23, name: "Article/product", price: 79.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img9.jpg"},
      
    {id: 24, name: "Article/product", price: 59.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img10.jpg"},
      
    {id: 25, name: "Article/product", price: 29.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img11.jpg"},
    
    {id: 26, name: "Article/product", price: 39.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img12.jpg"},
      
    {id: 27, name: "Article/product", price: 9.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img13.jpg"},
    
    {id: 28, name: "Article/product", price: 49.99, description: "Descipcion del artículo", imageUrl: "/static/imagenes/img_productos/img14.jpg"},
      
  ];

 


//MODULO GESTIONAR USUARIOS



  // Define las constantes y variables necesarias
    var itemsPerPage = 5;
    let currentPage = 1;
    const productList = document.querySelector('.product-list');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const totalPages = Math.ceil(products.length / itemsPerPage);
    // Función para mostrar los productos de una página específica
    function showProducts(pageNumber) {
      // Calcula el rango de productos a mostrar
      const startIndex = parseInt((pageNumber - 1)) * parseInt( itemsPerPage);
      const endIndex =parseInt(  startIndex) + parseInt( itemsPerPage);

 
      



  
      // Borra los productos actuales de la lista
      productList.innerHTML = '';
      // Agrega los productos de la página actual a la lista
      for (let i = startIndex; i < endIndex && i < products.length; i++) {
        const product = products[i];
        const li = document.createElement('li');
        li.innerHTML = `

          
            <img src="..." class="card-img-top" alt="...">
            <div class="card">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a role="button" href="{{route('product.edit',$product->id)}}" class="btn" data-toggle="modal">agregar al carrito</a>
             
            </div>
          
          
        `;
        productList.appendChild(li);

        // productList.appendChild(li.children[Math.random() * 2 | 0]);
      }

       // Habilita/deshabilita los botones de navegación según corresponda
      const currentPageElement = document.querySelector('.current-page');
      currentPageElement.textContent = pageNumber;
      if(pageNumber>1){
        document.getElementById('current-page-previous').className="label-b";
      }
      else{
        document.getElementById('current-page-previous').className="invalid-feedback";
      }
      if(pageNumber>totalPages-1){
        document.getElementById('current-page-next').className="invalid-feedback";
      }else{
        document.getElementById('current-page-next').className="label-b";
      }
      
    }
    
    // Muestra la primera página de productos al cargar la página
    showProducts(currentPage);
    
    // Función para actualizar los botones de navegación y la información de la página actual
    function updatePageInfo() {
      const currentPageElement = document.querySelector('.current-page');
      const totalPagesElement = document.querySelector('.total-pages');
      
      // Actualiza la información de la página actual y el total de páginas
      currentPageElement.textContent = currentPage;
      totalPagesElement.textContent = totalPages;
    
    }
    
    document.getElementById('page-pagination-d').classList.remove("invalid-feedback");
    // Actualiza la página cuando se hace clic en el botón "Anterior"
    prevBtn.addEventListener('click', () => {
     
      currentPage--;
      showProducts(currentPage);
      updatePageInfo();
    });
    
    // Actualiza la página cuando se hace clic en el botón "Siguiente"
    nextBtn.addEventListener('click', () => {
     
      currentPage++;
      showProducts(currentPage);
      updatePageInfo();
    });





