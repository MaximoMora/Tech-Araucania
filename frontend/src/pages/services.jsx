import React, { useState } from "react";
import NavBar from "../components/NavBar";
import Carousel from "../components/CarouselComponent";
import ProductCard from "../components/ProductCard";
import product1 from '../assets/img/producto1.jpg'
import Footer from "../components/Footer";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";
import service1 from "../assets/img/service1.jpg";

export default function Services() {


    return (
        <div className="container">

            <div className="mb-5">
                <NavBar />
            </div>


            <div className="container justify-content-center ">
                <InfoCard  title="Servicios" subtitle1={"Tech Araucania"} text1={"lorem 4312412412421412"} text ="texto bacan" image={service1} />
                <InfoCardReverse title="Servicios" subtitle1={"Tech Araucania"} text1={"lorem 4312412412421412"} text ="texto bacan" image={service1}/>
                <InfoCard  title="Servicios" subtitle1={"Tech Araucania"} text1={"lorem 4312412412421412"} text ="texto bacan" image={service1} />
                <InfoCardReverse title="Servicios" subtitle1={"Tech Araucania"} text1={"lorem 4312412412421412"} text ="texto bacan" image={service1} />
            </div>

            <div>

            </div>


            <Footer />
        </div>
    );
}