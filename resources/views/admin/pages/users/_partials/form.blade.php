
@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome: </label>
    <input type="text" name="name" value="{{ $user->name ?? old('name')  }}" class="form-control">
</div>
<div class="form-group">
    <label>Usuário: </label>
    <input type="text" name="username" value="{{ $user->username ?? old('username') }}" class="form-control">
</div>
<div class="form-group">
    <label>CEP: </label>
    <input type="number" name="zipcode" value="{{ $user->zipcode ?? old('zipcode') }}" class="form-control">
</div>
<div class="form-group">
    <label>E-mail: </label>
    <input type="email" name="email" value="{{ $user->email ?? old('email') }}" class="form-control">
</div>
<div class="form-group">
    <label>Senha: </label>
    <input type="password" name="password" value="{{ $user->password ?? old('password') }}" class="form-control">
</div>

<button type="submit" class="btn btn-success">Editar</button>