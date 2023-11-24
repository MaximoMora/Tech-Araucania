import React, { useState } from "react";
import NavBar from "../components/NavBar";
import Carousel from "../components/CarouselComponent";
import ProductCard from "../components/ProductCard";
import product1 from '../assets/img/producto1.png'
import Footer from "../components/Footer";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";
import javier from "../assets/img/javier.jpg";

export default function Team() {


    return (
        <div className="container">

            <div>
                <NavBar></NavBar>
            </div>

            <div>k
                <h1>Equipo</h1>
            </div>

            <div>
                <InfoCard title={"Javier Poblano"} text={"Estudiante"} image={javier}/>
            </div>
        </div>
    );
}