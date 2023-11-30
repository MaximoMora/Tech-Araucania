import React, { useState } from "react";
import NavBar from "../components/NavBar";
import Carousel from "../components/CarouselComponent";
import ProductCard from "../components/ProductCard";
import Footer from "../components/Footer";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";


import tree from "../assets/img/tree.jpeg";
import service from "../assets/img/service.jpeg";
import product from "../assets/img/imgProducts/producto6.jpg"

import text from "../data/textHome.js"


export default function We() {


    return (
        <div className="container">



            <div className="container justify-content-center ">
                <InfoCard  title={"QUIENES SOMOS"} subtitle1={text.textCompany.subtitle1} subtitle2={text.textCompany.subtitle2} text1={text.textCompany.text1} text2={text.textCompany.text2} image={tree} />
                <InfoCardReverse  title={text.textProduct.title} subtitle1={text.textProduct.subtitle1} subtitle2={text.textProduct.subtitle2} text1={text.textProduct.text1} text2={text.textProduct.text2}  image={product} />
                <InfoCard  title={text.textService.title} subtitle1={text.textService.subtitle1} subtitle2={text.textService.subtitle2} text1={text.textService.text1} text2={text.textService.text2} image={service} />
            </div>

            <p>nosotros</p>
            
        </div>
    );
}