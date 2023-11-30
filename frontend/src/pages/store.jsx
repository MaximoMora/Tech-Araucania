import React, { useState } from "react";
import NavBar from "../components/NavBar";
import Carousel from "../components/CarouselComponent";

import ProductCard from "../components/ProductCard";
import product1 from "../assets/img/imgProducts/producto6.jpg"
import Footer from "../components/Footer";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";
import { ItemList } from "../components/ItemList";

export default function Store() {


    return (
        <div className="container">

       

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

            <div>
                <ItemList />
            </div>





            <Footer />
        </div>
    );
}