<div class="form-auth-card card p-4 shadow">
    <form method="POST" action="{{ $action }}" enctype="multipart/form-data">
        @csrf
        @isset($client)
            @method('PUT')
        @endisset

        <div class="form-group">
            <label for="name" class="form-label label-input">Nome completo: </label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $client->name ?? '') }}" required />
            @error('name')
            <x-error> {{ $message }} </x-error>
            @enderror
        </div>

        <div class="form-group">
            <label for="birthday" class="form-label label-input">Data de nascimento: </label>
            <input type="date" name="birthday" id="birthday" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday', $client->birthday ?? '') }}" required />
            @error('birthday')
            <x-error> {{ $message }} </x-error>
            @enderror
        </div>

        <div class="form-group">
            <label for="document" class="form-label label-input">CPF ou CNPJ: </label>
            <input type="text" name="document" id="document" class="form-control @error('document') is-invalid @enderror" value="{{ old('document', $client->document ?? '') }}" required />
            @error('document')
            <x-error> {{ $message }} </x-error>
            @enderror
        </div>

        <div class="form-group">
            <label for="image_url" class="form-label label-input">Foto: </label>
            <input type="file" id="image_url" name="image_url" class="form-control @error('image_url') is-invalid @enderror" value="{{ old('image_url', $client->image_url ?? '') }}" accept="image/png, image/jpeg, image/jpg" />
            @error('image_url')
            <x-error> {{ $message }} </x-error>
            @enderror
        </div>

        <div class="form-group">
            <label for="social_name">Nome social: </label>
            <input type="text" id="social_name" name="social_name" class="form-control @error('social_name') is-invalid @enderror" value="{{ old('social_name', $client->social_name ?? '') }}">
            @error('social_name')
            <x-error> {{ $message }} </x-error>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-3">{{ $buttonText }}</button>
    </form>
</div>
