import React, { useContext } from 'react'

import picture from '../assets/img/imgProducts/producto2.jpg'
import { CartContext } from '../contexts/ShoppingCartContext'

export const Item = ({name,price,id,imgUrl}) => {

  const [cart, setCart] = useContext(CartContext)

    const AddToCart = () => {

      setCart((currentItems) => {
        const isItemFound = currentItems.find((item) => item.id === item.id)
        
        if (isItemFound) {

          return currentItems.map((item) => {
            if (item.id === item.id) {
              return {...item,quantity: item.quantity + 1}

              
            } else {
              return item
            }
          });
        
          
        } else {
          return [...currentItems, {id, quantity: 1, price}]
        }

      })
        
    }

    const RemoveItemFromCart = (id) => {

      setCart((currentItems) => {
        if (currentItems.find((item) => item.id == id)?.quantity === 1 ){
          return currentItems.filter((item) => item.id != item.id)
          
        } else {
          return currentItems.map((item) => {
            if (item.id === item.id) {

              return {...item, quantity: item.quantity - 1}
              
            }
          })
          
        }
      })
    }

    const GetQuantityById = (id) => {

    }
  return (
    <div className=' m-2'>

        <div>{name}</div>
        <div >
            <img  src={require(`../assets/img/imgProducts/${imgUrl}`)} width={"250px"} alt={name}/>

        </div>
        <div>

            ${price}

        </div>
        <button onClick={() => AddToCart()}>Agregar a Carro</button>
    </div>
  )
}
