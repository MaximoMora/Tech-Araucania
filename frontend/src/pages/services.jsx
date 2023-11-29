import React, { useState } from "react";
import NavBar from "../components/NavBar";
import Footer from "../components/Footer";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";
import service1 from "../assets/img/imgProducts/producto6.jpg"

import text from "../data/textServices.js"

import service from "../assets/img/imgServices/services.jpg"
import security from "../assets/img/imgServices/security.jpg"
import hacking from "../assets/img/imgServices/hacking.jpg"
import learn from "../assets/img/imgServices/learn.jpg"
import mantenance from "../assets/img/imgServices/mantenance.jpg"

export default function Services() {


    return (
        <div className="container">

            <div className="mb-5">
                <NavBar />
            </div>


            <div className="container justify-content-center ">
                <InfoCard  title={text.textIntroduction.title} subtitle1={text.textIntroduction.subtitle1} text1={text.textIntroduction.text1} image={service} />
                <InfoCardReverse title={text.textSecurity.title} subtitle1={text.textSecurity.subtitle1} text1={text.textSecurity.text1} image={security} />
                <InfoCard  title={text.textHacking.title} subtitle1={text.textHacking.subtitle1} text1={text.textHacking.text1}  image={hacking} />
                <InfoCardReverse title={text.textEducation.title} subtitle1={text.textEducation.subtitle1} text1={text.textEducation.text1} image={learn} />
                <InfoCard  title={text.textMaintenance.title} subtitle1={text.textMaintenance.subtitle1} text1={text.textMaintenance.text1} image={mantenance} />

            </div>

            <div>

            </div>


            <Footer />
        </div>
    );
}