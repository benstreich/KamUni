@extends('layouts.master_unsigned')
@section('title', 'Sign In')
@section('content')
<style>
  .login-form {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  padding-bottom: 60px;
}

.col-md-8{
  display: flex;
  justify-content: center;
}

.card {
  border: none;
  box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
}

.card-header {
  color: #FF595B;
  border-bottom: none;
  font-weight: bold;
  padding-bottom: 10px;
  text-transform: uppercase;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-weight: bold;
}

.form-control {
  border: 1px solid #E2E2E2;
  border-radius: 3px;
  height: 20px;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
}

.btn-primary {
  background-color: #0066CC;
  border: none;
  border-radius: 3px;
  color: #FFFFFF;
  font-weight: bold;
  height: 40px;
  padding: 10px 20px;
  text-transform: uppercase;
}

.btn-primary:hover {
  background-color: #0050A0;
}

</style>

<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Passwort zurücksetzen</div>
                  <div class="card-body">
  
                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
  
                      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Adresse</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Passwort zurücksetzen
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection