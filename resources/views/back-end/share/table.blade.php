 <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="box-title">{{$pageDesc}}</h3>
                        </div>

                        {{$addButton}}

                    </div>

                </div><!-- /.box-header -->
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid">
                     
                        {{$slot}}
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
    </div>