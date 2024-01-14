document.addEventListener('DOMContentLoaded', function () {

    let newsForm = document.querySelector('.newsletter-form')
    
    newsForm.addEventListener('submit', formHandler)
    
    function formHandler(e) {
        e.preventDefault();
        let userMail = document.querySelector('#emailSubmit').value
        
        if (!document.querySelector('.submit-valid')) {
            
            let successMessage = document.createElement('div');
            successMessage.className = 'submit-valid';
            successMessage.textContent = `HO HO HO ! Vous recevrez une lettre chaque semaine à ${userMail}!`;

            newsForm.appendChild(successMessage);

            newsForm.reset();

        }
    }

});
