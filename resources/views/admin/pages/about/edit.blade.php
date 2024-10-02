@extends('admin.layout.app')

@section('customcss')

@endsection

@section('content')

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hakkımızda</h4>
                    @if(session()->get('success'))
                        <div class="alert alert-success">{{session()->get('success')}}</div>
                    @endif
                    <form action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('PUT')

                        @if($about->image != null)
                            <div class="form-group">
                                <div class="input-group col-xs-12">
                                    <img src="{{asset('img/about/'.$about->image)}}" class="resim-kucult">
                                </div>
                            </div>
                        @endif

                        <div class="form-group">
                            <label>Resim</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" name="image" value="{{$about->image}}" disabled placeholder="Fotoğraf Yükle">
                                <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Yükle</button>
                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Başlık</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$about->name}}" placeholder="Başlık">
                        </div>
                        <div class="form-group">
                            <label for="content">İçerik</label>
                            <textarea type="text" class="form-control" id="content" name="content" placeholder="İçerik">{!! $about->content ?? '' !!}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Düzenle</button>
                        <a href="{{route('about.index')}}" class="btn btn-light">İptal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
