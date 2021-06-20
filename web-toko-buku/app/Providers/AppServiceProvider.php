<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $akses = Auth::user()->akses;
            $event->menu->add('Hak Akses : ' . strtoupper($akses));


            if ($akses == "admin") {

                $event->menu->add(
                    ['header' => 'Inputan'],
                    [
                        'text' => 'Input Distributor',
                        'url' => 'distributor',
                        'icon' => 'fas fa-fw fa-users'
                    ],
                    [
                        'text' => 'Input Buku',
                        'url' => 'buku',
                        'icon' => 'fas fa-fw fa-book'
                    ],
                    ['header' => 'Tambah'],
                    [
                        'text' => 'Input Pasok',
                        'url' => 'pasok',
                        'icon' => 'fas fa-fw fa-money-bill-alt'
                    ],
                    ['header' => 'Laporan'],
                    [
                        'text' => 'Laporan',
                        'url' => 'laporan-admin',
                        'icon' => 'fas fa-fw fa-user-tie'
                    ],
                );
            } else if ($akses == "kasir") {
                $event->menu->add(
                    ['header' => 'Transaksi'],
                    [
                        'text' => 'Penjualan',
                        'url' => 'penjualan/transaksi',
                        'icon' => 'fas fa-fw fa-cash-register'
                    ],
                    ['header' => 'Laporan'],
                    [
                        'text' => 'Cetak Faktur',
                        'url' => 'faktur',
                    ],
                    [
                        'text' => 'Semua Penjualan',
                        'url' => 'penjualan/data',
                    ],
                    [
                        'text' => 'Penjualan Pertanggal',
                        'url' => 'penjualan/tanggal',
                    ],

                );
            } else if ($akses == "manager") {
                $event->menu->add(
                    ['header' => 'Input'],
                    [
                        'text' => 'Input User',
                        'url' => 'pengguna/create',
                        'icon' => 'fas fa-fw fa-users'
                    ],
                    ['header' => 'Laporan'],
                    [
                        'text' => 'Cetak Faktur',
                        'url' => 'faktur',
                    ],
                    [
                        'text' => 'Seluruh Penjualan',
                        'url' => 'penjualan/data',
                    ],
                    [
                        'text' => 'Penjualan Pertanggal',
                        'url' => 'penjualan/tanggal',
                    ],
                    [
                        'text' => ' Laporan Buku',
                        'url' => 'laporan-admin',
                        'icon' => 'fas fa-fw fa-book'
                    ],
                );
            }
        });
    }
}
