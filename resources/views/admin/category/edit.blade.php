<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <title>Category MTK</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
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
                        <a href="{{ route('categories.index') }}" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Category </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('posts.index') }}" class="side-menu">
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
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Category</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Edit Category</a></div>
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
                        Form Edit Category
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-24 lg:col-span-12">
                        <!-- BEGIN: Form Layout -->
                        {!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) !!}
                        <div class="intro-y box p-5">
                            <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                                {!! Form::label('Thumbnail') !!}
                                {!! Form::text('thumbnail', $category->thumbnail, ['class' => 'input w-full border mt-2', 'placeholder' => 'Thumbnail']) !!}
                                @if ($errors->has('thumbnail'))
                                    <span class="help-block">{!! $errors->first('thumbnail') !!}</span>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('name')) has-error @endif">
                                {!! Form::label('Name') !!}
                                {!! Form::text('name', $category->name, ['class' => 'input w-full border mt-2', 'placeholder' => 'Input Name']) !!}
                                @if ($errors->has('name'))
                                    <span class="help-block">{!! $errors->first('name') !!}</span>
                                @endif
                            </div>
                            <div class="mt-3">
                                <div class="mt-2">
                                    {!! Form::label('Publish') !!}
                                    {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], isset($category->is_published) ? $category->is_published : null, ['class' => 'tail-select w-full']) !!}
                                </div>
                            </div>
                            
                            <div class="text-right mt-5">
                                <a class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1" href="{{route('categories.index')}}">Cancel</a>
                                {!! Form::submit('Update',['class' => 'button w-24 bg-theme-1 text-white']) !!}
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
    </body>
</html>