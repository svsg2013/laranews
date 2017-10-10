@extends('template')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Input Types</b></h4>
                <p class="text-muted m-b-30 font-14">
                    Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                </p>

                <div class="row">
                    <div class="col-md-12">
                        <div class="p-20">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Text</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="Some text value...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" value="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Placeholder</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="placeholder">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" name="editor1" id="editor1">Text area</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="5">
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace( 'editor1' );
                                        </script>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Readonly</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" readonly="" value="Readonly value">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Disabled</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" disabled="" value="Disabled value">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-2 control-label">Static control</label>
                                    <div class="col-md-10">
                                        <p class="form-control-static">email@example.com</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Helping text</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Helping text">
                                        <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Input Select</label>
                                    <div class="col-md-10">
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <h6>Multiple select</h6>
                                        <select multiple="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Default file input</label>
                                    <div class="col-md-10">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" name="date">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Month</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="month" name="month">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Time</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="time" name="time">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Week</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="week" name="week">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Number</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" name="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">URL</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="url" name="url">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Search</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="search" name="search">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Tel</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="tel" name="tel">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Color</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="color" name="color">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Range</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="range" name="range" min="0" max="10">
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