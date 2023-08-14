<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Danh sách thu phí</h5>
                <a type="button" style="margin-bottom: 30px" class="btn btn-primary m-1" href="{{route('addtuition')}}">Add</a>
                <br>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Lọc theo:</h5>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Khối lớp/Ngành học</label>
                            <select class="col form-select mb-3 form-select form-control" name="statusStudent">
                                <option selected class="form-control">-- Khối lớp/Ngành học --</option>
                                <option value="1" class="form-control">One</option>
                                <option value="2" class="form-control">Two</option>
                                <option value="3" class="form-control">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Khóa học/Năm học</label>
                            <select class="col form-select mb-3 form-select form-control" name="statusStudent">
                                <option selected class="form-control">-- Khóa học/Năm học --</option>
                                <option value="1" class="form-control">One</option>
                                <option value="2" class="form-control">Two</option>
                                <option value="3" class="form-control">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Lớp</label>
                            <select class="col form-select mb-3 form-select form-control" name="statusStudent">
                                <option selected class="form-control">-- Lớp --</option>
                                <option value="1" class="form-control">One</option>
                                <option value="2" class="form-control">Two</option>
                                <option value="3" class="form-control">Three</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-info m-1">Refresh</button>
                        <button type="button" class="btn btn-success m-1">Search</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Chọn</th>
                                <th scope="col">Mã SV</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Điện thoại</th>
                                <th scope="col">Lớp học</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Mark</td>
                                <td>Otto</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
