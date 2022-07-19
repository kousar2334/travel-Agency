@extends('admin.layouts.main')
@section('admin-page-title')
    About Us
@stop
@section('custom_css')

    <!----tiny mce--->
    <script src="{{ asset('/public/assets/backend/js/tinymce.min.js') }}"></script>
    <script>
        // tinymce.init({
        //     selector: 'textarea'
        // });
        tinymce.init({
            selector: '#about_us',
            // theme: 'modern',
            // paste_data_images: true,
            // image_advtab: true,
            // media_live_embeds: true,
            // media_dimensions: true,
            // // convert_urls:true,
            // relative_urls: false,
            // remove_script_host: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak code preview",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            menubar: true,
            toolbar1: 'table formatselect  fontsizeselect bold italic underline blockquote alignleft aligncenter alignright  bullist numlist',
            toolbar2: 'strikethrough hr backcolor forecolor link removeformat charmap outdent indent undo redo code preview',
            min_height: 700,

        });
    </script>
@stop
@section('admin_content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-auto col-sm-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">About Us</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('admin.setting.about.us.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>About us<span class="text-danger">*</span></label>
                                            <input type="hidden" name="id" value="{{ $settings->id }}">
                                            <textarea class="form-control" id="about_us" name="about_us" rows="10" placeholder="About us">{{ $settings->about_us }}</textarea>
                                            @if ($errors->has('about_us'))
                                                <small class="text text-danger">{{ $errors->first('about_us') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right mt-2">
                                    <input type="submit" class="btn btn-success" value="Update" />
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
