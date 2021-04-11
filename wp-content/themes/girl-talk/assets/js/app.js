import navigation from "./navigation";
import newsletter from "./newsletter";
import register from "./register";
import forgotPass from "./forgot-pass";
import profileCompletion from "./profile-completion";
import askQuestion from "./ask-question";
import answerQuestion from "./answer-question";

function init() {
    const components = [
        navigation,
        newsletter,
        register,
        profileCompletion,
        forgotPass,
        askQuestion,
        answerQuestion
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