import { BrowserRouter, Route, Routes } from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.min.css';

import Home from './pages/home';

import Store  from './pages/store';
import Service from "./pages/services";
import We from './pages/we';
import History from './pages/history';
import Team from './pages/team';
import Contact from './pages/contact';


function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/tienda" element={<Store />} />
        <Route path="/servicios" element={<Service />} />
        <Route path="/quienesSomos" element={<We />} />
        <Route path="/historia" element={<History/>} />
        <Route path="/equipo" element={<Team />} />
        <Route path="/contacto" element={<Contact />} />



      </Routes>
    </BrowserRouter>
  );
}

export default App;