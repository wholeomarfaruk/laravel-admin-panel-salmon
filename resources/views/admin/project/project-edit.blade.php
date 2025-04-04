@extends('admin.layouts.admin')

@section('content')
    <!-- content area start -->
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit project</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="{{ route('admin.project.list') }}">
                            <div class="text-tiny">Projects</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Update Projecct</div>
                    </li>
                </ul>
            </div>
            <!-- new-project -->
            <div class="wg-box">


                <form class="form-new-product form-style-1 needs-validation"
                    action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data"
                    novalidate>
                    @csrf
                    @method('PUT')
                    <fieldset class="name">
                        <div class="body-title">{{ __('Title') }} <span class="tf-color-1">*</span></div>
                        <input class="flex-grow @error('title') is-invalid @enderror" type="text" placeholder="Title"
                            name="title" tabindex="0" aria-required="true" value="{{ old('title', $project->title) }}"
                            required autocomplete="title" autofocus onkeyup="stringtoSlug(this.value)">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>


                    <fieldset class="name">
                        <div class="body-title">Slug <span class="tf-color-1">*</span></div>
                        <input class="flex-grow @error('slug') is-invalid @enderror" type="text" placeholder="Slug"
                            name="slug" tabindex="0" value="{{ old('slug', $project->slug) }}"
                            onchange="stringtoSlug(this.value)" required autocomplete="name" autofocus id="slug_input">
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Flat Number') }} <span class="tf-color-1"></span></div>
                        <input class="flex-grow @error('flat_number') is-invalid @enderror" type="text"
                            placeholder="Flat Number" name="flat_number" tabindex="0"
                            value="{{ old('flat_number', $project->flat_number) }}" aria-required="true"
                            autocomplete="flat_number" autofocus>
                        @error('flat_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Land Area') }} <span class="tf-color-1"></span></div>
                        <input class="flex-grow @error('land_area') is-invalid @enderror" type="text"
                            placeholder="Land Area" name="land_area" tabindex="0"
                            value="{{ old('land_area', $project->land_area) }}" aria-required="true"
                            autocomplete="land_area" autofocus>
                        @error('land_area')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Facing Land') }} <span class="tf-color-1">*</span></div>
                        <input class="flex-grow @error('facing_land') is-invalid @enderror" type="text"
                            placeholder="Facing Land" name="facing_land" tabindex="0"
                            value="{{ old('facing_land', $project->facing_land) }}" aria-required="true" required
                            autocomplete="facing_land" autofocus>
                        @error('facing_land')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Floor Number') }} <span class="tf-color-1">*</span></div>
                        <input class="flex-grow @error('floor_number') is-invalid @enderror" type="text"
                            placeholder="Floor Number" name="floor_number" tabindex="0"
                            value="{{ old('floor_number', $project->floor_number) }}" aria-required="true" required
                            autocomplete="floor_number" autofocus>
                        @error('floor_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Front Road') }} <span class="tf-color-1">*</span></div>
                        <input class="flex-grow @error('front_road') is-invalid @enderror" type="text"
                            placeholder="Front Road" name="front_road" tabindex="0"
                            value="{{ old('front_road', $project->front_road) }}" aria-required="true" required
                            autocomplete="front_road" autofocus>
                        @error('front_road')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Square Feet') }} <span class="tf-color-1">*</span></div>
                        <input class="flex-grow @error('square_ft') is-invalid @enderror" type="text"
                            placeholder="Square Feet" name="square_ft" tabindex="0"
                            value="{{ old('sqare_ft', $project->square_ft) }}" aria-required="true" required
                            autocomplete="sqare_ft" autofocus>
                        @error('sqare_ft')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Number of Car Parking') }} <span class="tf-color-1"></span></div>
                        <input class="flex-grow @error('num_car_parking') is-invalid @enderror" type="text"
                            placeholder="Number of Car Parking" name="num_car_parking" tabindex="0"
                            value="{{ old('num_car_parking', $project->num_car_parking) }}" aria-required="true" required
                            autocomplete="num_car_parking" autofocus>
                        @error('num_car_parking')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Building Type') }} <span class="tf-color-1">*</span></div>
                        <input class="flex-grow @error('building_type') is-invalid @enderror" type="text"
                            placeholder="Building Type" name="building_type" tabindex="0"
                            value="{{ old('building_type', $project->building_type) }}" aria-required="true" required
                            autocomplete="building_type" autofocus>
                        @error('building_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Bed Bath Balcony Lift') }} <span class="tf-color-1">*</span></div>
                        <input class="flex-grow @error('bed_bath_balcony_lift') is-invalid @enderror" type="text"
                            placeholder="Bed Bath Balcony Lift" name="bed_bath_balcony_lift" tabindex="0"
                            value="{{ old('bed_bath_balcony_lift', $project->bed_bath_balcony_lift) }}" aria-required="true"
                            required autocomplete="bed_bath_balcony_lift" autofocus>
                        @error('bed_bath_balcony_lift')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Description') }} <span class="tf-color-1"></span></div>
                        <textarea id="description" class="flex-grow @error('description') is-invalid @enderror"
                            placeholder="Description" name="description" tabindex="0" aria-required="true"
                            autocomplete="description" autofocus>{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Map Data') }} <span class="tf-color-1"></span></div>
                        <input class="flex-grow @error('map_data') is-invalid @enderror" type="text" placeholder="Map Data"
                            name="map_data" tabindex="0" value="{{ old('map_data', $project->map_data) }}"
                            aria-required="true" required autocomplete="map_data" autofocus>
                        @error('map_data')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Location') }} <span class="tf-color-1"></span></div>
                        <input class="flex-grow @error('location') is-invalid @enderror" type="text" placeholder="Location"
                            name="location" tabindex="0" value="{{ old('location', $project->location) }}"
                            aria-required="true" autocomplete="location" autofocus>
                        @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">{{ __('Project Status') }} <span class="tf-color-1">*</span></div>
                        <input class="flex-grow @error('project_status') is-invalid @enderror" type="text"
                            placeholder="Project Status" name="project_status" tabindex="0"
                            value="{{ old('project_status', $project->project_status) }}" aria-required="true" required
                            autocomplete="project_status" autofocus>
                        @error('project_status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>


                    <fieldset class="name">
                        <div class="body-title">{{ __('is Featured') }} <span class="tf-color-1">*</span></div>
                        <div class="select flex-grow">
                            <select class=" @error('is_featured') is-invalid @enderror" name="is_featured" required>
                                <option value="0" {{ old('is_featured', $project->is_featured) == '0' ? 'selected' : '' }}>No
                                </option>
                                <option value="1" {{ old('is_featured', $project->is_featured) == '1' ? 'selected' : '' }}>Yes
                                </option>
                            </select>
                        </div>
                        @error('is_featured')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>

                    <fieldset>
                        <div class="body-title">{{ __('Upload Video') }} <span class="tf-color-1"></span>
                        </div>
                        <div class="upload-image flex-grow">
                            <div class="item" id="imgpreview-video" style="{{$project->video ? 'display:flex; justify-content: center, align-items: center' : 'display:none'}}">
                                <video src="{{asset($project->video?->file)}}" controls></video>
                            </div>
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="video">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">{{ __('Drop your videos here or select') }} <span
                                            class="tf-color">{{ __('click to browse') }}</span></span>
                                    <input type="file" id="video" name="video" accept="video/*">
                                </label>
                            </div>
                        </div>
                        @error('video')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>


                    <fieldset>
                        <div class="body-title">{{ __('PDF') }} <span class="tf-color-1"></span></div>
                        <div class="upload-image flex-grow">
                            <div class="item {{ $project?->pdf ? 'd-flex justify-content-center align-items-center' : '' }}"
                                id="imgpreview-pdf" style="{{ $project->pdf ? '' : 'display:none' }}">
                                @php
                                    $pdf = pathinfo($project?->pdf?->file) ?? [];
                                @endphp
                                <span>{{ $pdf['basename'] ?? '' }}</span>
                            </div>
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="pdf">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">{{ __('Drop your pdf here or select') }} <span
                                            class="tf-color">{{ __('click to browse') }}</span></span>
                                    <input type="file" id="pdf" name="pdf" accept=".pdf">
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="body-title">{{ __('Featured Image') }} <span class="tf-color-1"></span></div>
                        <div class="upload-image flex-grow">
                            <div class="item" id="imgpreview-featured"
                                style="{{ $project->featured_image ? '' : 'display:none' }}">
                                <img src="{{ asset($project->featured_image?->file) }}" class="effect8" alt="">
                            </div>
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="featured_image">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">{{ __('Drop your images here or select') }} <span
                                            class="tf-color">{{ __('click to browse') }}</span></span>
                                    <input type="file" id="featured_image" name="featured_image" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    @error('featured_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <fieldset>
                        <div class="body-title">{{ __('At a Glance') }} <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <div class="item" id="imgpreview-ataglanceimage"
                                style="{{ $project->ataglanceimage ? '' : 'display:none' }}">
                                <img src="{{ asset($project->ataglanceimage?->file) }}" class="effect8" alt="">
                            </div>
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="ataglanceimage">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">{{ __('Drop your images here or select') }} <span
                                            class="tf-color">{{ __('click to browse') }}</span></span>
                                    <input type="file" id="ataglanceimage" name="ataglanceimage" required accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    @error('ataglanceimage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <fieldset>
                        <div class="body-title">{{ __('Banner') }} <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <div class="item {{ $project->banner ? 'd-flex justify-content-center align-items-center' : '' }}"
                                id="imgpreview-banner" style="{{ $project->banner ? '' : 'display:none' }}">
                                <img src="{{ asset($project->banner?->file) }}" class="effect8" alt="">
                            </div>
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="banner">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">{{ __('Drop your images here or select') }} <span
                                            class="tf-color">{{ __('click to browse') }}</span></span>
                                    <input type="file" id="banner" name="banner" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    @error('banner')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <fieldset>
                        <div class="body-title">{{ __('Thumbnail') }} <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <div class="item {{ $project->thumbnail ? 'd-flex justify-content-center align-items-center' : '' }}"
                                id="imgpreview-thumbnail" style="{{ $project->thumbnail ? '' : 'display:none' }}">
                                <img src="{{ asset($project->thumbnail?->file) }}" class="effect8" alt="">
                            </div>
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="thumbnail">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">{{ __('Drop your images here or select') }} <span
                                            class="tf-color">{{ __('click to browse') }}</span></span>
                                    <input type="file" id="thumbnail" name="thumbnail" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    @error('thumbnail')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <fieldset>
                        <div class="body-title">{{ __('Amenities Images') }} <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow" id="imagepreview-amenities">
                            @foreach ($project->amenities_images as $amenity)
                                <div class="item d-flex justify-content-center align-items-center">
                                    <img src="{{ asset($amenity?->file) }}" class="effect8" alt="">
                                </div>
                            @endforeach
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="amenities_images">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">{{ __('Drop your images here or select') }} <span
                                            class="tf-color">{{ __('click to browse') }}</span></span>
                                    <input type="file" id="amenities_images" name="amenities_images[]" accept="image/*"
                                        multiple>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    @error('amenities_images')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <fieldset>
                        <div class="body-title">{{ __('Gallery') }} <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow " id="galPreview">

                            @foreach ($project->gallery as $image)
                                <div class="item d-flex justify-content-center align-items-center">
                                    <img src="{{ asset($image?->file) }}" class="effect8" alt="">
                                </div>
                            @endforeach
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="gallery">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">{{ __('Drop your images here or select') }} <span
                                            class="tf-color">{{ __('click to browse') }}</span></span>
                                    <input type="file" id="gallery" name="gallery[]" accept="image/*" multiple>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    @error('gallery')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- content area end -->
@endsection

@push('scripts')
    <script>

        // tinymce.init({
        //     selector: '#description',
        //     height: 500,
        //     menubar: false,
        //     plugins: [
        //         'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
        //         'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
        //         'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
        //     ],
        //     toolbar: 'undo redo | blocks | bold italic backcolor | ' +
        //         'alignleft aligncenter alignright alignjustify | ' +
        //         'bullist numlist outdent indent | removeformat | help'
        // });
    </script>
    <script>
        $(function () {


            const videoMaxSize = 100 * 1024 * 1024; // 5MB file size limit

            function validateVideoFileSize(input, file) {
                if (file.size > videoMaxSize) {
                    Swal.fire({
                        icon: "error",
                        title: "File Too Large",
                        text: `The file "${file.name}" exceeds the 100MB limit. Please upload a smaller file.`,
                    });
                    input.value = ""; // Clear the selected file
                    return false;
                }
                return true;
            }

            $(function () {
                $('#video').on('change', function () {
                    var file = this.files[0];
                    if (!validateVideoFileSize(this, file)) return;
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imgpreview-video').show();
                        $('#imgpreview-video').html('<video src="' + e.target.result + '" controls></video>');
                    }
                    reader.readAsDataURL(this.files[0]);
                });

            })


            const maxSize = 10 * 1024 * 1024; // 5MB file size limit

            function validateFileSize(input, file) {
                if (file.size > maxSize) {
                    Swal.fire({
                        icon: "error",
                        title: "File Too Large",
                        text: `The file "${file.name}" exceeds the 10MB limit. Please upload a smaller file.`,
                    });
                    input.value = ""; // Clear the selected file
                    return false;
                }
                return true;
            }
            $('#featured_image').on('change', function () {
                var file = this.files[0];
                if (!validateFileSize(this, file)) return;

                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgpreview-featured').show();
                    $('#imgpreview-featured img').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            });
            $('#ataglanceimage').on('change', function () {
                var file = this.files[0];
                if (!validateFileSize(this, file)) return;

                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgpreview-ataglanceimage').show();
                    $('#imgpreview-ataglanceimage img').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            });

            $('#pdf').on('change', function () {
                var file = this.files[0];
                if (!validateFileSize(this, file)) return;

                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgpreview-pdf').addClass('d-flex justify-content-center align-items-center');
                    $('#imgpreview-pdf').html('<span>' + file.name + '</span>');
                }
                reader.readAsDataURL(file);
            });

            $('#banner').on('change', function () {
                var file = this.files[0];
                if (!validateFileSize(this, file)) return;

                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgpreview-banner').show();
                    $('#imgpreview-banner img').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            });

            $('#thumbnail').on('change', function () {
                var file = this.files[0];
                if (!validateFileSize(this, file)) return;

                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgpreview-thumbnail').show();
                    $('#imgpreview-thumbnail img').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            });

            $('#gallery').on('change', function () {
                $("#galPreview .item").show();
                $("#galPreview .item:not(:last)").remove();

                var photos = this.files;
                $.each(photos, function (i, photo) {
                    if (!validateFileSize($('#gallery')[0], photo)) return;

                    $('#galPreview').prepend('<div class="item"><img src="' + URL.createObjectURL(photo) + '"></div>');
                });
            });

            $('#amenities_images').on('change', function () {
                $("#imagepreview-amenities .item").show();
                $("#imagepreview-amenities .item:not(:last)").remove();

                var photos = this.files;
                $.each(photos, function (i, photo) {
                    if (!validateFileSize($('#amenities_images')[0], photo)) return;

                    $('#imagepreview-amenities').prepend('<div class="item"><img src="' + URL.createObjectURL(photo) + '"></div>');
                });
            });

        });


        function stringtoSlug(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim leading/trailing spaces
            str = str.toLowerCase();
            str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                .replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/-+/g, '-'); // collapse dashes

            console.log(str);

            $('#slug_input').val(str);

        }

    </script>
@endpush
