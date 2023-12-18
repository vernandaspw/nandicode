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

            // [
            //     'urut' => 12,
            //     'img' => 'img/project/1.jpg',
            //     'tipe' => '1',
            //     'title' => '',
            //     'start_date' => null,
            //     'end_date' => null,
            //     'singkat' => '',
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
            [
                'urut' => 13,
                'img' => 'img/project/noimg.png',
                'tipe' => '1',
                'title' => '',
                'start_date' => '2023-01-01',
                'end_date' => '2023-02-01',
                'singkat' => 'Surat Izin Tempat Usaha',
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
