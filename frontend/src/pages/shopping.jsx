import React, { useContext } from "react";
import { CartContext } from "../contexts/ShoppingCartContext";

export function Shopping() {
  const [cart, setCart] = useContext(CartContext);

  const quantity = cart.reduce((acc, curr) => {
    return acc + curr.quantity;
  }, 0);

  const totalPrice = cart.reduce(
    (acc, curr) => acc + curr.quantity * curr.price,
    0
  );

  return (
    <div className="container mt-3">
      <div className="card">
        <div className="card-body">
          <h5 className="card-title">Carro de Compras</h5>
          
          <p className="card-text">Productos en el Carro: {quantity}</p>
          <p className="card-text">Precio Total: ${totalPrice}</p>

          {cart.length > 0 ? (
            <div>
              <h6 className="mt-3">Productos:</h6>
              <ul className="list-group">
                {cart.map((product) => (
                  <li key={product.id} className="list-group-item">
                    {product.name} - Cantidad: {product.quantity} - Precio: ${product.price * product.quantity}  {product.imgUrl}
                  </li>
                ))}
              </ul>
            </div>
          ) : (
            <p className="mt-3">No hay productos en el carro.</p>
          )}

          <button className="btn btn-success mt-3" onClick={() => console.log(cart)}>
            Pagar
          </button>
        </div>
      </div>
    </div>
  );
}

export default Shopping;
