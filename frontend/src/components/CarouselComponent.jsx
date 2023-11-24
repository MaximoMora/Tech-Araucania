import Carousel from 'react-bootstrap/Carousel';

import styles from './stylesComponents/Carousel.css'
import { useEffect, useRef, useState } from 'react';
import { data } from '../assets/data';

function CarouselComponent() {

  const listRef = useRef();
  const [currentIndex, setCurrentIndex] = useState(0);


  useEffect(() => {
    const listNode = listRef.current;
    const imgNode = listNode.querySelectorAll("li > img")[currentIndex];

    if (imgNode) {
      imgNode.scrollIntoView({
        behavior: "smooth"
      });
    }

  }, [currentIndex]);
  return (
    <div className="main-container">
      <div className="slider-container">

        <div className="container-images">
          <ul ref={listRef}>
          {
              data.map((item) => {
                return <li key={item.id}>
                  <img src={item.imgUrl} width={500} height={280} />
                </li>
              })
            }

          </ul>

        </div>

      </div>

    </div >

  );
}

export default CarouselComponent;