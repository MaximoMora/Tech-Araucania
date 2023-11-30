import React, { useState } from "react";
import NavBar from "../components/NavBar";
import ProductCard from "../components/ProductCard";
import Footer from "../components/Footer";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";



import tree from "../assets/img/tree.jpeg";
import trayectory from "../assets/img/imgHistory/trayectory.jpg"
import present from "../assets/img/imgHistory/present.jpg"

import text from "../data/textHistory.js"



export default function History() {


    return (
        <div className="container">



            <div className="container justify-content-center ">
                <InfoCard  title={text.textBeginnings.title} subtitle1={text.textBeginnings.subtitle1} subtitle2={text.textBeginnings.subtitle2} text1={text.textBeginnings.text1} text2={text.textBeginnings.text2} image={tree} />
                <InfoCardReverse  title={text.textTrajectory.title} subtitle1={text.textTrajectory.subtitle1} subtitle2={text.textTrajectory.subtitle2} text1={text.textTrajectory.text1} text2={text.textTrajectory.text2}  image={trayectory} />
                <InfoCard  title={text.textPresent.title} subtitle1={text.textPresent.subtitle1} subtitle2={text.textPresent.subtitle2} text1={text.textPresent.text1} text2={text.textPresent.text2} image={present} />
            </div>


        </div>
    );
}