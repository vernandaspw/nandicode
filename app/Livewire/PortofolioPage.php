<?php

namespace App\Livewire;

use Livewire\Component;

class PortofolioPage extends Component
{
    public function render()
    {
        return view('livewire.portofolio-page');
    }

    public $tipes = [];
    public $projects = [];

    public function mount()
    {
        // 1 web

        $tipes = [
            [
                'id' => 1,
                'nama' => 'Web',
            ],
        ];
        $this->tipes = json_decode(json_encode($tipes));

        $projects = [

            [
                'urut' => 12,
                'img' => 'img/project/portofoliosaya.jpg',
                'tipe' => '1',
                'title' => 'Website Portofolio nandicode.my.id',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Website Portofolio nandicode.my.id',
                'tags' => [
                    [
                        'nama' => 'pribadi',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/beresdigital.jpg',
                'tipe' => '1',
                'title' => 'Website Beresdigital.id',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Website BeresDigital.id',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/spkosn.jpg',
                'tipe' => '1',
                'title' => 'Sistem Pendukung Keputusan OSN',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Sistem Pendukung Keputusan untuk mengikuti olimpiade OSN',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/sipsteel.jpg',
                'tipe' => '1',
                'title' => 'Sistem Informasi Penjualan Indosteel',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Sistem Informasi Penjualan Indosteel berbasis website',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/laporankeuangansifa.jpg',
                'tipe' => '1',
                'title' => 'Laporan Keuangan SIFA',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Laporan keuangan sifa berbasis website',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/infobed.jpg',
                'tipe' => '1',
                'title' => 'Bedroom RS',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Informasi Tempat Tidur berbasis web',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/antreanrs.jpg',
                'tipe' => '1',
                'title' => 'Antrean RSUD',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Antrean RS berbasis web',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/arsiprri.jpg',
                'tipe' => '1',
                'title' => 'E-Arsip RRI',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Project Freelance',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/payoprintapp.jpg',
                'tipe' => '1',
                'title' => 'App Payoprint.id',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Aplikasi utama payoprint',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/payoprintcompany.jpg',
                'tipe' => '1',
                'title' => 'PayoPrint.id',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Company Profile Payoprint.id',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'tailwindcss',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/golapangmitra.jpg',
                'tipe' => '1',
                'title' => 'GoLapang App mitra',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Aplikasi pemesanan olahraga untuk digunakan mitra',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                    [
                        'nama' => 'flutter',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'Flutter',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/mekurir.jpg',
                'tipe' => '1',
                'title' => 'Mekurir.com',
                'start_date' => '2023-08-01',
                'end_date' => '2023-09-01',
                'singkat' => 'layanan jasa antar jemput barang',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/sikeuangan.jpg',
                'tipe' => '1',
                'title' => 'Sikeuangan.com',
                'start_date' => '2023-05-01',
                'end_date' => '2023-06-01',
                'singkat' => 'Company profile sikeuangan.com',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],

                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/pesenkosapp.jpg',
                'tipe' => '1',
                'title' => 'WebApp PesenKos.com',
                'start_date' => '2023-05-01',
                'end_date' => '2023-06-01',
                'singkat' => 'Webapp Pesenkos.com',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/pesenkos.jpg',
                'tipe' => '1',
                'title' => 'PesenKos.com',
                'start_date' => '2023-05-01',
                'end_date' => '2023-06-01',
                'singkat' => 'Company Profile Pesenkos.com',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                ],
            ],
            [
                'urut' => 14,
                'img' => 'img/project/tokoskd.jpg',
                'tipe' => '1',
                'title' => 'Web & Apps Tokoskd',
                'start_date' => '2023-02-01',
                'end_date' => '2023-04-01',
                'singkat' => 'Membuat Sistem Penjualan, keuangan, Stok, dengan Laravel & Flutter',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'Flitter',
                    ],
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            // [
            //     'urut' => 13,
            //     'img' => 'img/project/noimg.png',
            //     'tipe' => '1',
            //     'title' => 'Surat Izin Tempat Usaha',
            //     'start_date' => '2023-01-01',
            //     'end_date' => '2023-02-01',
            //     'singkat' => 'Surat Izin Tempat Usaha pada kelurahan',
            //     'tags' => [
            //         [
            //             'nama' => 'project',
            //         ],
            //     ],
            //     'skills' => [
            //         [
            //             'img' => null,
            //             'nama' => 'laravel',
            //         ],
            //         [
            //             'img' => null,
            //             'nama' => 'mysql',
            //         ],
            //     ],
            // ],
            [
                'urut' => 12,
                'img' => 'img/project/lalandigital.jpg',
                'tipe' => '1',
                'title' => 'Lalan Digital',
                'start_date' => '2022-11-01',
                'end_date' => '2023-04-01',
                'singkat' => 'Membantu Digitalisasi Musi Banyuasin, Lalan',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 12,
                'img' => 'img/project/pehjahit.jpg',
                'tipe' => '1',
                'title' => 'Website PehJahit.com',
                'start_date' => '2022-08-01',
                'end_date' => '2022-09-01',
                'singkat' => 'PehHahit.com hadir untuk membantu UMKM diindonesia terutama para UMKM yang bisnis utamanya adalah dibidang Fashion/jahit',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 11,
                'img' => 'img/project/pfm-store.jpg',
                'tipe' => '1',
                'title' => 'Aplikasi Penjualan Prima Fabian Mandiri',
                'start_date' => '2022-06-01',
                'end_date' => '2022-08-01',
                'singkat' => 'PFM STORE adalah sebuah website untuk perusahaan toko elektronik.',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 10,
                'img' => 'img/project/noimg.png',
                'tipe' => '1',
                'title' => 'Aplikasi Pengajuan Cuti',
                'start_date' => '2022-06-01',
                'end_date' => '2022-06-01',
                'singkat' => 'project freelance',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 9,
                'img' => 'img/project/noimg.png',
                'tipe' => '1',
                'title' => 'JayoExpress',
                'start_date' => '2022-02-01',
                'end_date' => '2022-05-01',
                'singkat' => 'aplikasi kurir ada untuk customer, ada untuk kurir, ada untuk office. dibuat dengan backend api laravel, front end laravel livewire',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 8,
                'img' => 'img/project/dpmd1.jpg',
                'tipe' => '1',
                'title' => 'Website DPMD Provinsi Sumatera Selatan',
                'start_date' => '2022-03-01',
                'end_date' => '2022-04-01',
                'singkat' => 'Website DPMD adalah sebuah website informatif untuk masyarakat umum mengenai DPMD Prov Sumsel.',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 8,
                'img' => 'img/project/sahamqu1.jpg',
                'tipe' => '1',
                'title' => 'Sahamqu',
                'start_date' => '2022-03-01',
                'end_date' => '2022-04-01',
                'singkat' => 'App ini dibuat Untuk mengetauhi kapan waktunya jual saham yang dimiliki secara avg',
                'tags' => [
                    [
                        'nama' => 'pribadi',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 7,
                'img' => 'img/project/noimg.png',
                'tipe' => '1',
                'title' => 'supply chain management awankerupuk',
                'start_date' => '2021-12-01',
                'end_date' => '2022-03-01',
                'singkat' => 'Project freelance',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 7,
                'img' => 'img/project/clonegojek.jpg',
                'tipe' => '1',
                'title' => 'Clone Gojek With Flutter',
                'start_date' => '2022-01-01',
                'end_date' => '2022-01-01',
                'singkat' => 'Clone Gojek App dengan Flutter saat bootcamp dari skodi',
                'tags' => [
                    [
                        'nama' => 'belajar',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'flutter',
                    ],
                ],
            ],
            [
                'urut' => 7,
                'img' => 'img/project/telkom.jpg',
                'tipe' => '1',
                'title' => 'Aplikasi Pendataan Perangkat Cabutan',
                'start_date' => '2021-12-01',
                'end_date' => '2021-12-01',
                'singkat' => 'Pendataan Perangkat Cabutan pada telkom',
                'tags' => [
                    [
                        'nama' => 'project',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                    [
                        'img' => null,
                        'nama' => 'mysql',
                    ],
                ],
            ],
            [
                'urut' => 6,
                'img' => 'img/project/kalkulator.png',
                'tipe' => '1',
                'title' => 'Kalkulator penjumlahan',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Kalkulator penjumlahan sederhana yg dibuat menggunakan sass, dan php',
                'tags' => [
                    [
                        'nama' => 'belajar',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'saas',
                    ],
                ],
            ],
            [
                'urut' => 5,
                'img' => 'img/project/entrivtravelagensi2.jpg',
                'tipe' => '1',
                'title' => 'Entriv Travel Agensi',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Entriv Travel Agensi merupakan project belajar dari penggunaan boostrap, laravel, hanya sisi UI',
                'tags' => [
                    [
                        'nama' => 'belajar',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'bootstrap',
                    ],
                    [
                        'img' => null,
                        'nama' => 'laravel',
                    ],
                ],
            ],
            [
                'urut' => 4,
                'img' => 'img/project/landingpage-belajarlayoutbootstrap.jpg',
                'tipe' => '1',
                'title' => 'Belajar Layout Bootstrap',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Belajar layuot bootstrap merupakan project dari mata kuliah',
                'tags' => [
                    [
                        'nama' => 'belajar',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'github',
                    ],
                    [
                        'img' => null,
                        'nama' => 'bootstrap',
                    ],
                    [
                        'img' => null,
                        'nama' => 'Netlify',
                    ],
                ],
            ],
            [
                'urut' => 3,
                'img' => 'img/project/quiz.jpg',
                'tipe' => '1',
                'title' => 'QUIZ-QuiZ',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Quiz quiz berhadiah merupakan tugas mata kuliah',
                'tags' => [
                    [
                        'nama' => 'belajar',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'html',
                    ],
                    [
                        'img' => null,
                        'nama' => 'css',
                    ],
                    [
                        'img' => null,
                        'nama' => 'js',
                    ],
                ],
            ],
            [
                'urut' => 2,
                'img' => 'img/project/landingpage-belajarbootstrap.jpg',
                'tipe' => '1',
                'title' => 'Web page Belajar Bootstrap',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Web page Belajar Bootstrap merupakan tugas mata kuliah ',
                'tags' => [
                    [
                        'nama' => 'belajar',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'bootstrap',
                    ],
                ],
            ],
            [
                'urut' => 1,
                'img' => 'img/project/alokasilaba1.jpg',
                'tipe' => '1',
                'title' => 'Alokasi Laba',
                'start_date' => null,
                'end_date' => null,
                'singkat' => 'Alokasi laba ini dibuat dengan sederhana, berfungsi untuk mempermudah menentukan pembagian hasil laba usaha per persen.',
                'tags' => [
                    [
                        'nama' => 'pribadi',
                    ],
                ],
                'skills' => [
                    [
                        'img' => null,
                        'nama' => 'MySQL',
                    ],
                    [
                        'img' => null,
                        'nama' => 'php',
                    ],
                    [
                        'img' => null,
                        'nama' => 'Heroku',
                    ],
                ],
            ],
        ];
        $this->projects = json_decode(json_encode($projects));
    }
}
