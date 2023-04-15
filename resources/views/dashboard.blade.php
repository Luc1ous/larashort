@extends('layout.base', ['title' => 'Posts'])
@section('section')
    <div class="col-12">
      <div class="card">
        <table class="table table-vcenter table-responsive card-table">
          <thead>
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>Slug</th>
              <th>Body</th>
              <th class="w-1">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $index => $post)
            <tr>
              <td >{{ $posts->firstItem() + $index }}</td>
              <td class="text-muted" >
                {{ $post->title }}
              </td>
              <td class="text-muted" >{{ $post->slug }}</td>
              <td class="text-muted" >
                {{ Str::limit($post->body, 100)}}
              </td>
              <td class="span-2">
                <span class="dropdown">
                  <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                  <div class="dropdown-menu dropdown-menu-end" style="">
                    <a class="dropdown-item text-warning" href="#">
                      Edit
                    </a>
                    <a class="dropdown-item text-danger" href="#">
                      Delete
                    </a>
                  </div>
                </span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="container">
          {!! $posts->appends(Request::except('page'))->links() !!}
        </div>
      </div>
    </div>
@endsection