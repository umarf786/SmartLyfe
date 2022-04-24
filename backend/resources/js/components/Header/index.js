import React, { useContext } from 'react';

import { UserContext } from "../../providers/UserContext";

function Header() {
    const { userData } = useContext(UserContext);


    return (
        <div className="header"> 
            { userData ? 'Logged In ' : 'not logged in' }
        </div>
    );
}

export default Header;
