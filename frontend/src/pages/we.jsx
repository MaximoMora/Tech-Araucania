import React, { useState } from "react";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";

import text from "../data/textHome.js"

{/**se llama a las imagenes para mostrarlas en nosotros*/}

const team = "https://images.pexels.com/photos/3184423/pexels-photo-3184423.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
const service = "https://images.pexels.com/photos/3825580/pexels-photo-3825580.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
const product = "https://images.pexels.com/photos/6636474/pexels-photo-6636474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"



export default function We() {


    return (
        <div className="container">


            {/**se llama a los componentes InfoCard y InfoCardReserve para mostrar informacion de nostros*/}

            <div className="container justify-content-center ">
                <InfoCard  title={"QUIENES SOMOS"} subtitle1={text.textCompany.subtitle1} subtitle2={text.textCompany.subtitle2} text1={text.textCompany.text1} text2={text.textCompany.text2} image={team} />
                <InfoCardReverse  title={text.textProduct.title} subtitle1={text.textProduct.subtitle1} subtitle2={text.textProduct.subtitle2} text1={text.textProduct.text1} text2={text.textProduct.text2}  image={product} />
                <InfoCard  title={text.textService.title} subtitle1={text.textService.subtitle1} subtitle2={text.textService.subtitle2} text1={text.textService.text1} text2={text.textService.text2} image={service} />
            </div>

            <p>nosotros</p>
            
        </div>
    );
}