@extends('layouts.app')
@section('content')
<!-- Bootstrap шаблон... -->
<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
    <!-- Форма новой задачи -->
    <form action="{{ route('admin.services.update',$service->id) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
	{{ method_field('PUT') }}
        <!-- Имя задачи -->
        <div class="form-group">
            <label for="service-name" class="col-sm-3 control-label">{{trans('services.template.service')}}</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="service-name" class="form-control" value="{{$service->name}}">
            </div>
        </div
        <!-- Кнопка добавления задачи -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i>{{trans('services.template.save_service')}}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
