<?php

namespace App\Http\Livewire;

use App\Http\Controllers\ActualitesController;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ActuList extends Component
{
    use WithPagination;



    public function render()
    {
        $actualites = DB::table('actualites')
            ->orderBy('id_actualite', 'desc')
            ->paginate(4);

        return view('livewire.actu-list', ['actualites' => $actualites]);
    }
}
