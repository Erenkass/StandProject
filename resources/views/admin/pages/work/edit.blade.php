@extends('admin.layout.app')

@section('customcss')

@endsection

@section('content')

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Çalışmalar</h4>
                    @if(session()->get('success'))
                        <div class="alert alert-success">{{session()->get('success')}}</div>
                    @endif
                    <form action="{{route('work.update',$work->id)}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('PUT')

                        @if($work->image != null)
                            <div class="form-group">
                                <div class="input-group col-xs-12">
                                    <img src="{{asset('img/work/'.$work->image)}}" class="resim-kucult">
                                </div>
                            </div>
                        @endif

                        <div class="form-group">
                            <label>Resim</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" name="image" value="{{$work->image}}" disabled placeholder="Fotoğraf Yükle">
                                <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Yükle</button>
                        </span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Düzenle</button>
                        <button class="btn btn-light">İptal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
