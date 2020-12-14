<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use Auth;
class Signup extends Component
{
	use WithFileUploads;
	public $step,$passwordError;
	public $username,$email,$password,$phone,$gender,$privacy,$image;
	public function mount()
	{
		$this->step=1;
		$this->passwordError='';
		$this->gender="Male";
		$this->privacy="Public";
	}
	public function prevStep()
	{
		if($this->step != 0)
			$this->step--;
	}
	public function nextStep()
	{
		if($this->step == 1) $this->validateFirstStep();
		if($this->step == 2) $this->validateSecondStep();
		if($this->step == 3) $this->validateThirdStep();
		if($this->step != 3)
			$this->step++;
	}
	public function validateFirstStep()
	{
		$this->validate([
			"username" => "required|unique:users",
			"email" => "required|email|unique:users",
			"password" => "required|min:5"
		]);
	}
	public function validateSecondStep()
	{
		$this->validate([
			"phone" => "required",
			"gender" => "required",
			"privacy" => "required"
		]);
	}
	public function finalStep()
	{
		$this->validate([
			"username" => "required",
			"email" => "required|email",
			"password" => "required|min:5",
			"phone" => "required",
			"gender" => "required",
			"privacy" => "required",
			"image" => "required|image"
		]);
		$image=$this->image->store('uploads','public');
		$user = new \App\User;
		$user->username=$this->username;
		$user->email=$this->email;
		$user->password=bcrypt($this->password);
		$user->phone=$this->phone;
		$user->gender=$this->gender;
		$user->privacy=$this->privacy;
		$user->image=$image;
		$user->save();
		if(Auth::attempt(["email" => $this->email,"password" => $this->password]))
			redirect(route('user.home'));
	}
    public function render()
    {
        return view('livewire.user.signup');
    }
}
