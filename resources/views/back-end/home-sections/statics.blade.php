<div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{\App\Models\Video::count()}}</h3>
                  <p>Videos</p>
                </div>
                <div class="icon">
                  <i class="fa fa-play"></i>
                </div>
                <a href="{{route('videos.index')}}" class="small-box-footer">All Videos
                	<i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{\App\Models\Skill::count()}}</h3>
                  <p>Skills</p>
                </div>
                <div class="icon">
                 <i class="fa fa-asterisk"></i>
                </div>
                <a href="{{route('skills.index')}}" class="small-box-footer">All Skills
                	<i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{\App\Models\Tag::count()}}</h3>
                  <p>Tags</p>
                </div>
                <div class="icon">
                 <i class="fa fa-tag"></i>
                </div>
                <a href="{{route('tags.index')}}" class="small-box-footer">All Tags
                	<i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{\App\Models\Comment::count()}}</h3>
                  <p>Comments</p>
                </div>
                <div class="icon">
                 <i class="fa fa-comments"></i>
                </div>
                <a href="{{route('videos.index')}}" class="small-box-footer">Check Videos
                	<i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
</div>