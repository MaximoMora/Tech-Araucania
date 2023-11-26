
import React from 'react';
import { Carousel } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import imagen1 from '../assets/img/carousel1.png';
import imagen2 from '../assets/img/carousel2.png';
import imagen3 from '../assets/img/carousel3.png';

function CarouselComponent() {
  return (
    <Carousel className='bg-dark'>
      <Carousel.Item className='my-5'>
        <img className="d-block w-50 mx-auto" src={imagen1} />
      </Carousel.Item>
      <Carousel.Item className='my-5'>
        <img className="d-block w-50 mx-auto" src={imagen2}  />
      </Carousel.Item>
      <Carousel.Item className='my-5'>
        <img className="d-block w-50 mx-auto" src={imagen3}  />
      </Carousel.Item>
    </Carousel>
  );
}

export default CarouselComponent;
