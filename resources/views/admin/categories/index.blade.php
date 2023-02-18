 @extends("admin.layouts.main")
 @section("content")
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Категория</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Категория</li>
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
        <div class="col-1">
          <a href="{{route('admin.category.create')}}" class="btn btn-lock btn-primary mb-3">Добавить</a>
          </div>
        </div>
          <div class="row">
          <div class="col-8">

              <div class="card">
                  <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                          <thead>
                          <tr>
                              <th>ID</th>
                              <th>Название</th>
                              <th colspan="2" >Действие</th>

                          </tr>
                          </thead>
                          <tbody>
                          @foreach($categories as $category)
                          <tr>
                              <td>{{$category-> id}}</td>
                              <td>{{$category -> title}}</td>
                              <td><a href="{{route('admin.category.show', $category->id)}}"><i class="far fa-eye"></i></a></td>
                              <td><a href="{{route('admin.category.edit', $category->id)}}"><i class="fas fa-pencil-alt"></i></a></td>

                          </tr>
                          @endforeach
                          </tbody>
                      </table>
                  </div>
                  <!-- /.card-body -->
              </div>
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
