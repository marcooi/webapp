<?php

use App\ChartOfAccountCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChartOfAccountCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChartOfAccountCategory::Truncate();

        $coas = [
            ['no_kategori' => '1', 'nama_kategori' => 'Akun Piutang'],
            ['no_kategori' => '2', 'nama_kategori' => 'Aktiva Lancar Lainnya'],
            ['no_kategori' => '3', 'nama_kategori' => 'Kas & Bank'],
            ['no_kategori' => '4', 'nama_kategori' => 'Persediaan'],
            ['no_kategori' => '5', 'nama_kategori' => 'Aktiva Tetap'],
            ['no_kategori' => '6', 'nama_kategori' => 'Aktiva Lainnya'],
            ['no_kategori' => '7', 'nama_kategori' => 'Depresiasi & Amortisasi'],
            ['no_kategori' => '8', 'nama_kategori' => 'Akun Hutang'],
           
            ['no_kategori' => '10', 'nama_kategori' => 'Kewajiban Lancar Lainnya'],
            ['no_kategori' => '11', 'nama_kategori' => 'Kewajiban Jangka Panjang'],
            ['no_kategori' => '12', 'nama_kategori' => 'Ekuitas'],
            ['no_kategori' => '13', 'nama_kategori' => 'Pendapatan'],
            ['no_kategori' => '14', 'nama_kategori' => 'Pendapatan Lainnya'],
            ['no_kategori' => '15', 'nama_kategori' => 'Harga Pokok Penjualan'],
            ['no_kategori' => '16', 'nama_kategori' => 'Beban'],
            ['no_kategori' => '17', 'nama_kategori' => 'Beban Lainnya']
        ];
       

        DB::table('chart_of_account_categories')->insert($coas);


    }
}
