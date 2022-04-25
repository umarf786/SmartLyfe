// Return a 404 react component
import React, { useState, useContext, useEffect } from 'react';
import { Link } from 'react-router-dom';

import { UserContext } from '../../providers/UserContext';

const Login = () => {
    const [formSubmitting, setFormSubmitting] = useState(false);
    const [formErrorMessage, setFormErrorMessage] = useState();
    const { userData, loginError, logIn, logOut } = useContext(UserContext);

    const handleLogin = (e) => {
      e.preventDefault();
      setFormSubmitting(true);
      setFormErrorMessage();
      const attempt = logIn(e.target.email.value, e.target.password.value);
      console.log("aaaa:", attempt)
      if (attempt.error) {
        setFormErrorMessage(attempt.error);
      }
      setFormSubmitting(false);
    }

    useEffect(() => {
      setFormErrorMessage(loginError);
    }, [loginError])
    

    return (
      <div className="container">
      <div className="row">
        <div className="offset-xl-3 col-xl-6 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12 ">
          <h2 className="text-center mb30">Log In To Your Account</h2>

          { formErrorMessage && <h2>{formErrorMessage}</h2>}
          <form onSubmit={handleLogin}>
            <div className="form-group">
              <input id="email" type="email" name="email" placeholder="E-mail" className="form-control" required/>
            </div>
            <div className="form-group">
              <input id="password" type="password" name="password" placeholder="Password" className="form-control" required/>
            </div>
           <button disabled={formSubmitting} type="submit" name="singlebutton" className="btn btn-default btn-lg  btn-block mb10"> {formSubmitting ? "Logging You In..." : "Log In"} </button>
           </form>
        </div>
        <p className="text-white">Don't have an account? <Link to="/register" className="text-yellow"> Register</Link> | 
          <span className="pull-right">
            <Link to="/" className="text-white">Back to Index</Link>
          </span>
        </p>
      </div>
    </div>
    )
}

export default Login;