@extends('layouts.simple.master')
@section('title', 'Contact')
@section('content')
    <x-banner>
    @section('banner-title', 'Contact')
</x-banner>

<section id="get-in-touch">
    <div class="container mx-auto px-4 md:py-20 py-16">
        <div class="flex lg:flex-row flex-col-reverse items-center gap-10">
            <div data-aos="fade-right" data-aos-once="true" class="flex-1">
                <img src="/assets/images/other/get-in-touch.webp" alt="get-in-touch.webp" class="w-full">
            </div>
            <div data-aos="fade-left" data-aos-once="true" class="flex-1">
                <h1 class="text-3xl text-blue-darker font-bold mb-4">Get In Touch</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga dignissimos pariatur optio veniam
                    sit voluptatibus neque, delectus rerum laboriosam suscipit.</p>
                <div class="flex flex-col gap-6 mt-10">
                    <input type="text"
                        class="bg-yellow-dark/10 w-full px-8 py-4 outline-2 outline-yellow-dark placeholder-gray-700"
                        placeholder="Name">
                    <input type="email"
                        class="bg-yellow-dark/10 w-full px-8 py-4 outline-2 outline-yellow-dark placeholder-gray-700"
                        placeholder="Email">
                    <textarea name="comment" cols="20" rows="5"
                        class="bg-yellow-dark/10 w-full px-8 py-4 outline-2 outline-yellow-dark placeholder-gray-700" placeholder="Name"></textarea>
                    <div class="flex items gap-4">
                        <input type="checkbox" name="save" id="save"
                            class="flex-shrink-0 accent-yellow-dark h-4 w-4 mt-1">
                        <label for="save">Save my name, email, and website in this browser.</label>
                    </div>
                    <div class="btnOrder bg-yellow-dark w-fit relative">
                        <button
                            class="bg-transparent z-10 relative w-fit px-10 py-2.5 text-sm block mx-auto text-white">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="location">
    <div class="relative overflow-hidden">
        <div data-aos="zoom-in" data-aos-once="true"
            class="md:absolute top-16 left-16 max-w-2xl my-auto bg-blue-darker p-4">
            <div class="border border-white px-8 md:py-20 py-8 text-center">
                <h1 class="text-white text-xl font-bold">Contact Us</h1>
                <p class="text-white mt-2">Jalan Permadi IV, Kec. Tampan, Kota Pekanbaru, Riau, Indonesia</p>
                <div class="flex md:flex-row flex-col tems-center w-fit mx-auto gap-4 mt-4">
                    <a href="mailto:dennykunn@gmail.com"
                        class="block px-6 py-2 font-semibold rounded-full bg-white hover:bg-yellow-dark hover:text-white transition duration-500"
                        target="_blank">Mail Us</a>
                    <a href="tel:6288271230905"
                        class="block px-6 py-2 font-semibold rounded-full bg-white hover:bg-yellow-dark hover:text-white transition duration-500"
                        target="_blank">Contact Us On Whatsapp</a>
                </div>

                <h1 class="text-white text-xl font-bold mt-10">Working Days</h1>
                <p class="text-white mt-2">( Tuesday & Saturday 12pm - 2.30pm )</p>
                <p class="text-white mt-2">( Monday & Friday 4.00pm )</p>
                <p class="text-white mt-2">( Wednesday & Thursday 3.30pm )</p>

                <a href="#"
                    class="w-fit mx-auto mt-8 block px-6 py-2 font-semibold rounded-full bg-white hover:bg-yellow-dark hover:text-white transition duration-500"
                    target="_blank">Make A Reservation</a>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4190908614129!2d101.40355126948798!3d0.48332649996949867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a9df2d269dd1%3A0xd3bc2e7453066db7!2sKos%20kosan%20Pria%20muslim!5e0!3m2!1sid!2sid!4v1696218560323!5m2!1sid!2sid"
            class="w-full md:h-[112vh] h-screen" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
@endsection
