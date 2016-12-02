<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        body {
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ url('contact') }}" method="POST">

                    {{ csrf_field() }}
                
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name')}}">

                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email')}}">

                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" rows="5">{{ old('message')}}</textarea>
                        
                        <small class="text-danger">{{ $errors->first('message') }}</small>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>