//Wizard Init

$("#wizard").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "none",       
    titleTemplate: '<span class="bd-wizard-step-indicator"></span><h6 class="bd-wizard-step-title">#title#</h6>',
    onStepChanged: function (e, index , previndex) {
        console.log(e ,index, previndex);
        let steps = document.querySelector('#wizard .steps');
            // Save data to session based on the step
            if (index === 1) {
                const userType = document.querySelector("input[name='user_type']:checked").value;
                sessionStorage.setItem('businessType', userType);
            } else if (index === 2) {
                const formFieldsToStore = ['fullname', 'phoneNumber', 'city', 'province', 'age', 'sex', 'languanges', 'employement'];
                formFieldsToStore.forEach(fieldName => {
                    const value = $(`#${fieldName}`).val();
                    sessionStorage.setItem(fieldName, value);
                });
            } else if (index === 3) {
                sessionStorage.setItem('service', $("input[name='purpose']:checked").val());
                $('#enteredUsername').append($("#fullname").val());
                // $('#enteredPhoneNumber').append($("#phoneNumber").val());
                $('#enteredLocation').append($("#city").val());
                $('#enteredEmail').append($("#province").val());
                $('#enteredAge').append($("#age").val());
                $('#enteredSex').append($("#sex").val());
                $('#enteredLang').append($("#languanges").val());
                $('#enteredEmployementStatus').append($("#employement").val());
                $('#selectedServices').append($("input[name='purpose']:checked").val());
            }



        if( index === 1) {
            steps.classList.add('second-step-active');
            steps.classList.remove('third-step-active','last-step-active');
        } else if (index === 2) {
            steps.classList.add('third-step-active');
            steps.classList.remove('second-step-active','last-step-active');
        } else if (index === 3) {
            steps.classList.add('last-step-active');
            steps.classList.remove('second-step-active','third-step-active');
        }else {
            steps.classList.remove('second-step-active','third-step-active','last-step-active');
        }

    },
    onFinished: function() {
        // Gather all the saved data from the session
        const businessType = sessionStorage.getItem('businessType');
        const fullname = sessionStorage.getItem('fullname');
        const name = sessionStorage.getItem('fullname');
        const phoneNumber = sessionStorage.getItem('phoneNumber');
        const city = sessionStorage.getItem('city');
        const province = sessionStorage.getItem('province');
        const age = sessionStorage.getItem('age');
        const sex = sessionStorage.getItem('sex');
        const languages = sessionStorage.getItem('languages');
        const employment = sessionStorage.getItem('employment');
        const service = sessionStorage.getItem('service');
        const email = 'nyeleti.bremah@gmail.com';
        const password = 'eco12345';
        const password_confirmation = 'eco12345';
        const source = sessionStorage.getItem('service');
        const destination = sessionStorage.getItem('service');
        const customer_type = 'provider';

        // Create an object with the collected data
        const formData = {
            businessType,
            fullname,
            phoneNumber,
            city,
            province,
            age,
            sex,
            languages,
            employment,
            service,
            name,
            email,
            password,
            password_confirmation,
            source,
            destination,
            customer_type,
        };
        
        // Define the API endpoint URL
        const apiUrl = 'http://auth.greenwebbtech.com/api/register';

        // Make the asynchronous API request using jQuery AJAX
        $.ajax({
            url: apiUrl,
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(formData),
            success: function (response) {
                // console.log(response);
                // Handle the response data here
                // sessionStorage.clear(); // Clear session data after submission
                // alert('Form successfully submitted!');
                // Save the token and user data in session storage
                sessionStorage.setItem('token', response.token);
                sessionStorage.setItem('authuser', JSON.stringify(response.data));

                // Then reload the page
                location.reload();
            },
            error: function (error) {
                sessionStorage.clear();
                alert('An error occurred while submitting the form: ' + error.statusText);
            },
        });
        
    },
    labels: {
        previous: "Back",
    }
});


//Form control

$('.purpose-radio-input').on('change', function(e) {
    $('#selectedBusiness').text(e.target.value);
});

$('#username').on('change', function(e) {
    $('#enteredUsername').text(e.target.value);
});

$('#phoneNumber').on('change', function(e) {
    $('#enteredPhoneNumber').text(e.target.value);
});

$('#location').on('change', function(e) {
    $('#enteredLocation').text(e.target.value);
});

$('#zipcode').on('change', function(e) {
    $('#enteredZipcode').text(e.target.value);
});

$('#cardNumber').on('change', function(e) {
    let str = e.target.value;
    let value = new Array(str.length - 4 + 1).join('x') + str.slice(-4);
    $('#enteredCard').text(value);
});

$('#expiration').on('change', function(e) {
    $('#cardExpiration').text(e.target.value);
});

