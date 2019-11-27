@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{trans('cars.template.cars')}}</div>

                <div class="panel-body">
		    <!-- Отображение ошибок проверки ввода -->
		    @include('common.errors')

		    <!-- Форма новой задачи -->
		    Upload Photos
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
