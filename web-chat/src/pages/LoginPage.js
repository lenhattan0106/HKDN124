import React, { useState } from "react";
import { Link } from "react-router-dom";
import "./Login.css";
import LoginImage from "../LoginImage.jpg";
const LoginForm = () => {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [rememberMe, setRememberMe] = useState(false);

    const handleSubmit = (e) => {
        e.preventDefault();
        console.log("Email:", email);
        console.log("Password:", password);
        console.log("Remember Me:", rememberMe);
    };

    return (
        <div className="login-page">
            <div className="login-card">
                {/* Phần hiển thị hình ảnh */}
                <div className="login-image">
                    <img
                        src={LoginImage}
                        alt="Login Image"
                    />
                </div>

                {/* Phần hiển thị form đăng nhập */}
                <div className="login-form-section">
                    <h1 className="login-title">Welcome Back!</h1>
                    <form onSubmit={handleSubmit} className="login-form">
                        <input
                            type="email"
                            className="form-input"
                            placeholder="Email"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                            required
                        />
                        <input
                            type="password"
                            className="form-input"
                            placeholder="Password"
                            value={password}
                            onChange={(e) => setPassword(e.target.value)}
                            required
                        />
                        <div className="remember-me">
                            <input
                                type="checkbox"
                                id="rememberMe"
                                checked={rememberMe}
                                onChange={(e) => setRememberMe(e.target.checked)}
                            />
                            <label htmlFor="rememberMe">Remember Me</label>
                        </div>
                        <button type="submit" className="btn-login">
                            Login
                        </button>
                    </form>
                    <div className="login-links">
                        <Link to="/forgot-password" className="link">
                            Forgot Password?
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default LoginForm;
