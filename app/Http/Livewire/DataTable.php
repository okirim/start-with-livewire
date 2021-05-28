<?php

namespace App\Http\Livewire;

use App\Models\User;

use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\Boolean;
use function PHPUnit\Framework\isFalse;
use function PHPUnit\Framework\isNull;
use function PHPUnit\Framework\isTrue;

class DataTable extends Component
{
    use WithPagination;

    public bool $status = true;
    public string $filter = '';
    public $sortField;
    public bool $sortAsc = true;
   protected $queryString =['filter','sortAsc','status'];
    public function updatingFilter()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortField = $field;
        }
    }

    public function handleActiveStatus()
    {
        $this->status = true;
    }

    public function handleInActiveStatus()
    {
        $this->status = false;
    }

    public function render()
    {
        $filter = trim($this->filter);
        return view('livewire.data-table', [
            'users' => User::where(function (Builder $query) use ($filter) {
                $query->where('name', 'LIKE', '%' . $filter . '%')
                    ->orWhere('email', 'like', '%' . $filter . '%');
            })->when($this->sortField, function (Builder $query) {
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })->where(
                 function (Builder $query) {
                    $query->where('status' , $this->status);
                })->paginate(10)
        ]);
    }

    public function paginationView()
    {
        return 'livewire.custom-pagination';
    }


}
