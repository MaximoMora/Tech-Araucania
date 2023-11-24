import React, { useState } from "react";


export default function InfoCardReverse({ title, text, image }) {


    return (
        <div className="row featurette my-4">


            <div className="col-md-5 order-md-2">
                <img
                    className="featurette-image img-fluid mx-auto"
                    data-src="holder.js/500x500/auto"
                    alt="500x500"
                    style={{ width: '500px', height: '400px' }}
                    src={image}
                    data-holder-rendered="true"
                />
            </div>

            
            <div className="col-md-7 order-md-1">
                <h2 className="featurette-heading">{title}<span className="text-muted">Servioci</span></h2>
                <p className="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>



        </div>
    );
}