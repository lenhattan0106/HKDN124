class AppURL {
  static BaseURL = "http://127.0.0.1:8000/api";
  static PostContact = this.BaseURL + "/postcontact";
  static SiteInfo = this.BaseURL + "/siteinfo";

  
  //auth uri
  static UserLogin = this.BaseURL + "/login";
  static UserData = this.BaseURL + "/user";
  static UserRegister = this.BaseURL + "/register";
  static UserForgetPassword = this.BaseURL + "/forgetpassword";
  static UserResetPassword = this.BaseURL + "/reset";
}

export default AppURL;
