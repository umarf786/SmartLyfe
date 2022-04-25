import React, { useContext } from 'react';

import { UserContext } from "../../providers/UserContext";

function Header() {
    const { userData, isLoggedIn, logOut, getUser } = useContext(UserContext);

    const handleLogout = (e) => {
        e.preventDefault();
        getUser();
        // logOut();
    }

    return (
        <nav className="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div className="container">
                <a className="navbar-brand" href="/">
                    SmartLyfe 
                </a>
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul className="navbar-nav me-auto">

                    </ul>

                    <ul className="navbar-nav ms-auto">
                        { !isLoggedIn && (
                            <>
                                <li className="nav-item">
                                    <a className="nav-link" href="/login">Login</a>
                                </li>
                                <li className="nav-item">
                                        <a className="nav-link" href="/register">Register</a>
                                </li>
                            </>
                        )}
                        
                        { isLoggedIn && (
                            <li className="nav-item dropdown">
                                <a id="navbarDropdown" className="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    {userData.name}
                                </a>

                                <div className="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a className="dropdown-item" href="/logout"
                                       onClick={handleLogout}>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="/logout" method="POST" className="d-none">
                                    </form>
                                </div>
                            </li>
                        )}
                    </ul>
                </div>
            </div>
        </nav>

    );
}

export default Header;
