import { createBrowserRouter } from "react-router-dom";
import UserLoginPage from "../pages/UserLoginPage";
import RegisterPage from "../pages/RegisterPage";
import ForgetPasswordPage from "../pages/ForgetPasswordPage";
import ResetPasswordPage from "../pages/ResetPasswordPage";
import ProfilePage from "../pages/ProfilePage";

export const router = createBrowserRouter([
  {
    path: "/",
    element: <UserLoginPage />,
  },
  {
    path: "/register",
    element: <RegisterPage />,
  },
  {
    path: "/forget",
    element: <ForgetPasswordPage />,
  },
  {
    path: "/reset/:id",
    element: <ResetPasswordPage />,
  },
  {
    path: "/profile",
    element: <ProfilePage />,
    // loader:
  },
  
]);
