<div class="row">
  <div class="col-md-12">
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Latest Comment</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      
                    </div>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="table-responsive">
                      <table class="table no-margin">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Comment</th>
                            <th>Video</th>
                            <th>Date</th>
                            <th>Control</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($comments as $comment)
                          <tr>
                            <td>{{$comment->id}}</td> 
                            <td>
                              <a href="{{route('users.edit', ['id' => $comment->user->id ])}}">
                                {{$comment->user->name}}
                              </a>
                            </td>
                            <td>{{$comment->comment}}</td>  
                            <td>{{$comment->video->name}}</td> 
                            
                            <td>{{$comment->created_at}}</td> 
                            <td>
                            <a href="{{route('comment.delete' , ['id' => $comment->id])}}">
                              <i class="fa fa-trash"></i> 
                               
                              </a>
                          </td>
                          </tr>
                          
                          @endforeach
                        </tbody>
                      </table>
                      <span class="pull-right">{!! $comments->links() !!}</span>
                    </div><!-- /.table-responsive -->
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
  </div>
</div>