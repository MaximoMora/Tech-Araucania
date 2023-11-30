import React, { useContext } from 'react'

import picture from '../assets/img/imgProducts/producto2.jpg'
import { CartContext } from '../contexts/ShoppingCartContext'

export const Item = ({ name, price, id, imgUrl }) => {

  const [cart, setCart] = useContext(CartContext)

  const AddToCart = () => {
    setCart((currentItems) => {
      const isItemFound = currentItems.find((item) => item.id === id);

      if (isItemFound) {
        return currentItems.map((item) => {
          if (item.id === id) {
            return { ...item, quantity: item.quantity + 1 };
          } else {
            return item;
          }
        });
      } else {
        return [...currentItems, { id, quantity: 1, price }];
      }
    });
  };

  const RemoveItemFromCart = () => {
    setCart((currentItems) => {
      return currentItems.map((item) => {
        if (item.id === id) {
          return { ...item, quantity: item.quantity - 1 };
        } else {
          return item;
        }
      }).filter((item) => item.quantity !== 0);
    });
  };

  const getQuantityById = (id) => {
    return cart.find((item) => item.id === id)?.quantity || 0;
  };

  const quantityPerItem = getQuantityById(id);


  return (
    <div className='bg-success m-2'>

      {quantityPerItem > 0 && (
        <div className="item-quantity">{quantityPerItem}</div>
      )}



      <div>{name}</div>
      <div >
        <img src={require(`../assets/img/imgProducts/${imgUrl}`)} width={"250px"} alt={name} />

      </div>
      <div>

        ${price}

      </div>

      {quantityPerItem === 0 ? (
        <button className="item-add-button" onClick={() => AddToCart()}>
          Agregar al Carro
        </button>
      ) : (
        <button className="item-plus-button" onClick={() => AddToCart()}>
          +
        </button>
      )}

      {quantityPerItem > 0 && (
        <button className="item-minus-button" onClick={() => RemoveItemFromCart(id)}>
          -
        </button>
      )}

    </div>
  )
}
