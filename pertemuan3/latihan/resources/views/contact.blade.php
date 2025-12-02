<x-layout>
        {{-- Cara memanggil slot $title yang telah dibuat --}}
        <x-slot:title>
            Contact
        </x-slot:title>
        <h1>Halaman Contact</h1>

    <section class="container mx-auto px-4 py-8">

        <h2 class="text-2xl font-bold mb-4">Contact</h2>

        <div class="bg-white p-6 border rounded max-w-md">

            <form action="#" method="POST" class="space-y-4">

                <!-- Nama -->
                <div>
                    <label class="block text-sm font-medium mb-1">Nama</label>
                    <input type="text" class="w-full border px-3 py-2 rounded" placeholder="Masukkan nama Anda">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" class="w-full border px-3 py-2 rounded" placeholder="email@example.com">
                </div>

                <!-- Pesan -->
                <div>
                    <label class="block text-sm font-medium mb-1">Pesan</label>
                    <textarea class="w-full border px-3 py-2 rounded" rows="4" placeholder="Tulis pesan Anda..."></textarea>
                </div>

                <!-- Submit Button -->
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Kirim
                </button>

            </form>

        </div>

    </section>
</x-layout>