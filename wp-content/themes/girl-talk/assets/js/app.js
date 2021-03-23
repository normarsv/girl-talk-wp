import navigation from "./navigation";
import newsletter from "./newsletter";

function init() {
    const components = [
        navigation,
        newsletter,
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