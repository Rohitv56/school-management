<x-filament-panels::page>
    <div class="space-y-6">
        <form wire:submit.prevent="send">
            {{ $this->form }}
            <x-filament::button type="submit" class="mt-2">Send</x-filament::button>
            <x-filament::button color="warning" type="reset" class="mt-2">Reset</x-filament::button>
        </form>
    </div>
    <div class="mt-6">
        {{ $this->table }}
    </div>
</x-filament-panels::page>