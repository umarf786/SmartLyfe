import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import Home from "./views/Home/Home";

import { UserContextProvider } from './providers/UserContext';

import Login from "./views/Login/Login";
// import Register from "./views/Register/Register";
import NotFound from "./views/NotFound/NotFound";

// User is LoggedIn
// import PrivateRoute from "./PrivateRoute";
// import Dashboard from "./views/user/Dashboard/Dashboard"; 

const Main = () => (
  <UserContextProvider>
    <Router>
      <Routes>
          {/*User might LogIn*/}
          <Route exact path="/" element={<Home />} />
          {/*User will LogIn*/}
          <Route path="/login" element={<Login />} />
          {/* <Route path="/register" element={<Register />} /> */}
          {/* User is LoggedIn*/}
          {/* <PrivateRoute path="/dashboard" element={<Dashboard />} /> */}
          {/*Page Not Found*/}
          <Route element={<NotFound />} />
      </Routes>
    </Router>
  </UserContextProvider>
);

export default Main;