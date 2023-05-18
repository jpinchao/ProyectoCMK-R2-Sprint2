let dataContainer;

const listProducts = async () => {
  try {
    const response = await fetch("http://127.0.0.1:8000/jsonProductos");
    const products = await response.json();

    let content = ``;
    products.forEach((product, index) => {
      content += `
        <div class="product">
          <img src="${product.imagen}" alt="${product.nombre}">
          <h3>${product.nombre}</h3>
          <p>${product.descripcion}</p>
          <p>Precio: ${product.precio}</p>
          <button class="btn btn-sm btn-primary">Comprar</button>
        </div>`;
    });
    dataContainer.innerHTML = content;
  } catch (ex) {
    alert(ex);
  }
};

window.addEventListener("load", async () => {
  dataContainer = document.getElementById("product-list");
  await listProducts();
});
