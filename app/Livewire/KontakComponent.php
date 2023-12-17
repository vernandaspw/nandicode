<?php

namespace App\Livewire;

use Livewire\Component;

class KontakComponent extends Component
{
    public function render()
    {
        $replacements = [
            ' ' => '%20',
            ':' => '%3A',
            "\n" => '%0A',
        ];

        $this->msg = strtr($this->input_msg, $replacements);

        return view('livewire.kontak-component');
    }

    public $input_msg;
    public $msg;
    public $nama;

    public function kirim()
    {
        $nama = urlencode($this->nama);
        $msg = urlencode($this->msg);

        $url = "https://api.whatsapp.com/send?phone=6282299998741&text=Saya%20{$nama}%0A%0A{$msg}";

        redirect($url);
    }
}
