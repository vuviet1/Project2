<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Thêm lớp</h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="idClass" class="form-label">ID</label>
                                    <input type="text" class="form-control" placeholder="Mã lớp" name="id" disabled>
                                </div>
                                <div class="col">
                                    <label for="nameClass" class="form-label">Tên lớp</label>
                                    <input type="text" class="form-control" placeholder="Tên lớp" name="nameClass">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <br>
                        <a class="btn btn-primary" href="{{route('class')}}">Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
