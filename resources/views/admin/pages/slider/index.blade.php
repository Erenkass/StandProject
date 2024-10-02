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
                        <a href="{{route('slider.create')}}" class="btn btn-primary">Yeni</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Resim</th>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th>Link</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($sliders) && $sliders->count() > 0)
                                @foreach($sliders as $slider)
                                <tr>
                                    <td class="py-1">
                                        <img src="{{asset("img/slider/".$slider->image)}}" alt="image"/>
                                    </td>
                                    <td>{{$slider->name}}</td>
                                    <td>{{$slider->content}}</td>
                                    <td>{{$slider->link}}</td>
                                    <td>
                                        <div class="checkbox" itemid="{{$slider->id}}">
                                            <label>
                                                <input type="checkbox" class="durum" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger" {{ $slider->status == '1' ? 'checked' : '' }}>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="d-flex">
                                        <a class="btn btn-primary mr-2" href="{{route('slider.edit',$slider->id)}}">Düzenle</a>
                                        <form action="{{route('slider.delete',$slider->id)}}" method="post">
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

@section('customjs')

            <script>
                $(document).on('change','.durum',function (e){
                    var id = $(this).closest('.checkbox').attr('itemid');
                    var status = $(this).prop('checked') ? 1 : 0;
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                        },
                        type:"POST",
                        url:"{{route('slider.status')}}",
                        data:{
                            id: id,
                            status: status,
                        },
                        success: function (response){
                            if (response.status === true){
                                alertify.success("Durum Aktif Edildi");
                            }
                            else{
                                alertify.error('Durum Pasif Edildi');
                            }
                        }
                    });
                });
            </script>


@endsection
