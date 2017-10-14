@extends('template')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-20">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Input Select</label>
                                    <div class="col-md-10">
                                        <select class="form-control">
                                            <option>Select Category</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Title" name="txtTitle">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" >Summary</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="5" name="txtSummary">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" >Content</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="5" name="txtContent" id="editor1">
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace( 'editor1' );
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Select thumbnail</label>
                                    <div class="col-md-10">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection