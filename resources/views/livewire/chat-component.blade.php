<div>

    {{-- The whole world belongs to you. --}}
    @foreach ($convo as $convoItem)
        <p>
        {{ $convoItem['username'] }}: {{ $convoItem['message'] }} <br>
        </p>
    @endforeach


    <form wire:submit="submitMessage" action="">
        {{-- <x-text-input wire:model="message" /> --}}
        <input type="text" wire:model="message">
        <button type="submit"> Send </button>
    </form>


</div>
