
import React from 'react';
import { Carousel } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';


{/**Se importa las imagenes*/}
const imagen1 = "https://www.imghost.net/ib/UvGppvyd7d1xxp8_1701323277.png"
const images2 = "https://www.imghost.net/ib/4XLEpZBJ776zxmg_1701323115.png"
const images3 = "https://www.imghost.net/ib/rauTYmeLrT7bHBN_1701323144.png"


{/**Componente Carousel, que tiene al padre y a sus hijos*/}
function CarouselComponent() {
  return (
    
    <Carousel className='bg-dark'>
      <Carousel.Item className='my-5'>
        <img className="d-block w-50 mx-auto" src={imagen1} />
      </Carousel.Item>
      <Carousel.Item className='my-5'>
        <img className="d-block w-50 mx-auto" src={images2}  />
      </Carousel.Item>
      <Carousel.Item className='my-5'>
        <img className="d-block w-50 mx-auto" src={images3}  />
      </Carousel.Item>
    </Carousel>
  );
}

export default CarouselComponent;
