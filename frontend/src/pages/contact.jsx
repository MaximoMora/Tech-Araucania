import React, { useState } from "react";

import Form from "../components/Form"
import NavBar from "../components/NavBar";

import { ItemList } from "../components/ItemList";

export default function Contact() {


    return (
        <div className="container ">
            
            
            <NavBar />

            <div className="container d-flex justify-content-center">
                <h1>Contacto</h1>

            </div>
            
            <div  >
                <Form />
            </div>

            <div>
                <ItemList />
            </div>


        </div>
    );
}