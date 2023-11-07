<div class="containery container">
    <form id="request-quote" action="{{ route('quote.store') }}" class="request-quote-form">
        
        {{-- <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="alert alert-primary text-center mb-45">
                
            </div>
        </div> --}}


        <div id="wizard">
            <h3>Business</h3>
            <section style="padding: 0px;">
                <h4 class="step-heading">Select a Consignment type </h4>
                <p class="fz-16 mb-45">Need dependable, cost effective transportation of your commodities?
                    Fill out
                    our easy Quote Request Form below to get a fast quote on your job.</p>
                <div class="purpose-radios-wrapper">
                    <div class="purpose-radio">
                        <input type="radio" name="purpose" id="branding" class="purpose-radio-input"
                            value="personal">
                        <label for="branding" class="purpose-radio-label">
                            <span class="label-icon">
                                <img src="public/web/assets/images/icons/p.svg" alt="branding" class="label-icon-default">
                                <img src="public/web/assets/images/icons/p.svg" alt="branding" class="label-icon-active">
                            </span>
                            <span class="label-text">Personal</span>
                        </label>
                    </div>
                    <div class="purpose-radio">
                        <input type="radio" name="purpose" id="mobile-design" class="purpose-radio-input"
                            value="business">
                        <label for="mobile-design" class="purpose-radio-label">
                            <span class="label-icon">
                                <img src="public/web/assets/images/icons/c.svg" alt="branding" class="label-icon-default">
                                <img src="public/web/assets/images/icons/c.svg" alt="branding" class="label-icon-active">
                            </span>
                            <span class="label-text">Cooperate/ Organisation</span>
                        </label>
                    </div>

                </div>
            </section>
            <h3>Personal</h3>
            <section style="padding: 0px;">
                <h4 class="step-heading"> Your Credentials </h4>

                <div class="row mb-30">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <hr class="mt-0 mb-30">
                    </div><!-- /.col-lg-12 -->
                    <!-- /.col-lg-12 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input name="fname" required type="text" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input name="lname" required type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input name="email" required type="email" class="form-control" placeholder="Email">
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input name="tel" required type="tel" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input name="address" required type="text" class="form-control"
                                placeholder="Your Address">
                        </div>
                    </div>
                    <div id="hideifpersonal" class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input name="companyname" id="companyname" required type="text" class="form-control"
                                placeholder="Company Name">
                        </div>
                    </div><!-- /.col-lg-12 -->
                    <!-- /.col-lg-4 -->
                </div><!-- /.row -->

            </section>
            <h3>Consignment Details</h3>
            <section style="padding: 0px;">
                <div id="single_CN" class="row mb-10">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4 class="step-heading form__title">Consignment To Be Delivered</h4>
                        <hr class="mt-0 mb-30">
                    </div><!-- /.col-lg-12 -->

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h5 class="form__title">Select Number of vehicles</h5>
                        <div class="form-group">
                            <select name="numCars" id="numCarsSelect" class="form-control">
                                <option required="required" selected disabled="disabled">Select Number of vehicles
                                </option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                        </div>
                    </div><!-- /.col-lg-4 -->

                    <div id="carDetails">
                        <!-- This div will be dynamically populated based on the number of cars selected -->
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <button type="button" class="btn btn-success" onclick="addCar()">Add Car</button>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <br>
                        <div class="form-group">
                            <textarea name="message" type="text-field" class="form-control" placeholder="Any message"></textarea>
                        </div>
                    </div>
                </div>
            </section>

            <script>
                // Load number of cars from sessionStorage or set default to 1
                var numCars = parseInt(sessionStorage.getItem('numCars')) || 1;

                // Set initial value for numCarsSelect
                document.getElementById('numCarsSelect').value = numCars;

                // Load car details based on the number of cars
                generateCarDetails(numCars);

                // Add event listener for numCarsSelect
                document.getElementById('numCarsSelect').addEventListener('change', function() {
                    numCars = parseInt(this.value);

                    // Store the updated value in sessionStorage
                    sessionStorage.setItem('numCars', numCars);

                    // Generate car details based on the new number of cars
                    generateCarDetails(numCars);
                });

                function generateCarDetails(numCars) {
                    var carDetailsDiv = document.getElementById('carDetails');
                    carDetailsDiv.innerHTML = ''; // Clear existing car details

                    // Create HTML elements for each car detail
                    for (var i = 0; i < numCars; i++) {
                        var carDetailDiv = document.createElement('div');
                        var carDetailId = 'carDetail' + (i + 1);
                        // Unique ID for each car detail
                        carDetailDiv.id = carDetailId;
                        carDetailDiv.className = 'row mb-10';

                        // Add input fields for each car detail (you can customize this based on your needs)
                        carDetailDiv.innerHTML = `
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="carMake[]" placeholder="Car Make" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="carModel[]" placeholder="Car Model" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <select name="fuel[]" class="form-control">
                                    <option selected disabled>Fuel</option>
                                    <option>Petrol</option>
                                    <option>Diesel</option>
                                    <option>Electric</option>
                                    <option>Hybrid (Electric & Fuel)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <select name="transmission[]" class="form-control">
                                    <option selected disabled>Transmission</option>
                                    <option>Automatic</option>
                                    <option>Manual or CVT</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <input type="number" class="form-control" name="carYear[]" min="1900" max="2099" placeholder="Car Year" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1">
                            <button type="button" class="btn btn-danger" onclick="cancelCar('${carDetailId}')"><i class="fas fa-trash"></i></button>
                        </div>
                    `;

                        // Append the car detail div to the carDetails div
                        carDetailsDiv.appendChild(carDetailDiv);
                        void carDetailDiv.offsetWidth;
                        carDetailDiv.classList.add('open');
                    }
                }


                function addCar() {
                    numCars++;
                    sessionStorage.setItem('numCars', numCars);
                    document.getElementById('numCarsSelect').value = numCars;

                    var firstCarDetails = document.querySelector('#carDetails > .row');
                    var newCarDetails = firstCarDetails.cloneNode(true);

                    newCarDetails.querySelectorAll('input, select').forEach(function(element) {
                        element.value = '';
                    });

                    var carDetailsDiv = document.getElementById('carDetails');
                    carDetailsDiv.appendChild(newCarDetails);
                    void newCarDetails.offsetWidth;
                    newCarDetails.classList.add('open');
                }

                function cancelCar(carDetailId) {
                    var numRemainingCars = document.querySelectorAll('#carDetails > .row').length;

                    if (numRemainingCars > 1) {
                        var carDetailDiv = document.getElementById(carDetailId);

                        if (carDetailDiv) {
                            carDetailDiv.classList.remove('open');
                            carDetailDiv.addEventListener('transitionend', function() {
                                carDetailDiv.parentNode.removeChild(carDetailDiv);

                                // Update numCars based on the remaining car details after deletion
                                numCars = document.querySelectorAll('#carDetails > .row').length;
                                sessionStorage.setItem('numCars', numCars);
                                document.getElementById('numCarsSelect').value = numCars;
                            });
                        }
                    } else {
                        alert("You cannot delete the last car.");
                    }
                }
            </script>

            <h3>Confirm Details</h3>
            <!-- Add this section after your Consignment Details section -->
            <section style="padding: 0px;">
                <h4 class="step-heading">Your Summary </h4>

                <!-- Consignment Type Summary -->
                <h6 class="font-weight-bold">Consignment type</h6> :
                <p class="mb-0"><span id="selectedPurposeSummary">Your Consignment Type</span></p>

                <!-- Personal Details Summary -->
                <h6 class="font-weight-bold0">Your Credentials</h6>
                <p class="mb-0">Name: <span id="enteredName">null</span> </p>
                <p class="mb-0">Email: <span id="enteredEmail">null</span> </p>
                <p class="mb-0">Phone: <span id="enteredPhone">null</span> </p>
                <p class="mb-0">Address: <span id="enteredAddress">null</span> </p>

                <!-- Business Details Summary -->
                <h6 class="font-weight-bold">Company Details</h6>
                <p class="mb-0">Company Name: <span id="enteredCompanyName">null</span> </p>

                <!-- Consignment Details Summary -->
                <!-- Consignment Details Summary -->
                <h6 class="font-weight-bold">Consignment Details</h6>
                <p class="mb-0">Number of Vehicles: <span id="selectedNumCars"></span></p>
                <div id="selectedCarsSummary">null</div>
                <!-- You can add more details here based on the user's input in the Consignment Details section -->

                <!-- You can add more details here based on the user's input in the Consignment Details section -->

                <!-- Terms and Conditions Summary -->
                <div class="form-check mt-4">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="termsAgreementSummary"
                            id="termsAgreementSummary" value="termsAgreed" checked>
                        I agree to the terms and conditions
                    </label>
                </div>
            </section>

        </div>
        <br>

    </form>

</div>
