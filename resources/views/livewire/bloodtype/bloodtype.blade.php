<?php

use App\Models\BloodType;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

new class extends Component {
    use WithPagination;

    public string $search = '';

    public bool $drawer = false;

    public array $sortBy = ['column' => 'name', 'direction' => 'asc'];

    // Table headers
    public function headers(): array
    {
        return [['key' => 'id', 'label' => '#', 'class' => 'w-1'], ['key' => 'name', 'label' => 'Golongan Darah', 'class' => 'text-center']];
    }

    public function bloodtypes(): LengthAwarePaginator
    {
        return BloodType::query()
            ->when($this->search, fn($q) => $q->where('name', 'like', "%$this->search%"))
            ->orderBy(...array_values($this->sortBy))
            ->paginate(10); // No more `->get()`
    }

    public function with(): array
    {
        return [
            'bloodtypes' => $this->bloodtypes(),
            'headers' => $this->headers(),
        ];
    }
}; ?>

<div>

    <x-header title="Golongan Darah" subtitle="Golongan Darah">
        <x-slot:middle class="!justify-end">
            <x-input icon="o-bolt" placeholder="Search..." wire:model.live='search' />
        </x-slot:middle>
    </x-header>

    <!-- TABLE  -->
    <x-card>
        {{-- <x-input label="Inline label" inline class="w-50" /> --}}
        <x-table :headers="$headers" :rows="$bloodtypes" :sort-by="$sortBy" with-pagination>

        </x-table>
    </x-card>
</div>
