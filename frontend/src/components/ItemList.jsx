import React from 'react';
import storeItem from '../data/products.json';
import { Item } from './Item';

export const ItemList = () => {
  const groupedProducts = [];
  for (let i = 0; i < storeItem.length; i += 3) {
    groupedProducts.push(storeItem.slice(i, i + 3));
  }

  return (
    <div className=''>
      {groupedProducts.map((group, groupIdx) => (

        <div className=' d-flex justify-content-around' key={groupIdx}>
          {group.map((product) => (
            <Item key={product.id} {...product} />
          ))}
        </div>
      ))}


    </div>
  );
};
