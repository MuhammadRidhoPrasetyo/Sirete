<?php

use App\Models\Education;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

new class extends Component {

    use WithPagination;

    public string $search = '';

    public bool $drawer = false;

    public array $sortBy = ['column' => 'name', 'direction' => 'asc'];

    public function headers(): array
    {
        return [['key' => 'id', 'label' => '#', 'class' => 'w-1'], ['key' => 'name', 'label' => 'Pendidikan', 'class' => 'text-center']];
    }

    public function educations(): LengthAwarePaginator
    {
        return Education::query()
            ->when($this->search, fn($q) => $q->where('name', 'like', "%$this->search%"))
            ->orderBy(...array_values($this->sortBy))
            ->paginate(10); // No more `->get()`
    }

    public function with(): array
    {
        return [
            'educations' => $this->educations(),
            'headers' => $this->headers(),
        ];
    }

}; ?>

<div>
    <x-header title="Pendidikan" subtitle="Pendidikan">
        <x-slot:middle class="!justify-end">
            <x-input icon="o-bolt" placeholder="Search..." wire:model.live='search' />
        </x-slot:middle>
    </x-header>

    <!-- TABLE  -->
    <x-card>
        {{-- <x-input label="Inline label" inline class="w-50" /> --}}
        <x-table :headers="$headers" :rows="$educations" :sort-by="$sortBy" with-pagination>

        </x-table>
    </x-card>
</div>
