<?php

namespace App\Livewire;

use Livewire\Component;

class ResumePage extends Component
{
    public function render()
    {
        return view('livewire.resume-page');
    }

    public $minats = [];
    public $techs = [];
    public $pendidikans = [];
    public $pengalamans = [];

    public function mount()
    {
        $minats = [
            [
                'img' => 'img/icons/web.svg',
                'title' => 'Web Development',
            ],
            [
                'img' => 'img/icons/app.svg',
                'title' => 'Mobile Development',
            ],
            [
                'img' => 'img/icons/uiux.svg',
                'title' => 'UIUX',
            ],
            [
                'img' => 'img/icons/produkdesigner.svg',
                'title' => 'Produk Designer',
            ],
        ];
        $this->minats = json_decode(json_encode($minats));

        $techs = [
            [
                'img' => 'img/icons/html-5.svg',
            ],
            [
                'img' => 'img/icons/logos_css-3.svg',
            ],
            [
                'img' => 'img/icons/js-official.svg',
            ],
            [
                'img' => 'img/icons/php.svg',
            ],
            [
                'img' => 'img/icons/dart.svg',
            ],
            [
                'img' => 'img/icons/laravel.svg',
            ],
            [
                'img' => 'img/icons/flutter.svg',
            ],
            [
                'img' => 'img/icons/react.svg',
            ],
            [
                'img' => 'img/icons/bootstrap.svg',
            ],
            [
                'img' => 'img/icons/tailwindcss.svg',
            ],
            [
                'img' => 'img/icons/mysql.svg',
            ],
            [
                'img' => 'img/icons/mariadb.svg',
            ],
            [
                'img' => 'img/icons/git-icon.svg',
            ],
            [
                'img' => 'img/icons/mdi_github.svg',
            ],
            [
                'img' => 'img/icons/bitbucket.svg',
            ],
            [
                'img' => 'img/icons/figma.svg',
            ],
            [
                'img' => 'img/icons/lunacy.svg',
            ],
        ];
        $this->techs = json_decode(json_encode($techs));

        $pendidikans = [
            [
                'tempat' => 'INSTITUT TEKNOLOGI DAN BISNIS PALCOMTECH',
                'priode' => 'Agu 2018 - Des 2022',
                'keterangan' => 'Sarjana Komputer, Program studi S1 Sistem Informasi, 3.73/4.00',
                'skill' => 'Java · C# · HTML · Bootstrap · css · Unified Modeling Language (UML) · Software Development Life Cycle (SDLC) · MySQL · PHP · Laravel',
            ],
            [
                'tempat' => 'SMA MUHAMMADIYAH 1 PALEMBANG',
                'priode' => '2014 - 2017',
                'keterangan' => 'Social Sciences, Ilmu Pengetahuan Sosial',
                'skill' => null,
            ],

        ];
        $this->pendidikans = json_decode(json_encode($pendidikans));

        $pengalamans = [
            [
                'posisi' => 'Programmer',
                'tempat' => 'RSUD Siti Fatimah Provinsi Sumatera Selatan',
                'jenis' => 'Purnawaktu',
                'tgl_masuk' => '2023-08-01',
                'tgl_keluar' => null,
                'alamat' => 'Palembang, Sumatera Selatan, Indonesia',
                'jenis_lokasi' => 'Di lokasi',
                'keterangan' => 'Mendevelopment beberapa aplikasi yang dibutuhkan seperti inacbg, mendeploy ke windows server, analisa data, maintance sistem.',
                'skill' => 'Git · MySQL · Laravel',
            ],
            [
                'posisi' => 'Full Stack Application Developer',
                'tempat' => 'PAYOPRINT',
                'jenis' => 'Purnawaktu',
                'tgl_masuk' => '2023-07-01',
                'tgl_keluar' => null,
                'alamat' => 'Palembang, Sumatera Selatan, Indonesia',
                'jenis_lokasi' => 'Gabungan',
                'keterangan' => 'Melakukan perancangan web app, mulai dari analisa sistem, perancangan
                database, perancangan wireframe, development menggunakan laravel, deployment
                AWS, membuat company profile v1.',
                'skill' => 'Information Architecture · Progressive Web
                Applications (PWAs) · Application Architecture · Amazon Web Services (AWS) ·
                Application Programming Interfaces (API) · Jira · Bootstrap · Figma
                (Software) · UX Research · Git · MySQL · Laravel · Web Development ·
                Back-End Web Development',
            ],
            [
                'posisi' => 'Freelance',
                'tempat' => null,
                'jenis' => 'Pekerja Lepas',
                'tgl_masuk' => '2021-12-01',
                'tgl_keluar' => null,
                'alamat' => 'Palembang, Sumatera Selatan, Indonesia',
                'jenis_lokasi' => 'Gabungan',
                'keterangan' => 'Saya mengambil proyek untuk bekerja secara individu atau dengan tim saya
                sebagai programmer lepas',
                'skill' => 'Jira · Project Management · UIUX · Unified
                Modeling Language (UML) · Web Design · Adobe Illustrator · Adobe XD · Figma
                (Software) · UX Research · User Interface Design · Git · Flutter Getx ·
                Full-Stack Development · Flutter · MySQL · PHP · Laravel · Web Development ·
                Back-End Web Development',
            ],
            [
                'posisi' => 'IT Support',
                'tempat' => 'Dinas Pemberdayaan Masyarakat dan Desa Provinsi Sumatera Selatan',
                'jenis' => 'PKL',
                'tgl_masuk' => '2021-03-01',
                'tgl_keluar' => '2021-04-01',
                'alamat' => 'Palembang, Sumatera Selatan, Indonesia',
                'jenis_lokasi' => 'Gabungan',
                'keterangan' => 'Saya membuat sebuah website company porfile untuk instansi',
                'skill' => 'Git · MySQL · Laravel · Bootstrap',
            ],

        ];
        $this->pengalamans = json_decode(json_encode($pengalamans));

    }
}
