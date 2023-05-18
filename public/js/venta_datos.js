
// Define los productos
const products = [
    {id: 1, name: "Article/product", price: 15.99,  description: "Descipcion del artículo", imageUrl: "image/img1.jpg"},
    
    {id: 2, name: "Article/product", price: 39.99, description: "Descipcion del artículo", imageUrl: "image/img2.jpg"},
    
    {id: 3, name: "Article/product", price: 9.99,  description: "Descipción del artículo", imageUrl: "image/img3.jpg"},
    
    {id: 4, name: "Article/product", price: 49.99, description: "Descipcion del artículo", imageUrl: "image/img4.jpg"},
    
    {id: 5, name: "Article/product", price: 99.99, description:"Descipcion del artículo", imageUrl: "image/img5.jpg"},
      
    {id: 6, name: "Article/product", price: 79.99, description: "Descipcion del artículo", imageUrl: "image/img6.jpg"},
    
    {id: 7, name: "Article/product", price: 59.99, description: "Descipcion del artículo", imageUrl: "image/img7.jpg"},
    
    {id: 8, name: "Article/product", price: 99.99, description: "Descipcion del artículo", imageUrl: "image/img8.jpg"},
     
    {id: 9, name: "Article/product", price: 79.99, description: "Descipcion del artículo", imageUrl: "image/img9.jpg"},
      
    {id: 10, name: "Article/product", price: 59.99, description: "Descipcion del artículo", imageUrl: "image/img10.jpg"},
      
    {id: 11, name: "Article/product", price: 29.99, description: "Descipcion del artículo", imageUrl: "image/img11.jpg"},
    
    {id: 12, name: "Article/product", price: 39.99, description: "Descipcion del artículo", imageUrl: "image/img12.jpg"},
      
    {id: 13, name: "Article/product", price: 9.99, description: "Descipcion del artículo", imageUrl: "image/img13.jpg"},
    
    {id: 14, name: "Article/product", price: 49.99, description: "Descipcion del artículo", imageUrl: "image/img14.jpg"},
    
    {id: 15, name: "Article/product", price: 15.99,  description: "Descipcion del artículo", imageUrl: "image/img1.jpg"},
    
    {id: 16, name: "Article/product", price: 39.99, description: "Descipcion del artículo", imageUrl: "image/img2.jpg"},
    
    {id: 17, name: "Article/product", price: 9.99,  description: "Descipción del artículo", imageUrl: "image/img3.jpg"},
    
    {id: 18, name: "Article/product", price: 49.99, description: "Descipcion del artículo", imageUrl: "image/img4.jpg"},
    
    {id: 19, name: "Article/product", price: 99.99, description:"Descipcion del artículo", imageUrl: "image/img5.jpg"},
      
    {id: 20, name: "Article/product", price: 79.99, description: "Descipcion del artículo", imageUrl: "image/img6.jpg"},
    
    {id: 21, name: "Article/product", price: 59.99, description: "Descipcion del artículo", imageUrl: "image/img7.jpg"},
    
    {id: 22, name: "Article/product", price: 99.99, description: "Descipcion del artículo", imageUrl: "image/img8.jpg"},
     
    {id: 23, name: "Article/product", price: 79.99, description: "Descipcion del artículo", imageUrl: "image/img9.jpg"},
      
    {id: 24, name: "Article/product", price: 59.99, description: "Descipcion del artículo", imageUrl: "image/img10.jpg"},
      
    {id: 25, name: "Article/product", price: 29.99, description: "Descipcion del artículo", imageUrl: "image/img11.jpg"},
    
    {id: 26, name: "Article/product", price: 39.99, description: "Descipcion del artículo", imageUrl: "image/img12.jpg"},
      
    {id: 27, name: "Article/product", price: 9.99, description: "Descipcion del artículo", imageUrl: "image/img13.jpg"},
    
    {id: 28, name: "Article/product", price: 49.99, description: "Descipcion del artículo", imageUrl: "image/img14.jpg"},
      
    ];
    
    
    
    
    
    let dataTable;
    let dataTableIsInitialized = false;
    
    const dataTableOptions = {
    //scrollX: "2000px",
    lengthMenu: [5, 10, 15, 20, 50, 100, 200],
    columnDefs: [
       
        { orderable: false, targets: [4,2] },
        { searchable: true, targets: [1] },
       // { width: "50%", targets: [0] }
    
    ],
    pageLength: 10,
    destroy: true,
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún usuario encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún usuario encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior"
        }
    }
    };
    
    const initDataTable = async () => {
    if (dataTableIsInitialized) {
        dataTable.destroy();
    }
    
    await listUsers();
    
    dataTable = $("#datatable_users").DataTable(dataTableOptions);
    
    dataTableIsInitialized = true;
    };
    
    const listUsers = async () => {
    try {
        const response = await fetch("http://127.0.0.1:8000/jv");
        const users = await response.json();
        
    
        let content = ``;
        users.forEach((user, index) => {
            content += `
                <tr>
                   
                    <td>${user.nombre}</td>
                    <td>${user.precio}</td>
                    <td>${user.cantidad}</td>
                    <td>${user.fecha}</td>
             
                    <td>
                    
                   
                    </td>                    
                  
                </tr>`;
        });
        tableBody_users.innerHTML = content;
    } catch (ex) {
        alert(ex);
    }
    };
    
    window.addEventListener("load", async () => {
    await initDataTable();
    });
    
    
    