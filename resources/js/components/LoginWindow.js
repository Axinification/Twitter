import React from 'react';
import ReactDOM from 'react-dom';
import '../../css/app.css';

function LoginWindow() {
    return (
        <div className="container">
            <div className="window">
                <form>
                    <h2>Twitter Login</h2>
                    <label>
                        Login:
                        <input type="text" name="login" />
                    </label>
                    <label>
                        Password:
                        <input type="password" name="password" />
                    </label>
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
    );
}

export default LoginWindow;

if (document.getElementById('login')) {
    ReactDOM.render(<LoginWindow />, document.getElementById('login'));
}
