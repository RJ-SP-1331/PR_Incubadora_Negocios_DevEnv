@extends('layouts.app')

@section('content')
<link rel="stylesheet" href=".../">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            </div>
        </div>
    </div>
</div>

<header class="container-fluid bg-dark p-3">
    <h2 class="text-white">Administrar Estudiantes</h2>
</header>

<section class="main_container bg-dark border-top border-white">
    <div class="content bg-white">
        <div class="text-white m-5 row body_main">
            <form class="row g-3">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Student Name" aria-label="Student Name" aria-describedby="basic-addon2">
                        <button type="submit" class="btn btn-primary" style="font-size: 20px;">
                            <i class="fa-solid fa-1x fa-magnifying-glass"></i>
                            Buscar
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-dark text-white float-end" style="font-size: 20px;">Agregar Estudiante</button>
                </div>

            </form>
            <div class="p-4 mt-3 rounded-4 body_card">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col" class="col-md-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td></td>
                            <td>
                                <a class="btn btn-light">Edit</a>
                                <a class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

@endsection