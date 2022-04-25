import React, { useState, useEffect, createContext } from "react"

import authService from '../../services/authService';

const UserContext = createContext();

function UserContextProvider({children}) {
    const savedUserData = () =>
    JSON.parse(window.localStorage.getItem('userData')) || {};
    const savedIsLoggedIn = () =>
    JSON.parse(window.localStorage.getItem('isLoggedIn')) || false;

    const [userData, setUserData] = useState(savedUserData)
    const [isLoggedIn, setIsLoggedIn] = useState(savedIsLoggedIn);
    const [loginError, setLoginError] = useState();
     
    
    useEffect(() => {
        localStorage.setItem('userData', JSON.stringify(userData))
    }, [userData])

    useEffect(() => {
        localStorage.setItem('isLoggedIn', JSON.stringify(isLoggedIn))
    }, [isLoggedIn])
    
    const logIn = async (username, password) => {
        const user = { email: username, password }
        try {
            const response = await authService.login(user);
            
            setUserData(response.data);
            setIsLoggedIn(true)
            setLoginError()
        } catch (error) {
            setUserData({});
            setIsLoggedIn(false)
            setLoginError(error.message)
        }
    }

    const logOut = () => {
      setUserData({});
      setIsLoggedIn(false)
    }

    const getUser = async () => {
        const response = await authService.user(userData.plain_token);
        console.log(response)
    }
    
    return (
        <UserContext.Provider value={{ userData, isLoggedIn, loginError, getUser, setUserData, setIsLoggedIn, logIn, logOut }}>
            {children}
        </UserContext.Provider>
    )
}

export { UserContextProvider, UserContext }