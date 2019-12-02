@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><b>{{trans('cars.template.all_cars')}}</b></div>

                <div class="panel-body">
		    <!-- Текущие задачи -->
		    @if (count($cars) > 0)
		    <div class="panel panel-default">
			<div class="panel-heading">
			    {{trans('cars.template.all_cars')}}
			</div>
			<div class="panel-body">
			    
			    <table class="table table-striped task-table">
				<!-- Заголовок таблицы -->
				<thead>
				    <tr>
					<th>{{trans('cars.template.car')}}</th>
				    </tr>
				</thead>
				<!-- Тело таблицы -->
				<tbody>
				    @foreach ($cars as $car)
				    <tr>
					<!-- Имя задачи -->
					<td class="table-text">
					    <div><a href="{{route('images.index')}}">{{ $car->name }}</a></div>
					</td>
				    </tr>
				    @endforeach
				</tbody>
			    </table>
			</div>
		    </div>
		    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
