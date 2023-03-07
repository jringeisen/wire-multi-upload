<?php

namespace Tests\Feature\Calendar;

use App\Http\Livewire\UpdateTimezone;
use App\Models\Timezone;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutEvents;
use Livewire\Livewire;
use Tests\TestCase;

class TimezoneTest extends TestCase
{
    use WithoutEvents;
    use RefreshDatabase;

    protected User $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    /**
     * @test
     *
     * @group Feature
     */
    public function user_can_update_their_timezone_and_clear_their_timezone()
    {
        Timezone::factory()->create([
            'label' => '(GMT-10:00) Pacific/Honolulu',
            'value' => 'Pacific/Honolulu',
        ]);

        Timezone::factory()->create([
            'label' => '(GMT-10:00) America/New_York',
            'value' => 'America/New_York',
        ]);

        $this->assertDatabaseHas('timezones', [
            'value' => 'America/New_York',
            'value' => 'Pacific/Honolulu',
        ]);

        Livewire::actingAs($this->user)
            ->test(UpdateTimezone::class)
            ->set('search', 'Honolulu')
            ->assertSet('timezones', Timezone::where('label', 'like', '%Honolulu%')->get());
    }

    /**
     * @test
     *
     * @group Feature
     */
    public function user_can_select_a_timezone()
    {
        Timezone::factory()->create([
            'label' => '(GMT-10:00) Pacific/Honolulu',
            'value' => 'Pacific/Honolulu',
        ]);

        Timezone::factory()->create([
            'label' => '(GMT-10:00) America/New_York',
            'value' => 'America/New_York',
        ]);

        $this->assertDatabaseHas('timezones', [
            'value' => 'America/New_York',
            'value' => 'Pacific/Honolulu',
        ]);

        Livewire::actingAs($this->user)
            ->test(UpdateTimezone::class)
            ->call('timezoneSelected', Timezone::where('value', 'Pacific/Honolulu')->first())
            ->assertSet('timezone', Timezone::where('value', 'Pacific/Honolulu')->first())
            ->assertSet('search', Timezone::where('value', 'Pacific/Honolulu')->first()->label)
            ->assertSet('timezones', collect());
    }

    /**
     * @test
     *
     * @group Feature
     */
    public function search_property_is_required_when_updating_a_timezone()
    {
        Livewire::actingAs($this->user)
            ->test(UpdateTimezone::class)
            ->set('search', '')
            ->call('update')
            ->assertHasErrors(['search' => 'required']);
    }

    /**
     * @test
     *
     * @group Feature
     */
    public function user_can_update_their_timezone()
    {
        Timezone::factory()->create([
            'label' => '(GMT-10:00) Pacific/Honolulu',
            'value' => 'Pacific/Honolulu',
        ]);

        Timezone::factory()->create([
            'label' => '(GMT-10:00) America/New_York',
            'value' => 'America/New_York',
        ]);

        $this->assertEquals($this->user->timezone, null);

        Livewire::actingAs($this->user)
            ->test(UpdateTimezone::class)
            ->call('timezoneSelected', Timezone::where('value', 'Pacific/Honolulu')->first())
            ->call('update')
            ->assertEmitted('user::updated');

        $this->assertEquals($this->user->timezone, 'Pacific/Honolulu');
    }
}
