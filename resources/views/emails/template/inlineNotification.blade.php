<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<body style="padding: 0; margin: 0;">
    <div class="container" style="max-width: 960px; padding:0 100px;">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h1 style="font-size: 2rem; margin-bottom: 20px;text-align:center;">Welcome To Car Rentaly</h1>
                <img src="{{ asset('./images/logo-light.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid jarallax-img" src="{{ asset('images/background/14.jpg') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p style="font-size: 1.2rem;">Hi {{ $name }},</p>
                <br>
                <p style="font-size: 1rem;">
                    Thanks for joining the <strong>Car Rentaly</strong> community! We're thrilled to have you on board
                    and
                    excited to help you with all your car rental needs.
                </p>

                <h1 style="font-size: 1.7rem; font-weight: bold;">Unlock a world of possibilities:</h1>

                <p style="font-size: 1rem;">With your account, you can:</p>

                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 5px;">Browse and reserve a wide variety of rental cars to suit any
                        adventure, from compact city cars to spacious SUVs.</li>
                    <li style="margin-bottom: 5px;">Manage your reservations effortlessly, review past rentals, and make
                        changes to upcoming trips – all at your fingertips.</li>
                    <li style="margin-bottom: 5px;">Be the first to know about exclusive discounts and special offers to
                        save on your next rental.</li>
                </ul>

                <h1 style="font-size: 1.7rem; font-weight: bold;">Get started easily:</h1>

                <p style="font-size: 1rem;">
                    To get cruising as soon as possible, take a quick look at our extensive fleet of rental cars
                    <br>
                    <br>
                </p>
                <a href="{{ url('http://127.0.0.1:8000/car') }}" class="btn btn-danger text-center"
                    style="background-color: red; color: white; padding: 10px 20px;">Click To Order</a>


                <h1 style="font-size: 1.5rem;">We've got you covered:</h1>

                <p style="font-size: 1rem;">
                    For your peace of mind, we recommend reviewing our rental agreement to familiarize yourself with our
                    terms and conditions. Our FAQ page also has answers to most commonly asked questions.
                </p>

                <h2 style="font-size: 1.3rem; font-weight: bold;">Need a helping hand?</h2>

                <p style="font-size: 1rem;">
                    Our friendly customer service team is always happy to answer any questions you might have. Feel free
                    to
                    reach out to us by email at <strong>awaissafdarcarrental@gmail.com</strong>.
                </p>

                <p style="font-size: 1rem;">Hit the road with confidence!</p>

                <p style="font-size: 1rem;">
                    We look forward to helping you make the most of your journeys.
                </p>

                <p style="font-size: 1rem; font-weight: bold;">Sincerely,</p>

                <p style="font-size: 1rem;">The Team at <strong>Car Rentaly</strong></p>
            </div>
        </div>
    </div>
</body>

</html>
