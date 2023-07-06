<div>
    <form wire:submit.prevent="updateUser">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" wire:model="user.name">
            @error('user.name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" wire:model="user.email">
            @error('user.email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <button type="submit">Update User</button>
        </div>
    </form>
</div>
