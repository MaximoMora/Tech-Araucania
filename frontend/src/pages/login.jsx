import React, { useState } from "react";

import Footer from "../components/Footer";

import LoginComponent from "../components/LoginComponent";
import { API_URL } from "../"

export default function Store() {
    return (
        <div className="container">

            <div>

                <LoginComponent />
            </div>

            <Footer />
        </div>
    );
}