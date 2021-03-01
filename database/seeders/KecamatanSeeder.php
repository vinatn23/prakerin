<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KecamatanSeeder extends Seeder
{
    public function run()
    {
        $kecamatan = [
            ['id_kota' => 1, 'kode_kecamatan' =>'020', 'nama_kecamatan' => "Teupah Selatan"],
            ['id_kota' => 1, 'kode_kecamatan' =>'021', 'nama_kecamatan' => "Simeulue Timur"],
            ['id_kota' => 1, 'kode_kecamatan' =>'022', 'nama_kecamatan' => "Teupah Barat"],
            ['id_kota' => 1, 'kode_kecamatan' =>'023', 'nama_kecamatan' => "Teupah Tengah"],
            ['id_kota' => 1, 'kode_kecamatan' =>'024', 'nama_kecamatan' => "Simeulue Tengah"],

            ['id_kota' => 2, 'kode_kecamatan' =>'030', 'nama_kecamatan' => "Pulau Banyak"],
            ['id_kota' => 2, 'kode_kecamatan' =>'031', 'nama_kecamatan' => "Pulau Banyak Barat"],
            ['id_kota' => 2, 'kode_kecamatan' =>'032', 'nama_kecamatan' => "Singkil"],
            ['id_kota' => 2, 'kode_kecamatan' =>'033', 'nama_kecamatan' => "Singkil Utara"],
            ['id_kota' => 2, 'kode_kecamatan' =>'034', 'nama_kecamatan' => "Kuala Baru"],

            ['id_kota' => 3, 'kode_kecamatan' =>'040', 'nama_kecamatan' => "Trumon"],
            ['id_kota' => 3, 'kode_kecamatan' =>'041', 'nama_kecamatan' => "Trumon Timur"],
            ['id_kota' => 3, 'kode_kecamatan' =>'042', 'nama_kecamatan' => "Trumon Tengah"],
            ['id_kota' => 3, 'kode_kecamatan' =>'043', 'nama_kecamatan' => "Bakongan"],
            ['id_kota' => 3, 'kode_kecamatan' =>'044', 'nama_kecamatan' => "Bakongan Timur"],

            ['id_kota' => 4, 'kode_kecamatan' =>'050', 'nama_kecamatan' => "Lawe Alas"],
            ['id_kota' => 4, 'kode_kecamatan' =>'051', 'nama_kecamatan' => "Babul Rahmah"],
            ['id_kota' => 4, 'kode_kecamatan' =>'052', 'nama_kecamatan' => "Tanoh Alas"],
            ['id_kota' => 4, 'kode_kecamatan' =>'053', 'nama_kecamatan' => "Lawe Sigala-Gala"],
            ['id_kota' => 4, 'kode_kecamatan' =>'054', 'nama_kecamatan' => "Babul Makmur"],

            ['id_kota' => 5, 'kode_kecamatan' =>'060', 'nama_kecamatan' => "Serba Jadi"],
            ['id_kota' => 5, 'kode_kecamatan' =>'061', 'nama_kecamatan' => "Simpang Jernih"],
            ['id_kota' => 5, 'kode_kecamatan' =>'062', 'nama_kecamatan' => "Peunaron"],
            ['id_kota' => 5, 'kode_kecamatan' =>'063', 'nama_kecamatan' => "Birem Bayeun"],
            ['id_kota' => 5, 'kode_kecamatan' =>'064', 'nama_kecamatan' => "Rantau Selamat"],

            ['id_kota' => 6, 'kode_kecamatan' =>'070', 'nama_kecamatan' => "Linge"],
            ['id_kota' => 6, 'kode_kecamatan' =>'071', 'nama_kecamatan' => "Atu Lintang"],
            ['id_kota' => 6, 'kode_kecamatan' =>'072', 'nama_kecamatan' => "Jagong Jeget"],
            ['id_kota' => 6, 'kode_kecamatan' =>'073', 'nama_kecamatan' => "Bintang"],
            ['id_kota' => 6, 'kode_kecamatan' =>'074', 'nama_kecamatan' => "Lut Tawar"],

            ['id_kota' => 7, 'kode_kecamatan' =>'080', 'nama_kecamatan' => "Johan Pahlawan"],
            ['id_kota' => 7, 'kode_kecamatan' =>'081', 'nama_kecamatan' => "Samatiga"],
            ['id_kota' => 7, 'kode_kecamatan' =>'082', 'nama_kecamatan' => "Bubon"],
            ['id_kota' => 7, 'kode_kecamatan' =>'083', 'nama_kecamatan' => "Arongan Lambalek"],
            ['id_kota' => 7, 'kode_kecamatan' =>'084', 'nama_kecamatan' => "Woyla"],

            ['id_kota' => 8, 'kode_kecamatan' =>'090', 'nama_kecamatan' => "Lhoong"],
            ['id_kota' => 8, 'kode_kecamatan' =>'091', 'nama_kecamatan' => "Lhoknga"],
            ['id_kota' => 8, 'kode_kecamatan' =>'092', 'nama_kecamatan' => "Leupung"],
            ['id_kota' => 8, 'kode_kecamatan' =>'093', 'nama_kecamatan' => "Indrapuri"],
            ['id_kota' => 8, 'kode_kecamatan' =>'094', 'nama_kecamatan' => "Kuta Cot Glie"],

            ['id_kota' => 9, 'kode_kecamatan' =>'010', 'nama_kecamatan' => "Geumpang"],
            ['id_kota' => 9, 'kode_kecamatan' =>'011', 'nama_kecamatan' => "Mane"],
            ['id_kota' => 9, 'kode_kecamatan' =>'012', 'nama_kecamatan' => "Glumpang Tiga"],
            ['id_kota' => 9, 'kode_kecamatan' =>'013', 'nama_kecamatan' => "Glumpang Baro"],
            ['id_kota' => 9, 'kode_kecamatan' =>'014', 'nama_kecamatan' => "Mutiara"],

            ['id_kota' => 10, 'kode_kecamatan' =>'111', 'nama_kecamatan' => "Samalanga"],
            ['id_kota' => 10, 'kode_kecamatan' =>'112', 'nama_kecamatan' => "Simpang Mamplam"],
            ['id_kota' => 10, 'kode_kecamatan' =>'113', 'nama_kecamatan' => "Pandrah"],
            ['id_kota' => 10, 'kode_kecamatan' =>'114', 'nama_kecamatan' => "Jeunieb"],
            ['id_kota' => 10, 'kode_kecamatan' =>'115', 'nama_kecamatan' => "Peulimbang"],

            ['id_kota' => 11, 'kode_kecamatan' =>'116', 'nama_kecamatan' => "Sawang"],
            ['id_kota' => 11, 'kode_kecamatan' =>'117', 'nama_kecamatan' => "Nisam"],
            ['id_kota' => 11, 'kode_kecamatan' =>'118', 'nama_kecamatan' => "Nisam Antara"],
            ['id_kota' => 11, 'kode_kecamatan' =>'119', 'nama_kecamatan' => "Banda Baro"],
            ['id_kota' => 11, 'kode_kecamatan' =>'120', 'nama_kecamatan' => "Kuta Makmur"],

            ['id_kota' => 12, 'kode_kecamatan' =>'121', 'nama_kecamatan' => "Manggeng"],
            ['id_kota' => 12, 'kode_kecamatan' =>'122', 'nama_kecamatan' => "Lembah Sabil"],
            ['id_kota' => 12, 'kode_kecamatan' =>'123', 'nama_kecamatan' => "Tangan-Tangan"],
            ['id_kota' => 12, 'kode_kecamatan' =>'123', 'nama_kecamatan' => "Setia"],
            ['id_kota' => 12, 'kode_kecamatan' =>'125', 'nama_kecamatan' => "Blang Pidie"],

            ['id_kota' => 13, 'kode_kecamatan' =>'126', 'nama_kecamatan' => "Kuta Panjang"],
            ['id_kota' => 13, 'kode_kecamatan' =>'127', 'nama_kecamatan' => "Blang Jerango"],
            ['id_kota' => 13, 'kode_kecamatan' =>'128', 'nama_kecamatan' => "Blangkejeren"],
            ['id_kota' => 13, 'kode_kecamatan' =>'129', 'nama_kecamatan' => "Putri Betung"],
            ['id_kota' => 13, 'kode_kecamatan' =>'130', 'nama_kecamatan' => "Dabun Gelang"],

            ['id_kota' => 14, 'kode_kecamatan' =>'131', 'nama_kecamatan' => "Tamiang Hulu"],
            ['id_kota' => 14, 'kode_kecamatan' =>'132', 'nama_kecamatan' => "Bandar Pusaka"],
            ['id_kota' => 14, 'kode_kecamatan' =>'133', 'nama_kecamatan' => "Kejuruan Muda"],
            ['id_kota' => 14, 'kode_kecamatan' =>'134', 'nama_kecamatan' => "Tenggulun"],
            ['id_kota' => 14, 'kode_kecamatan' =>'135', 'nama_kecamatan' => "Rantau"],

            ['id_kota' => 15, 'kode_kecamatan' =>'136', 'nama_kecamatan' => "Darul Makmur"],
            ['id_kota' => 15, 'kode_kecamatan' =>'137', 'nama_kecamatan' => "Tripa Makmur"],
            ['id_kota' => 15, 'kode_kecamatan' =>'138', 'nama_kecamatan' => "Kuala"],
            ['id_kota' => 15, 'kode_kecamatan' =>'139', 'nama_kecamatan' => "Kuala Pesisir"],
            ['id_kota' => 15, 'kode_kecamatan' =>'140', 'nama_kecamatan' => "Tadu Raya"],

            ['id_kota' => 16, 'kode_kecamatan' =>'141', 'nama_kecamatan' => "Teunom"],
            ['id_kota' => 16, 'kode_kecamatan' =>'142', 'nama_kecamatan' => "Pasie Raya"],
            ['id_kota' => 16, 'kode_kecamatan' =>'143', 'nama_kecamatan' => "Panga"],
            ['id_kota' => 16, 'kode_kecamatan' =>'144', 'nama_kecamatan' => "Krueng Sabee"],
            ['id_kota' => 16, 'kode_kecamatan' =>'145', 'nama_kecamatan' => "Setia Bakti"],

            ['id_kota' => 17, 'kode_kecamatan' =>'146', 'nama_kecamatan' => "Timang Gajah"],
            ['id_kota' => 17, 'kode_kecamatan' =>'147', 'nama_kecamatan' => "Gajah Putih"],
            ['id_kota' => 17, 'kode_kecamatan' =>'148', 'nama_kecamatan' => "Pintu Rime Gayo"],
            ['id_kota' => 17, 'kode_kecamatan' =>'149', 'nama_kecamatan' => "Bukit"],
            ['id_kota' => 17, 'kode_kecamatan' =>'150', 'nama_kecamatan' => "Wih Pesam"],

            ['id_kota' => 18, 'kode_kecamatan' =>'151', 'nama_kecamatan' => "Meureudu"],
            ['id_kota' => 18, 'kode_kecamatan' =>'152', 'nama_kecamatan' => "Meurah Dua"],
            ['id_kota' => 18, 'kode_kecamatan' =>'153', 'nama_kecamatan' => "Bandar Dua"],
            ['id_kota' => 18, 'kode_kecamatan' =>'154', 'nama_kecamatan' => "Jangka Buya"],
            ['id_kota' => 18, 'kode_kecamatan' =>'155', 'nama_kecamatan' => "Ulim"],

            ['id_kota' => 19, 'kode_kecamatan' =>'156', 'nama_kecamatan' => "Meuraxa"],
            ['id_kota' => 19, 'kode_kecamatan' =>'157', 'nama_kecamatan' => "Jaya Baru"],
            ['id_kota' => 19, 'kode_kecamatan' =>'158', 'nama_kecamatan' => "Banda Raya"],
            ['id_kota' => 19, 'kode_kecamatan' =>'159', 'nama_kecamatan' => "Baiturrahman"],
            ['id_kota' => 19, 'kode_kecamatan' =>'160', 'nama_kecamatan' => "Lueng Bata"],

            ['id_kota' => 20, 'kode_kecamatan' =>'161', 'nama_kecamatan' => "Sukajaya"],
            ['id_kota' => 20, 'kode_kecamatan' =>'162', 'nama_kecamatan' => "Sukakarya"],

            ['id_kota' => 21, 'kode_kecamatan' =>'170', 'nama_kecamatan' => "Langsa Timur"],
            ['id_kota' => 21, 'kode_kecamatan' =>'171', 'nama_kecamatan' => "Langsa Lama"],
            ['id_kota' => 21, 'kode_kecamatan' =>'172', 'nama_kecamatan' => "Langsa Barat"],
            ['id_kota' => 21, 'kode_kecamatan' =>'173', 'nama_kecamatan' => "Langsa Baro"],
            ['id_kota' => 21, 'kode_kecamatan' =>'174', 'nama_kecamatan' => "Langsa Kota"],

            ['id_kota' => 22, 'kode_kecamatan' =>'180', 'nama_kecamatan' => "Blang Mangat"],
            ['id_kota' => 22, 'kode_kecamatan' =>'181', 'nama_kecamatan' => "Muara Dua"],
            ['id_kota' => 22, 'kode_kecamatan' =>'182', 'nama_kecamatan' => "Muara Satu"],
            ['id_kota' => 22, 'kode_kecamatan' =>'183', 'nama_kecamatan' => "Banda Sakti"],

            ['id_kota' => 23, 'kode_kecamatan' =>'190', 'nama_kecamatan' => "Simpang Kiri"],
            ['id_kota' => 23, 'kode_kecamatan' =>'191', 'nama_kecamatan' => "Penanggalan"],
            ['id_kota' => 23, 'kode_kecamatan' =>'192', 'nama_kecamatan' => "Rundeng"],
            ['id_kota' => 23, 'kode_kecamatan' =>'193', 'nama_kecamatan' => "Sultan Daulat"],
            ['id_kota' => 23, 'kode_kecamatan' =>'194', 'nama_kecamatan' => "Longkib"],

            ['id_kota' => 24, 'kode_kecamatan' =>'195', 'nama_kecamatan' => "Idano Gawo"],
            ['id_kota' => 24, 'kode_kecamatan' =>'196', 'nama_kecamatan' => "Bawolato"],
            ['id_kota' => 24, 'kode_kecamatan' =>'197', 'nama_kecamatan' => "Ulugawo"],
            ['id_kota' => 24, 'kode_kecamatan' =>'198', 'nama_kecamatan' => "Gido"],
            ['id_kota' => 24, 'kode_kecamatan' =>'199', 'nama_kecamatan' => "Sogaeadu"],

            ['id_kota' => 25, 'kode_kecamatan' =>'200', 'nama_kecamatan' => "Batahan"],
            ['id_kota' => 25, 'kode_kecamatan' =>'201', 'nama_kecamatan' => "Sinunukan"],
            ['id_kota' => 25, 'kode_kecamatan' =>'202', 'nama_kecamatan' => "Batang Natal"],
            ['id_kota' => 25, 'kode_kecamatan' =>'203', 'nama_kecamatan' => "Lingga Bayu"],
            ['id_kota' => 25, 'kode_kecamatan' =>'204', 'nama_kecamatan' => "Ranto Baek"]

        ];
        DB::table('kecamatans')->insert($kecamatan);
    }
}