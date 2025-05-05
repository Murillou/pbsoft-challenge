<x-layout title="Cadastrar">
    <div class="card p-4 shadow form-auth-card">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label label-input">Nome completo: </label>
                <input type="text" name="name" id="name" class="form-control" required />
            </div>

            <div class="form-group">
                <label for="birthday" class="form-label label-input">Data de nascimento: </label>
                <input type="date" name="birthday" id="birthday" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="document" class="form-label label-input">CPF ou CNPJ: </label>
                <input type="text" name="document" id="document" class="form-control" required />
            </div>

            <div class="form-group">
                <label for="image_url" class="form-label label-input">Foto: </label>
                <input type="file" id="image_url" name="image_url" class="form-control" accept="image/png, image/jpeg, image/jpg" />
            </div>

            <div class="form-group">
                <label for="social-name">Nome social: </label>
                <input type="text" id="social-name" name="social-name" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Registrar</button>
        </form>
    </div>
</x-layout>
