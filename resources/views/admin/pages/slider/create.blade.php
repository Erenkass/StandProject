@extends('admin.layout.app')


@section('content')

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Slider</h4>
                    @if(session()->get('success'))
                        <div class="alert alert-success">{{session()->get('success')}}</div>
                    @endif
                    <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="name">Başlık</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Başlık">
                        </div>
                        <div class="form-group">
                            <label for="content">İçerik</label>
                            <input type="text" class="form-control" id="content" name="content" placeholder="İçerik">
                        </div>
                        <div class="form-group">
                            <label for="status">Durum</label>
                            <select name="status" class="form-control" id="status">
                                <option value="0">Pasif</option>
                                <option value="1" selected>Aktif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Resim</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" name="image" disabled placeholder="Fotoğraf Yükle">
                                <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Yükle</button>
                        </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Onayla</button>
                        <button class="btn btn-light">İptal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
