import React, { useContext } from "react";
import { CartContext } from "../contexts/ShoppingCartContext";

export const ShoppingCart = () => {
  const [cart, setCart] = useContext(CartContext);

  const quantity = cart.reduce((acc, curr) => {
    return acc + curr.quantity;
  }, 0);

  const totalPrice = cart.reduce(
    (acc, curr) => acc + curr.quantity * curr.price,
    0
  );

  return (
    <div className="cart-container">
      <div>
        <div>Productos en el Carro: {quantity}</div>
        <div>Precio Total: ${totalPrice}</div>
        <button onClick={() => console.log(cart)}>Pagar</button>
      </div>
    </div>
  );
};