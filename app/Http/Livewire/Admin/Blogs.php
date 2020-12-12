<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class Blogs extends Component
{
	use WithPagination;
	public $search;
	public function addBlog()
	{
		dd($this->addTitle." ".$this->addBlog);
	}
	public function mount(Request $req)
	{
		$this->search='';
		if($req->has('addTitle') && $req->addTitle != '' && $req->addBlog != ''){
			$blog = new \App\Guide;
			$blog->title=$req->addTitle;
			$blog->blog=$req->addBlog;
			$blog->save();
		}
	}
	public function deleteBlog($guideId)
	{
		$guide=\App\Guide::find($guideId);
		$guide->delete();
	}
    public function render()
    {
    	$this->addTitle="Title here";
    	$this->addBlog="Some text here";
    	if($this->search == '')
	        return view('livewire.admin.blogs',[
	        	"blogs" => \App\Guide::orderBy('id','desc')->paginate(5)
	        ]);
    	else
    		return view('livewire.admin.blogs',[
	        	"blogs" => \App\Guide::
	        	where("title","like","%".$this->search."%")
	        	->orderBy('id','desc')->paginate(5)
	        ]);	
    }
}
