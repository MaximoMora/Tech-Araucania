import React, { useState } from "react";
import NavBar from "../components/NavBar";
import Carousel from "../components/CarouselComponent";

import ProductCard from "../components/ProductCard";
import product1 from '../assets/img/producto1.jpg'
import Footer from "../components/Footer";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";

export default function Store() {


    return (
        <div className="container">

            <div className="mb-5">
                <NavBar />
            </div>

            <div>
                <Carousel />
            </div>




            <div className="">
                <div className="row justify-content-around my-5 ">
                    <ProductCard title={"Tarjeta"} text={"Es una tarjeta Grafica"} image={product1} />
                    <ProductCard title={"Tarjeta"} text={"Es una tarjeta Grafica"} image={product1} />
                    <ProductCard title={"Tarjeta"} text={"Es una tarjeta Grafica"} image={product1} />
                </div>

                <div className="row justify-content-around my-5 ">
                    <ProductCard title={"Tarjeta"} text={"Es una tarjeta Grafica"} image={product1} />
                    <ProductCard title={"Tarjeta"} text={"Es una tarjeta Grafica"} image={product1} />
                    <ProductCard title={"Tarjeta"} text={"Es una tarjeta Grafica"} image={product1} />
                </div>
            </div>





            <Footer />
        </div>
    );
}