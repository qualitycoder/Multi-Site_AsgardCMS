<div class="box-body">
    <p>{!! Form::simpleInput('title', 'Title', $errors, $site) !!}</p>
    <p>{!! Form::simpleInput('url', 'Web Address', $errors, $site) !!}</p>
    <p>{!! Form::simpleInput('address_1', 'Address 1', $errors, $site) !!}</p>
    <p>{!! Form::simpleInput('address_2', 'Address 2', $errors, $site) !!}</p>
    <p>{!! Form::thirdWidthInput('city', 'City', $errors, $site) !!}</p>
    <p>{!! Form::thirdWidthInput('state', 'State', $errors, (object)['state'=>env('STATE')], ['readonly'=>'readonly'], $site) !!}</p>
    <p>{!! Form::thirdWidthInput('zip', 'Zip', $errors, $site) !!}</p>
    <p>{!! Form::simpleInput('phone', 'Phone Number', $errors, $site) !!}</p>
</div>