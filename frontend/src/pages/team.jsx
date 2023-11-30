import React, { useState } from "react";

import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";



const javier = "https://avatars.githubusercontent.com/u/135164108?v=4";
const max =  "https://avatars.githubusercontent.com/u/96755454?v=4";

export default function Team() {


    return (
        <div className="container">

        

            <div>
                <h1>Equipo</h1>
            </div>

            <div>
                <InfoCard title={"Javier Poblete"} text1={"Javier Poblano es un estudiante entusiasta de primer año en la Universidad Católica de Temuco, donde está cursando la carrera de Informática. Nacido en Pucon, Javier muestra un gran interés por la tecnología y la informática desde una edad temprana, lo que lo motivó a seguir esta carrera."} image={javier}/>
            </div>

            <div>
                <InfoCardReverse title={"Maximo Mora"} text1={"Maximo Mora es otro estudiante dedicado de primer año en la Universidad Católica de Temuco, enfocado en la carrera de Informática. Nacido el Temuco, Maximo ha demostrado un profundo interés por la tecnología y la programación desde una edad temprana, lo que lo llevó a elegir este campo como su área de estudio."} image={max} />
            </div>
            
        </div>
    );
}