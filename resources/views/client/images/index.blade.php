@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><b>{{trans('images.template.all_images')}}</b></div>

                <div class="panel-body">
		    <!-- Текущие задачи -->
		    @if (count($images) > 0)
		    <div class="panel panel-default">
			<div class="panel-heading">
			    {{trans('images.template.all_images')}}
			</div>
			<div class="panel-body">
			    <table class="table table-striped task-table">
				<!-- Заголовок таблицы -->
				<thead>
				    <tr>
					<th>{{trans('images.template.image')}}</th>
				    </tr>
				</thead>
				<!-- Тело таблицы -->
				<tbody>
				    @foreach ($images as $image)
				    <tr>
					<!-- Имя задачи -->
					<td class="table-text">
					    <div><img src="{{ $image->url }}"/></div>
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
