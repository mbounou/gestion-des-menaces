@extends('layoutsM.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Charger le fichier log</h1>
    </div>

  
    <div class="row">

      <!-- Area Chart -->
      <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Fichier log pour catégorisation des ménaces identifiées</h6>
            
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <form class="user">
              <div class="form-group row">
                  <input type="file"  id="exampleFirstName" placeholder="Fichier log" required>
              </div>
              <div class="form-group row">
                  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-refresh fa-sm text-white-50"></i> Catégoriser la menace</a>
              </div>
               
              </form>
          </div>
        </div>
        </div>
      </div>
    </div>
@endsection