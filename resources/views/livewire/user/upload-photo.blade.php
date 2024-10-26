<div>

    <h1>Atualizar foto de perfil</h1>
    <form action="" method="post" wire:submit.prevent='storagePhoto'>

        <input type="file" wire:model="photo">
        @error('photo')
            {{ $message }}
        @enderror

        <button type="submit">Upload foto</button>
    </form>
</div>
