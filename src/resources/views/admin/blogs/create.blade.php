@extends('admin.layout.admin')
@section('content')
    <h2>Blog create</h2>
    <form method="POST" action="{{route('admin.settings.store')}}" class="col-12" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <h4>Create blog</h4>
            </div>
            <div class="card-body">
                <div class="form-group @error('image') is-invalid @enderror">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                    @error('image')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Name (UZ)</label>
                    <input type="text" class="form-control {{ $errors->has('name_uz') ? 'is-invalid' : '' }}"
                           name="name_uz" value="{{old('name')}}">
                    @if($errors->has('name_uz'))
                        @foreach($errors->get('name_uz') as $error)
                            <div class="invalid-feedback">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="form-group">
                    <label>Name (RU)</label>
                    <input type="text" class="form-control {{ $errors->has('name_ru') ? 'is-invalid' : '' }}"
                           name="name_ru" value="{{old('name')}}">
                    @if($errors->has('name_ru'))
                        @foreach($errors->get('name_ru') as $error)
                            <div class="invalid-feedback">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="form-group">
                    <label>Name (EN)</label>
                    <input type="text" class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}"
                           name="name_en" value="{{old('name')}}">
                    @if($errors->has('name_en'))
                        @foreach($errors->get('name_en') as $error)
                            <div class="invalid-feedback">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="form-group">
                    <label>Intro (UZ)</label>
                    <input type="text" class="form-control {{ $errors->has('intro_uz') ? 'is-invalid' : '' }}"
                           name="intro_uz" value="{{old('name')}}">
                    @if($errors->has('intro_uz'))
                        @foreach($errors->get('intro_uz') as $error)
                            <div class="invalid-feedback">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="form-group">
                    <label>Intro (RU)</label>
                    <input type="text" class="form-control {{ $errors->has('intro_ru') ? 'is-invalid' : '' }}"
                           name="intro_ru" value="{{old('name')}}">
                    @if($errors->has('intro_ru'))
                        @foreach($errors->get('intro_ru') as $error)
                            <div class="invalid-feedback">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="form-group">
                    <label>Intro (EN)</label>
                    <input type="text" class="form-control {{ $errors->has('intro_en') ? 'is-invalid' : '' }}"
                           name="intro_en" value="{{old('name')}}">
                    @if($errors->has('intro_en'))
                        @foreach($errors->get('intro_en') as $error)
                            <div class="invalid-feedback">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="form-group">
                    <label>Body (UZ)</label>
                    <textarea class="form-control ckeditor @error('body_uz') is-invalid @enderror"
                              name="body_uz">{{old('body_uz')}}</textarea>
                    @error('body_uz')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label>Body (RU)</label>
                    <textarea class="form-control ckeditor @error('body_ru') is-invalid @enderror"
                              name="body_ru">{{old('body_ru')}}</textarea>
                    @error('body_ru')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label>Body (EN)</label>
                    <textarea class="form-control ckeditor @error('body_en') is-invalid @enderror"
                              name="body_en">{{old('body_en')}}</textarea>
                    @error('body_en')
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
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
    <script>


    </script>

@endsection
