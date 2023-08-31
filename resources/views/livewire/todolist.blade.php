<div class="grid place-items-center h-screen">
    <div class="flex flex-row gap-5">
        <input type="text" wire:model="todoText" placeholder="Type and hit enter">
        <button class="bg-indigo-500 hover:bg-indigo-600 rounded w-[100px] text-white" wire:click="addTodo()">
            Add
        </button>
    </div>
    <div>
        @if (count($todos) == 0)
            <p class="text-gray-600">Empty</p>
        @endif
        @foreach ($todos as $todo)
            <div>
                <div class="flex flex-row items-center gap-5">
                    <input {{$todo->completed ? 'checked' : ''}} type="checkbox" wire:change="toggleTodo({{$todo->id}})">
                    <p class="{{$todo->completed ? 'line-through' : ''}}">{{$todo->name}}</p>
                    <button wire:click="deleteTodo({{$todo->id}})">Delete</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
