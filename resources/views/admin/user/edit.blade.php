 @extends("admin.layouts.main")
 @section("content")
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование пользователя</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Редактирование пользователя</li>
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
            <form action="{{ route('admin.user.update',$user->id) }}" method="POST" class="w-25">
              @csrf
                @method("PATCH")
            <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Название категории" value="{{$user-> name}}">
                    @error("name")
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                  </div>
                <div class="form-group">
                    <input type="text" value="{{$user-> email}}" class="form-control" name="email" placeholder="Email">
                    @error("email")
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                  <input type="submit" class="btn btn-primary" value="Обновить">
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
