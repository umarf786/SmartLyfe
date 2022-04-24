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
     
    
    useEffect(() => {
        localStorage.setItem('userData', JSON.stringify(userData))
    }, [userData])

    useEffect(() => {
        localStorage.setItem('isLoggedIn', JSON.stringify(isLoggedIn))
    }, [isLoggedIn])
    
    const logIn = async (username, password) => {
        const user = { email: username, password }
        const response = await authService.login(user);

        console.log(response);
        
        if (user) {
          setUserData(user);
        }
    }

    const logOut = () => {
      setUserData('');
    }
    
    return (
        <UserContext.Provider value={{ userData, isLoggedIn, logIn, logOut }}>
            {children}
        </UserContext.Provider>
    )
}

export { UserContextProvider, UserContext }