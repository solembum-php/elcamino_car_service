@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><b>{{trans('services.template.all_services')}}</b></div>

                <div class="panel-body">
		    <!-- Текущие задачи -->
		    @if (count($services) > 0)
		    <div class="panel panel-default">
			<div class="panel-heading">
			    {{trans('services.template.all_services')}}
			</div>
			<div class="panel-body">
			    
			    <table class="table table-striped task-table">
				<!-- Заголовок таблицы -->
				<thead>
				    <tr>
					<th>{{trans('services.template.service')}}</th>
				    </tr>
				</thead>
				<!-- Тело таблицы -->
				<tbody>
				    @foreach ($services as $service)
				    <tr>
					<!-- Имя задачи -->
					<td class="table-text">
					    <div><a href="{{route('cars.index')}}">{{ $service->name }}</a></div>
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
