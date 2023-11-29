import React from 'react'

import picture from '../assets/img/imgProducts/producto2.jpg'

export const Item = ({name,price,id,imgUrl}) => {

    const AddToCart = () => {
        
    }

  return (
    <div>

        <div>{name}</div>
        <div >
            <img  src={require(`../assets/img/imgProducts/${imgUrl}`)} alt={name}/>

        </div>
        <div>

            ${price}

        </div>
        <button onClick={() => AddToCart()}>Agregar a Carro</button>
    </div>
  )
}
