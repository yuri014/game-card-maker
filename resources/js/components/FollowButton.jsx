import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";

function FollowButton(props) {
    const [followState, setFollowState] = useState();

    useEffect(() => {
        setFollowState(props.follows === 1 ? true : false);
    }, []);

    function followUser() {
        axios
            .post(`/follow/${props.userId}`)
            .then(response => {
                setFollowState(!followState);
            })
            .catch(err => {
                if (err.response.status == 401) {
                    window.location = "/login";
                }
            });
    }

    return (
        <button onClick={() => followUser()} className="btn btn-primary">
            {!followState ? "Follow" : "Unfollow"}
        </button>
    );
}

export default FollowButton;

const idElement = document.getElementById("follow-button");

if (idElement) {
    const userId = idElement.getAttribute("userId");
    const follows = idElement.getAttribute("follows");
    ReactDOM.render(
        <FollowButton userId={userId} follows={follows} />,
        document.getElementById("follow-button")
    );
}
