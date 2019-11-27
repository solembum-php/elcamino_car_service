@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><b>{{trans('photos.template.all_photos')}}</b></div>

                <div class="panel-body">
		    <form action="{{route('photos.uploadfile')}}" enctype="multipart/form-data" method="post">
			{{ csrf_field() }}
			{{ method_field('POST') }}
			<p>Загрузите ваши фотографии на сервер</p>
			<p>
			    <input type="file" name="photo" multiple accept="image/*,image/jpeg">
			    <input type="submit" value="Отправить">
			</p>
		    </form>
		    <!-- Текущие задачи -->
		    @if (count($photos) > 0)
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
					<th>{{trans('services.template.action')}}</th>
				    </tr>
				</thead>
				<!-- Тело таблицы -->
				<tbody>
				    @foreach ($photos as $photo)
				    <tr>
					<!-- Имя задачи -->
					<td class="table-text">
					    <div>{{ $photo->url }}</div>
					</td>
					<td style="display: flex">
					    <form action="{{route('photos.destroy',$photo->id)}}" method="post">
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
