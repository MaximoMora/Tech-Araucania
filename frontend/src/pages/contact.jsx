import React, { useState } from "react";

import Form from "../components/Form"
import NavBar from "../components/NavBar";


export default function Contact() {


    return (
        <div className="container ">
            


            <div className="container d-flex justify-content-center">
                <h1>Contacto</h1>

            </div>
            

            {/**se llama al componente Form para pedir informacion */}

            <div  >
                <Form />
            </div>


        </div>
    );
}