@extends('layouts.app_main')

@section('content')

<!--[if lte IE 9]>
    <p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
    </p>
<![endif]-->


<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">We Glade to join us</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>As Volunteer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Features Area -->
<section class="features section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Why join us?</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Your skills can make TEDx shine.</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Make a difference & Be the <u>spark</u> behind the stage.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <p class="wow fadeInUp" data-wow-delay=".6s">If you want to join us as a tedx hero, please fill in this form. click <a href="https://docs.google.com/forms/d/e/1FAIpQLSejQOA4LndYfm7C_NRiXXx7-TanEGo0IuxDgRQWF-bde4FeKw/viewform" target="_blank">here</a>. We will be happy &#128525; joining us</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row mx-0 justify-content-center">
                    <div class="">

                        <!-- Validation Errors -->
                        @if ($errors->any())
                        <div class="mb-4 mt-4" id="signUpForm">
                            <span class="pe-4 font-medium text-danger border border-danger border-rounded rounded">
                                <span class="bg-danger py-2 px-2  text-white">Whoops!</span>{{ __(' Something went wrong.') }}
                            </span>

                            <ul class="mt-3 list-group list-group-flush text-danger">
                                @foreach ($errors->all() as $error)
                                <li class="list-group-item text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form id="signUpForm" class="w-100 rounded-1 p-4 border bg-white" action='{{ route("storeVolunteer") }}' method="POST">
                            @csrf

                            <!-- start step indicators -->
                            <div class="form-header d-flex mb-4">
                                <span class="stepIndicator">personal info</span>
                                <span class="stepIndicator">other info</span>
                                <span class="stepIndicator">your comments</span>
                            </div>
                            <!-- end step indicators -->

                            <!-- step one -->
                            <div class="step">

                                <!--first name-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Full name ~ الاسم الكامل</strong></span>
                                    <input name="full_name" type="text" class="form-control" placeholder="full name" value="{{ old('full_name') }}" />
                                </label>

                                <!--email-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Email address ~ البريد الالكتروني</strong></span>
                                    <input name="email" type="email" class="form-control" placeholder="me@example.com" value="{{ old('email') }}" />
                                </label>

                                <!--phone-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Phone number ~ رقم الاتصال</strong></span>
                                    <input name="phone_number" type="text" class="form-control" placeholder="+971-55-555-5555" value="{{ old('phone_number') }}" />
                                </label>

                                <!--nationality-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Nationality ~ الجنسية</strong></span>
                                    <input name="nationality" type="text" class="form-control" placeholder="syrian" value="{{ old('nationality') }}" />
                                </label>

                                <!--residence country-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Residence country ~ بلد الاقامة</strong></span>
                                    <input name="residence_country" type="text" class="form-control" placeholder="UAE" value="{{ old('residence_country') }}" />
                                </label>

                                <!--birthday-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Birthday ~ تاريخ الميلاد</strong></span>
                                    <input name="birthday" type="date" class="form-control" placeholder="06-0-1900" value="{{ old('birthday') }}" />
                                </label>

                                <!--Education-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Education ~ التعليم</strong></span>
                                    <input name="education" type="text" class="form-control" placeholder="software engineer" value="{{ old('education') }}">
                                </label>

                                <!--Work-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Work ~ العمل</strong></span>
                                    <input name="work" type="text" class="form-control" placeholder="web developer" value="{{ old('work') }}">
                                </label>

                                <!--linkedin account-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Linkedin account ~ حساب اللينكد ان</strong></span>
                                    <input name="linkedin_account" type="text" class="form-control" placeholder="" value="{{ old('linkedin_account') }}">
                                </label>

                                <!--other social media account-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Other social media account ~ موقع آخر للتواصل الاجتماعي</strong></span>
                                    <input name="other_account" type="text" class="form-control" placeholder="" value="{{ old('other_account') }}">
                                </label>

                                <!--have you heard about ted-->
                                <label class="d-block mb-4">
                                    <div class="form-group">
                                        <label for="question_1"><span class="me-2 text-danger">.</span><strong>Have you heard about what TED & TEDx events are? ~ هل سمعت من قبل عن مؤتمرات تيد و تيد اكس؟</strong></label>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question_1" id="question_1_yes" value="yes" checked>
                                            <label class="form-check-label" for="question_1_yes">
                                                yes ~ نعم 
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question_1" id="question_1_no" value="no">
                                            <label class="form-check-label" for="question_1_no">
                                                no ~ لا
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question_1" id="question_1_not_sure" value="not sure">
                                            <label class="form-check-label" for="question_1_not_sure">
                                                not sure ~ لست متأكداً 
                                            </label>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <!-- step two -->
                            <div class="step">
                                <!--why do you want to be a volunteer-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Why do you want to be a volunteer in TEDxJumeirahbeachpark? ~ لماذا ترغب بأن تكون متطوعًا في هذه الفعالية؟</strong></span>
                                    <textarea rows="4" cols="50" name="question_2" type="text" class="form-control" placeholder="Because ...">{{ old('question_2') }}</textarea>
                                </label>

                                <!--hours-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>How many hours can you contribute per week? ~  كم عدد الساعات التي يمكنك المساهمة فيها أسبوعياً؟</strong></span>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_3" id="question_1_2" value="2" checked>
                                        <label class="form-check-label" for="question_1_2">
                                            2h ~ ساعتان
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_3" id="question_1_4" value="4">
                                        <label class="form-check-label" for="question_1_4">
                                            4h ~  أربع ساعات
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_3" id="question_1_6" value="6">
                                        <label class="form-check-label" for="question_1_6">
                                            6h ~ ست ساعات
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_3" id="question_1_8" value="8">
                                        <label class="form-check-label" for="question_1_8">
                                            8h ~ ثماني ساعات
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_3" id="question_1_10" value="10">
                                        <label class="form-check-label" for="question_1_10">
                                            10h ~ عشر ساعات
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_3" id="question_1_more" value="more">
                                        <label class="form-check-label" for="question_1_more">
                                            more ~ أكثر من ذلك
                                        </label>
                                    </div>
                                </label>

                                <!--what is your skills -->
                                <label class="d-block mb-4">
                                    <div class="form-label d-block"><span class="me-2 text-danger">.</span><strong>What is your skills? ~ ما هي مهاراتك؟</strong></div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_1" name="selected_skills[]" value="Digital Marketing">
                                        <label class="form-check-label" for="skill_1">
                                            Digital Marketing ~ التسويق الرقمي
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_2" name="selected_skills[]" value="Social Media Management">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Social Media Management ~ إدارة مواقع التواصل الاجتماعي
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_3" name="selected_skills[]" value="Content Creation">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Content Creation ~ إعداد المحتوى
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_4" name="selected_skills[]" value="Voice Over">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Voice Over ~ التعليق الصوتي
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_5" name="selected_skills[]" value="Translation from and to Arabic">

                                        <label class="form-check-label" for="flexCheckDefault">
                                            Translation from and to Arabic ~ الترجمة من وإلى العربية
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_6" name="selected_skills[]" value="Graphic Design">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Graphic Design ~ التصميم الجرافيكي
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_7" name="selected_skills[]" value="Web Development">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Web Development ~ تطوير مواقع الويب
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_8" name="selected_skills[]" value="Photograph">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Photograph ~ التصوير
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_9" name="selected_skills[]" value="Videograph">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Videograph ~ تصوير مقاطع الفيديو
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_10" name="selected_skills[]" value="Video Editing">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Video Editing ~ تعديل مقاطع الفيديو
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_11" name="selected_skills[]" value="Presentation Design">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Presentation Design ~ إعداد وتصميم العروض التقديمية
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_12" name="selected_skills[]" value="Speakers Training">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Speakers Training ~ تدريب المتحدثين
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_13" name="selected_skills[]" value="Public Relations">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Public Relations ~ العلاقات العامة
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_14" name="selected_skills[]" value="Event Planning">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Event Planning ~ تنظيم وتخطيط الفعاليات
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_14" name="selected_skills[]" value="Social Games & Activities Design">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Social Games & Activities Design ~ تصميم الألعاب والأنشطة الاجتماعية
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_15" name="selected_skills[]" value="Audio & Lightning Technical Support">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Audio & Lightning Technical Support ~ الدعم التقني للصوت والإضاءة
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_16" name="selected_skills[]" value="IT Technical Support">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            IT Technical Support ~ الدعم التقني
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_17" name="selected_skills[]" value="Venue & Stage Design">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Venue & Stage Design ~ تصميم المكان والمنصة
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_18" name="selected_skills[]" value="other">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Other: ~ شيء آخر:
                                        </label>
                                        <input name="question_5" type="text" class="form-control" placeholder="" value="{{ old('question_5') }}">
                                    </div>
                                </label>

                                <!--Describe yourself to the team -->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Descripe yourself and what you will add to our team? ~ صف نفسك وما يمكنك إضافته إلى فريقنا</strong></span>
                                    <textarea rows="4" cols="50" name="question_6" type="text" class="form-control" placeholder="...">{{ old('question_6') }}</textarea>
                                </label>

                                <!--video-->
                                <!-- <label class="d-block mb-4">
                                    <span class="form-label d-block"><strong>It is better to record a video answering the previous questions (2 min) max.</strong> </span>
                                    <input name="video" type="file" class="form-control" value="{{ old('video') }}">
                                </label> -->
                            </div>

                            <!-- step three -->
                            <div class="step">
                                <!--favourit speaker-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Please mention your favorite TED or TEDx talk? ~ الرجاء ذكر خطاب تيد أو تيد اكس المفضل لديك</strong></span>
                                    <input name="question_7" type="text" class="form-control" placeholder="Because ..." value="{{ old('question_7') }}">
                                </label>

                                <!--notes-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><strong>Please add any notes or comments? ~ الرجاء إضافة أية ملاحظات أو تعليقات </strong></span>
                                    <textarea rows="4" cols="50" name="question_8" type="text" class="form-control" placeholder="Because ...">{{ old('question_8') }}</textarea>
                                </label>

                            </div>

                            <!-- start previous / next buttons -->
                            <div class="form-footer d-flex">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                            <!-- end previous / next buttons -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Features Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection