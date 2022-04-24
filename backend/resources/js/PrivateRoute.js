import React, { useContext } from "react";
import { Navigate, Route, useLocation } from "react-router-dom";

import { UserContext } from "../providers/UserContext";

const PrivateRoute = ({ component: Component, path, ...rest }) => {
  const { isLoggedIn } = useContext(UserContext);

  return (
    <Route
        path={path}
        {...rest}
        render={(props) =>
            isLoggedIn ? (
                <Component {...props} />
            ) : (
                <Navigate
                    to={{
                        pathname: "/login"
                    }}
                    replace={true}
                />
            )
        }
    />
)};

const withLocation = (Component) => (props) => {
    const location = useLocation();

    return <Component {...props} location={location} />;
};

export default withLocation(PrivateRoute);
