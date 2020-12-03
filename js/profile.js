if (document.querySelector('.profile')) {
    (() => {
        let passwordToggle = true;
        // page wrapper
        const profileHtml = document.querySelector('.profile');
        // list of the editable targets
        const profileDetailsList = document.querySelectorAll('.profile-detail');
        // password paragraph
        const passwordHtml = document.querySelector('.profile-detail-password');
        // getting textContent from password paragraph
        let actualPassword = passwordHtml.textContent;

        // display or hide password
        const togglePassword = () => {
            if (passwordToggle) {
                // replacing all characters with circle icon
                const regex = /./gi;
                passwordHtml.innerHTML = actualPassword.replaceAll(
                    regex,
                    '<i class="fas fa-circle"></i>'
                );
            } else {
                // or sets the textContent to actual password variable
                passwordHtml.textContent = actualPassword;
            }
            passwordToggle = !passwordToggle;
        };

        // helper function to toggle hidden class on p and input
        const toggleView = (p, input) => {
            p.classList.toggle('hidden');
            input.classList.toggle('hidden');
        };

        // bind event listener to toggle password btn
        profileHtml
            .querySelector('.display-password')
            .addEventListener('click', togglePassword);

        // loop over each target and setup listeners for btns and inputs
        profileDetailsList.forEach((element) => {
            const editBtn = element.querySelector('.profile-edit');
            const editInput = element.querySelector('input');
            const p = element.querySelector('p');
            const input = element.querySelector('input');

            // bind listener to edit button
            editBtn.addEventListener('click', () => {
                toggleView(p, input);
            });

            // bind listener to input
            editInput.addEventListener('keyup', (e) => {
                if (e.target.id === 'password-input') {
                    if (!togglePassword) {
                        togglePassword();
                    }
                    actualPassword = e.target.value;
                }
                p.textContent = e.target.value;
            });
        });

        togglePassword();
    })();
}
