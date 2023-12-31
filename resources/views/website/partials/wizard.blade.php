<div class="containery container">
    <form id="request-quote" action="{{ route('quote.store') }}" enctype="multipart/form-data" class="request-quote-form">
        @csrf
        <div id="successMsg" style="position: relative; justify-content:center; margin-top:25%; margin-left:15%" class="col-sm-12 col-md-6 col-lg-6 justify-content-center">
            <div class="alert alert-primary text-center">

                <p>Quote request successfully sent for processing.</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                </svg>
            </div>
        </div>


        <div id="wizard">
            <h3>Business</h3>
            <section style="padding: 0px;">
                {{-- <h4 class="step-heading">Select a Consignment type </h4>
                <p class="fz-16 mb-45">Need dependable, cost effective transportation of your commodities?
                    Fill out
                    our easy Quote Request Form below to get a fast quote on your job.</p> --}}
                    {{-- Uncomment this --}}
                {{-- <div class="purpose-radios-wrapper">
                    <div class="purpose-radio">
                        <input type="radio" name="purpose" id="branding" class="purpose-radio-input" value="personal">
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

                </div> --}}
                <div class="login-two-start ml-2 mt-4 pt-4 justify-content-center items-center items-justify-center">
                    <div class="px-2">
                        <h2>Service Unavailable.</h2>
                    </div>
                    {{-- <hr>
                    <div class="px-2 mt-5">
                        <img width="300" style="border-radius: 10px" src="https://media.istockphoto.com/id/1254331563/vector/503-service-unavailable-error-page-a-hand-drawn-vector-layout-template-of-a-broken-robot.jpg?s=612x612&w=0&k=20&c=UWnaZbhx7it5WK1VbPmQPCIPMvNeOLYZneDcu6Mdifc=" alt="">
                    </div> --}}
                </div>
            </section>
            
            <h3>Personal</h3>
            <section style="padding: 0px;">
                {{-- <h4 class="step-heading"> Your Credentials </h4> --}}

                <div class="row mb-0">
                    {{-- <div class="col-sm-12 col-md-12 col-lg-12">
                        <hr class="mt-0 mb-30">
                    </div><!-- /.col-lg-12 --> --}}
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
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input name="email" required type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
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
                            <input name="companyname" id="companyname" required type="text" class="form-control" placeholder="Company Name">
                        </div>
                    </div>
                </div>
            </section>

            <h3>Consignment</h3>
            <section style="padding: 0px;">
                <div id="single_CN2" class="mb-3 col-xxl-12 col-xl-12">
                    {{-- <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4 class="step-heading form__title">Consignment To Be Delivered</h4>
                        <hr class="mt-0 mb-30">
                    </div> --}}
                    <div class="row px-3">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <h5 class="form__title" style="font-size:12px; color:white">Service Type</h5>
                            <div class="form-group">
                                <select name="service_type" id="service_type" class="form-control" onchange="populatePaymentMethod()">
                                    <option required="required" selected disabled="disabled">
                                        --select--
                                    </option>
                                    <option value="importing vehicle">Importing Vehicle</option>
                                    <option value="clearing & forwarding">Clearing & Forwarding</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <h5 class="form__title" style="font-size:12px; color:white">Payment Method</h5>
                            <div class="form-group">
                                <select name="payMethod" id="payMethod" class="form-control">
                                    <option required="required" selected disabled="disabled">
                                        --select--
                                    </option>
                                    {{-- Populate here --}}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="installmentDurationView" class="col-sm-12 col-md-12 col-lg-12">
                        <h5 class="form__title" style="font-size:12px; color:white">Installment Duration</h5>
                        <div class="form-group">
                            <select name="installment_duration" id="installment_duration" class="form-control">
                                <option required="required" selected disabled="disabled">
                                    --select--
                                </option>
                                <option value="6">6 months</option>
                                <option value="12">12 months</option>
                                <option value="18">18 months</option>
                                <option value="24">24 months</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h5 class="form__title" style="font-size:12px; color:white">What are you <span id="serviceText"></span>?</h5>
                        <div class="form-group">
                            <select name="product_type" id="product_type" class="form-control">
                                <option required="required" selected disabled="disabled">
                                    --select--
                                </option>
                                <option value="vehicle">Vehicle</option>
                                <option value="goods">Products/Goods</option>
                            </select>
                        </div>
                    </div>
                    <div id="clearingFrom" class="col-sm-12 col-md-12 col-lg-12">
                        <h5 class="form__title" style="font-size:12px; color:white">Where are you clearing from?</h5>
                        <div class="form-group">
                            <select name="clearing_from" id="clearing_from" class="form-control">
                                <option required="required" selected disabled="disabled">
                                    --select--
                                </option>
                                <option value="At the Border">At the border</option>
                                <option value="At the Port">At the port</option>
                                <option value="Both">Both at port and border (full)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h5 class="form__title" style="font-size:12px; color:white">Where are you delivering to? (Address)</h5>
                        <div class="form-group">
                            <input type="text" name="delivering_from" id="delivery_from" class="form-control">
                                {{-- <option required="required" selected disabled="disabled">
                                    --select--
                                </option>
                                <option value="Port to Border">Port to Border</option>
                                <option value="Border to Final Delivery">Border to Final Delivery</option>
                                <option value="Port to Final Delivery">Port to Final Delivery</option>
                            </input> --}}
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h5 class="form__title" style="font-size:12px; color:white">Delivery Town</h5>
                        <div class="form-group">
                            <input name="delivery_town" id="delivery_town" type="text" class="form-control" placeholder="Delivery Town">
                        </div>
                    </div>

                    <div id="invoiceUploading" class="col-sm-12 col-md-12 col-lg-12">
                        <h5 class="form__title" style="font-size:12px; color:white">Upload invoice file or picture</h5>
                        <div class="form-group">
                            <input type="file" name="invoice" id="imageInput">
                        </div>
                    </div>
                </div>
            </section>
            
            <h3>Consignment Details</h3>
            <section style="padding: 0px;">
                <div id="single_CN" class="row mb-10">
                    {{-- <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4 class="step-heading form__title">Consignment To Be Delivered</h4>
                        <hr class="mt-0 mb-30">
                    </div> --}}

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-row justify-content-center; pt-3" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;background-color:rgb(165, 64, 18), 165, 15); gap: 4%; justify-content:center; align-items:center;">
                            <div class="form-group pt-3">
                                <h5 class="form__title" style="font-size:12px; color:white">
                                    Select Number of vehicles<br> 
                                    <span id="serviceText1"></span>
                                </h5>
                            </div>
                            <div class="form-group">
                                <select name="numCars" id="numCarsSelect" class="form-control">
                                    <option required="required" selected disabled="disabled">Select Number of vehicles
                                    </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- /.col-lg-4 -->

                    <div id="carDetails">
                        <!-- This div will be dynamically populated based on the number of cars selected -->
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <button style="z-index: 999; position: absolute; float:right; margin-bottom:2%" type="button" class="btn btn-success" onclick="addCar()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                            </svg>
                        </button>
                    </div>
                    <br><br><br>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        
                        <div class="form-group">
                            <textarea name="message" type="text-field" class="form-control" placeholder="Any message"></textarea>
                        </div>
                    </div>
                </div>
                <div id="goods_view" class="row mb-10">
                    {{-- <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4 class="step-heading form__title">Consignment To Be Delivered</h4>
                        <hr class="mt-0 mb-30">
                    </div> --}}

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-row justify-content-center; pt-3 mb-2" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;background-color:rgb(165, 64, 18), 165, 15); gap: 4%; justify-content:center; align-items:center;">
                            <div class="form-group pt-2">
                                <h5 class="form__title" style="font-size:12px; color:white">
                                    Select Number of Goods <br> 
                                    <span id="serviceText2"></span>
                                </h5>
                            </div>
                            <div class="form-group">
                                {{-- <input type="text" name="numGoods" id="numGoodsSelect" class="form-control" /> --}}
                                <select name="numGoods" id="numGoodsSelect" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- /.col-lg-4 -->

                    <div id="goodsDetails" class="px-3">
                        <!-- This div will be dynamically populated based on the number of cars selected -->
                    </div>


                    <div class="col-sm-12 col-md-12 col-lg-12 mb-4">
                        <button style="z-index: 999; position: absolute; float:right; margin-bottom:2%" type="button" class="btn btn-success" onclick="addGood()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                            </svg>
                        </button>
                    </div>
                    <br>
                    <br>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <textarea name="message" type="text-field" class="form-control" placeholder="Any message"></textarea>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                // Get the select element by its ID
                var serviceTypeSelect = document.getElementById("service_type");
                var serviceTextElement = document.getElementById("serviceText");
                var payMethodSelect = document.getElementById("payMethod");
                var productSelect = document.getElementById("product_type");
                var vehicleView = document.getElementById("single_CN");
                var goodsView = document.getElementById("goods_view");
                var installDurView = document.getElementById("installmentDurationView");
                var clearingFrom = document.getElementById("clearingFrom");
                var invoiceUploading = document.getElementById("invoiceUploading");
                
                // var serviceText = document.getElementById("serviceText");
                

                installDurView.style.display = 'none';
                clearingFrom.style.display = 'none';
                invoiceUploading.style.display = 'none';
                goodsView.style.display = 'none';
                serviceTextElement.textContent = "Importing";
                // serviceText.textContent = "Importing";

                // Add an event listener to the select element
                serviceTypeSelect.addEventListener("change", function () {
                    // Get the selected value
                    var selectedValue = serviceTypeSelect.value;
            
                    // You can now use the selectedValue as needed
                    if(selectedValue == 'importing vehicle'){
                        serviceTextElement.textContent = "Importing";
                        // serviceText.textContent = "Importing";
                        clearingFrom.style.display = 'none';
                        invoiceUploading.style.display = 'none';
                    }else{
                        serviceTextElement.textContent = "Clearing & Forwarding";
                        // serviceText.textContent = "Clearing & Forwarding";
                        clearingFrom.style.display = 'block';
                        invoiceUploading.style.display = 'block';
                    }
                });
                payMethodSelect.addEventListener("change", function () {
                    // Get the selected value
                    var selectedMethodValue = payMethodSelect.value;
            
                    // You can now use the selectedValue as needed
                    if(selectedMethodValue == 'full'){
                        installDurView.style.display = 'none';
                    }else{
                        installDurView.style.display = 'block';
                    }
                });
                productSelect.addEventListener("change", function () {
                    // Get the selected value
                    var selectedProductValue = productSelect.value;
            
                    // You can now use the selectedValue as needed
                    if(selectedProductValue == 'vehicle'){
                        vehicleView.style.display = 'block';
                        goodsView.style.display = 'none';
                    }else{
                        vehicleView.style.display = 'none';
                        goodsView.style.display = 'block';
                    }
                });
            </script>
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
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="carMake[]" placeholder="Car Make" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="carModel[]" placeholder="Car Model" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="carEngineCC[]" placeholder="Engine CC" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="carColor[]" placeholder="Color" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <select name="fuel[]" class="form-control">
                                    <option selected disabled>Fuel</option>
                                    <option value="Petrol">Petrol</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="Electric">Electric</option>
                                    <option value="Hybrid (Electric & Fuel)">Hybrid (Electric & Fuel)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <select name="transmission[]" class="form-control">
                                    <option selected disabled>Transmission</option>
                                    <option value="Automatic">Automatic</option>
                                    <option value="Manual or CVT">Manual or CVT</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 ">
                            <div class="form-group">
                                <input type="number" class="form-control" name="carYear[]" min="1900" max="2099" placeholder="Car Year" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1">
                            <button type="button"  class="btn btn-danger" onclick="cancelCar('${carDetailId}')"><i class="fas fa-trash"></i></button>
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
                    var carDetailDiv = document.getElementById(carDetailId);

                    if (carDetailDiv) {
                        carDetailDiv.classList.remove('open');

                        // Use a timeout to ensure the class removal takes effect before checking the length
                        setTimeout(function () {
                            carDetailDiv.parentNode.removeChild(carDetailDiv);

                            // Update numCars based on the remaining car details after deletion
                            numCars = document.querySelectorAll('#carDetails > .row').length;
                            sessionStorage.setItem('numCars', numCars);
                            document.getElementById('numCarsSelect').value = numCars;
                        }, 300); // Adjust the timeout value based on your transition duration
                    }

                    if (numRemainingCars <= 1) {
                        alert("You cannot delete the last car.");
                    }
                }

                // ---------------------------------------------------
                // GOODS --- OPERATIONS
                // ---------------------------------------------------

                // Load number of cars from sessionStorage or set default to 1
                var numGoods = parseInt(sessionStorage.getItem('numGoods')) || 1;

                // Set initial value for numCarsSelect
                document.getElementById('numGoodsSelect').value = numGoods;

                // Load car details based on the number of cars
                generateGoodsDetails(numGoods);

                // Add event listener for numCarsSelect
                document.getElementById('numGoodsSelect').addEventListener('change', function() {
                    numGoods = parseInt(this.value);

                    // Store the updated value in sessionStorage
                    sessionStorage.setItem('numGoods', numGoods);

                    // Generate car details based on the new number of cars
                    generateGoodsDetails(numGoods);
                });

                function generateGoodsDetails(numGoods) {
                    var goodsDetailsDiv = document.getElementById('goodsDetails');
                    goodsDetailsDiv.innerHTML = ''; // Clear existing car details

                    // Create HTML elements for each car detail
                    for (var i = 0; i < numGoods; i++) {
                        var goodsDetailDiv = document.createElement('div');
                        var goodsDetailId = 'goodsDetail' + (i + 1);
                        // Unique ID for each car detail
                        goodsDetailDiv.id = goodsDetailId;
                        goodsDetailDiv.className = 'row mb-5';

                        // Add input fields for each car detail (you can customize this based on your needs)
                        goodsDetailDiv.innerHTML = `
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="goodsName[]" placeholder="Product Name" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="goodsSize[]" placeholder="Weight (kg/g/ltr/tons)" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="goodsQty[]" placeholder="Qty" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <input type="text" name="packaging[]" placeholder="Other Information" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-1 col-lg-1">
                            <button type="button" class="btn btn-xs btn-danger" onclick="cancelGoods('${goodsDetailId}')"><i class="fas fa-trash"></i></button>
                        </div>
                    `;

                        // Append the car detail div to the carDetails div
                        goodsDetailsDiv.appendChild(goodsDetailDiv);
                        void goodsDetailDiv.offsetWidth;
                        goodsDetailDiv.classList.add('open');
                    }
                }


                function addGood() {
                    numGoods++;
                    sessionStorage.setItem('numGoods', numGoods);
                    document.getElementById('numGoodsSelect').value = numGoods;

                    var firstGoodsDetails = document.querySelector('#goodsDetails > .row');
                    var newGoodsDetails = firstGoodsDetails.cloneNode(true);

                    newGoodsDetails.querySelectorAll('input, select').forEach(function(element) {
                        element.value = '';
                    });

                    var goodsDetailsDiv = document.getElementById('goodsDetails');
                    goodsDetailsDiv.appendChild(newGoodsDetails);
                    void newGoodsDetails.offsetWidth;
                    newGoodsDetails.classList.add('open');
                }

                function cancelGoods(goodsDetailId) {
                    var numRemainingGoods = document.querySelectorAll('#goodsDetails > .row').length;

                    if (numRemainingGoods > 1) {
                        var goodsDetailDiv = document.getElementById(goodsDetailId);

                        if (goodsDetailDiv) {
                            goodsDetailDiv.classList.remove('open');
                            goodsDetailDiv.addEventListener('transitionend', function() {
                                goodsDetailDiv.parentNode.removeChild(goodsDetailDiv);

                                // Update numCars based on the remaining car details after deletion
                                numGoods = document.querySelectorAll('#goodsDetails > .row').length;
                                sessionStorage.setItem('numGoods', numGoods);
                                document.getElementById('numGoodsSelect').value = numGoods;
                            });
                        }
                    } else {
                        alert("You cannot delete the last Goods.");
                    }
                }
            </script>

            {{-- <h3>Confirm Details</h3>
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
            </section> --}}

        </div>
        <br>

    </form>

</div>
