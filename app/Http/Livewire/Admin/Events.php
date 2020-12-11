<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
	public $search;
	public $orderBy,$order;
	public $step,$editStep;
	public $add,$edit;
	public $editId;
	public $message;
	public $addTitle,$addDesc,$addDate,$addLocation,$addGoogle,$addPincode;
	public $editTitle,$editDesc,$editDate,$editLocation,$editGoogle,$editPincode;
	use WithPagination;
	public function mount()
	{
		$this->add=false;
		$this->edit=false;
		$this->message = '';
		$this->step=1;
		$this->editStep=1;
		$this->search='';
		$this->orderBy='id';
		$this->order='desc';
	}
	public function showAdd()
	{
		$this->add=true;
	}
	public function hideAdd()
	{
		$this->step=1;
		$this->add=false;
	}
	public function hideEdit()
	{
		$this->editStep=1;
		$this->edit=false;
	}
	public function showEdit($id)
	{
		$event=\App\Event::find($id);
		$this->editId=$event->id;
		$this->editTitle=$event->title;
		$this->editPincode=$event->pincode;
		$this->editGoogle=$event->google_map;
		$this->editLocation=$event->location;
		$this->editDate=$event->date;
		$this->editDesc=$event->description;
		$this->edit=true;
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
	public function nextEditStep()
	{
		$this->message = '';
		if($this->editTitle == '' || $this->editDesc == '')
		{
			$this->message = "Enter the required fields";
			return;
		}
		$this->editStep++;
	}
	public function prevEditStep()
	{
		$this->message = '';
		$this->editStep--;
	}
    public function render()
    {
    	if($this->search != '')
	        return view('livewire.admin.events',[
	        	'events' => \App\Event::
	        	where('title',"like","%".$this->search."%")
	        	->orWhere('id',$this->search)
	        	->orWhere('location',"like","%".$this->search."%")
	        	->orWhere('date',"like","%".$this->search."%")
	        	->orWhere('pincode',$this->search)
	        	->orderBy($this->orderBy,$this->order)
	        	->paginate(5)
	        ]);
	    else
	    	return view('livewire.admin.events',[
	        	'events' => \App\Event::orderBy($this->orderBy,$this->order)->paginate(5)
	        ]);
    }
}
