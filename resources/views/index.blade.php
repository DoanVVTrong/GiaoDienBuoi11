<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js"
        integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card py-2" style="border: 2px solid rgb(102,16,242);">
                        <div class="card-header">
                            <b class="fs-5">Thêm mới danh mục</b>
                        </div>
                        <div class="card-body">
                            <label for=""><b>Tên danh mục</b></label>
                            <input type="text" name="" class="form-control my-2"
                                v-model="danhMuc.ten_danh_muc" placeholder="Nhập tên danh mục">
                            <label for=""><b>Slug danh mục</b></label>
                            <input type="text" name="" id="" v-model="danhMuc.slug_danh_muc"
                                class="form-control my-2" placeholder="Nhập số lượng danh mục">
                            <label for=""><b>Tình trạng</b></label>
                            <select class="form-select mt-2" v-model="danhMuc.tinh_trang"
                                aria-label="Default select example">
                                <option selected>Yes</option>
                                <option>No</option>
                                <option>Another</option>
                            </select>
                        </div>
                        <div class="card-footer">
                            <div class="btn text-light" style="background-color: rgb(102,16,242);">
                                <b>Thêm mới</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card" style="border: 2px solid rgb(102,16,242);">
                        <div class="card-header">
                            <b class="fs-5">Danh sách danh mục</b>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>

                                    <tr>
                                        <th class="align-middle text-center">#</th>
                                        <th class="align-middle text-center">Tên danh mục</th>
                                        <th class="align-middle text-center">Sluong danh mục</th>
                                        <th class="align-middle text-center">Tình trạng</th>
                                        <th class="align-middle text-center" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="align-middle text-center">s</th>
                                        <td class="align-middle text-center">s</td>
                                        <td class="align-middle text-center">ss</td>
                                        <td class="align-middle text-center"><a href="">
                                                <div class="btn btn-success" style="min-width: 100px">
                                                    <b>ok</b>
                                                </div>
                                            </a></td>
                                        <td class="align-middle text-center"><a href="">
                                                <div class="btn btn-info text-light" style="min-width: 100px"><b>Cập
                                                        nhật</b></div>
                                            </a></td>
                                        <td class="align-middle text-center"><a href="">
                                                <div class="btn btn-danger" style="min-width: 100px"><b>Xoá</b>
                                                </div>
                                            </a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>


</html>
