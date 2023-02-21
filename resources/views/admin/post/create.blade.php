 @extends("admin.layouts.main")
 @section("content")
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление поста</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Добавление категории</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-12">
            <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">

              @csrf
            <div class="form-group w-25">
                    <input type="text" class="form-control" name="title" placeholder="Название поста" value="{{old("title")}}">
                    @error("title")
                        <div class="text-danger">Это поле необходимо для заполнения </div>
                    @enderror
                  </div>
                <div class="form-group">
                    <textarea name="content" id="summernote" >
                       {{old("content")}}
                    </textarea>
                    @error("content")
                    <div class="text-danger">Это поле необходимо для заполнения </div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="exampleInputFile">Добавить превью</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="preview_image" >
                            <label class="custom-file-label">Выберите изображение</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Загрузка</span>
                        </div>
                    </div>
                </div>

                <div class="form-group w-50">
                    <label for="exampleInputFile">Добавить главное изображение</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="main_image" >
                            <label class="custom-file-label">Выберите изображение</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Загрузка</span>
                        </div>
                    </div>
                </div>
                <div class="form-group w-50">
                    <label for="">Выберите категорию</label>
                    <select name="category_id" class="form-control" id="">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category -> title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Добавить11">
                </div>
            </form>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Blog on Laravel.</strong>

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection
