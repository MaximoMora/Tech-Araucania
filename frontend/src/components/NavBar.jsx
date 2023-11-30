
import { useContext } from "react";
import { NavLink } from "react-router-dom";
import { CartContext } from "../contexts/ShoppingCartContext";


function NavBar() {

    const [cart, setCart] = useContext(CartContext)


    const quantity = cart.reduce((accumulator, currentItem) => {
        return accumulator + currentItem.quantity

    }, 0)

    return (
        <div className='container'>
            <nav className="navbar navbar-expand-lg bg-body-tertiary">
                <div className="container-fluid">

                    <a className="navbar-brand" href="#"><NavLink style={{ textDecoration: "none", color: "green" }} to="/">Tech Araucania </NavLink></a>

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
                            <button className="btn btn-outline-success" type="submit">Buscar</button>
                        </form>

                        <ul className="navbar-nav me-auto mx-5 mb-2 mb-lg-0">

                            <li className="nav-item d-flex align-items-center">
                                <NavLink className="nav-link active" aria-current="page" style={{ textDecoration: "none", color: "black" }} to="/carrito">
                                    <i className="bi bi-cart">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" className="bi bi-cart" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                        </svg>
                                    </i>
                                    <p className="mb-0 ml-2">{quantity}</p>
                                </NavLink>
                            </li>

                            <li className="nav-item">
                                <NavLink className="nav-link active" aria-current="page" style={{ textDecoration: "none", color: "black" }} to="/login">Login</NavLink>
                            </li>

                        </ul>


                    </div>
                </div>
            </nav>

        </div>

    )
}

export default NavBar

