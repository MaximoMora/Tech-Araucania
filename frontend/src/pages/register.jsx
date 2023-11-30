import React, { useState } from "react";

import Footer from "../components/Footer";

import RegisterComponent from "../components/RegisterComponent";

export default function Store() {


    return (
        <div className="container">

            <div>

                <RegisterComponent />

            </div>

            <Footer />
        </div>
    );
}