 @extends("admin.layouts.main")
 @section("content")
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex  align-items-center ">
            <h1 class="mr-3">{{$post->title}}</h1>
              <a href="{{route('admin.post.edit', $post->id)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
              <form action="{{route('admin.post.delete', $post->id)}}" method="POST">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="border-0 bg-transparent">
                      <i class="fas fa-trash text-danger" role="button"></i>
                  </button>
              </form>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route("admin.main.index")}}">Home</a></li>
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
          <div class="col-8">

              <div class="card">
                  <div class="pl-3 pt-2 text-blue">
                      <a href="{{route("admin.post.index")}}">Назад</a>
                  </div>
                  <div class="form-group w-50 p-3">
                      <h3>Название поста</h3>
                      <input type="text" class="form-control border-0" disabled name="title" placeholder="Название поста" value="{{$post->title}}">

                  </div>
                  <div class="form-group w-50 p-3">
                      <h3>Контент</h3>
                      <input type="text" class="form-control border-0" disabled value="{{$post->content}}">
                  </div>
                  <div class="form-group w-100 p-3">
                      <h3 for="exampleInputFile">Превью</h3>
                      <div class="w-100 mb-3">
                          <img src="{{url("storage/".$post->preview_image) }}" alt="preview_image" class="w-50">
                      </div>
                  </div>

                  <div class="form-group w-100 p-3">
                      <h3 for="exampleInputFile">Главное изображение</h3>
                      <div class="w-100 mb-3">
                          <img src="{{url("storage/".$post->main_image)}}" alt="main_image" class="w-50">
                      </div>

                  </div>
                  <div class="form-group w-60 d-block p-3">
                      <h3 for="">Категория</h3> <br>


                      @foreach($categories as $category)
                          @if($category->id == $post->category_id )
                      <input type="text" value="{{$category->title}}" disabled >
                          @endif
                      @endforeach
                  </div>
                  <div class="form-group col-6 p-3" >
                      <h3>Тэги</h3>
                              <select class="select2 select2-hidden-accessible" disabled name="tag_ids[]" multiple="" data-placeholder="Тэги отсутствуют" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                  @foreach($tags as $tag)
                                      <option {{ is_array($post->tags->pluck("id")->toArray() ) && in_array($tag->id, $post->tags->pluck("id")->toArray()) ? "selected" : ""}} disabled value="{{$tag->id}}">{{$tag->title}}</option>
                                  @endforeach
                              </select>
                  </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      </div>
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
