<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
	public $step;
	public $add;
	public $message;
	public $addTitle,$addDesc,$addDate,$addLocation,$addGoogle,$addPincode;
	use WithPagination;
	public function mount()
	{
		$this->add=false;
		$this->message = '';
		$this->step=1;
	}
	public function showAdd()
	{
		$this->add=true;
	}
	public function hideAdd()
	{
		$this->add=false;
	}
	public function addEvent()
	{
		if($this->addTitle == '' || $this->addDesc == '' || $this->addDate == '' || $this->addLocation == '' || $this->addPincode == '')
		{
			$this->message = "Enter the required fields";
			return;
		}
		else{
			$event = new \App\Event;
			$event->title=$this->addTitle;
			$event->description=$this->addDesc;
			$event->date=$this->addDate;
			$event->location=$this->addLocation;
			$event->pincode=$this->addPincode;
			$event->google_map=($this->addGoogle == '') ? NULL : $this->addGoogle;
			$event->save();
			$this->addTitle='';
			$this->addDesc='';
			$this->addDate='';
			$this->addLocation='';
			$this->addPincode='';
			$this->addGoogle='';
			$this->page=1;
			$this->hideAdd();
		}
	}
	public function updateEvent()
	{
		
	}
	public function deleteEvent($id)
	{
		$event = \App\Event::find($id);
		$event->delete();
	}
	public function nextStep()
	{
		$this->message = '';
		if($this->addTitle == '' || $this->addDesc == '')
		{
			$this->message = "Enter the required fields";
			return;
		}
		$this->step++;
	}
	public function prevStep()
	{
		$this->message = '';
		$this->step--;
	}
    public function render()
    {
        return view('livewire.admin.events',[
        	'events' => \App\Event::paginate(10)
        ]);
    }
}
