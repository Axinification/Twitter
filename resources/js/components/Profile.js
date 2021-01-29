import React from 'react';
import ReactDOM from 'react-dom';
import '../../css/app.css';

export default class Profile extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        console.log("Data from API", JSON.parse(this.props.data));
        return (
            <div className="container">
                <table>
                    <tr>
                    <th>{this.props.data.id}</th>
                    <th>xddddddddd</th>
                    </tr>
                    
                </table>
            </div>
        )
    }
}
// const Profile = User => {

// }

if(document.getElementById("data") && document.getElementById("profile")) {
    var data = document.getElementById("data").getAttribute("data");
    ReactDOM.render(<Profile data={data}/>, document.getElementById('profile'));
}