<?php

namespace App\Http\Livewire\Storefront\Backend\Store;

use Livewire\Component;

class CreateStore extends Component
{
    public function render()
    {
        return view('livewire.storefront.backend.store.create-store')
            ->extends('layouts.storeBackend');
    }
}
