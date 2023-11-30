import React from 'react';
import storeItem from '../data/products.json';
import { Item } from './Item';

export const ItemList = ({indexLimit}) => {

  {/**va a contar por grupo de 3 en 3, que va a mostrar la pagina */}

  const groupedProducts = [];
  for (let i = 0; i < indexLimit; i += 3) {
    groupedProducts.push(storeItem.slice(i, i + 3));
  }


  {/**va a mapear o pasar por todo la lista grouped, cada pequeño grupo tiene sus productos y los iteran*/}
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
