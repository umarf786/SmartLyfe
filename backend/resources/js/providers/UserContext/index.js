import React, { useState, useEffect, createContext } from "react"

import authService from '../../services/authService';

const UserContext = createContext();

function UserContextProvider({children}) {
    const savedAccessToken = () =>
    JSON.parse(window.localStorage.getItem('access_token')) || null;


    const [accessToken, setAccessToken] = useState(savedAccessToken);
    const [userData, setUserData] = useState({});
    const [isLoggedIn, setIsLoggedIn] = useState();
    const [loginError, setLoginError] = useState();
     
    useEffect(() => {
        localStorage.setItem('access_token', JSON.stringify(accessToken))
        getUser();
    }, [accessToken])
    
    const logIn = async (username, password) => {
        const user = { email: username, password }
        try {
            const response = await authService.login(user);
            setAccessToken(response.data.access_token);
        } catch (error) {
            setUserData({});
            setIsLoggedIn(false)
            setLoginError(error.message)
            setAccessToken(null);
        }
    }

    const logOut = async () => {
      await authService.logout(accessToken);
      setUserData({});
      setIsLoggedIn(false);
      setAccessToken();
    }

    const getUser = async () => {
        const response = await authService.user(accessToken);
        setIsLoggedIn(true);
        setUserData(response.data);
    }
    
    return (
        <UserContext.Provider value={{ accessToken, userData, isLoggedIn, loginError, getUser, setUserData, setIsLoggedIn, logIn, logOut }}>
            {children}
        </UserContext.Provider>
    )
}

export { UserContextProvider, UserContext }