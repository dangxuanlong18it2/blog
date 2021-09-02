@extends('tf_admin.main')

@section('content')

  <div class="row">
    <div class="col-sm-9">
        
      <form id="form_draft_blog" action="{{URL::to('post_edit_blog')}}" method="post">
        @csrf

        @foreach($new as $key => $n)

        <input type="hidden" value="{{$n->tf_post_id}}" name="tf_post_id">

        <input type="text" class="form-control" id="tieude" name="tf_post_title" value=" {{$n->tf_post_title}}"><br>
        <table class="table" style="background: #FAFAFA">
          <tr>
            <th><label>Tóm tắt bài viết</label></th>
          </tr>
          <tr>
            <td>
              <textarea class="form-control" name="tf_post_sapo"> {{$n->tf_post_sapo}}</textarea>
            </td>
          </tr>
        </table>
        <textarea id="editor" name="tf_post_content">{{$n->tf_post_content}}</textarea><br>
        <table class="table" style="background: white;">
          <tr>
            <th>Rank Math SEO</th> 
          </tr>
          <tr>
            <td>
              <table class="table" style="background: #FAFAFA">
                <tr>
                  <th><label>Tiêu đề SEO</label></th>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" id="tieude" name="tf_post_titleseo" value="{{$n->tf_post_titleseo}}">
                  </td>
                </tr>
              </table>
              <table class="table" style="background: #FAFAFA">
                <tr>
                  <th><label>URL bài viết</label></th>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" id="tieude" name="tf_post_url" value="{{$n->tf_post_url}}">
                  </td>
                </tr>
              </table>
              <table class="table" style="background: #FAFAFA">
                <tr>
                  <th><label>Mô tả bài viết</label></th>
                </tr>
                <tr>
                  <td>
                    <textarea class="form-control" name="tf_post_meta" >
                      {{$n->tf_post_meta}} 
                    </textarea>
                  </td>
                </tr>
              </table>
              <table class="table" style="background: #FAFAFA">
                <tr>
                  <th><label>Focus Keyword</label></th>
                </tr>
                <tr>
                  <td>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Example: Rank Math SEO" name="tf_post_key" value=" {{$n->tf_post_key}} ">
                      <div class="input-group-append">
                        @if(isset($SEO))
                          @if($SEO < 50)
                            <button class="btn btn-danger" name="check" form="form_draft_blog" type="submit">Kiểm tra</button>  
                          @elseif($SEO > 49 && $SEO < 81)
                            <button class="btn btn-warning" name="check" form="form_draft_blog" style="color: white;" type="submit">Kiểm tra</button>  
                          @else
                            <button class="btn btn-success" name="check" form="form_draft_blog" type="submit">Kiểm tra</button>  
                          @endif
                        @else
                          <button class="btn btn-danger" name="check" form="form_draft_blog" type="submit">Kiểm tra</button>  
                        @endif
                       </div>
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        @endforeach 
      </form>
      <table class="table">
        <tr>
          <td>
            <button class="accordion"><b>Basic SEO</b>&emsp;<span class="right badge badge-danger" style="font-size: 18px">6 Error</span></button>
            <div class="panel">
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Add Focus Keyword to the SEO title.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Add Focus Keyword to your SEO Meta Description.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Use Focus Keyword in the URL.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Use Focus Keyword at the beginning of your content.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Use Focus Keyword in the content.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Content should be 600-2500 words long.</p>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <button class="accordion"><b>Additional</b>&emsp;<span class="right badge badge-danger" style="font-size: 18px">6 Error</span></button>
            <div class="panel">
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Use Focus Keyword in subheading(s) like H2, H3, H4, etc.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Add an image with your Focus Keyword as alt text</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Keyword Density is 0. Aim for around 1% Keyword Density.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> URL unavailable. Add a short URL.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Link out to external resources.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Add DoFollow links pointing to external resources.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Add internal links in your content.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Set a Focus Keyword for this content.</p>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <button class="accordion"><b>Title Readability</b>&emsp;<span class="right badge badge-danger" style="font-size: 18px">2 Error</span></button>
            <div class="panel">
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Use the Focus Keyword near the beginning of SEO title.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Add a number to your title to improve CTR.</p>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <button class="accordion"><b>Content Readability</b>&emsp;<span class="right badge badge-danger" style="font-size: 18px">3 Error</span></button>
            <div class="panel">
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Use Table of Content to break-down your text.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Add short and concise paragraphs for better readability and UX.</p>
              <p><i class="fas fa-times-circle" style="color: #FA5858"></i> Add a few images and/or videos to make your content appealing.</p>
            </div>
          </td>
        </tr>
      </table><br><br><br>

      <li>Copyright 2021 by <b>Huyle</b></li>
    </div>
    <div class="col-sm-3">

      <table class="table" style="background: #FAFAFA">
        <tr>
          <th colspan="2"><label>Ảnh đại diện</label></th>
        </tr>
        <tr>
          <td style="background: white">
            <input type="file" form="form_draft_blog" name="tf_post_image" id="tf_post_image">
            <div id="image_show" style="text-align: center;padding-top: 10px">
              @if( isset($new) )
                @foreach($new as $key => $n)
                  @if( isset($n->tf_post_image) )
                    <img src="@if(isset($n->tf_draft_image)) {{$n->tf_draft_image}} @elseif(isset($n->tf_post_image)) {{$n->tf_post_image}} @endif" width="100%">
                    <input type="hidden" value="@if(isset($n->tf_draft_image)) {{$n->tf_draft_image}} @elseif(isset($n->tf_post_image)) {{$n->tf_post_image}} @endif" form="form_draft_blog" name="file_image" id="file">
                  @elseif( isset($n->tf_draft_image) )
                    <img src="@if(isset($n->tf_draft_image)) {{$n->tf_draft_image}} @elseif(isset($n->tf_post_image)) {{$n->tf_post_image}} @endif" width="100%">
                    <input type="hidden" value="@if(isset($n->tf_draft_image)) {{$n->tf_draft_image}} @elseif(isset($n->tf_post_image)) {{$n->tf_post_image}} @endif" form="form_draft_blog" name="file_image" id="file">
                  @endif
                @endforeach
              @endif
            </div>
            <li id="input_image">
              
            </li>
          </td>
        </tr>
      </table>
      
      <table class="table" style="background: #FAFAFA">
        <tr>
          <th colspan="2"><label>Đăng</label></th>
        </tr>
        <tr>
          <td style="background: white">
            <button type="button" class="btn btn-secondary">Xem thử</button><br><br>
            <li>Trạng thái: Bản nháp</li>
            <li>Hiển thị: Công khai</li>
          </td>
        </tr>
        <tr>
          @if(isset($SEO))
            @if($SEO < 50)
            <td colspan="2" style="background: #fdeae8;color: #e93f30">
              <li>
                <b>SEO: {{ $SEO; }} / 100</b>
              </li>
            </td>
            @elseif($SEO > 49 && $SEO < 81)
            <td colspan="2" style="background: #fdf0c4;color: #bf890d ">
              <li>
                <b>SEO: {{ $SEO; }} / 100</b>
              </li>
            </td>
            @else
            <td colspan="2" style="background: #e9f6e9;color: #58bb58 ">
              <li>
                <b>SEO: {{ $SEO; }} / 100</b>
              </li>
            </td>
            @endif
          @else
            <td colspan="2" style="background: #fdeae8;color: #e93f30">
              <li>
                <b>SEO: 0 / 100</b>
              </li>
            </td>
          @endif
        </tr>
        <tr>
          <td colspan="2">
            <li><button type="submit" form="form_draft_blog" name="tf_dangpost" style="float: right;" class="btn btn-info">Cập Nhật</button></li>
          </td>
        </tr>
      </table>
    </div>

  </div>

@endsection

