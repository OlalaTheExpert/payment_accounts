<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Donate</title>
</head>
<style>

</style>

<body>
    <div class="container d-flex justify-content-center mt-20">

        <div class="header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 justify-content-center">
            <center>
                <span class="mt-20">Select donation method</span>
            </center>
        </div>
        <div class=" row col-xl-6 col-lg-6 col-md-12 col-sm-12 col-6">
            <div class="tab-vertical">
                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-vertical-tab" data-toggle="tab" href="#home-vertical" role="tab" aria-controls="home" aria-selected="true"><img src="imgs/mpesa1.png" width="70"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="airtel-vertical-tab" data-toggle="tab" href="#airtel-vertical" role="tab" aria-controls="airtel" aria-selected="false"><img src="imgs/airtel1.png" width="70"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="telkom-vertical-tab" data-toggle="tab" href="#telkom-vertical" role="tab" aria-controls="telkom" aria-selected="false"><img src="imgs/telkom.png" width="70"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="equitel-vertical-tab" data-toggle="tab" href="#equitel-vertical" role="tab" aria-controls="contact" aria-selected="false"><img src="imgs/Equitel.png" width="70"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="visa-vertical-tab" data-toggle="tab" href="#visa-vertical" role="tab" aria-controls="contact" aria-selected="false"><img src="imgs/p.png" width="30">/<img src="imgs/visa2.png" width="70"></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" id="paypal-vertical-tab" data-toggle="tab" href="#paypal-vertical" role="tab" aria-controls="paypal" aria-selected="false"><img src="imgs/PayPal2.png" width="90"></a>
                    </li> -->
                </ul>

                <div class="tab-content" id="myTabContent3">
                    <div class="tab-pane fade show active" id="home-vertical" role="tabpanel" aria-labelledby="home-vertical-tab">
                        <center> <img src="imgs/mpesa1.png" width="150"><br>



                            <div class="tab">
                                <button class="tablinks " onclick="openCity(event, 'London')" id="defaultOpen">400</button>
                                <button class="tablinks " onclick="openCity(event, 'Paris')">1,000</button>
                                <button class="tablinks " onclick="openCity(event, 'Tokyo')">5,000</button>
                            </div>

                            <div id="London" class="tabcontent">

                                <!-- <label class="sr-only " for="inlineFormInputGroupUsername2">Enter Amount in KES </label> -->
                                <div class="input-group mb-2 mr-sm-2 ">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">KES </div>
                                    </div>
                                    <input type="number" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Amount in KES" value="400">
                                </div>

                            </div>

                            <div id="Paris" class="tabcontent">
                                <div class="input-group mb-2 mr-sm-2 ">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">KES </div>
                                    </div>
                                    <input type="number" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Amount in KES" value="1000">
                                </div>
                            </div>

                            <div id="Tokyo" class="tabcontent">
                                <div class="input-group mb-2 mr-sm-2 ">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">KES </div>
                                    </div>
                                    <input type="number" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Amount in KES" value="5000">
                                </div>
                            </div>
                        </center>
                        <center>


                            <button class="donate " id="£">DONATE NOW</button>
                            <div class="cont">
                                <p>DIAL: *483*57*53498#<br> PAYBILL: 891300<br> ACCOUNT: 53498</p>
                            </div>
                        </center>
                        <script>
                            function openCity(evt, cityName) {
                                var i, tabcontent, tablinks;
                                tabcontent = document.getElementsByClassName("tabcontent");
                                for (i = 0; i < tabcontent.length; i++) {
                                    tabcontent[i].style.display = "none";
                                }
                                tablinks = document.getElementsByClassName("tablinks");
                                for (i = 0; i < tablinks.length; i++) {
                                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                                }
                                document.getElementById(cityName).style.display = "block";
                                evt.currentTarget.className += " active";
                            }

                            // Get the element with id="defaultOpen" and click on it
                            document.getElementById("defaultOpen").click();
                        </script>




                    </div>
                    <div class="tab-pane fade" id="airtel-vertical" role="tabpanel" aria-labelledby="airtel-vertical-tab">
                        <!-- <h3>Tab Content 1</h3> -->
                        <center> <img src="imgs/airtel1.png" width="200"></center>
                        <div class="cont">
                            <center>
                                <p>Business Name: MCHANGA</p>
                                <p>Reference: 52425</p>
                            </center>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="telkom-vertical" role="tabpanel" aria-labelledby="telkom-vertical-tab">
                        <!-- <h3>Tab Heading</h3> -->
                        <center> <img src="imgs/telkom.png" width="200">
                            <div class="cont">

                                <p>DIAL: *160*2*1#</p>
                                <p> PAYBILL: 891300</p>
                                <p> ACCOUNT: 52425</p>


                            </div>
                        </center>
                    </div>
                    <div class="tab-pane fade" id="equitel-vertical" role="tabpanel" aria-labelledby="equitel-vertical-tab">
                        <!-- <h3>Tab Heading</h3> -->
                        <center> <img src="imgs/Equitel.png" width="200">
                            <div class="cont">

                                <p>Business Name: MCHANGA</p>
                                <p>Reference: 52425</p>

                            </div>
                        </center>
                    </div>
                    <div class="tab-pane fade" id="visa-vertical" role="tabpanel" aria-labelledby="equitel-vertical-tab">
                        <!-- <h3>Tab Heading</h3> -->
                        <center> <img src="imgs/PayPal2.png" width="200"> <br><img src="imgs/visa2.png" width="200">
                            <div id="smart-button-container">
                                <div style="text-align: center"><label for="description"> </label><input type="hidden" name="descriptionInput" id="description" maxlength="127" value="Treasure Foundation Donations"></div>
                                <p id="descriptionError" style="visibility: hidden; color:red; text-align: center;">Please enter a description</p>

                                <div class="input-group mb-2 mr-sm-2 ">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Amount(USD):</div>
                                    </div>
                                    <input type="number" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Amount in USD" name="amountInput" type="number" id="amount" value="">


                                </div>
                                <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a price</p>
                                <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value=""></div>
                                <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
                                <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
                            </div>
                            <script src="https://www.paypal.com/sdk/js?client-id=AQScFTrdl0neXo-GDwhqt-cMONGG7p4D91ia8VCSRP4X1wmY4xlpEjIdCR4-WOM_F0gsBj0X2dcU6d0A&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
                            <script>
                                function initPayPalButton() {
                                    var description = document.querySelector('#smart-button-container #description');
                                    var amount = document.querySelector('#smart-button-container #amount');
                                    var descriptionError = document.querySelector('#smart-button-container #descriptionError');
                                    var priceError = document.querySelector('#smart-button-container #priceLabelError');
                                    var invoiceid = document.querySelector('#smart-button-container #invoiceid');
                                    var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
                                    var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');

                                    var elArr = [description, amount];

                                    if (invoiceidDiv.firstChild.innerHTML.length > 1) {
                                        invoiceidDiv.style.display = "block";
                                    }

                                    var purchase_units = [{
                                        "amount": {
                                            "currency_code": "USD",
                                            "value": 1,
                                            "breakdown": {
                                                "item_total": {
                                                    "currency_code": "USD",
                                                    "value": 1
                                                }
                                            }
                                        },
                                        "items": [{
                                            "name": "item name",
                                            "unit_amount": {
                                                "currency_code": "USD",
                                                "value": 1
                                            },
                                            "quantity": "1",
                                            "category": "DONATION"
                                        }]
                                    }]

                                    function validate(event) {
                                        return event.value.length > 0;
                                    }

                                    paypal.Buttons({
                                        style: {
                                            color: 'gold',
                                            shape: 'pill',
                                            label: 'donate',
                                            layout: 'vertical',

                                        },

                                        onInit: function(data, actions) {
                                            actions.disable();

                                            if (invoiceidDiv.style.display === "block") {
                                                elArr.push(invoiceid);
                                            }

                                            elArr.forEach(function(item) {
                                                item.addEventListener('keyup', function(event) {
                                                    var result = elArr.every(validate);
                                                    if (result) {
                                                        actions.enable();
                                                    } else {
                                                        actions.disable();
                                                    }
                                                });
                                            });
                                        },

                                        onClick: function() {
                                            if (description.value.length < 1) {
                                                descriptionError.style.visibility = "visible";
                                            } else {
                                                descriptionError.style.visibility = "hidden";
                                            }

                                            if (amount.value.length < 1) {
                                                priceError.style.visibility = "visible";
                                            } else {
                                                priceError.style.visibility = "hidden";
                                            }

                                            if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
                                                invoiceidError.style.visibility = "visible";
                                            } else {
                                                invoiceidError.style.visibility = "hidden";
                                            }

                                            purchase_units[0].description = description.value;
                                            purchase_units[0].amount.value = amount.value;
                                            purchase_units[0].amount.breakdown.item_total.value = amount.value;
                                            purchase_units[0].items[0].unit_amount.value = amount.value;

                                            if (invoiceid.value !== '') {
                                                purchase_units[0].invoice_id = invoiceid.value;
                                            }
                                        },

                                        createOrder: function(data, actions) {
                                            return actions.order.create({
                                                purchase_units: purchase_units,
                                            });
                                        },

                                        onApprove: function(data, actions) {
                                            return actions.order.capture().then(function(orderData) {

                                                // Full available details
                                                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                                // Show a success message within this page, e.g.
                                                const element = document.getElementById('paypal-button-container');
                                                element.innerHTML = '';
                                                element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                                // Or go to another URL:  actions.redirect('thank_you.html');

                                            });
                                        },

                                        onError: function(err) {
                                            console.log(err);
                                        }
                                    }).render('#paypal-button-container');
                                }
                                initPayPalButton();
                            </script>
                        </center>
                    </div>
                    <div class="tab-pane fade" id="paypal-vertical" role="tabpanel" aria-labelledby="paypal-vertical-tab">
                        <!-- <h3>Tab Heading</h3> -->
                        <center> <img src="imgs/PayPal2.png" width="200">

                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center ">
        <p>Made with <a href="https://olalatheexpert.github.io" target="_blank">Treasure Foundation Donation</a> by Creative Olala</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>