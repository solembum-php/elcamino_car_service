@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <p><a href="{{ route('admin.services.index') }}">Back to Services</a></p>
                <p><a href="{{ route('admin.cars.index') }}">Back to Cars</a></p>
                <div class="panel-heading"><b>{{trans('images.template.all_images')}}</b></div>

                <div class="panel-body">
		    <!-- Текущие задачи -->
		    @if (count($images) > 0)
		    <div class="panel panel-default">
			<div class="panel-heading">
			    {{trans('images.template.all_images')}}
			</div>
			<div class="panel-body">
			    <form action="{{route('admin.images.create')}}" method="post">
				{{ csrf_field() }}
				{{ method_field('GET') }}
				<button><i class="fa fa-plus" style="font-size: 24px;color: darkseagreen"></i>{{trans('images.template.create_new_image')}}</button>
			    </form>
			    <table class="table table-striped task-table">
				<!-- Заголовок таблицы -->
				<thead>
				    <tr>
					<th>{{trans('images.template.image')}}</th>
					<th>{{trans('images.template.action')}}</th>
				    </tr>
				</thead>
				<!-- Тело таблицы -->
				<tbody>
				    @foreach ($images as $image)
				    <tr>
					<!-- Имя задачи -->
					<td class="table-text">
                                            <div><a href="{{route('admin.images.index')}}"><img src="{{ $image->url }}" height="150"/></a></div>
					</td>
					<td style="display: flex">
					    <form action="{{route('admin.images.destroy',$image->id)}}" method="post">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button><i class="fa fa-trash" style="font-size: 30px;color: lightsalmon"></i></button>
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
