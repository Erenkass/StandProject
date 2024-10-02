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

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>Telefon</th>
                                <th>Whatsapp</th>
                                <th>Adres</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($contacts) && $contacts->count() > 0)
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->telephone}}</td>
                                    <td>{{$contact->whatsapp}}</td>
                                    <td>{{$contact->address}}</td>
                                    <td>
                                        <div class="checkbox" itemid="{{$contact->id}}">
                                            <label>
                                                <input type="checkbox" class="durum" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger" {{ $contact->status == '1' ? 'checked' : '' }}>
                                            </label>
                                        </div>
                                    </td>
                                    <td>{{$contact->ip}}</td>

                                    <td class="d-flex">
                                        <a class="btn btn-primary mr-2" href="{{route('contact.edit',$contact->id)}}">Düzenle</a>

                                        <button type="button" class="silBtn btn btn-danger">Sil</button>
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

