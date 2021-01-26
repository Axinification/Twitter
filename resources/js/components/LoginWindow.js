import React from 'react';
import ReactDOM from 'react-dom';
import '../../css/login.css';

function LoginWindow() {
    return (
        <div className="container">
            <div className="window">
                <form>
                    <h1>Twitter Login</h1>
                    <table>
                        <tr className="form-row">
                            <td className="label-col">
                                <label for="login"><b>Login:</b></label>
                            </td>
                            <td>
                                <input id="login" type="text" name="login" />
                            </td>
                        </tr>
                        <tr className="form-row">
                            <td className="label-col">
                                <label for="password"><b>Password:</b></label>
                            </td>
                            <td>
                            <input id="password" type="password" name="password" />
                            </td>
                        </tr>
                    </table>
                    <div className="submit-row">
                        <input type="submit" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    );
}

export default LoginWindow;

if (document.getElementById('login')) {
    ReactDOM.render(<LoginWindow />, document.getElementById('login'));
}
