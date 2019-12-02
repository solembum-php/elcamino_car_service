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
		    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row">
			    <div class="col-md-6">
				<input type="file" name="image" class="form-control">
			    </div>
			    <div class="col-md-6">
				<button type="submit" class="btn btn-success">Upload</button>
			    </div>
			</div>
		    </form>
		    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
