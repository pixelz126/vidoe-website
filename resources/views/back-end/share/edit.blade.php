    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">{{ $pageDesc}}</h3>
                </div>

               {{$slot}}
               
            </div>
        </div>

        <div class="col-md-4">
            <div class="box box-primary">

                {{isset($md4) ? $md4 : ''}}
               
            </div>
        </div>
    </div>