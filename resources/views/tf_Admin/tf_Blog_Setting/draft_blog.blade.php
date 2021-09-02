@extends('tf_admin.main')

@section('content')

  <table class="table">
    <thead>
      <tr>
        <th>
          <a href="">Tất Cả bài viết ( {{ $count_post }} )</a>
        </th>
        <th><a href="">Bài viết của tôi ( {{ $count_post }} )</a></th>
        <th><a href="">Đã xuất bản ( {{ $count_post }} )</a></th>
        <th><a href="">Bản nháp ( {{ $count_draft }} )</a></th>
        <th>
          <form class="form-inline" action="/action_page.php" style="float: right;">
            <input type="text" class="form-control" id="usr" name="username">
            <button type="submit" class="btn btn-secondary">Tìm các bài viết</button>
          </form>
        </th>
      </tr>
    </thead>
  </table>
  
  <table class="table table-hover">
    <thead class="thead-light">
      <tr>
        <th>Tiêu Đề</th>
        <th style="text-align: center;">Tác Giả</th>  
        <th style="text-align: center;">Số Từ</th>
        <th style="text-align: center;">Thời Gian</th>
        <th style="text-align: center;">SEO Detail</th>
        <th colspan="2" style="text-align: center;">Thêm</th>
      </tr>
    </thead>
    <tbody>
      @foreach($all_blog as $key => $ab)
        <tr>
          <td style="width: 300px">{{ $ab->tf_draft_title }}</td>
          <td style="text-align: center;">{{ $ab->tf_draft_author }}</td>
          <td style="text-align: center;">{{ $ab->tf_draft_content_length }}</td>
          <td style="text-align: center;"> Đã xuất bản: {{ $ab->tf_draft_date }}</td>
          <td style="text-align: center;color: #bf890d"><b>{{ $ab->tf_draft_point }} / 100</b></td>
          <td style="text-align: center;"><a href="{{URL::to('edit_draft_post/'.$ab->tf_draft_id)}}" class="btn btn-info" style="text-decoration: none;"><b><i class="fas fa-eye"></i></b></a></td>
          <td style="text-align: center;"><a href="{{URL::to('delete_draft_post/'.$ab->tf_draft_id)}}" class="btn btn-danger" style="text-decoration: none;"><b><i class="fas fa-trash"></i></b></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection


