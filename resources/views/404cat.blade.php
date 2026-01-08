@extends('Master_page')
@section('title','404')
@section('content')
<div class="d-flex flex-column justify-content-center align-items-center vh-100 text-center bg-light">
    <h1 class="display-1 fw-bold text-danger">404</h1>
    <h3 class="mb-4">Oops! Categorie non trouvee</h3>
    <p class="mb-4 text-muted">
        La page que vous cherchez n'existe pas ou a été déplacée.
    </p>
    <a href="/" class="btn btn-primary btn-lg">Retour à l'accueil</a>
</div>
@endsection