<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Lớp</h5>
                <a type="button" style="margin-bottom: 30px" class="btn btn-primary m-1" href="{{route('addclass')}}">Add</a>
                <br>
                <br>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">Mã lớp</th>
                                <th scope="col">Ngành học</th>
                                <th scope="col">Niên khóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($class))
                                @foreach($class as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->name_class}}</td>
                                <td>{{$item->name_majors}}</td>
                                <td>{{$item->number_course}}</td>
                            </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
