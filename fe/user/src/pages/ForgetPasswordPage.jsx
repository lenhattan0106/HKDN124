import React, { Component, Fragment } from "react";
import ForgetPassword from "../components/common/ForgetPassword";
import AppURL from "../api/AppURL";

class ForgetPasswordPage extends Component {
  componentDidMount() {
    window.scroll(0, 0);
  }

  render() {
    return (
      <Fragment>
        <ForgetPassword />
      </Fragment>
    );
  }
}

export default ForgetPasswordPage;
