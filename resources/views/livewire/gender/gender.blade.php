<?php

use App\Models\Gender;
use Livewire\Volt\Component;
use Illuminate\Support\Collection;

new class extends Component {
    public string $search = '';

    public bool $drawer = false;

    public array $sortBy = ['column' => 'name', 'direction' => 'asc'];

    // Table headers
    public function headers(): array
    {
        return [['key' => 'id', 'label' => '#', 'class' => 'w-1'], ['key' => 'name', 'label' => 'Jenis Kelamin', 'class' => 'text-center'], ['key' => 'description', 'label' => 'Keterangan']];
    }

    public function genders(): Collection
    {
        $genders = Gender::query()->toBase()->get();
        // dd($genders);
        return collect($genders)
            ->sortBy([[...array_values($this->sortBy)]])
            ->when($this->search, function (Collection $collection) {
                return $collection->filter(fn(array $item) => str($item['name'])->contains($this->search, true));
            });
    }

    public function with(): array
    {
        return [
            'genders' => $this->genders(),
            'headers' => $this->headers(),
        ];
    }
}; ?>

<div>

    <!-- TABLE  -->
    <x-card>
        <x-table :headers="$headers" :rows="$genders" :sort-by="$sortBy">

        </x-table>
    </x-card>
</div>
