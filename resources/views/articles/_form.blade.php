<div class="col-sm-5">
    <div class="form-group">

        {!! Form::label('title', "Title:") !!}

        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('body', "Body:") !!}

        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('published_at', "Publish on:") !!}

        {!! Form::input('date','published_at', date('Y-m-d'),['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('tag_list', "Tags:") !!}

        {!! Form::select('tag_list[]', $tags,[1,2], ['class'=>'form-control', 'multiple']) !!}
    </div>

    <div class="form-group">

        {!! Form::submit($submitButtonText,['class'=>'btn btn-primary center-block']) !!}

    </div>

</div>