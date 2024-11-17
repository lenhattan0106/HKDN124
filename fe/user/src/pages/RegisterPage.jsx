import React, { Component, Fragment, useEffect, useState } from "react";
import Register from "../components/common/Register";
import { tokenoptions } from "../utils/auth";
import AppURL from "../api/AppURL";

const RegisterPage = () => {
  const [user, setUser] = useState();
  useEffect(() => {
    window.scroll(0, 0);
    fetch(AppURL.UserData, tokenoptions)
      .then((data) => data.json())
      .then((data) => {
        console.log(data);
        setUser(data);
      })
      .catch((error) => {
        console.log(error);
      });
  }, []);
  return (
    <Fragment>
      

      <Register user={user} setUser={setUser} />

      
    </Fragment>
  );
};

export default RegisterPage;
