@extends('template')
@section('title')
    Create news - @parent
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-8">
                        <div class="p-20">
                            {!! Form::open(['url' => 'food','class'=>'form-horizontal','role'=>'form']) !!}
                                <div class="form-group">
                                    {!! Form::label('title','Title',['class'=>'col-md-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::text('txtName',old('txtName'),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('title','SEO Title',['class'=>'col-md-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::text('txtMetatitle',old('txtMetitle'),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                    </div>
                                </div>
                                 <div class="form-group">
                                     {!! Form::label('input select','Input Select',['class'=>'col-md-2 control-label']) !!}
                                     <div class="col-md-10">
                                         <select class="form-control" name="slMenu">
                                             <option value="0">Select one</option>
                                             {{getMenu($getDataMenu)}}
                                         </select>

                                     </div>
                                 </div>
                                <div class="form-group">
                                    {!! Form::label('Summary','Summary',['class'=>'col-md-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('txtSummary',old('txtSummary'),['placeholder'=>'To type here','class'=>'form-control','rows'=>5]) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Summary','SEO Description',['class'=>'col-md-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('txtDescription',old('txtDescription'),['placeholder'=>'To type here','class'=>'form-control','rows'=>5]) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Content','Content',['class'=>'col-md-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('txtContent',old('txtContent'),['class'=>'form-control','id'=>'editor1']) !!}
                                        <script>
                                            CKEDITOR.replace( 'editor1' );
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Thumbnail','Thumbnail',['class'=>'col-md-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::file('fileImg',['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label(' ',' ',['class'=>'col-md-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::button('Submit',['class'=>'btn btn-custom waves-effect waves-light btn-md','type'=>'submit']) !!}
                                    </div>
                                </div>

                        </div>
                    </div><!--mid 8-->
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12" style="padding: 0px">
                                <div class="head-feature">
                                    {!! Form::label('feature','The Feature on Board',['class'=>'cusLabel']) !!}
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-4">
                                {!! Form::label('Hot News') !!}
                                <!-- Slide THREE -->
                                    <div class="slideThree">
                                        <input type="checkbox" value="1" id="slideThree" name="checkHot" />
                                        <label for="slideThree"></label>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('Feature News') !!}
                                <!-- Slide THREE -->
                                    <div class="slideThree1">
                                        <input type="checkbox" value="1" id="slideThree1" name="checkFeature" />
                                        <label for="slideThree1"></label>
                                    </div>
                            </div>
                            <div class="col-md-4">
                            {!! Form::label('Active') !!}
                            <!-- Slide THREE -->
                                <div class="slideThree2">
                                    <input type="checkbox"  checked value="1" id="slideThree2" name="checkActive" />
                                    <label for="slideThree2"></label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div class="cusWeight">
                                    {!! Form::label('The Weight post') !!}
                                    {!! Form::text('txtWeight','1') !!}
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group cusSelect">
                                    <h5>Multiple select</h5>
                                    <select multiple="" class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div><!--row-sigbar-right-->
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
                <!-- end row -->

            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('jsfiles')
    <!-- Jquery filer js -->
    <script src="{{asset('backend/plugins/jquery.filer/js/jquery.filer.min.js')}}"></script>
    <!-- Bootstrap fileupload js -->
    <script src="{{asset('backend/plugins/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
    <!-- page specific js -->
    <script src="{{asset('backend/pages/jquery.fileuploads.init.js')}}"></script>
    <script>
        $( document ).ready(function(){
//   Hide the border by commenting out the variable below
            var $on = 'section';
            $($on).css({
                'background':'none',
                'border':'none',
                'box-shadow':'none'
            });
        });
    </script>

@endsection