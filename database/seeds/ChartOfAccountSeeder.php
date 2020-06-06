<?php

use App\ChartOfAccount;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChartOfAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChartOfAccount::Truncate();

        $coas =[
            ['no_akun' => '1000', 'nama' => 'Kas & Bank', 'tipe' => 'Kas/Bank'],
            ['no_akun' => '1000.01', 'nama' => 'Kas kecil', 'tipe' => 'Kas/Bank'],
            ['no_akun' => '1000.02', 'nama' => 'Kas Besar', 'tipe' => 'Kas/Bank'],
            ['no_akun' => '1000.03', 'nama' => 'Bank', 'tipe' => 'Kas/Bank'],
            ['no_akun' => '1000.04', 'nama' => 'Kas Transfer(Post Silang)', 'tipe' => 'Kas/Bank'],
            ['no_akun' => '1001', 'nama' => 'Deposito', 'tipe' => 'Kas/Bank'],

            ['no_akun' => '1100', 'nama' => 'Piutang', 'tipe' => 'Akun Piutang'],
            ['no_akun' => '1100.02', 'nama' => 'Uang muka pembelian', 'tipe' => 'Akun Piutang'],
            ['no_akun' => '110302', 'nama' => 'Account Receivable IDR', 'tipe' => 'Akun Piutang'],
            ['no_akun' => '110402', 'nama' => 'Advance Purchase IDR', 'tipe' => 'Akun Piutang'],
            ['no_akun' => '1200', 'nama' => 'Persediaan Barang Dagang', 'tipe' => 'Persediaan'],
            ['no_akun' => '1201', 'nama' => 'Barang Terkirim', 'tipe' => 'Persediaan'],

            ['no_akun' => '1300', 'nama' => 'Perlengkapan', 'tipe' => 'Aktiva Lancar lainnya'],
            ['no_akun' => '1400', 'nama' => 'Sewa Gedung Dibayar Dimuka', 'tipe' => 'Aktiva Lancar lainnya'],
            ['no_akun' => '1500', 'nama' => 'Asuransi Dibayar Dimuka', 'tipe' => 'Aktiva Lancar lainnya'],
            ['no_akun' => '1600', 'nama' => 'PPn Masukan', 'tipe' => 'Aktiva Lancar lainnya'],

            ['no_akun' => '1700', 'nama' => 'Aktiva Tetap', 'tipe' => 'Aktiva Tetap'],
            ['no_akun' => '1700.01', 'nama' => 'Tanah', 'tipe' => 'Aktiva Tetap'],
            ['no_akun' => '1700.02', 'nama' => 'Gedung', 'tipe' => 'Aktiva Tetap'],
            ['no_akun' => '1700.03', 'nama' => 'Kendaraan', 'tipe' => 'Aktiva Tetap'],
            ['no_akun' => '1700.04', 'nama' => 'Peralatan', 'tipe' => 'Aktiva Tetap'],
            ['no_akun' => '1700.05', 'nama' => 'Inventaris Kantor', 'tipe' => 'Aktiva Tetap'],

            ['no_akun' => '1710', 'nama' => 'Akumulasi Depresiasi Fixed Asset', 'tipe' => 'Akumulasi Penyusutan'],
            ['no_akun' => '1710.01', 'nama' => 'Akumulasi Penyusutan Gedung', 'tipe' => 'Akumulasi Penyusutan'],
            ['no_akun' => '1710.02', 'nama' => 'Akumulasi Penyusutan Kendaraan', 'tipe' => 'Akumulasi Penyusutan'],
            ['no_akun' => '1710.03', 'nama' => 'Akumulasi Penyusutan Peralatan', 'tipe' => 'Akumulasi Penyusutan'],
            ['no_akun' => '1710.04', 'nama' => 'Akumulasi Penyusutan Inventaris Kantor', 'tipe' => 'Akumulasi Penyusutan'],

            ['no_akun' => '2000', 'nama' => 'Hutang', 'tipe' => 'Akun Hutang'],
            ['no_akun' => '2000.02', 'nama' => 'Uang Muka Penjualan', 'tipe' => 'Akun Hutang'],
            ['no_akun' => '2100', 'nama' => 'PPn Keluaran', 'tipe' => 'Hutang lancar lainnya'],
            ['no_akun' => '210102', 'nama' => 'Account Payable IDR', 'tipe' => 'Akun Hutang'],
            ['no_akun' => '210202', 'nama' => 'Advance Sales IDR', 'tipe' => 'Akun Hutang'],
            ['no_akun' => '2200', 'nama' => 'Hutang Pembelian Belum Ditagih', 'tipe' => 'Hutang lancar lainnya'],
            ['no_akun' => '2300', 'nama' => 'Hutang Jangka Panjang', 'tipe' => 'Hutang lancar lainnya'],

            ['no_akun' => '3000', 'nama' => 'Modal', 'tipe' => 'Ekuitas'],
            ['no_akun' => '310001', 'nama' => 'OPENING BALANCE EQUITY', 'tipe' => 'Ekuitas'],
            ['no_akun' => '3200.02', 'nama' => 'Deviden', 'tipe' => 'Ekuitas'],
            ['no_akun' => '320001', 'nama' => 'RETAINED EARNING', 'tipe' => 'Ekuitas'],

            ['no_akun' => '4000', 'nama' => 'Pendapatan', 'tipe' => 'Pendapatan'],
            ['no_akun' => '4000.01', 'nama' => 'Penjualan', 'tipe' => 'Pendapatan'],
            ['no_akun' => '4000.02', 'nama' => 'Pendapatan Jasa', 'tipe' => 'Pendapatan'],
            ['no_akun' => '4000.03', 'nama' => 'Retur Penjualan', 'tipe' => 'Pendapatan'],
            ['no_akun' => '4000.04', 'nama' => 'Potongan Penjualan', 'tipe' => 'Pendapatan'],
            ['no_akun' => '410104', 'nama' => 'Sales Term Discount IDR', 'tipe' => 'Pendapatan'],

            ['no_akun' => '5000', 'nama' => 'COGS', 'tipe' => 'Harga Pokok Penjualan'],

            ['no_akun' => '6000', 'nama' => 'BIAYA PEMASARAN UMUM & ADM', 'tipe' => 'Beban'],
            ['no_akun' => '6100', 'nama' => 'Biaya Pemasaran', 'tipe' => 'Beban'],
            ['no_akun' => '6101', 'nama' => 'Biaya Iklan', 'tipe' => 'Beban'],
            ['no_akun' => '6102', 'nama' => 'Biaya Komisi', 'tipe' => 'Beban'],
            ['no_akun' => '6104', 'nama' => 'Biaya Entertainment', 'tipe' => 'Beban'],
            ['no_akun' => '6199', 'nama' => 'Biaya Pemasaran Lainnya', 'tipe' => 'Beban'],
            ['no_akun' => '6300', 'nama' => 'Biaya Penyusutan & Amortisasi', 'tipe' => 'Beban'],
            ['no_akun' => '6300.01', 'nama' => 'Biaya Penyusutan Gedung', 'tipe' => 'Beban'],
            ['no_akun' => '6300.02', 'nama' => 'Biaya Penyusutan Kendaraan', 'tipe' => 'Beban'],
            ['no_akun' => '6300.03', 'nama' => 'Biaya Penyusutan Peralatan', 'tipe' => 'Beban'],
            ['no_akun' => '6300.04', 'nama' => 'Biaya Penyusutan Inventaris kantor', 'tipe' => 'Beban'],
            ['no_akun' => '6200', 'nama' => 'Biaya Umum & Administrasi', 'tipe' => 'Beban'],
            ['no_akun' => '6201', 'nama' => 'Gaji & Tunjangan Karyawan', 'tipe' => 'Beban'],
            ['no_akun' => '6201.01', 'nama' => 'Biaya Gaji. Lembur & THR', 'tipe' => 'Beban'],

            ['no_akun' => '6201.02', 'nama' => 'Biaya Bonus Pesangon & Kompensasi', 'tipe' => 'Beban'],
            ['no_akun' => '6201.03', 'nama' => 'Biaya Transport Karyawan', 'tipe' => 'Beban'],
            ['no_akun' => '6201.04', 'nama' => 'Biaya Upah & Honorer', 'tipe' => 'Beban'],
            ['no_akun' => '6201.05', 'nama' => 'Biaya Catering & Makan Karyawan', 'tipe' => 'Beban'],
            ['no_akun' => '6201.06', 'nama' => 'Biaya Tunjangan Kesehatan', 'tipe' => 'Beban'],
            ['no_akun' => '6201.07', 'nama' => 'Biaya Asuransi Karyawan', 'tipe' => 'Beban'],
            ['no_akun' => '6201.08', 'nama' => 'Biaya THR', 'tipe' => 'Beban'],

            ['no_akun' => '6203', 'nama' => 'Beban Utiliti. Adm. Sewa & Lainnya', 'tipe' => 'Beban'],
            ['no_akun' => '6203.01', 'nama' => 'Biaya Listrik', 'tipe' => 'Beban'],
            ['no_akun' => '6203.02', 'nama' => 'Biaya PAM', 'tipe' => 'Beban'],
            ['no_akun' => '6203.03', 'nama' => 'Biaya Telekomunikasi', 'tipe' => 'Beban'],
            ['no_akun' => '6203.04', 'nama' => 'Biaya Koran & Majalah', 'tipe' => 'Beban'],
            ['no_akun' => '6203.05', 'nama' => 'Biaya Ekspedisi. Pos & Materai', 'tipe' => 'Beban'],
            ['no_akun' => '6203.06', 'nama' => 'Biaya Perjalanan Dinas', 'tipe' => 'Beban'],
            ['no_akun' => '6203.07', 'nama' => 'Biaya Perlengkapan Kantor', 'tipe' => 'Beban'],
            ['no_akun' => '6203.08', 'nama' => 'STNK. KIR & Pajak Kendaraan', 'tipe' => 'Beban'],
            ['no_akun' => '6203.09', 'nama' => 'Biaya Pajak', 'tipe' => 'Beban'],
            ['no_akun' => '6203.10', 'nama' => 'Biaya Retribusi & Sumbangan', 'tipe' => 'Beban'],
            ['no_akun' => '6203.11', 'nama' => 'Biaya Sewa Gedung', 'tipe' => 'Beban'],
            ['no_akun' => '6203.12', 'nama' => 'Biaya Umum & Adm Lainnya', 'tipe' => 'Beban'],

            ['no_akun' => '6204', 'nama' => 'Repair & Maintenance Expense', 'tipe' => 'Beban'],
            ['no_akun' => '6204.01', 'nama' => 'Biaya Pemeliharaan Gedung', 'tipe' => 'Beban'],
            ['no_akun' => '6204.02', 'nama' => 'Biaya Pemeliharaan Peralatan Kantor', 'tipe' => 'Beban'],
            ['no_akun' => '6204.03', 'nama' => 'Biaya Pemeliharaan Kendaraan', 'tipe' => 'Beban'],

            ['no_akun' => '7100', 'nama' => 'PENDAPATAN DILUAR USAHA', 'tipe' => 'Pendapatan lain'],
            ['no_akun' => '7100.01', 'nama' => 'Pendapatan Jasa Giro', 'tipe' => 'Pendapatan lain'],
            ['no_akun' => '7100.02', 'nama' => 'Pendapatan Bunga Deposito', 'tipe' => 'Pendapatan lain'],
            ['no_akun' => '7100.03', 'nama' => 'Penjualan Inventory / Perlengkapan', 'tipe' => 'Pendapatan lain'],
            ['no_akun' => '7100.99', 'nama' => 'Pendapatan Lain-Lain', 'tipe' => 'Pendapatan lain'],

            ['no_akun' => '7200', 'nama' => 'BIAYA DILUAR USAHA', 'tipe' => 'Beban lain-lain'],
            ['no_akun' => '7200.01', 'nama' => 'Biaya Bunga Pinjaman Lainnya', 'tipe' => 'Beban lain-lain'],
            ['no_akun' => '7200.02', 'nama' => 'Biaya Adm Bank & Buku Cek/Giro', 'tipe' => 'Beban lain-lain'],
            ['no_akun' => '7200.03', 'nama' => 'Pajak Jasa Giro', 'tipe' => 'Beban lain-lain'],
            ['no_akun' => '7200.99', 'nama' => 'Beban Lain-Lain', 'tipe' => 'Beban lain-lain'],

            ['no_akun' => '8100', 'nama' => 'Gain/Loss Dispossal F.A', 'tipe' => 'Beban lain-lain'],
            ['no_akun' => '8200', 'nama' => 'Gain/Loss Revaluation FA', 'tipe' => 'Pendapatan lain'],
            ['no_akun' => '910002', 'nama' => 'Realize Gain or Loss IDR', 'tipe' => 'Beban'],
            ['no_akun' => '910003', 'nama' => 'Unrealize Gain or Loss IDR', 'tipe' => 'Beban'],

        ]; 

        

        DB::table('chart_of_accounts')->insert($coas);
        
    }
}
