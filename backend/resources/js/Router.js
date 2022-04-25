import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import Home from "./views/Home/Home";

import { UserContextProvider } from './providers/UserContext';

import Header from './components/Header';
import Footer from './components/Footer';

import Login from "./views/Login/Login";
// import Register from "./views/Register/Register";
import NotFound from "./views/NotFound/NotFound";

// User is LoggedIn
// import PrivateRoute from "./PrivateRoute";
// import Dashboard from "./views/user/Dashboard/Dashboard"; 

const Main = () => (
  <UserContextProvider>
    <Header />
    <Router>
      <Routes>
          <Route exact path="/" element={<Home />} />
          <Route path="/login" element={<Login />} />
          {/* <Route path="/register" element={<Register />} /> */}
          {/* User is LoggedIn*/}
          {/* <PrivateRoute path="/dashboard" element={<Dashboard />} /> */}
          <Route path="*" element={<NotFound />} />
      </Routes>
    </Router>
    <Footer />
  </UserContextProvider>
);

export default Main;