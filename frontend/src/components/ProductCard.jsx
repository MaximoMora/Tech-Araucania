import React, { useState } from "react";

export default function ProductCard({ title, text, image }) {


    {/**Carta para mostrar los productos*/}


  return (
    <div className="card" style={{width: '18rem'}}>
        <img src={image} alt="" />
        <div class="card-body">
          <h5 class="card-title">{title}</h5>
          <p class="card-text">{text}</p>
          <a href="#" class="btn bg-success">Agregar al carrito</a>
        </div>
    </div>
  );
}