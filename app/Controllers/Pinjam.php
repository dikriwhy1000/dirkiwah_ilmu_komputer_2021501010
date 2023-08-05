<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pinjam extends BaseController
{
    public function index()
    {
        {$menu = [
            'beranda' =>[
                'title' => 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' => '',
            ],
            'data' =>[
                'title' => 'Data Buku',
                'link' => base_url() . 'data',
                'icon' => 'fa-solid fa-book',
                'aktif' => '',
            ],
            'pinjam' =>[
                'title' => 'Buku Pinjam',
                'link' => base_url() . '/pinjam',
                'icon' => 'fa-solid fa-handshake',
                'aktif' => 'active',
            ],
            'kembali' =>[
                'title' => 'Buku Kembali',
                'link' => base_url() . '/kembali',
                'icon' => 'fa-solid fa-right-to-bracket',
                'aktif' => '',
            ],
        ];
        
        $breadcrumb = ' <div class="col-sm-6">
                            <h1 class="m-0">Peminjaman Buku</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href=" . base_url() . "></a>Beranda</li>
                                <li class="breadcrumb-item active">Peminjaman Buku</li>
                            </ol>
                        </div>';
        $data = [];
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
            return view('pinjam/content', $data);
        }
    }
}