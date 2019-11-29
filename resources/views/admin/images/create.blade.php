@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{trans('images.template.images')}}</div>

                <div class="panel-body">
		    <!-- Отображение ошибок проверки ввода -->
		    @include('common.errors')

		    <!-- Форма новой задачи -->
		    <form action="{{ route('images.store') }}" method="POST" class="form-horizontal">
			{{ csrf_field() }}

			<!-- Имя задачи -->
			<div class="form-group">
			    <label for="task" class="col-sm-3 control-label">{{trans('images.template.image')}}</label>

			    <div class="col-sm-6">
				<input type="text" name="name" id="task-name" class="form-control">
			    </div>
			</div>

			<!-- Кнопка добавления задачи -->
			<div class="form-group">
			    <div class="col-sm-offset-3 col-sm-6">
				<button type="submit" class="btn btn-default">
				    <i class="fa fa-plus"></i>{{trans('images.template.add_image')}}
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
