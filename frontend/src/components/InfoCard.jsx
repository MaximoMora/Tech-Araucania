import React, { useState } from "react";


{/** Componentes llamada InfoCard*/}

export default function InfoCard({ title,subtitle1,subtitle2, text1,text2, image, height,width}) {


    return (
        <div className="row featurette my-4 bg-success">
            <div className="col-md-7 order-md-2 mt-4">
                {/** Titulo de la carta*/}

                <h2 className="featurette-heading col-6 my-5"><strong>{title}</strong></h2>
                <div>
                    {/** subtitulo de la carta*/}

                    <h4><strong>{subtitle1}</strong></h4>
                    {/** texto de la carta*/}

                    <p className="lead">{text1}</p>
                </div>
                <div>
                    <h4><strong>{subtitle2}</strong></h4>
                    <p className="lead">{text2}</p>
                </div>
            </div>

            <div className="col-md-5 order-md-1">

                {/** imagen de la carta*/}
                {/* se pueden pasar como parametros el ancho y el alto*/}
                <img
                    className="featurette-image img-fluid mx-auto"
                    data-src="holder.js/500x500/auto"
                    alt="500x500"

                    style={{ width: {width}, height: {height},margin: "1rem" }}
                    src={image}
                    data-holder-rendered="true"
                />
            </div>

        </div>
    );
}