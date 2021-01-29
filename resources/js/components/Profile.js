import React from 'react';
import ReactDOM from 'react-dom';
import '../../css/app.css';

export default class Profile extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        data = JSON.parse(this.props.data)
        console.log("Data from API", data);
        return (
            <div className="container">
                <div className="window">
                    <div className="mainInfo">
                        <img className="image" src={data.profile_image_url_https}/>
                        <div className="text">
                            <div className="column-text">
                                <div><b>{data.name}</b></div>
                                <div className="nick">@{data.screen_name}</div>
                            </div>
                            <div className="column-text">
                                <div><b>Followers: </b>{data.followers_count?data.followers_count:"0"}</div>
                                <div><b>Location: </b>{data.location?data.location:"not given"}</div>
                                <div><b>Language: </b>{data.language?data.language:"not given"}</div>
                                <div><b>Description: </b>{data.description?data.description:"not given"}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

if(document.getElementById("data") && document.getElementById("profile")) {
    var data = document.getElementById("data").getAttribute("data");
    ReactDOM.render(<Profile data={data}/>, document.getElementById('profile'));
}