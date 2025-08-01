@extends('website.layout.layout')
@section('extra_css')

@endsection
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    
    <style>
        .bg-A07E55 {
            background-color: #E7E5DC;
            /* Additional styles go here */
        }
        .map-container,
        .text-container {
            height: 550px; /* Set the desired height */
        }
    </style>
</head>

<body class="bg-white text-gray-800 text-xl">

    <div class="container mx-auto p-8">

        <section class="text-center mb-8">
            <h1 class="section-subtitle-2 label-2-0">Contact Us</h1>
            <h2 class="headline-1 section-title">Reach Us Anytime</h2>
        </section>

        <section class="flex justify-between items-start">
            <div class="w-1/2 pr-8">
                <div class="h-100 map-container" id="gmap_canvas">
                    <!-- Google Maps Embed Goes Here -->
                    <iframe width="100%" height="84%" frameborder="0" style="border: 0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.2278954856747!2d72.8793512148932!3d19.075310857045195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c63074d4ee43%3A0xf7634ce39d6871c9!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1646289722723!5m2!1sen!2sin"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="w-1/2 text-container">
                <div class="mb-4 text-#2D1E16 ">
                    <p class="mb-2">45 BC, a Latin professor at Hampden-Sydney College in Virginia</p>
                    <p class="mb-2"><span>Phone :</span> 234 9763423083</p>
                    <p class="mb-2"><span>Email :</span> vivewgf016@gmail.com</p>
                    <p class="mb-2"><span>Fax :</span> +91 91333323839</p>
                </div>

                <div class="bg-A07E55 p-8 ">
                    <h3 class="text-#2D1E16 mb-4 font-normal">Want to Know More?? Drop Us a Mail</h3>

                    <form action="">
                        <div class="flex mb-4">
                            <input class="w-1/2 mr-4 p-2 bg-white" type="text" placeholder="First Name">
                            <input class="w-1/2 p-2 bg-white" type="text" placeholder="Last Name">
                        </div>
                        <div class="flex mb-4">
                            <input class="w-1/2 mr-4 p-2 bg-white" type="email" placeholder="Email">
                            <input class="w-1/2 p-2 bg-white" type="text" placeholder="Contact Number">
                        </div>
                        <div class="mb-4">
                            <textarea class="w-full p-2 bg-white" name="textarea" cols="30" placeholder="Your message here"
                                rows="7"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <input class="p-2 bg-white text-black cursor-pointer" type="submit" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

</body>


</section>
@section('extra_js')


@endsection