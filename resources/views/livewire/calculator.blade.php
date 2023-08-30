<div class="flex h-screen items-center justify-center">
    <div class="flex flex-col md:flex-row gap-2">
        <input type="number" wire:model="number1" placeholder="Enter number 1">
        <select wire:model="operator" wire:model="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" wire:model="number2" placeholder="Enter number 2">
        <button wire:click="calculate()" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
                {{ $disabled ? ' disabled' : ''}}>calculate</button>
        <button wire:click="res()" class="py-2 px-4 bg-orange-500 hover:bg-orange-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
                {{ $disabled ? ' ' : 'disabled'}}>reset</button>
        <p class="text-center py-5">{{$result}}</p>
    </div>
</div>
