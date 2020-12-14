<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Auth;

class Login extends Component
{
	public $email,$password,$message;
	public function mount()
	{
		$this->email='';
		$this->password='';
	}
	public function login()
	{
		$this->validate([
			"email" => "required|email",
			"password" => "required"
		]);
		if(Auth::attempt(["email" => $this->email,"password" => $this->password])){
			return redirect()->to('/home');
		}
		else
			$this->message="Check Email or Password";
	}
    public function render()
    {
        return view('livewire.user.login');
    }
}
