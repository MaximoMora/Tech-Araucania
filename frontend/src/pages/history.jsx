import React, { useState } from "react";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";
import text from "../data/textHistory.js"


{/**se importa tres imagenes para el uso en la pagina historia */}
const tree = "https://images.pexels.com/photos/6590725/pexels-photo-6590725.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
const trayectory = "https://images.pexels.com/photos/3861959/pexels-photo-3861959.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
const present = "https://images.pexels.com/photos/7679452/pexels-photo-7679452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"


export default function History() {


    return (
        <div className="container">


            {/**se llama al componente InfoCard y infoCardReverse para dar informacion de historia de tech Araucania */}

            <div className="container justify-content-center ">
                <InfoCard  title={text.textBeginnings.title} subtitle1={text.textBeginnings.subtitle1} subtitle2={text.textBeginnings.subtitle2} text1={text.textBeginnings.text1} text2={text.textBeginnings.text2} image={tree} />
                <InfoCardReverse  title={text.textTrajectory.title} subtitle1={text.textTrajectory.subtitle1} subtitle2={text.textTrajectory.subtitle2} text1={text.textTrajectory.text1} text2={text.textTrajectory.text2}  image={trayectory} />
                <InfoCard  title={text.textPresent.title} subtitle1={text.textPresent.subtitle1} subtitle2={text.textPresent.subtitle2} text1={text.textPresent.text1} text2={text.textPresent.text2} image={present} />
            </div>


        </div>
    );
}