@extends('layouts.app')

@section('content')

  <!-- Bootstrap шаблон... -->

  <div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма новой статьи -->
    <form action="{{ url('admin/article') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}

      <!-- Имя статьи -->
      <div class="form-group">
        <label for="article" class="col-sm-3 control-label">Добавить статью</label>

        <div class="col-sm-6">
          <input type="text" name="name" id="article-name" class="form-control">
        </div>
	<div class="col-sm-6">
          <input type="text" name="short_text" id="article-short" class="form-control">
        </div>
	<div class="col-sm-6">
	    <textarea name="name" id="text-name" class="form-control"></textarea>
        </div>
      </div>

      <!-- Кнопка добавления статьи -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> Добавить статью
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- TODO: Текущие статьи -->
@endsection