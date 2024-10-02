@extends('admin.layout.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tablo</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                   @if(session()->get('success'))
                        <div class="alert alert-success">{{session()->get('success')}}</div>
                    @endif

                    <div >
                        <a href="{{route('service.create')}}" class="btn btn-primary">Yeni</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Resim</th>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($services) && $services->count() > 0)
                                @foreach($services as $service)
                                <tr>
                                    <td class="py-1">
                                        <img src="{{asset("img/icon/".$service->image)}}" alt="image"/>
                                    </td>
                                    <td>{{$service->name}}</td>
                                    <td>{{$service->content}}</td>
                                    <td class="d-flex">
                                        <a class="btn btn-primary mr-2" href="{{route('service.edit',$service->id)}}">Düzenle</a>
                                        <form action="{{route('service.delete',$service->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger ">Sil</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach

                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection

