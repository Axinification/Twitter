import React from 'react';
import ReactDOM from 'react-dom';
import '../../css/app.css';

export default class Profile extends React.Component {
    render () {
        return (
            <div className="container">
                <div className="window">
                    <h1>Twitter</h1>
                    <a href="login" className="loginButton">Login</a>
                </div>
            </div>
        );
    }   
}



if (document.getElementById('login')) {
    ReactDOM.render(<LoginWindow />, document.getElementById('login'));
}
