<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['id' => 1, 'slug' => 'wireless-earbuds', 'name' => 'Wireless Earbuds', 'price' => 750000, 'description' => 'Rasakan kebebasan tanpa kabel dengan kualitas suara tinggi.', 'rating' => 4.8, 'sold' => '1rb+', 'store' => 'AudioPhile'],
                ['id' => 2, 'slug' => 'gaming-mouse', 'name' => 'Gaming Mouse', 'price' => 950000, 'description' => 'Mouse gaming dengan pencahayaan RGB dan 16000 DPI untuk presisi maksimal.', 'rating' => 4.9, 'sold' => '2rb+', 'store' => 'GamerZone'],
                ['id' => 3, 'slug' => 'mechanical-keyboard', 'name' => 'Mechanical Keyboard', 'price' => 1250000, 'description' => 'Keyboard mekanik dengan blue switches yang memberikan sensasi mengetik yang menyenangkan.', 'rating' => 4.7, 'sold' => '500+', 'store' => 'TypeFast'],
                ['id' => 4, 'slug' => '4k-webcam', 'name' => '4K Webcam', 'price' => 1150000, 'description' => 'Webcam dengan resolusi 4K untuk pengalaman streaming yang jernih.', 'rating' => 4.8, 'sold' => '750+', 'store' => 'StreamPro'],
                ['id' => 5, 'slug' => 'ultrawide-monitor', 'name' => 'Ultrawide Monitor', 'price' => 4750000, 'description' => 'Monitor 34 inci yang memberikan pengalaman visual imersif.', 'rating' => 4.9, 'sold' => '300+', 'store' => 'VisionMax'],
                ['id' => 6, 'slug' => 'ergonomic-chair', 'name' => 'Ergonomic Chair', 'price' => 1600000, 'description' => 'Kursi ergonomis yang nyaman untuk bekerja dalam waktu lama.', 'rating' => 4.6, 'sold' => '400+', 'store' => 'ComfySit'],
                ['id' => 7, 'slug' => 'laptop-stand', 'name' => 'Laptop Stand', 'price' => 320000, 'description' => 'Stand laptop dari aluminium yang bisa diatur ketinggiannya.', 'rating' => 4.9, 'sold' => '3rb+', 'store' => 'DeskSetup'],
                ['id' => 8, 'slug' => 'usb-c-hub', 'name' => 'USB-C Hub', 'price' => 280000, 'description' => 'Adaptor USB-C 7-in-1 yang lengkap dan praktis.', 'rating' => 4.7, 'sold' => '5rb+', 'store' => 'ConnectAll'],
                ['id' => 9, 'slug' => 'smart-watch', 'name' => 'Smart Watch', 'price' => 1100000, 'description' => 'Jam tangan pintar untuk memantau kebugaran dan kesehatan Anda.', 'rating' => 4.8, 'sold' => '1rb+', 'store' => 'WearableTech'],
                ['id' => 10, 'slug' => 'bluetooth-speaker', 'name' => 'Bluetooth Speaker', 'price' => 580000, 'description' => 'Speaker portabel dengan bass yang dalam.', 'rating' => 4.9, 'sold' => '900+', 'store' => 'SoundWave'],
                ['id' => 11, 'slug' => 'graphics-tablet', 'name' => 'Graphics Tablet', 'price' => 900000, 'description' => 'Tablet grafis ideal untuk seniman digital.', 'rating' => 4.7, 'sold' => '250+', 'store' => 'ArtPad'],
                ['id' => 12, 'slug' => 'portable-ssd', 'name' => 'Portable SSD', 'price' => 1450000, 'description' => 'SSD portabel dengan kapasitas 1TB dan kecepatan tinggi.', 'rating' => 4.9, 'sold' => '600+', 'store' => 'DataSafe'],
                ['id' => 13, 'slug' => 'vr-headset', 'name' => 'VR Headset', 'price' => 2950000, 'description' => 'Rasakan realitas virtual dengan headset VR yang imersif.', 'rating' => 4.6, 'sold' => '150+', 'store' => 'RealityPlus'],
                ['id' => 14, 'slug' => 'noise-cancelling-headphones', 'name' => 'Noise Cancelling Headphones', 'price' => 1850000, 'description' => 'Headphone dengan fitur noise cancelling untuk kenyamanan mendengar.', 'rating' => 4.9, 'sold' => '2rb+', 'store' => 'AudioPhile'],
                ['id' => 15, 'slug' => 'smart-lamp', 'name' => 'Smart Lamp', 'price' => 420000, 'description' => 'Lampu pintar yang bisa dikontrol melalui aplikasi.', 'rating' => 4.7, 'sold' => '1rb+', 'store' => 'HomeBright'],
        ];

        foreach ($products as $product) {
            Item::create($product);
        }
    }
}
