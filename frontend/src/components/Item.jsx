import React, { useContext } from 'react'

import { CartContext } from '../contexts/ShoppingCartContext'

{/**Componente Item o de los producto individualmente*/}

export const Item = ({ name, price, id, imgUrl }) => {


{/**user context en cart, para mostrar informacion del momento de carro de compras*/}
  const [cart, setCart] = useContext(CartContext)


  {/**la funcion AddtoCart va agregar mediante el setCart, verifica si el objeto existe con una id existente,
 luego ve si el item es encontrado y si es asi significa que ya tiene una cantidad y va a sumar uno
  si es falso va devolver todo la carro de compras y con una cantidad 1
*/}
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


  {/** Va a remover el objeto de carro, si encuentra el objeto en el carro, va a disminuir 1, mientras sea
difetente a cero la cantidad */}
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


  {/** va a encontrar la suma de los id o va ser 0 */}
  const getQuantityById = (id) => {
    return cart.find((item) => item.id === id)?.quantity || 0;
  };


  const quantityPerItem = getQuantityById(id);


  return (
    <div className="m-2 border p-3 rounded">
      {quantityPerItem > 0 && (
        <div className="item-quantity bg-primary text-white p-2 rounded">{quantityPerItem}</div>
      )}

      <div className="mt-2">{name}</div>
      <div className="text-center">
        <img src={imgUrl} className="img-fluid" alt={name} />
      </div>
      <div className="mt-2">
        <strong className='text-muted'>${price}</strong>
      </div>


      <div className='container justify-content-around'>

        {/**si es el boton es presionado a agregar si solo el item tiene cero de cantidad */}
        {quantityPerItem === 0 ? (
          <button className="btn btn-success mt-2" onClick={() => AddToCart()}>
            Agregar al Carro
          </button>
        ) : (
          <button className="btn btn-primary mt-2 px-3" onClick={() => AddToCart()}>
            +
          </button>
        )}

        {quantityPerItem > 0 && (
          <button className="btn btn-danger mt-2 px-3" onClick={() => RemoveItemFromCart(id)}>
            -
          </button>
        )}

      </div>

    </div>

  )
}
