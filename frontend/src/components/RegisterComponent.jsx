import { NavLink } from "react-router-dom";
import { useState } from "react";

function RegisterComponent() {
    const [Email2, setEmail] = useState("");
    const [password2, setPassword] = useState("");

    async function handleLogin(event) {
        event.preventDefault();

        try {
            const response = await fetch('http://localhost:5500/api/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ Email2, password2 })
            });

            if (response.ok) {
                console.log("Inicio de sesión exitoso");
            } else {
                console.log("Error al iniciar sesión");
            }
        } catch (error) {
            console.log("Problema: " + error);
        }
    }
    return (
        <div className="container">

            <section class="vh-100" style={{ backgroundColor: "#eee" }}>

                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black" style={{ borderRadius: "25px" }}>
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registro</p>

                                            <form class="mx-1 mx-md-4" onSubmit={handleLogin}>


                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="email" id="form3Example3c" class="form-control" value={ Email2 } onChange={(e) => setEmail(e.target.value)}/>
                                                        <label class="form-label" for="form3Example3c">Tu correo</label>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="password" id="form3Example4c" class="form-control" value= { password2 } onChange={(e) => setPassword(e.target.value)}/>
                                                        <label class="form-label" for="form3Example4c">Tu contraseña</label>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="password" id="form3Example4cd" class="form-control" value= { password2} onChange={(e) => setPassword(e.target.value)}/>
                                                        <label class="form-label" for="form3Example4cd">Confirma Tu contraseña</label>
                                                    </div>
                                                </div>


                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button type="submit" class="btn btn-primary btn-lg">Registro</button>
                                                </div>

                                                <div>
                                                    <p>Ya tienes Cuenta? <a href="#!" class="link-info">
                                                        <NavLink className="nav-link active" aria-current="page" style={{ textDecoration: "none", color: "black" }} to="/login">Login</NavLink></a>
                                                    </p>
                                                </div>

                                            </form>

                                        </div>
                                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    )
}

export default RegisterComponent
