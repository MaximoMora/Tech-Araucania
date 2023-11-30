import React, { useState } from "react";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";
import text from "../data/textServices.js"


const service = "https://images.pexels.com/photos/7682088/pexels-photo-7682088.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
const security = "https://images.pexels.com/photos/207580/pexels-photo-207580.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
const hacking = "https://images.pexels.com/photos/5380649/pexels-photo-5380649.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
const learn =  "https://images.pexels.com/photos/4012966/pexels-photo-4012966.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
const mantenance = "https://images.pexels.com/photos/4792719/pexels-photo-4792719.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"


export default function Services() {


    return (
        <div className="container">

     


            <div className="container justify-content-center ">
                <InfoCard  title={text.textIntroduction.title} subtitle1={text.textIntroduction.subtitle1} text1={text.textIntroduction.text1} image={service} />
                <InfoCardReverse title={text.textSecurity.title} subtitle1={text.textSecurity.subtitle1} text1={text.textSecurity.text1} image={security} />
                <InfoCard  title={text.textHacking.title} subtitle1={text.textHacking.subtitle1} text1={text.textHacking.text1}  image={hacking} />
                <InfoCardReverse title={text.textEducation.title} subtitle1={text.textEducation.subtitle1} text1={text.textEducation.text1} image={learn} />
                <InfoCard  title={text.textMaintenance.title} subtitle1={text.textMaintenance.subtitle1} text1={text.textMaintenance.text1} image={mantenance} />

            </div>

        </div>
    );
}