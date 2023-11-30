import { BrowserRouter, Route, Routes } from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.min.css';



import Home from './pages/home';
import NavBar from "./components/NavBar";
import Footer from "./components/Footer";
import Store from './pages/store';
import Service from "./pages/services";
import We from './pages/we';
import History from './pages/history';
import Team from './pages/team';
import Contact from './pages/contact';
import Shopping  from "./pages/shopping";
import Login from "./pages/login";
import Register from "./pages/register";

import { ShoppingCartProvider } from "./contexts/ShoppingCartContext";

//#basename="/~maxmora/desarrollo_web/tech/"

function App() {
  return (
    <ShoppingCartProvider>

      <BrowserRouter  basename="/~maxmora/desarrollo_web/terceraEntrega/" >
        <NavBar />
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/tienda" element={<Store />} />
          <Route path="/servicios" element={<Service />} />
          <Route path="/quienesSomos" element={<We />} />
          <Route path="/historia" element={<History />} />
          <Route path="/equipo" element={<Team />} />
          <Route path="/contacto" element={<Contact />} />
          <Route path="/carrito" element={<Shopping />} />
          <Route path="/login" element={<Login />} />
          <Route path="/registro" element={<Register />} />

        </Routes>

        <Footer/>

      </BrowserRouter>

    </ShoppingCartProvider>

  );
}

export default App;