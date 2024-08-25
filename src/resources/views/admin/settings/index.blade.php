@extends('admin.layout.admin')
@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                {{session('success')}}
            </div>
        </div>
    @endif
    <h2>Settings</h2>
    <div class="col-12 ">
        <div class="card">
            <div class="card-header d-flex justify-content-between" >
                <h4 >Settings Table</h4>
                <a href="{{route('admin.settings.create')}}" class="btn btn-info fs-2">
                    Create setting
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody><tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Value uz</th>
                            <th>Value ru</th>
                            <th>Value en</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($settings as $setting)
                        <tr>
                            <td>1</td>
                            <td>{{$setting->name}}</td>
                            <td>{{$setting->value_uz}}</td>
                            <td>{{$setting->value_ru}}</td>
                            <td>{{$setting->value_en}}</td>
                            <td><a href="{{route('admin.settings.edit', $setting->id)}}" class="btn btn-primary">Edit</a></td>
                        </tr>
                        @endforeach

                        </tbody></table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    {{$settings->links()}}
                </nav>
            </div>
        </div>
    </div>
@endsection
