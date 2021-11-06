<?php

namespace App\Http\Livewire\Storefront\Backend\Store;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Validator;
class CreateAsscoiate extends Component
{

    public $name;
    public $email;
    public $password;
    public $user_type;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
//        'user_type' => 'required',
        'password' => 'required '
    ];


    public function newsalesassociate()
    {
        $this->validate();

       $associate = User::where([
            'email' => $this->email,
        ])->exists();
       if($associate) {
           session()->flash('error','Email Already In Use');
       }


        if (!$associate) {
           User::create([
               'name' => $this->name,
               'email' => $this->email,
               'user_type' => 3,
               'password' => Hash::make($this->password),
           ]);
            session()->flash('success','Sales Associate Added Successfully');

       }

    }

//    public function newsalesassociate(){
//
//    }


    public function render()
    {
        return view('livewire.storefront.backend.store.create-asscoiate')
            ->extends('layouts.storeBackend');
    }
}
