<x-layout> 
         {{-- Cara memanggil slot $title yang telah dibuat --}}
        <x-slot:title>
            Contact
        </x-slot:title>
        <h1>Halaman Blog</h1>
        <script src="https://cdn.tailwindcss.com"></script>
        <section class="container mx-auto px-4 py-8">

            <h2 class="text-2xl font-bold mb-4">Blog</h2>

            <div class="space-y-4">

                <!-- Post 1 -->
                <div class="bg-white p-4 border rounded">
                    <h3 class="text-lg font-semibold">Judul Postingan 1</h3>
                    <p class="text-sm text-gray-600">Deskripsi singkat postingan pertama.</p>
                    <a href="#" class="text-blue-600 text-sm hover:underline">Read more</a>
                </div>

                <!-- Post 2 -->
                <div class="bg-white p-4 border rounded">
                    <h3 class="text-lg font-semibold">Judul Postingan 2</h3>
                    <p class="text-sm text-gray-600">Deskripsi singkat postingan kedua.</p>
                    <a href="#" class="text-blue-600 text-sm hover:underline">Read more</a>
                </div>

                <!-- Post 3 -->
                <div class="bg-white p-4 border rounded">
                    <h3 class="text-lg font-semibold">Judul Postingan 3</h3>
                    <p class="text-sm text-gray-600">Deskripsi singkat postingan ketiga.</p>
                    <a href="#" class="text-blue-600 text-sm hover:underline">Read more</a>
                </div>

            </div>

        </section>
</x-layout>