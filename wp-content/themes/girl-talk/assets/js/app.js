import navigation from "./navigation";
import newsletter from "./newsletter";
import register from "./register";
import forgotPass from "./forgot-pass";
import profileCompletion from "./profile-completion";
import askQuestion from "./ask-question";
import answerQuestion from "./answer-question";
import myAccount from "./my-account";
import deleteQuestionAnswer from "./delete-question-answer";
import editEmail from "./edit-email";
import flagQuestion from "./flag-question";
import inviteFriend from "./invite-friend";

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
        deleteQuestionAnswer,
        editEmail,
        flagQuestion,
        inviteFriend
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