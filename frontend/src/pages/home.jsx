import React, { useState } from "react";
import Carousel from "../components/CarouselComponent";
import InfoCard from "../components/InfoCard";
import InfoCardReverse from "../components/InfoCardReverse";
import text from "../data/textHome.js"
import { ItemList } from "../components/ItemList";

{/*
import service from "../assets/img/service.jpeg";
import product from "../assets/img/imgProducts/producto6.jpg";
*/
}


{/*importamos las imagenes por url */}
const tree = "https://images.pexels.com/photos/6590725/pexels-photo-6590725.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
const product = "https://c1.neweggimages.com/ProductImage/13-144-634-05.png"
const service = "https://images.pexels.com/photos/1054397/pexels-photo-1054397.jpeg?auto=compress&cs=tinysrgb&w=1600"


export default function Home() {


    return (
        <div className="container">



            <div >
                {/**se llama al componente Carousel para mostrar tres paginas*/}
                <Carousel />
            </div>


            <div className="my-5">
                    {/**se llama al ItemList para mostrar dos filas productos*/}

                    <ItemList indexLimit={6}/>

            </div>


            {/**se llama al componente InfoCard y infoCardReverse para dar informacion de tech Araucania */}

            <div className="container justify-content-center ">
                <InfoCard  title={text.textCompany.title} subtitle1={text.textCompany.subtitle1} subtitle2={text.textCompany.subtitle2} text1={text.textCompany.text1} text2={text.textCompany.text2} image={tree} />
                <InfoCardReverse  title={text.textProduct.title} subtitle1={text.textProduct.subtitle1} subtitle2={text.textProduct.subtitle2} text1={text.textProduct.text1} text2={text.textProduct.text2}  image={product} />
                <InfoCard  title={text.textService.title} subtitle1={text.textService.subtitle1} subtitle2={text.textService.subtitle2} text1={text.textService.text1} text2={text.textService.text2} image={service} />
            </div>



        </div>
    );
}