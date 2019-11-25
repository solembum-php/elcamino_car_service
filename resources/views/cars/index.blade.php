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
			    <form action="{{route('cars.create')}}" method="post">
				{{ csrf_field() }}
				{{ method_field('GET') }}
				<button><i class="fa fa-plus" style="font-size: 24px;color: darkseagreen"></i>{{trans('cars.template.create_new_car')}}</button>
			    </form>
			    <table class="table table-striped task-table">
				<!-- Заголовок таблицы -->
				<thead>
				    <tr>
					<th>{{trans('cars.template.car')}}</th>
					<th>{{trans('cars.template.action')}}</th>
				    </tr>
				</thead>
				<!-- Тело таблицы -->
				<tbody>
				    @foreach ($cars as $car)
				    <tr>
					<!-- Имя задачи -->
					<td class="table-text">
					    <div>{{ $car->name }}</div>
					</td>
					<td style="display: flex">
					    <form action="{{route('cars.destroy',$car->id)}}" method="post">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button><i class="fa fa-trash" style="font-size: 30px;color: lightsalmon"></i></button>
					    </form>
					    <form action="{{route('cars.edit',$car->id)}}" method="get">
						{{ csrf_field() }}
						{{ method_field('GET') }}
						<button><i class="fa fa-edit" style="font-size: 30px;color: lightseagreen"></i></button>
					    </form>
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
