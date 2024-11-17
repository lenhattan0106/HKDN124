import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import LoginPage from "./pages/LoginPage";
import ForgotPassword from "./pages/ForgotPassword";
import ChangePassword from "./pages/ChangePassword";
import NewPassword from "./pages/NewPassword";

function App() {
    return (
        <Router>
            <Routes>cd
                <Route path="/" element={<LoginPage />} />
                <Route path="/forgot-password" element={<ForgotPassword />} />
                <Route path="/change-password" element={<ChangePassword />} />
                <Route path="/new-password" element={<NewPassword />} />
                
            </Routes>
        </Router>
    );
}

export default App;
