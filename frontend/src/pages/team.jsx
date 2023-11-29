import React, { useState } from "react";
import NavBar from "../components/NavBar";
import Carousel from "../components/CarouselComponent";
import ProductCard from "../components/ProductCard";
import product1 from "../assets/img/imgProducts/producto6.jpg"
import Footer from "../components/Footer";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";
import javier from "../assets/img/javier.jpg";
import max from "../assets/img/max.jpg";

export default function Team() {


    return (
        <div className="container">

            <div>
                <NavBar></NavBar>
            </div>

            <div>
                <h1>Equipo</h1>
            </div>

            <div>
                <InfoCard title={"Javier Poblano"} text1={"Javier Poblano es un estudiante entusiasta de primer año en la Universidad Católica de Temuco, donde está cursando la carrera de Informática. Nacido en [fecha de nacimiento], Javier muestra un gran interés por la tecnología y la informática desde una edad temprana, lo que lo motivó a seguir esta carrera."} image={javier}/>
            </div>

            <div>
                <InfoCardReverse title={"Maximo Mora"} text1={"Maximo Mora es otro estudiante dedicado de primer año en la Universidad Católica de Temuco, enfocado en la carrera de Informática. Nacido el [fecha de nacimiento], Maximo ha demostrado un profundo interés por la tecnología y la programación desde una edad temprana, lo que lo llevó a elegir este campo como su área de estudio."} image={max} />
            </div>
            
        </div>
    );
}