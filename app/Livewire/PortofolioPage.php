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
                'nama' => 'Web'
            ],
        ];
        $this->tipes = json_decode(json_encode($tipes));

        $projects = [
            [
                'img' => 'img/project/1.jpg',
                'tipe' => '1',
                'title' => 'Web Dev 1',
                'singkat' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'tags' => [
                    [
                        'nama' => 'hobi',
                    ],
                ],
            ],
        ];
        $this->projects = json_decode(json_encode($projects));
    }
}
