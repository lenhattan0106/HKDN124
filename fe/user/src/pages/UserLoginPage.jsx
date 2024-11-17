import React, { Component, Fragment, useEffect, useState } from "react";
//import { defaultoptions } from "../utils/auth";
import UserLogin from "../components/common/UserLogin";
import AppURL from "../api/AppURL";

const UserLoginPage = (e) => {
  
  return (
    <Fragment>
      

      {/* <UserLogin user={user} setUser={setUser} /> */}
      <UserLogin />

      
    </Fragment>
  );
};

export default UserLoginPage;
