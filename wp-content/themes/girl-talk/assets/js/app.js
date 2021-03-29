import navigation from "./navigation";
import newsletter from "./newsletter";
import register from "./register";

function init() {
    const components = [
        navigation,
        newsletter,
        register,
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