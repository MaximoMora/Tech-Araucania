import React, { useState } from "react";
import NavBar from "../components/NavBar";
import CarouselComponent from "../components/CarouselComponent";
import ProductCard from "../components/ProductCard";
import product1 from '../assets/img/producto1.jpg'

export default function Home() {


    return (
        <div className="container">
            <NavBar/>
            <CarouselComponent />
            <p>desde el home</p>

            <ProductCard title={"Tarjeta"} text={"Es una tarjeta Grafica"} image={product1}  />

        </div>
    );
}