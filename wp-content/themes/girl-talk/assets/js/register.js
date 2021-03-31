export default function () {
    const $form = $('#register-form'),
        $username = $form.find('#username'),
        $email = $form.find('#email'),
        $confirm_email = $form.find('#confirm_email'),
        $password = $form.find('#password'),
        $submit_btn = $form.find('#register_submit')
    ;

    $form.on('submit', (e) => {
        e.preventDefault()

        if (!emailIsValid($email.val())) {
            $email.find('+ .input-error').removeClass('hidden').text('Invalid email')
            return
        }

        if ($email.val() !== $confirm_email.val()) {
            $confirm_email.find('+ .input-error').removeClass('hidden').text('Email confirmation is not the same')
            return
        }

        if (!passwordIsValid($password.val())) {
            $password.find('+ .input-error').removeClass('hidden').text('Required minimum 6 characters, at least one letter and one number')
            return
        }

        $submit_btn.attr('disabled', 'disabled')

        $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            data: {
                'action': 'register',
                'username': $username.val(),
                'email': $email.val(),
                'password': $password.val(),
            },
            success: function (data) {
                const response = JSON.parse(data);
                if (response.status) {
                    $('#register-block').addClass('hidden')
                    $('#register-verify').removeClass('hidden')
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                    return
                }
                $submit_btn.removeAttr('disabled')

                if (response.valid === 'invalid') {
                    alert('Something was wrong during the form submission. Refresh and try again.')
                    return
                }

                if (response.username_exists) {
                    $('#register-username-taken').removeClass('hidden')
                    return
                }

                if (response.email_exists) {
                    $('#register-email-taken').removeClass('hidden')
                    return
                }

            },
            error: function (errorThrown) {
                console.log(errorThrown);
            }
        });
    })
}

function emailIsValid(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}

function passwordIsValid(pass) {
    //Minimum eight characters, at least one letter and one number:
    return /^.{6,50}$/.test(pass)
}