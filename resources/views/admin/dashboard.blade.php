@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">



            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">
                        Категорий <span class="badge badge-light">0</span>
                    </button>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">
                        Материалов <span class="badge badge-light">0</span>
                    </button>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">
                        Посетителей <span class="badge badge-light">0</span>
                    </button>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">
                        Сегодня <span class="badge badge-light">0</span>
                    </button>
                </div>
            </div>




        </div>

        <div class="row">



            <div class="col-sm-6">
                <a class="btn btn-block btn-success" href="">Создать категорию</a>
                <a class="list-group-item">
                    <h4 class="list-group-item">Категория первая</h4>
                </a>
                <p class="list-group-item-">Кол-во материалов</p>
            </div>


            <div class="col-sm-6">
                <a class="btn btn-block btn-success" href="">Добавить материал</a>
                <a class="list-group-item">
                    <h4 class="list-group-item">Материал первый</h4>
                </a>
                <p class="list-group-item-">Категория</p>
            </div>



        </div>

    </div>
@endsection