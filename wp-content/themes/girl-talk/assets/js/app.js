import navigation from "./navigation";
import newsletter from "./newsletter";
import register from "./register";
import forgotPass from "./forgot-pass";
import profileCompletion from "./profile-completion";

function init() {
    const components = [
        navigation,
        newsletter,
        register,
        profileCompletion,
        forgotPass
    ];

    components.forEach(component => {
        try {
            component();
        } catch (e) {
            console.error(e);
        }
    });
}

$(document).ready(init);