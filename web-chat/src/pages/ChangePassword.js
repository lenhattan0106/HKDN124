import React, { useState } from "react";
import { Link } from "react-router-dom";
import "./ForgotPassword.css";
import LoginImage from "../LoginImage.jpg";

const ForgotPassword = () => {
    const [email, setEmail] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();
        console.log('Email:', email);
    };

    const handleResetPassword = (e) => {
        e.preventDefault();
        alert(`Đã đổi mật khẩu thành công!`);
    };

    return (
        <div className="forgot-password-page">
            <div className="forgot-password-card">
                <div className="forgot-password-image">
                    <img
                        src={LoginImage}
                        alt="Forgot Password"
                    />
                </div>

                {/* Phần hiển thị form quên mật khẩu */}
                <div className="forgot-password-form-section">
                    <h2 className="forgot-password-title">Change Your Password?</h2>
                    {/* <p className="forgot-password-info">
                        We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!
                    </p> */}
                    <form className="forgot-password-form" onSubmit={handleResetPassword}>
                        <input
                            type="email"
                            placeholder="Mật khẩu cũ..."
                            className="forgot-password-input"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                        />
                        <input
                            type="email"
                            placeholder="Mật khẩu mới..."
                            className="forgot-password-input"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                        />
                        <input
                            type="email"
                            placeholder="Nhập lại mật khẩu mới..."
                            className="forgot-password-input"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                        />
                        <button type="submit" className="forgot-password-button">Save</button>
                    </form>
                    {/* <div className="forgot-password-footer">
                        Already have an account? <Link to="/">Login!</Link>
                    </div> */}
                </div>
            </div>
        </div>
    );
};

export default ForgotPassword;
