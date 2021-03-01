<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    public function run()
    {
        $kota = [
            ['kode_kota' => 1101, 'id_provinsi' => 1, 'nama_kota' => "Kabupaten Simeulue"],
            ['kode_kota' => 1102, 'id_provinsi' => 1, 'nama_kota' => "Kabupaten Aceh Singkil"],
            ['kode_kota' => 1103, 'id_provinsi' => 1, 'nama_kota' => "Kabupaten Aceh Selatan"],
            ['kode_kota' => 1104, 'id_provinsi' => 1, 'nama_kota' => "Kabupaten Aceh Tenggara"],
            ['kode_kota' => 1105, 'id_provinsi' => 1, 'nama_kota' => "Kabupaten Aceh Timur"],

            ['kode_kota' => 1201, 'id_provinsi' => 2, 'nama_kota' => "Kabupaten Nias"],
            ['kode_kota' => 1202, 'id_provinsi' => 2, 'nama_kota' => "Kabupaten Mandailing Natal"],
            ['kode_kota' => 1203, 'id_provinsi' => 2, 'nama_kota' => "Kabupaten Tapanuli Selatan"],
            ['kode_kota' => 1204, 'id_provinsi' => 2, 'nama_kota' => "Kabupaten Tapanuli Tengah"],
            ['kode_kota' => 1205, 'id_provinsi' => 2, 'nama_kota' => "Kabupaten Tapanuli Utara"],

            ['kode_kota' => 1301, 'id_provinsi' => 3, 'nama_kota' => "Kabupaten Kepulauan Mentawai"],
            ['kode_kota' => 1302, 'id_provinsi' => 3, 'nama_kota' => "Kabupaten Pesisir Selatan"],
            ['kode_kota' => 1303, 'id_provinsi' => 3, 'nama_kota' => "Kabupaten Solok"],
            ['kode_kota' => 1304, 'id_provinsi' => 3, 'nama_kota' => "Kabupaten Sijunjung"],
            ['kode_kota' => 1305, 'id_provinsi' => 3, 'nama_kota' => "Kabupaten Tanah Datar"],

			['kode_kota' => 1401, 'id_provinsi' => 4, 'nama_kota' => "Kabupaten Kuantan Singingi"],
            ['kode_kota' => 1402, 'id_provinsi' => 4, 'nama_kota' => "Kabupaten Indragiri Hulu"],
            ['kode_kota' => 1403, 'id_provinsi' => 4, 'nama_kota' => "Kabupaten Indragiri Hilir"],
            ['kode_kota' => 1404, 'id_provinsi' => 4, 'nama_kota' => "Kabupaten Pelalawan"],
            ['kode_kota' => 1405, 'id_provinsi' => 4, 'nama_kota' => "Kabupaten Siak"],

			['kode_kota' => 1501, 'id_provinsi' => 5, 'nama_kota' => "Kabupaten Kerinci"],
            ['kode_kota' => 1502, 'id_provinsi' => 5, 'nama_kota' => "Kabupaten Merangin"],
            ['kode_kota' => 1503, 'id_provinsi' => 5, 'nama_kota' => "Kabupaten Sarolangun"],
            ['kode_kota' => 1504, 'id_provinsi' => 5, 'nama_kota' => "Kabupaten Batang Hari"],
            ['kode_kota' => 1505, 'id_provinsi' => 5, 'nama_kota' => "Kabupaten Muaro Jambi"],

			['kode_kota' => 1601, 'id_provinsi' => 6, 'nama_kota' => "Kabupaten Ogan Komering Ulu"],
            ['kode_kota' => 1602, 'id_provinsi' => 6, 'nama_kota' => "Kabupaten Ogan Komering Ilir"],
            ['kode_kota' => 1603, 'id_provinsi' => 6, 'nama_kota' => "Kabupaten Muara Enim"],
            ['kode_kota' => 1604, 'id_provinsi' => 6, 'nama_kota' => "Kabupaten Lahat"],
            ['kode_kota' => 1605, 'id_provinsi' => 6, 'nama_kota' => "Kabupaten Musi Rawas"],

			['kode_kota' => 1701, 'id_provinsi' => 7, 'nama_kota' => "Kabupaten Bengkulu Selatan"],
            ['kode_kota' => 1702, 'id_provinsi' => 7, 'nama_kota' => "Kabupaten Rejang Lebong"],
            ['kode_kota' => 1703, 'id_provinsi' => 7, 'nama_kota' => "Kabupaten Bengkulu Utara"],
            ['kode_kota' => 1704, 'id_provinsi' => 7, 'nama_kota' => "Kabupaten Kaur"],
            ['kode_kota' => 1705, 'id_provinsi' => 7, 'nama_kota' => "Kabupaten Seluma"],

			['kode_kota' => 1801, 'id_provinsi' => 8, 'nama_kota' => "Kabupaten Lampung Barat"],
            ['kode_kota' => 1802, 'id_provinsi' => 8, 'nama_kota' => "Kabupaten Tanggamus"],
            ['kode_kota' => 1803, 'id_provinsi' => 8, 'nama_kota' => "Kabupaten Lampung Selatan"],
            ['kode_kota' => 1804, 'id_provinsi' => 8, 'nama_kota' => "Kabupaten Lampung Timur"],
            ['kode_kota' => 1805, 'id_provinsi' => 8, 'nama_kota' => "Kabupaten Lampung Tengah"],

			['kode_kota' => 1901, 'id_provinsi' => 9, 'nama_kota' => "Kabupaten Bangka"],
            ['kode_kota' => 1902, 'id_provinsi' => 9, 'nama_kota' => "Kabupaten Belitung"],
            ['kode_kota' => 1903, 'id_provinsi' => 9, 'nama_kota' => "Kabupaten Bangka Barat"],
            ['kode_kota' => 1904, 'id_provinsi' => 9, 'nama_kota' => "Kabupaten Bangka Tengah"],
            ['kode_kota' => 1905, 'id_provinsi' => 9, 'nama_kota' => "Kabupaten Bangka Selatan"],

            ['kode_kota' => 2101, 'id_provinsi' => 10, 'nama_kota' => "Kabupaten Karimun"],
            ['kode_kota' => 2102, 'id_provinsi' => 10, 'nama_kota' => "Kabupaten Bintan"],
            ['kode_kota' => 2103, 'id_provinsi' => 10, 'nama_kota' => "Kabupaten Natuna"],
            ['kode_kota' => 2104, 'id_provinsi' => 10, 'nama_kota' => "Kabupaten Lingga"],
            ['kode_kota' => 2105, 'id_provinsi' => 10, 'nama_kota' => "Kabupaten Kepulauan Anambas"],
            
            ['kode_kota' => 3101, 'id_provinsi' => 11, 'nama_kota' => "Kabupaten Kepulauan Seribu"],
            ['kode_kota' => 3171, 'id_provinsi' => 11, 'nama_kota' => "Kota Jakarta Selatan"],
            ['kode_kota' => 3172, 'id_provinsi' => 11, 'nama_kota' => "Kota Jakarta Timur"],
            ['kode_kota' => 3173, 'id_provinsi' => 11, 'nama_kota' => "Kota Jakarta Pusat"],
            ['kode_kota' => 3174, 'id_provinsi' => 11, 'nama_kota' => "Kota Jakarta Barat"],

            ['kode_kota' => 3201, 'id_provinsi' => 12, 'nama_kota' => "Kabupaten Bogor"],
            ['kode_kota' => 3202, 'id_provinsi' => 12, 'nama_kota' => "Kabupaten Sukabumi"],
            ['kode_kota' => 3203, 'id_provinsi' => 12, 'nama_kota' => "Kabupaten Cianjur"],
            ['kode_kota' => 3204, 'id_provinsi' => 12, 'nama_kota' => "Kabupaten Bandung"],
            ['kode_kota' => 3205, 'id_provinsi' => 12, 'nama_kota' => "Kabupaten Garut"],

            ['kode_kota' => 3301, 'id_provinsi' => 13, 'nama_kota' => "Kabupaten Cilacap"],
            ['kode_kota' => 3302, 'id_provinsi' => 13, 'nama_kota' => "Kabupaten Banyumas"],
            ['kode_kota' => 3303, 'id_provinsi' => 13, 'nama_kota' => "Kabupaten Purbalingga"],
            ['kode_kota' => 3304, 'id_provinsi' => 13, 'nama_kota' => "Kabupaten Banjarnegara"],
            ['kode_kota' => 3305, 'id_provinsi' => 13, 'nama_kota' => "Kabupaten Kebumen"],

            ['kode_kota' => 3401, 'id_provinsi' => 14, 'nama_kota' => "Kabupaten Kulon Progo"],
            ['kode_kota' => 3402, 'id_provinsi' => 14, 'nama_kota' => "Kabupaten Bantul"],
            ['kode_kota' => 3403, 'id_provinsi' => 14, 'nama_kota' => "Kabupaten Gunung Kidul"],
            ['kode_kota' => 3404, 'id_provinsi' => 14, 'nama_kota' => "Kabupaten Sleman"],
            ['kode_kota' => 3471, 'id_provinsi' => 14, 'nama_kota' => "Kota Yogyakarta"],

            ['kode_kota' => 3501, 'id_provinsi' => 15, 'nama_kota' => "Kabupaten Pacitan"],
            ['kode_kota' => 3502, 'id_provinsi' => 15, 'nama_kota' => "Kabupaten Ponorogo"],
            ['kode_kota' => 3503, 'id_provinsi' => 15, 'nama_kota' => "Kabupaten Trenggalek"],
            ['kode_kota' => 3504, 'id_provinsi' => 15, 'nama_kota' => "Kabupaten Tulungagung"],
            ['kode_kota' => 3505, 'id_provinsi' => 15, 'nama_kota' => "Kabupaten Blitar"],

            ['kode_kota' => 3601, 'id_provinsi' => 16, 'nama_kota' => "Kabupaten Pandeglang"],
            ['kode_kota' => 3602, 'id_provinsi' => 16, 'nama_kota' => "Kabupaten Lebak"],
            ['kode_kota' => 3603, 'id_provinsi' => 16, 'nama_kota' => "Kabupaten Tangerang"],
            ['kode_kota' => 3604, 'id_provinsi' => 16, 'nama_kota' => "Kabupaten Serang"],
            ['kode_kota' => 3671, 'id_provinsi' => 16, 'nama_kota' => "Kota Tangerang"],

            ['kode_kota' => 5101, 'id_provinsi' => 17, 'nama_kota' => "Kabupaten Jembrana"],
            ['kode_kota' => 5102, 'id_provinsi' => 17, 'nama_kota' => "Kabupaten Tabanan"],
            ['kode_kota' => 5103, 'id_provinsi' => 17, 'nama_kota' => "Kabupaten Badung"],
            ['kode_kota' => 5104, 'id_provinsi' => 17, 'nama_kota' => "Kabupaten Gianyar"],
            ['kode_kota' => 5105, 'id_provinsi' => 17, 'nama_kota' => "Kabupaten Klungkung"],

            ['kode_kota' => 5201, 'id_provinsi' => 18, 'nama_kota' => "Kabupaten Lombok Barat"],
            ['kode_kota' => 5202, 'id_provinsi' => 18, 'nama_kota' => "Kabupaten Lombok Tengah"],
            ['kode_kota' => 5203, 'id_provinsi' => 18, 'nama_kota' => "Kabupaten Lombok Timur"],
            ['kode_kota' => 5204, 'id_provinsi' => 18, 'nama_kota' => "Kabupaten Sumbawa"],
            ['kode_kota' => 5205, 'id_provinsi' => 18, 'nama_kota' => "Kabupaten Dompu"],

            ['kode_kota' => 5301, 'id_provinsi' => 19, 'nama_kota' => "Kabupaten Sumba Barat"],
            ['kode_kota' => 5302, 'id_provinsi' => 19, 'nama_kota' => "Kabupaten Sumba Timur"],
            ['kode_kota' => 5303, 'id_provinsi' => 19, 'nama_kota' => "Kabupaten Kupang"],
            ['kode_kota' => 5304, 'id_provinsi' => 19, 'nama_kota' => "Kabupaten Timor Tengah Selatan"],
            ['kode_kota' => 5305, 'id_provinsi' => 19, 'nama_kota' => "Kabupaten Timor Tengah Utara"],

            ['kode_kota' => 6101, 'id_provinsi' => 20, 'nama_kota' => "Kabupaten Sambas"],
            ['kode_kota' => 6102, 'id_provinsi' => 20, 'nama_kota' => "Kabupaten Bengkayang"],
            ['kode_kota' => 6103, 'id_provinsi' => 20, 'nama_kota' => "Kabupaten Landak"],
            ['kode_kota' => 6104, 'id_provinsi' => 20, 'nama_kota' => "Kabupaten Mempawah"],
            ['kode_kota' => 6105, 'id_provinsi' => 20, 'nama_kota' => "Kabupaten Sanggau"],

            ['kode_kota' => 6201, 'id_provinsi' => 21, 'nama_kota' => "Kabupaten Kotawaringin Barat"],
            ['kode_kota' => 6202, 'id_provinsi' => 21, 'nama_kota' => "Kabupaten Kotawaringin Timur"],
            ['kode_kota' => 6203, 'id_provinsi' => 21, 'nama_kota' => "Kabupaten Kapuas"],
            ['kode_kota' => 6204, 'id_provinsi' => 21, 'nama_kota' => "Kabupaten Barito Selatan"],
            ['kode_kota' => 6205, 'id_provinsi' => 21, 'nama_kota' => "Kabupaten Barito Utara"],

            ['kode_kota' => 6301, 'id_provinsi' => 22, 'nama_kota' => "Kabupaten Tanah Laut"],
            ['kode_kota' => 6302, 'id_provinsi' => 22, 'nama_kota' => "Kabupaten Kota Baru"],
            ['kode_kota' => 6303, 'id_provinsi' => 22, 'nama_kota' => "Kabupaten Banjar"],
            ['kode_kota' => 6304, 'id_provinsi' => 22, 'nama_kota' => "Kabupaten Barito Kuala"],
            ['kode_kota' => 6305, 'id_provinsi' => 22, 'nama_kota' => "Kabupaten Tapin"],

            ['kode_kota' => 6401, 'id_provinsi' => 23, 'nama_kota' => "Kabupaten Paser"],
            ['kode_kota' => 6402, 'id_provinsi' => 23, 'nama_kota' => "Kabupaten Kutai Barat"],
            ['kode_kota' => 6403, 'id_provinsi' => 23, 'nama_kota' => "Kabupaten Kutai Kartanegara"],
            ['kode_kota' => 6404, 'id_provinsi' => 23, 'nama_kota' => "Kabupaten Kutai Timur"],
            ['kode_kota' => 6405, 'id_provinsi' => 23, 'nama_kota' => "Kabupaten Berau"],

            ['kode_kota' => 6501, 'id_provinsi' => 24, 'nama_kota' => "Kabupaten Malinau"],
            ['kode_kota' => 6502, 'id_provinsi' => 24, 'nama_kota' => "Kabupaten Bulungan"],
            ['kode_kota' => 6503, 'id_provinsi' => 24, 'nama_kota' => "Kabupaten Tana Tidung"],
            ['kode_kota' => 6504, 'id_provinsi' => 24, 'nama_kota' => "Kabupaten Nunukan"],
            ['kode_kota' => 6571, 'id_provinsi' => 24, 'nama_kota' => "Kota Tarakan"],

            ['kode_kota' => 7101, 'id_provinsi' => 25, 'nama_kota' => "Kabupaten Bolaang Mongondow"],
            ['kode_kota' => 7102, 'id_provinsi' => 25, 'nama_kota' => "Kabupaten Minahasa"],
            ['kode_kota' => 7103, 'id_provinsi' => 25, 'nama_kota' => "Kabupaten Kepulauan Sangihe"],
            ['kode_kota' => 7104, 'id_provinsi' => 25, 'nama_kota' => "Kabupaten Kepulauan Talaud"],
            ['kode_kota' => 7105, 'id_provinsi' => 25, 'nama_kota' => "Kabupaten Minahasa Selatan"],

            ['kode_kota' => 7201, 'id_provinsi' => 26, 'nama_kota' => "Kabupaten Banggai Kepulauan"],
            ['kode_kota' => 7202, 'id_provinsi' => 26, 'nama_kota' => "Kabupaten Banggai"],
            ['kode_kota' => 7203, 'id_provinsi' => 26, 'nama_kota' => "Kabupaten Morowali"],
            ['kode_kota' => 7204, 'id_provinsi' => 26, 'nama_kota' => "Kabupaten Poso"],
            ['kode_kota' => 7205, 'id_provinsi' => 26, 'nama_kota' => "Kabupaten Donggala"],

            ['kode_kota' => 7301, 'id_provinsi' => 27, 'nama_kota' => "Kabupaten Kepulauan Selayar"],
            ['kode_kota' => 7302, 'id_provinsi' => 27, 'nama_kota' => "Kabupaten Bulukumba"],
            ['kode_kota' => 7303, 'id_provinsi' => 27, 'nama_kota' => "Kabupaten Bantaeng"],
            ['kode_kota' => 7304, 'id_provinsi' => 27, 'nama_kota' => "Kabupaten Jeneponto"],
            ['kode_kota' => 7305, 'id_provinsi' => 27, 'nama_kota' => "Kabupaten Takalar"],

            ['kode_kota' => 7401, 'id_provinsi' => 28, 'nama_kota' => "Kabupaten Buton"],
            ['kode_kota' => 7402, 'id_provinsi' => 28, 'nama_kota' => "Kabupaten Muna"],
            ['kode_kota' => 7403, 'id_provinsi' => 28, 'nama_kota' => "Kabupaten Konawe"],
            ['kode_kota' => 7404, 'id_provinsi' => 28, 'nama_kota' => "Kabupaten Kolaka"],
            ['kode_kota' => 7405, 'id_provinsi' => 28, 'nama_kota' => "Kabupaten Konawe Selatan"],

            ['kode_kota' => 7501, 'id_provinsi' => 29, 'nama_kota' => "Kabupaten Boalemo"],
            ['kode_kota' => 7502, 'id_provinsi' => 29, 'nama_kota' => "Kabupaten Gorontalo"],
            ['kode_kota' => 7503, 'id_provinsi' => 29, 'nama_kota' => "Kabupaten Pohuwato"],
            ['kode_kota' => 7504, 'id_provinsi' => 29, 'nama_kota' => "Kabupaten Bone Bolango"],
            ['kode_kota' => 7505, 'id_provinsi' => 29, 'nama_kota' => "Kabupaten Gorontalo Utara"],

            ['kode_kota' => 7601, 'id_provinsi' => 30, 'nama_kota' => "Kabupaten Majene"],
            ['kode_kota' => 7602, 'id_provinsi' => 30, 'nama_kota' => "Kabupaten Polewali Mandar"],
            ['kode_kota' => 7603, 'id_provinsi' => 30, 'nama_kota' => "Kabupaten Mamasa"],
            ['kode_kota' => 7604, 'id_provinsi' => 30, 'nama_kota' => "Kabupaten Mamuju"],
            ['kode_kota' => 7605, 'id_provinsi' => 30, 'nama_kota' => "Kabupaten Mamuju Utara"],

            ['kode_kota' => 8101, 'id_provinsi' => 31, 'nama_kota' => "Kabupaten Maluku Tenggara Barat"],
            ['kode_kota' => 8102, 'id_provinsi' => 31, 'nama_kota' => "Kabupaten Maluku Tenggara"],
            ['kode_kota' => 8103, 'id_provinsi' => 31, 'nama_kota' => "Kabupaten Maluku Tengah"],
            ['kode_kota' => 8104, 'id_provinsi' => 31, 'nama_kota' => "Kabupaten Buru"],
            ['kode_kota' => 8105, 'id_provinsi' => 31, 'nama_kota' => "Kabupaten Kepulauan Aru"],

            ['kode_kota' => 8201, 'id_provinsi' => 32, 'nama_kota' => "Kabupaten Halmahera Barat"],
            ['kode_kota' => 8202, 'id_provinsi' => 32, 'nama_kota' => "Kabupaten Halmahera Tengah"],
            ['kode_kota' => 8203, 'id_provinsi' => 32, 'nama_kota' => "Kabupaten Kepulauan Sula"],
            ['kode_kota' => 8204, 'id_provinsi' => 32, 'nama_kota' => "Kabupaten Halmahera Selatan"],
            ['kode_kota' => 8205, 'id_provinsi' => 32, 'nama_kota' => "Kabupaten Halmahera Utara"],

            ['kode_kota' => 9101, 'id_provinsi' => 33, 'nama_kota' => "Kabupaten Fakfak"],
            ['kode_kota' => 9102, 'id_provinsi' => 33, 'nama_kota' => "Kabupaten Kaimana"],
            ['kode_kota' => 9103, 'id_provinsi' => 33, 'nama_kota' => "Kabupaten Teluk Wondama"],
            ['kode_kota' => 9104, 'id_provinsi' => 33, 'nama_kota' => "Kabupaten Teluk Bintuni"],
            ['kode_kota' => 9105, 'id_provinsi' => 33, 'nama_kota' => "Kabupaten Manokwari"],

            ['kode_kota' => 9401, 'id_provinsi' => 34, 'nama_kota' => "Kabupaten Merauke"],
            ['kode_kota' => 9402, 'id_provinsi' => 34, 'nama_kota' => "Kabupaten Jayawijaya"],
            ['kode_kota' => 9403, 'id_provinsi' => 34, 'nama_kota' => "Kabupaten Jayapura"],
            ['kode_kota' => 9404, 'id_provinsi' => 34, 'nama_kota' => "Kabupaten Nabire"],
            ['kode_kota' => 9408, 'id_provinsi' => 34, 'nama_kota' => "Kabupaten Kepulauan Yapen"]
			
        ];
        DB::table('kotas')->insert($kota);
    }
}