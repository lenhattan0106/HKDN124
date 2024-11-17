import React, { Component, Fragment } from "react";
import ResetPassword from "../components/common/ResetPassword";

class ResetPasswordPage extends Component {
  componentDidMount() {
    window.scroll(0, 0);
  }

  render() {
    return (
      <Fragment>
        <ResetPassword />
      </Fragment>
    );
  }
}

export default ResetPasswordPage;
