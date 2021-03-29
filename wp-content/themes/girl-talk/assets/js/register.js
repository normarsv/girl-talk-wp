export default function () {
    const $form = $('#register-form'),
        $username = $form.find('#username'),
        $email = $form.find('#email'),
        $confirm_email = $form.find('#confirm_email'),
        $password = $form.find('#password'),
        valid = $form.find('#n_valid').val()
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

        $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            data: {
                'action': 'register',
                'username': $username.val(),
                'email': $email.val(),
                'password': $password.val(),
                'valid': valid,
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