<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Subscriber;

class Subscribers extends Component
{
    use WithPagination;

    public function delete(Subscriber $subscriber){
        $subscriber->delete();
    }

    public function render()
    {
        return view('livewire.subscribers')->with(['subscribers' => Subscriber::paginate(10)]);
    }
}
