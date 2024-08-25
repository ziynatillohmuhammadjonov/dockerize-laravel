@extends('admin.layout.admin')
@section('css')
    <link rel="stylesheet" href={{ asset('admin/assets/bundles/datatables/datatables.min.css') }}>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
    <h1>Blogs page</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between" >
                    <h4 >Blogs Datatable</h4>
                    <a href="{{route('admin.blogs.create')}}" class="btn btn-info fs-2">
                        Create blog
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                            <tr>
                                <th class="text-center">
                                    T/R
                                </th>
                                <th>Title</th>
                                <th>Intro</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>{{$blog->name_uz}}</td>
                                <td>{{$blog->intro_uz}}</td>
                                <td>
                                    <img alt="image" src="admin/posts/{{$blog->image}}" width="35">
                                </td>
                                <td><a href="#" class="btn btn-primary">Detail</a></td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('admin/assets/bundles/datatables/datatables.min.js')}}"></script>
    <script
        src="{{asset('admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/page/datatables.js')}}"></script>
@endsection
