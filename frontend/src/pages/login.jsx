import React, { useState } from "react";

import Footer from "../components/Footer";

import LoginComponent from "../components/LoginComponent";
import { API_URL } from "../"
export default function Store() {
    async function handleSubmit(e: React.FormEvent<HTMLFormElement) {
        e.preventDefault();
        try {
            const response = await fetch(`${API_URL}/signup`, {
                method: "POST",
                headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                Email, password
            })
            
            +
        });

        if (response.ok) {
            console.log("Usuario creado correctamente");
        } else {
            console.log("Ups, algo salio mal");
        }

        }  catch (error){
            console.log(error);
        }    
    }
    return (
        <div className="container">

            <div>

                <LoginComponent />
            </div>

            <Footer />
        </div>
    );
}