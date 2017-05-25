<div class="box-body">
    <p>{!! Form::simpleInput('title', 'Title', $errors) !!}</p>
    <p>{!! Form::simpleInput('url', 'Web Address', $errors) !!}</p>
    <p>{!! Form::simpleInput('address_1', 'Address 1', $errors) !!}</p>
    <p>{!! Form::simpleInput('address_2', 'Address 2', $errors) !!}</p>
    <p>{!! Form::thirdWidthInput('city', 'City', $errors) !!}</p>
    <p>{!! Form::thirdWidthInput('state', 'State', $errors, (object)['state'=>env('STATE')], ['readonly'=>'readonly']) !!}</p>
    <p>{!! Form::thirdWidthInput('zip', 'Zip', $errors) !!}</p>
    <p>{!! Form::simpleInput('phone', 'Phone Number', $errors) !!}</p>
</div>