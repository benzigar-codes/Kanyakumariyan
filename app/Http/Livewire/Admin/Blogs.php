<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use Illuminate\Http\Request;

class Blogs extends Component
{
	public function addBlog()
	{
		dd($this->addTitle." ".$this->addBlog);
	}
	public function mount(Request $req)
	{
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
        return view('livewire.admin.blogs');
    }
}
