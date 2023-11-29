import React from 'react'

import storeItem from '../data/products.json'

import { Item } from './Item'

export const ItemList = () => {
  return (
    <div>
        
        {
            storeItem.map((product,idx)=>{

                return <Item key={product.id} {...product}/>

            })
        }
    </div>
  )
}
