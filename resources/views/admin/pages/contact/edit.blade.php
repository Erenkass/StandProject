@extends('admin.layout.app')

@section('customcss')
    

@endsection

@section('content')

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">İletişim</h4>

                    @if($errors)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}

                            </div>
                        @endforeach
                    @endif

                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif


                    <form action="{{route('contact.update')}}" class="forms-sample" method="POST" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="email">E-Posta</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$contact->email ?? ''}}" placeholder="E-Posta">
                        </div>
                        <div class="form-group">
                            <label for="telephone">Telefon</label>
                            <input type="text" class="form-control" id="telephone" name="telephone" value="{{$contact->telephone ?? ''}}" placeholder="Telefon">
                        </div>
                        <div class="form-group">
                            <label for="whatsapp">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{$contact->whatsapp ?? ''}}" placeholder="Whatsapp telefon numarası">
                        </div>
                        <div class="form-group">
                            <label for="address">Adres</label>
                            <textarea type="text" class="form-control" id="address" name="address"  placeholder="Adres">{!! $contact->address ?? ''!!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="about">Hakkımızda</label>
                            <textarea type="text" class="form-control" id="about" name="about"  placeholder="Hakkımızda">{!! $contact->about ?? ''!!}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Onayla</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
