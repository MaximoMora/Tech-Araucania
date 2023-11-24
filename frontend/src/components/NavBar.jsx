
import { NavLink } from "react-router-dom";


function NavBar() {
    return (
        <div className='container'>
            <nav className="navbar navbar-expand-lg bg-body-tertiary">

                <div className="container-fluid">

                    <a className="navbar-brand" href="#"><NavLink style={{ textDecoration: "none", color: "black" }} to="/">Home</NavLink></a>


                    <div className="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul className="navbar-nav me-auto mb-2 mb-lg-0">

                            <li className="nav-item">
                                <NavLink className="nav-link active" aria-current="page" style={{ textDecoration: "none", color: "black" }} to="/tienda">Productos</NavLink>
                            </li>

                            <li className="nav-item">
                                <NavLink className="nav-link active" aria-current="page" style={{ textDecoration: "none", color: "black" }} to="/servicios">Servicios</NavLink>
                            </li>

                            <li className="nav-item">
                                <NavLink className="nav-link active" aria-current="page" style={{ textDecoration: "none", color: "black" }} to="/quienesSomos">Quienes Somos</NavLink>
                            </li>

                            <li className="nav-item">
                                <NavLink className="nav-link active" aria-current="page" style={{ textDecoration: "none", color: "black" }} to="/historia">Historia</NavLink>
                            </li>

                            <li className="nav-item">
                                <NavLink className="nav-link active" aria-current="page" style={{ textDecoration: "none", color: "black" }} to="/equipo">Equipo</NavLink>
                            </li>

                            <li className="nav-item">
                                <NavLink className="nav-link active" aria-current="page" style={{ textDecoration: "none", color: "black" }} to="/contacto">Contacto</NavLink>
                            </li>







                        </ul>


                        <form className="d-flex" role="search">

                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"></input>


                            <button className="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>

                </div>

            </nav>



        </div>


    )


}

export default NavBar

