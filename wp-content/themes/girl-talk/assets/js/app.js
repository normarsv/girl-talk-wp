import navigation from "./navigation";
import newsletter from "./newsletter";
import register from "./register";
import forgotPass from "./forgot-pass";
import profileCompletion from "./profile-completion";
import askQuestion from "./ask-question";
import answerQuestion from "./answer-question";
import myAccount from "./my-account";
import deleteQuestionAnswer from "./delete-question-answer";

function init() {
    const components = [
        navigation,
        newsletter,
        register,
        profileCompletion,
        forgotPass,
        askQuestion,
        answerQuestion,
        myAccount,
        deleteQuestionAnswer
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