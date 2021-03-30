import navigation from "./navigation";
import newsletter from "./newsletter";
import register from "./register";
import profileCompletion from "./profile-completion";

function init() {
    const components = [
        navigation,
        newsletter,
        register,
        profileCompletion
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