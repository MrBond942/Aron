<div class="form-group">
  {!! Form::label('title', 'Title:') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Content:') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('published_at', 'Post On:') !!}
  {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
