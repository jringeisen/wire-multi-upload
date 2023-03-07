<?php

namespace App\Http\Livewire;

use App\Models\Timezone;
use Illuminate\Support\Collection;
use Livewire\Component;

class UpdateTimezone extends Component
{
    public Collection $timezones;

    public string $search = '';

    public Timezone|null $timezone;

    protected $rules = [
        'search' => 'required',
    ];

    public function __construct()
    {
        $this->timezones = collect();
    }

    public function render()
    {
        return view('livewire.update-timezone');
    }

    public function updatedSearch($value)
    {
        if (! $value) {
            $this->timezones = collect();
        } else {
            $this->timezones = Timezone::where('label', 'like', '%'.$value.'%')->get();
        }
    }

    public function timezoneSelected(Timezone $timezone)
    {
        $this->timezone = $timezone;
        $this->search = $timezone->label;
        $this->timezones = collect();
    }

    public function update()
    {
        $this->validate();

        if ($this->timezone) {
            request()->user()->update(['timezone' => $this->timezone->value]);

            $this->emit('user::updated');
        }
    }
}
