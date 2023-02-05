<div>
    <input type="text" name="" wire:model.lazy="name" id="">
    <input type="checkbox" name="" wire:model="isSet" id="">
    <button wire:click="increment">increment</button>
    <button wire:click="decrement">decrement</button>
    {{-- @if ($isSet) --}}
    {{ strtoupper($name) }}
    {{-- @endif --}}
    <h1>{{ $count }}</h1>
</div>
