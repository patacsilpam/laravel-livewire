<div class="h-screen grid place-items-center">
   <div class="flex flex-row-reverse gap-3">
        <button class="bg-indigo-500 hover:bg-indigo-600 p-2 w-9 rounded text-white" wire:click="increment()">+</button>
        <span class="text-center mt-2 px-2">{{ $count }}</span>
        <input type="number" wire:model="number">
        <button class="bg-indigo-500 hover:bg-indigo-600 p-2 w-9 rounded text-white"  wire:click="decrement()" {{$disabled ? 'disabled' : ''}} >-</button>
   </div>
</div>