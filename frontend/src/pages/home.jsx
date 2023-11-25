import React, { useState } from "react";
import NavBar from "../components/NavBar";
import Carousel from "../components/CarouselComponent";
import ProductCard from "../components/ProductCard";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";
import Footer from "../components/Footer";


import product1 from "../assets/img/producto1.jpg"
import product2 from '../assets/img/producto2.jpg';
import product3 from "../assets/img/producto3.jpg";
import product4 from "../assets/img/producto4.jpg";
import product5 from "../assets/img/producto5.png";
import product6 from "../assets/img/producto6.jpg";


import tree from "../assets/img/tree.jpeg";
import service from "../assets/img/service.jpeg";
import product from "../assets/img/product.jpeg";

import text from "../data/textHome.js"

export default function Home() {


    return (
        <div className="container">

            <div className="mb-5">
                <NavBar />
            </div>


            <div >
                <Carousel />
            </div>


            <div className="">
                <div className="row justify-content-around my-5 ">
                    <ProductCard title={"PELADN Radeon RX 5500XT 8GB GDDR6 PCI Express 4.0 Video Card"} text={"Precio: $115"} image={product1} />
                    <ProductCard title={"WD_BLACK SN850X NVMe M.2 2280 2TB PCI-Express 4.0 "} text={"Precio $114"} image={product2} />
                    <ProductCard title={"G.SKILL Trident Z5 Neo Series 32GB (2 x 16GB) PC RAM"} text={"Es una tarjeta Grafica"} image={product3} />
                </div>

                <div className="row justify-content-around my-5 ">
                    <ProductCard title={"DeepCool AK620 High-Performance CPU Cooler, Dual-Tower Design"} text={"Precio: $63 "} image={product4} />
                    <ProductCard title={"CORSAIR RMe Series RM1200e ATX Power Supply"} text={"Precio $169"} image={product5} />
                    <ProductCard title={"GIGABYTE Z790 GAMING X AX LGA 1700 Intel Z790 ATX "} text={"Precio: $199"} image={product6} />
                </div>
            </div>



            <div className="container justify-content-center ">
                <InfoCard  title={text.textCompany.title} subtitle1={text.textCompany.subtitle1} subtitle2={text.textCompany.subtitle2} text1={text.textCompany.text1} text2={text.textCompany.text2} image={tree} />
                <InfoCardReverse  title={text.textProduct.title} subtitle1={text.textProduct.subtitle1} subtitle2={text.textProduct.subtitle2} text1={text.textProduct.text1} text2={text.textProduct.text2}  image={product} />
                <InfoCard  title={text.textService.title} subtitle1={text.textService.subtitle1} subtitle2={text.textService.subtitle2} text1={text.textService.text1} text2={text.textService.text2} image={service} />
            </div>


            <Footer />
        </div>
    );
}