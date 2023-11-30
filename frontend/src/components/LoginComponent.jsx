import { NavLink } from "react-router-dom";
import { useState } from "react";


function LoginComponent() {
    const [Email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    return (


        <div className="container">
            <section class="vh-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 text-black">


                            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                                <form style={{width: "23rem"}}>

                                    <h3 class="fw-normal mb-3 pb-3" style={{font:"letter-spacing: 1px"}}>Login</h3>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form2Example18" class="form-control form-control-lg" value={Email} onChange={(e) => setEmail(e.target.value)}/>
                                        <label class="form-label" for="form2Example18">Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example28" class="form-control form-control-lg" value={password} onChange={(e) => setEmail(e.target.value)}/>
                                        <label class="form-label" for="form2Example28">Contraseña</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-info btn-lg btn-block" type="button">Login</button>
                                    </div>

                                    <p>No tienes una cuenta? <a href="#!" class="link-info">
                                        <NavLink className="nav-link active" aria-current="page" style={{ textDecoration: "none", color: "black" }} to="/registro">Registro</NavLink></a>
                                    </p>

                                    

                                </form>

                            </div>

                        </div>
                        <div class="col-sm-6 px-0 d-none d-sm-block">
                        </div>
                    </div>
                </div>
            </section>

        </div>
    )
}

export default LoginComponent

