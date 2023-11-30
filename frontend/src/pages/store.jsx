import React, { useState } from "react";
import Carousel from "../components/CarouselComponent";
import { ItemList } from "../components/ItemList";

export default function Store() {


    return (
        <div className="container">

       

            <div>
                <Carousel />
            </div>


            <div>
                <ItemList indexLimit={15} />
            </div>

        </div>
    );
}