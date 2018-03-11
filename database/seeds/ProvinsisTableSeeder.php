<?php

use Illuminate\Database\Seeder;

use App\Seed;

class ProvinsisTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $Provinsi = [
      array('id' => '11','nama_provinsi' => 'Aceh'),
      array('id' => '12','nama_provinsi' => 'Sumatera Utara'),
      array('id' => '13','nama_provinsi' => 'Sumatera Barat'),
      array('id' => '14','nama_provinsi' => 'Riau'),
      array('id' => '15','nama_provinsi' => 'Jambi'),
      array('id' => '16','nama_provinsi' => 'Sumatera Selatan'),
      array('id' => '17','nama_provinsi' => 'Bengkulu'),
      array('id' => '18','nama_provinsi' => 'Lampung'),
      array('id' => '19','nama_provinsi' => 'Kepulauan Bangka Belitung'),
      array('id' => '21','nama_provinsi' => 'Kepulauan Riau'),
      array('id' => '31','nama_provinsi' => 'DKI Jakarta'),
      array('id' => '32','nama_provinsi' => 'Jawa Barat'),
      array('id' => '33','nama_provinsi' => 'Jawa Tengah'),
      array('id' => '34','nama_provinsi' => 'DI Yogyakarta'),
      array('id' => '35','nama_provinsi' => 'Jawa Timur'),
      array('id' => '36','nama_provinsi' => 'Banten'),
      array('id' => '51','nama_provinsi' => 'Bali'),
      array('id' => '52','nama_provinsi' => 'Nusa Tenggara Barat'),
      array('id' => '53','nama_provinsi' => 'Nusa Tenggara Timur'),
      array('id' => '61','nama_provinsi' => 'Kalimantan Barat'),
      array('id' => '62','nama_provinsi' => 'Kalimantan Tengah'),
      array('id' => '63','nama_provinsi' => 'Kalimantan Selatan'),
      array('id' => '64','nama_provinsi' => 'Kalimantan Timur'),
      array('id' => '65','nama_provinsi' => 'Kalimantan Utara'),
      array('id' => '71','nama_provinsi' => 'Sulawesi Utara'),
      array('id' => '72','nama_provinsi' => 'Sulawesi Tengah'),
      array('id' => '73','nama_provinsi' => 'Sulawesi Selatan'),
      array('id' => '74','nama_provinsi' => 'Sulawesi Tenggara'),
      array('id' => '75','nama_provinsi' => 'Gorontalo'),
      array('id' => '76','nama_provinsi' => 'Sulawesi Barat'),
      array('id' => '81','nama_provinsi' => 'Maluku'),
      array('id' => '82','nama_provinsi' => 'Maluku Utara'),
      array('id' => '91','nama_provinsi' => 'Papua Barat'),
      array('id' => '92','nama_provinsi' => 'Papua')
    ];

    DB::table('provinsis')->insert($Provinsi);
  }
}
