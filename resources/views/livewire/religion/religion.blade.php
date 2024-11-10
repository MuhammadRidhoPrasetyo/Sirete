<?php

use App\Models\Religion;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

new class extends Component {
    use WithPagination;

    public string $search = '';

    public int $perPage = 10;

    public bool $drawer = false;

    public array $sortBy = ['column' => 'id', 'direction' => 'asc'];

    // Table headers
    public function headers(): array
    {
        return [['key' => 'id', 'label' => '#', 'class' => 'w-1'], ['key' => 'name', 'label' => 'Nama Pekerjaan', 'class' => 'text-center']];
    }

    public function religions(): LengthAwarePaginator
    {
        return Religion::query()
            // ->orderBy('id','asc')
            // ->withAggregate('id', 'name')
            ->when($this->search, fn($q) => $q->where('name', 'like', "%$this->search%"))
            ->orderBy(...array_values($this->sortBy))
            ->paginate($this->perPage); // No more `->get()`
    }

    public function with(): array
    {
        return [
            'religions' => $this->religions(),
            'headers' => $this->headers(),
        ];
    }
}; ?>

<div>
    <x-header title="Pekerjaan" subtitle="Daftar Pekerjaan">
        <x-slot:middle class="!justify-end">
            <x-input icon="o-bolt" placeholder="Search..." wire:model.live='search' />
        </x-slot:middle>
    </x-header>

    <!-- TABLE  -->
    <x-card class="mb-3">
        {{-- <label class="form-control w-full max-w-xs"> --}}
            <div class="label">
                <span class="label-text">Tampilkan</span>
            </div>
            <select class="select select-bordered" wire:model.change='perPage'>
                <option disabled selected>Pick one</option>
                <option value="15">15</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        {{-- </label> --}}
    </x-card>
    <x-card>
        <x-table :headers="$headers" :rows="$religions" :sort-by="$sortBy" with-pagination>

        </x-table>
    </x-card>
</div>
