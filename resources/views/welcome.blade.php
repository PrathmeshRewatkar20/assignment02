<x-guest-layout>
    <x-slot name="header">
        <div class="text-white p-8 transition-transform transform" style="background-color: #34495e">
            <div class="container mx-auto flex items-center justify-between">
                <div>
                    <img src="./images/logo.jpg" alt="Logo" style="max-height: 80px; max-width: 250px; border-radius:60%; height:70px; width:70px;">
                </div>
                <div class="flex items-center">
                    @auth
                        <div class="header-link-box">
                            <a href="{{ url('/admin') }}" class="header-link font-semibold hover:text-gray-300 focus:text-gray-300 focus:outline-none">
                                <button class="bg-white text-black font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">Admin</button>
                            </a>
                        </div>
                    @else
                        <div class="header-link-box">
                            <a href="{{ route('login') }}" class="header-link font-semibold hover:text-gray-300 focus:text-gray-300 focus:outline-none">
                                <button class="bg-white text-black font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
                                    Login
                                </button>
                            </a>
                        </div>
                    @if (Route::has('register'))
                            <!-- Register link -->
                            <div class="header-link-box ml-4">
                                <a href="{{ route('register') }}" class="header-link font-semibold hover:text-gray-300 focus:text-gray-300 focus:outline-none">
                                    <button class="bg-white text-black font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded">
                                        Register
                                    </button>
                                </a>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
</x-slot>

<div style="background-color: #ffffff; padding: 20px; text-align: center;">
        <div style="max-width: 600px; margin: 0 auto;">
            <h1 style="font-weight: 800; color: #000000; font-size: 2.5rem;">Welcome to Our Travel Blog!</h1>
            <p style="color: #000000; font-size: 1.2rem; white-space: nowrap;">Explore the beauty of the world through our travel experiences and stories.</p>
       </div>
</div><br>


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 ">

        <div class=" p-4 rounded-lg shadow-md transition-transform transform hover:scale-105 border border-gray-400" style="background-color: #f2f2f2; padding: 10px; border-radius: 8px; color: #333;">
            <img src="./images/m11.jpg" alt="Cover" class="mb-4 rounded-lg w-full h-90 object-contain">
            <h2 class="text-2xl font-bold mb-2">Lauterbrunnen Valley,Switzerland</h2>
            <p class="text-gray-700 mb-4">Waterfall Wonderland Majesty.</p>
            <a href="#" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>
        </div>


        <div class="bg-green-100 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105 border border-gray-400" style="background-color: #f2f2f2; padding: 10px; border-radius: 8px; color: #333;">
            <img src="./images/m2.jpg" alt="Cover" class="mb-4 rounded-lg w-full h-90 object-contain">
            <h2 class="text-2xl font-bold mb-2 ">Great Wall of China</h2>
            <p class="text-gray-700 mb-4">Ancient defensive marvel.</p>
            <a href="#" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>
        </div>

        <div class="bg-green-100 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105 border border-gray-400" style="background-color: #f2f2f2; padding: 10px; border-radius: 8px; color: #333;">
            <img src="./images/m3.jpg" alt="Cover" class="mb-4 rounded-lg w-full h-90 object-contain">
            <h2 class="text-2xl font-bold mb-2 ">Byodo-in Temple,Japan</h2>
            <p class="text-gray-700 mb-4">Phoenix Hall Tranquility.</p>
            <a href="#" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>
        </div>


        <div class="bg-green-100 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105 border border-gray-400" style="background-color: #f2f2f2; padding: 10px; border-radius: 8px; color: #333;">
            <img src="./images/m4.jpg" alt="Cover" class="mb-4 rounded-lg w-full h-90 object-contain">
            <h2 class="text-2xl font-bold mb-2 ">Taj Mahal,India</h2>
            <p class="text-gray-700 mb-4">Marble masterpiece, Agra.</p>
            <a href="#" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>
        </div>


        <div class="bg-green-100 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105 border border-gray-400" style="background-color: #f2f2f2; padding: 10px; border-radius: 8px; color: #333;">
            <img src="./images/m6.jpg" alt="Cover" class="mb-4 rounded-lg w-full h-90 object-contain">
            <h2 class="text-2xl font-bold mb-2 ">Vltava river,Czech Republic</h2>
            <p class="text-gray-700 mb-4">Prague's scenic flow.</p>
            <a href="#" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>
        </div>


        <div class="bg-green-100 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105 border border-gray-400" style="background-color: #f2f2f2; padding: 10px; border-radius: 8px; color: #333;">
            <img src="./images/m5.jpg" alt="Cover" class="mb-4 rounded-lg w-full h-90 object-contain">
            <h2 class="text-2xl font-bold mb-2 ">Tiger’s Nest Monastery Bhutan Hike (Paro Taktsang)</h2>
            <p class="text-gray-700 mb-4">Mountain cliff monastery.</p>
            <a href="#" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>
        </div>


        @if($posts)
                @foreach ($posts as $post)
                    <div class="bg-blue-100 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105 border border-gray-400" style="background-color: #f2f2f2; padding: 10px; border-radius: 8px; color: #333;">
                        <img src="./images/post.jpg" alt="{{ $post->title }}" class="mb-4 rounded-lg w-full h-60 object-contain">
                        <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
                        <p class="text-gray-700 mb-4">{{ $post->content }}</p>
                        <a href="{{ route('post-show', $post->id)}}" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Read Review</a>

                    </div>
                @endforeach
            @else
                <div class="p-4">No content yet, please visit after some days.</div>
        @endif
</div>
<br>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<footer style="color: white; padding: 8px; background-color: #34495e;">
    <div style="width:90%; display: flex; justify-content: space-around; margin: 0 auto;">
        <div style="width: 30%; text-align: center;padding: 1rem; ">
            <h4 style="margin-bottom: 10px; font-size: 1.6rem; font-weight: bold;">Help</h4>
            <ul style="list-style-type: none; padding-left: 0; line-height: 20px;">
            <li style="line-height: 25px;">Help Center</li>
            <li style="line-height: 25px;">Help Forum</li>

                <li style="line-height: 25px;">FAQs</li>
                <li style="line-height: 25px;">User Guides</li>
            </ul>

        </div>
        <div style="width: 20%; padding: 1rem; text-align: center;">
            <h4 style="margin-bottom: 10px; font-size: 1.6rem; font-weight: bold;">Community</h4>
            <ul style="list-style-type: none; padding-left: 0; ">
                <li style="line-height: 25px;">Blogger Buzz</li>
                <li style="line-height: 25px;" >Community Forums</li>
                <li style="line-height: 25px;">Event Calendar</li>
                <li style="line-height: 25px;">Featured Bloggers</li>
            </ul>
        </div>
        <div style="width: 30%; padding: 1rem; text-align: center;">
            <h4 style="margin-bottom: 10px; font-size: 1.6rem; font-weight: bold;">Developers</h4>
            <ul style="list-style-type: none; padding-left: 0;">
                <li style="line-height: 25px;">Blogger API</li>
                <li style="line-height: 25px;">Developer Forum</li>

            </ul>
        </div>
    </div><br><br>
        <div style="width: 100%; text-align: center;">
        <h2 style="font-size: 1.5rem; border-bottom: 1px solid white; padding-bottom: 0.5rem;">Follow Us</h2>
        <br>
        <ul style="   list-style: none; padding: 0; margin: 0; display: flex;  justify-content: center ;align-items: center; ">
            <li style="margin-right: 1rem; ">
                <a  href="https://www.facebook.com/leomessi/" style="background:#4267b2; width: 10px;  height: 10px; font-size: 16px; border-radius: 100px ; padding: 8px;"  >
                    <i class='bx bxl-facebook'></i>
                </a>
            </li>
            <li style="margin-right: 1rem;">
                <a href="https://twitter.com/WeAreMessi?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" style="background: #1da1f2 ;width: 10px;  height: 10px; font-size: 16px; border-radius: 100px ; padding: 8px; "  class="link" >
                    <i class='bx bxl-twitter'></i>
                </a>
            </li>


            <li style="margin-right: 1rem;">
                <a href="https://www.instagram.com/leomessi/?hl=en" style="background: #e1306c;width: 10px;  height: 10px; font-size: 16px; border-radius: 100px ; padding: 8px; ; "  class="link" >
                    <i class='bx bxl-instagram' ></i>
                </a>
            </li>
            <li style="margin-right: 1rem;">
                <a href="" style="background:#ff0000;width: 10px;  height: 10px; font-size: 16px; border-radius: 100px ; padding: 8px; "  class="link" >
                    <i class='bx bxl-gmail' ></i>
                </a>
            </li>
        </ul>
    </div>
    <p style="text-align: center; margin-top: 20px;">
        Terms of Service | Privacy | Content Policy
    </p>
    <p style="color: white; font-size: 0.875rem; font-weight: bold; margin-top: 0.5rem;">&copy; Made By- Prathmesh</p>
</footer>
<script>
            document.addEventListener('DOMContentLoaded', function() {
                const headerLinks = document.querySelectorAll('.header-link');

                headerLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        headerLinks.forEach(otherLink => otherLink.classList.remove('active'));
                        this.classList.add('active');
                        document.querySelector('.bg-blue-500').classList.add('clicked');
                    });
                });
            });
</script>
</x-guest-layout>
