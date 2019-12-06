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
		    <form action="{{ route('admin.cars.store') }}" method="POST" class="form-horizontal">
			{{ csrf_field() }}

			<!-- Имя задачи -->
			<div class="form-group">
			    <label for="name" class="col-sm-3 control-label">{{trans('cars.template.car')}}</label>
			    <div class="col-sm-6">
				<input type="text" id="name" name="name" class="form-control">
			    </div>
			</div>
			<label for="service" class="col-sm-3 control-label">{{trans('services.template.service')}}</label>
			<div class="form-group">
			    <div class="col-sm-6">
				<select name="service_id" id="service" class="form-control">
				    @foreach ($services as $service)
				    <option value="{{$service->id}}">{{$service->name}}</option>
				    @endforeach
				</select>
			    </div>
			</div>

			<!-- Кнопка добавления задачи -->
			<div class="form-group">
			    <div class="col-sm-offset-3 col-sm-6">
				<button type="submit" class="btn btn-default">
				    <i class="fa fa-plus"></i>{{trans('cars.template.add_car')}}
				</button>
			    </div>
			</div>
		    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
