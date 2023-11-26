


import React from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';



function Form() {
    return (

        <div className='container '>
            <form style={{width: "26rem"}}>
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="form4Example1" class="form-control" />
                    <label class="form-label" for="form4Example1">Nombre</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form4Example2" class="form-control" />
                    <label class="form-label" for="form4Example2">Correo</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                    <label class="form-label" for="form4Example3">Mensaje</label>
                </div>



                <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Enviar</button>
            </form>

        </div>



    );
}

export default Form;
