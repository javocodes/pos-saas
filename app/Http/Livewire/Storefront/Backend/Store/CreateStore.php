<?php

namespace App\Http\Livewire\Storefront\Backend\Store;

use App\Models\Store;
use App\Models\StoreType;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateStore extends Component
{
    use WithFileUploads;

    public Store $store;

    public $upload;
    public $bannerUpload;

    protected array $rules = [
        'store.name' => 'required|max:20',
        'store.store_type_id' => 'required|int',
        'store.theme' => 'required',
        'store.title' => 'required|max:40',
        'store.logo_path' => 'required|image|size:15500',
        'upload' => 'required|image|size:15500',
        'bannerUpload' => 'required|image|size:15500',
        'store.banner_message' => 'required:max:80',
        'store.mission' => 'required:max:95',
        'store.slogan' => 'required|max:45',
        'store.desc' => 'required|max:150',
    ];

    protected array $message = [
        'store.name.required' => 'store.name is Required',
        'store.store_type_id.required' => 'store.store_type_id is Required',
        'store.theme.required' => 'store.theme is Required',
        'store.title.required' => 'store.title is Required',
        'store.logo_path.required' => 'store.logo_path is Required',
        'upload.required' => 'Store Logo is Required',
        'bannerUpload.required' => '5 Banner Images Are Required',
        'store.banner_message.required' => 'store.banner_message is Required',
        'store.slogan.required' => 'store.slogan is Required',
        'store.mission.required' => 'store.slogan is Required',
        'store.desc.required' => 'store.desc is Required'

    ];

    public function createStore(): void
    {
        $this->validate();

        $this->store->save();
    }

    public function updated(): void
    {
        $this->validate();

    }

    public function mount(): void
    {
        $this->store = new Store;
    }

    public function render()
    {
        return view('livewire.storefront.backend.store.create-store', [
            'storeType' => StoreType::all(),
        ])
            ->extends('layouts.storeBackend');
    }
}
