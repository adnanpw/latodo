@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1>Welcome!</h1>
  <p>Let's create something awesome this week.</p>
</div>


<div class="row">
  <div class="col-lg-6">
  <form action="{{ route('todo.update', $todo->id) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="input-group">
            <input type="text" name="task" value="{{ old('task', $todo->task) }}" class="form-control" placeholder="Cooking pie with cream">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Submit!</button>
              </span>
        </div><!-- /input-group -->  
    </form>  
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
    
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->  
@endsection