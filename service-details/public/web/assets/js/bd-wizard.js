// Wizard Init
function validateSection1() {
    var isValid = true;

    // Validate numCarsSelect
    var numCarsSelect = $('#numCarsSelect');
    if (!numCarsSelect.val() || numCarsSelect.val() === 'Select Number of vehicles') {
        isValid = false;
        numCarsSelect.addClass('is-invalid');
    } else {
        numCarsSelect.removeClass('is-invalid');
    }

    // Validate input fields for each car detail
    $('#carDetails input, #carDetails select').each(function () {
        var fieldValue = $(this).val();

        if (!fieldValue) {
            isValid = false;
            $(this).addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid');
        }
    });

    // Validate textarea
    var messageTextarea = $('[name="message"]');
    if (messageTextarea.val().trim() === '') {
        isValid = false;
        messageTextarea.addClass('is-invalid');
    } else {
        messageTextarea.removeClass('is-invalid');
    }

    return isValid;
}

function validateSectionStep2() {
    var isValid = true;

    // Validate each field individually
    var fieldsToValidate = ['fname', 'lname', 'email', 'tel', 'address', 'companyname'];

    for (var i = 0; i < fieldsToValidate.length; i++) {
        var fieldName = fieldsToValidate[i];
        var fieldValue = document.getElementsByName(fieldName)[0].value.trim();

        if (fieldValue === '') {
            isValid = false;
            // Highlight the invalid field
            $('[name="' + fieldName + '"]').addClass('is-invalid');
        } else {
            // Remove any previous validation classes
            $('[name="' + fieldName + '"]').removeClass('is-invalid');
        }
    }

    return isValid;
}

$("#wizard").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "none",
    titleTemplate: '<span class="bd-wizard-step-indicator"></span><h6 class="bd-wizard-step-title">#title#</h6>',
    onInit: function (event, currentIndex) {
        // Disable the next button on initialization
        $('#wizard .actions a[href="#next"]')
            .attr('href', '#disabled')
            .attr('aria-disabled', 'true')
            .text('Pick Selection')
            .addClass('disabled')
            .css('background-color', '');
    },
    onStepChanged: function (e, index, previndex) {
        console.log(e, index, previndex);
        let steps = document.querySelector('#wizard .steps');

        // Disable next button during steps where information needs to be entered
        // if (index > 1 && index < 4) {
        //     alert('last');
        //     $('#wizard .actions a[href="#next"]')
        //         .attr('href', '#disabled')
        //         .attr('aria-disabled', 'false')
        //         .text('Pick Selection')
        //         // .addClass('disabled')
        //         .css('background-color', '');
        // }

        if (index === 1) {
            
            steps.classList.add('second-step-active');
            steps.classList.remove('third-step-active', 'last-step-active');
            var fv = $('#profileForm').data('formValidation');
            var $container = $('#profileForm').find('section[data-step="' + currentIndex + '"]');

            // Validate the container
            fv.validateContainer($container);

            var isValidStep = fv.isValidContainer($container);
            if (isValidStep === false || isValidStep === null) {
                // Do not jump to the next step
                return false;
            }

            return true;
        } else if (index === 2) {
            steps.classList.add('third-step-active');
            steps.classList.remove('second-step-active', 'last-step-active');
            var isSectionValid = validateSectionStep2();
            if (!isSectionValid) {
                e.preventDefault();
            }
        } else if (index === 3) {
            
            steps.classList.add('last-step-active');
            steps.classList.remove('second-step-active', 'third-step-active');
            var isSectionValid = validateSection1();
            if (!isSectionValid) {
                e.preventDefault(); // Prevent moving to the next step if validation fails
            }

            $('#selectedPurposeSummary').text($('input[name="purpose"]:checked').val());
            //... (rest of your existing code)

            // Update selected cars summary
            var numCars = parseInt(sessionStorage.getItem('numCars')) || 1;

            // Update selected cars summary
            var selectedCarsDiv = $('#selectedCarsSummary');
            selectedCarsDiv.empty(); // Clear existing content

            for (var i = 1; i <= numCars; i++) {
                var carMake = $('input[name="carMake[]"][data-carid="' + i + '"]').val();
                var carModel = $('input[name="carModel[]"][data-carid="' + i + '"]').val();

                var carSummary = $('<p>').text('Car ' + i + ': ' + carMake + ' ' + carModel);
                selectedCarsDiv.append(carSummary);
            }
        } else {
            steps.classList.remove('second-step-active', 'third-step-active', 'last-step-active');
        }
    },
    onFinished: function () {
        // alert("Form successfully submitted!");
        $('#request-quote').submit();
        
        var submitButton = $(form).find('button[type="submit"]');
        submitButton.prop('disabled', true).html('Please Wait...');
    },
    labels: {
        previous: "Back",
    }
});

$('.purpose-radio-input').on('click', function (e) {
    if ($(this).prop('checked')) {
        $('#selectedpurpose').text(e.target.value);
    }
});

$('.purpose-radio-input').on('click', function (e) {
    if ($(this).prop('checked')) {
        var $selected = $('input[name="purpose"]:checked', '#request-quote');

        if ($selected.length == 0) {
            alert(false);
        } else {
            $('#wizard .actions a[href="#disabled"]')
                .attr('href', '#next')
                .removeAttr('aria-disabled')
                .text('Next') // Change the text back to original
                .removeClass('disabled')
                .css('background-color', '');

            if ($selected.val() == 'personal') {
                $('#hideifpersonal').hide();
            } else {
                $('#hideifpersonal').show();
            }
        }
    }
});

$('#username').on('change', function (e) {
    $('#enteredUsername').text(e.target.value);
});

$('#phoneNumber').on('change', function (e) {
    $('#enteredPhoneNumber').text(e.target.value);
});

$('#location').on('change', function (e) {
    $('#enteredLocation').text(e.target.value);
});

$('#zipcode').on('change', function (e) {
    $('#enteredZipcode').text(e.target.value);
});

$('#cardNumber').on('change', function (e) {
    let str = e.target.value;
    let value = new Array(str.length - 4 + 1).join('x') + str.slice(-4);
    $('#enteredCard').text(value);
});

$('#expiration').on('change', function (e) {
    $('#cardExpiration').text(e.target.value);
});

$('.btn-success').on('click', function () {
    var isSectionValid = validateSection1();

    if (isSectionValid) {
        console.log('All fields are valid. Proceed with your logic.');
        // ... (existing code)
    } else {
        console.log('Some fields are invalid. Please check.');
    }
});
