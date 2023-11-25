import React, { useState } from "react";


export default function InfoCardReverse({ title,subtitle1,subtitle2, text1,text2, image }) {


    return (
        <div className="row featurette my-4">


            <div className="col-md-5 order-md-2">
                <img
                    className="featurette-image img-fluid mx-auto"
                    data-src="holder.js/500x500/auto"
                    alt="500x500"
                    style={{ width: '500px', height: '750px', margin: "1rem" }}
                    src={image}
                    data-holder-rendered="true"
                />
            </div>

            
            <div className="col-md-7 order-md-1">
            <h2 className="featurette-heading col-6 my-5"><strong>{title}</strong></h2>
                <div>
                    <h4><strong>{subtitle1}</strong></h4>
                    <p className="lead">{text1}</p>
                </div>
                <div>
                    <h4><strong>{subtitle2}</strong></h4>
                    <p className="lead">{text2}</p>
                </div>
            </div>



        </div>
    );
}