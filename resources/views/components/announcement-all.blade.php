<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">

    <p class=" text-gray-500 dark:text-gray-400 leading-relaxed">
        Selamat datang di fasilitas layanan kemahasiswaan Universitas Bina Sarana Informatika. Fasilitas ini merupakan salah satu bentuk pelayanan dari pihak pengelola UBSI dalam menyediakan informasi akademik kemahasiswaan, dan diharapkan seluruh mahasiswa UBSI yang masih aktif dapat memperoleh informasi tersebut dengan mudah melalui fasilitas ini.
    </p>

</div>

<div>
    <div class="p-6 lg:p-8">
        @for ($i = 0; $i < 20; $i++)
        <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 py-2 lg:py-4">
            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                    <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                        <a href="#">Pengumuman Terbaru {{ $i + 1 }}</a>
                    </h2>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
