import React, { useContext } from "react";
import { CartContext } from "../contexts/ShoppingCartContext";

  {/**Componente de compra */}

export const ShoppingCart = () => {
  const [cart, setCart] = useContext(CartContext);


  {/**constante que  suma la cantidad actual con la nueva cantidad*/}

  const quantity = cart.reduce((acc, curr) => {
    return acc + curr.quantity;
  }, 0);

    {/**el precio de cada item multiplicaod por cantidad por el precio*/}

  const totalPrice = cart.reduce(
    (acc, curr) => acc + curr.quantity * curr.price,
    0
  );

  {/**Devuelve lo que se ve en pantalla*/}

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