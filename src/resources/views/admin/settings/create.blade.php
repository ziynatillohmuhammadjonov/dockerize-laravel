@extends('admin.layout.admin')
@section('content')
    <h2>Setting create</h2>
    <form method="POST" action="{{route('admin.settings.store')}}" class="col-12">
        @csrf
        <div class="card">
            <div class="card-header">
                <h4>Create settings</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{old('name')}}">
                    @if($errors->has('name'))
                        @foreach($errors->get('name') as $error)
                            <div class="invalid-feedback">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="form-group">
                    <label>Value uz</label>
                    <input type="text" class="form-control @error('value_uz') is-invalid @enderror" name="value_uz" value="{{old('value_uz')}}">
                  @error('value_uz')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label>Value ru</label>
                    <input type="text" class="form-control" name="value_ru">
                </div>
                <div class="form-group">
                    <label>Value en</label>
                    <input type="text" class="form-control" name="value_en">
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
            </div>
        </div>

    </form>
@endsection
