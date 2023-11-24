import React, { useState } from "react";

import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';

export default function ProductCard({ title, text, image }) {


  return (
    <div className="card" style={{width: '18rem'}}>
        <img src={image} alt="" />
        <div class="card-body">
          <h5 class="card-title">{title}</h5>
          <p class="card-text">{text}</p>
          <a href="#" class="btn btn-primary">Agregar al carrito</a>
        </div>
    </div>
  );
}