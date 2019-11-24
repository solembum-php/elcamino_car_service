@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Services</div>

                <div class="panel-body">
		    <!-- Текущие задачи -->
		    @if (count($services) > 0)
		    <div class="panel panel-default">
			<div class="panel-heading">
			    {{trans('tasks.template.all_tasks')}}
			</div>
			<div class="panel-body">
			    <form action="{{route('services.create')}}" method="post">
				{{ csrf_field() }}
				{{ method_field('GET') }}
				<button><i class="fa fa-plus" style="font-size: 24px;color: darkseagreen"></i> Create new service</button>
			    </form>
			    <table class="table table-striped task-table">
				<!-- Заголовок таблицы -->
				<thead>
				    <tr>
					<th>{{trans('tasks.template.task')}}</th>
					<th>{{trans('tasks.template.action')}}</th>
				    </tr>
				</thead>
				<!-- Тело таблицы -->
				<tbody>
				    @foreach ($services as $service)
				    <tr>
					<!-- Имя задачи -->
					<td class="table-text">
					    <div>{{ $service->name }}</div>
					</td>
					<td style="display: flex">
					    <form action="{{route('services.destroy',$service->id)}}" method="post">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button><i class="fa fa-trash" style="font-size: 30px;color: lightsalmon"></i></button>
					    </form>
					    <form action="{{route('services.edit',$service->id)}}" method="get">
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
