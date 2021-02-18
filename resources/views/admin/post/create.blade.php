<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <title>Materi MTK</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <span class="hidden xl:block text-white text-lg ml-3"> Mate<span class="font-medium">matika</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="side-menu side-menu">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Category </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('posts.index') }}" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title"> Materi </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Materi</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Create Materi</a></div>
                    <!-- END: Breadcrumb -->
                    
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            <img alt="Midone Tailwind HTML Admin Template" src="{{asset ('dist/images/profile-1.jpg')}}">
                        </div>
                        <div class="dropdown-box w-56">
                            <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                                <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                                    <a href="{{route ('logout') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Form Materi
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-24 lg:col-span-12">
                        <!-- BEGIN: Form Layout -->
                        {!! Form::open(['route' => 'posts.store']) !!}
                        <div class="intro-y box p-5">
                            <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                                {!! Form::label('Thumbnail') !!}
                                {!! Form::text('thumbnail', null, ['class' => 'input w-full border mt-2', 'placeholder' => 'Thumbnail']) !!}
                                @if ($errors->has('thumbnail'))
                                    <span class="help-block">{!! $errors->first('thumbnail') !!}</span>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                {!! Form::label('Title') !!}
                                {!! Form::text('title', null, ['class' => 'input w-full border mt-2', 'placeholder' => 'Input Title']) !!}
                                @if ($errors->has('title'))
                                    <span class="help-block">{!! $errors->first('title') !!}</span>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('sub_title')) has-error @endif">
                                {!! Form::label('Sub Title') !!}
                                {!! Form::text('sub_title', null, ['class' => 'input w-full border mt-2', 'placeholder' => 'Sub Title']) !!}
                                @if ($errors->has('sub_title'))
                                <span class="help-block">{!! $errors->first('sub_title') !!}</span>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('details')) has-error @endif">
                                {!! Form::label('Details') !!}
                                {!! Form::textarea('details', null, ['class' => 'form-control my-editor', 'placeholder' => 'Details']) !!}
                                @if ($errors->has('details'))
                                    <span class="help-block">{!! $errors->first('details') !!}</span>
                                @endif
                            </div>
                            <div class="">
                                {!! Form::label('Category') !!}
                                {!! Form::select('category_id[]', $categories, null, ['class' => 'tail-select w-full', 'id' => 'category_id', 'multiple' => 'multiple']) !!}
                                @if ($errors->has('category_id'))
                                    <span class="help-block">{!! $errors->first('category_id') !!}</span>
                                @endif
                            </div>
                            <div class="mt-3">
                                <div class="mt-2">
                                    {!! Form::label('Publish') !!}
                                    {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], null, ['class' => 'tail-select w-full']) !!}
                                </div>
                            </div>
                            <div class="text-right mt-5">
                                <a class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1" href="{{route('posts.index')}}">Cancel</a>
                                {!! Form::submit('Create',['class' => 'button w-24 bg-theme-1 text-white']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <!-- END: Form Layout -->
                    </div>
                </div>

            </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{ asset('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script>
            var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
        
                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
                } else {
                cmsURL = cmsURL + "&type=Files";
                }
        
                tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
                });
            }
            };
        
            tinymce.init(editor_config);
        </script>
    </body>
</html>