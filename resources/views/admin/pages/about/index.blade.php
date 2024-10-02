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
                        <div class="alert alert-success">{{ session()->get('success') }}</div>
                    @endif

                    <div>
                        <a href="{{ route('about.create') }}" class="btn btn-primary">Yeni</a>
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
                            @if(!empty($abouts) && $abouts->count() > 0)
                                @foreach($abouts as $about)
                                    <tr>
                                        <td class="py-1">
                                            <img src="{{ asset('img/about/'.$about->image) }}" alt="image" style="width: 150px; height: 150px; object-fit: cover; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"/>
                                        </td>
                                        <td>{{ $about->name }}</td>
                                        <td>{{ $about->content }}</td>
                                        <td class="d-flex">
                                            <a class="btn btn-primary mr-2" href="{{ route('about.edit', $about->id) }}">Düzenle</a>
                                            <form action="{{ route('about.delete', $about->id) }}" method="post" onsubmit="return confirm('Bu öğeyi silmek istediğinize emin misiniz?');">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Sil</button>
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
