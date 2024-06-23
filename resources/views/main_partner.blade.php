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
                    <h1 class="page-title">Be With Us</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Partner</li>
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
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Why join event?</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Why you should Join Event</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Ready to take the stage? Be a TEDx partner, let's do it together & . <u>Inspire the world</u>.</p>
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


                        <!--the form-->
                        <!--<h1 class="text-center fs-4">Form Wizard - Multi Step Form</h1>-->
                        <form id="signUpForm" class="w-100 rounded-1 p-4 border bg-white" action='{{ route("storePartner") }}' method="POST">
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
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Full name ~ الاسم الكامل </strong></span>
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
                                    <input name="phone_number" type="text" class="form-control" placeholder="+971-5555555" value="{{ old('phone_number') }}" />
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

                                <!--why-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Why do you want to be a partner at TEDxJumeirahbeachpark? ~ لماذا ترغب بأن تكون شريك لهذه الفعالية؟</strong></span>
                                    <textarea rows="4" cols="50" name="question_2" type="text" class="form-control" placeholder="Because ..." value="{{ old('question_2') }}"></textarea>
                                </label>

                                <!--do you have a buisness?-->
                                <label class="d-block mb-4">
                                    <div class="form-group">
                                        <label for="question_3"><span class="me-2 text-danger">.</span><strong>Do you have a buisness? ~ هل لديك أي نشاط تجاري؟</strong></label>

                                        <!--yes-->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question_3" id="question_3_yes" value="yes" checked>
                                            <label class="form-check-label" for="question_3_yes">
                                                yes ~ نعم
                                            </label>
                                        </div>

                                        <!--no-->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question_3" id="question_3_no" value="no">
                                            <label class="form-check-label" for="question_3_no">
                                                no ~ لا
                                            </label>
                                        </div>

                                        <!-- part of-->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question_3" id="question_3_part" value="part of buisness">
                                            <label class="form-check-label" for="question_3_part">
                                                I'm part of a buisness ~ أنا جزء من نشاط تجاري
                                            </label>
                                        </div>
                                    </div>
                                </label>

                                <!--in what field is your business-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><strong>What is the field of the mentioned buisness? (if it is there) ~ ما هو مجال عمل النشاط التجاري (إن وجد)</strong></span>
                                    <input name="question_4" type="text" class="form-control" placeholder="In..." value="{{ old('question_4') }}">
                                </label>

                                <!--in which area you can help?-->
                                <label class="d-block mb-4">
                                    <dive class="form-label d-block"><span class="me-2 text-danger">.</span><strong>In which area you can offer your services? ~ في أي المجالات يمكنك تقديم خدماتك؟</strong></dive>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="service_1" name="services[]" value="Marketing & Design">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Marketing & Design ~ التسويق والتصميم
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="service_2" name="services[]" value="Web Development">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Web Development ~ تطوير مواقع الويب 
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="service_3" name="services[]" value="Photograph & Videograph">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Photograph & Videograph ~ التصوير
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="service_4" name="services[]" value="Media Coverage">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Media Coverage ~ التغطية الإعلامية
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="service_5" name="services[]" value="Food & Beverage">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Food & Beverage ~ الطعام والمشروبات
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="service_6" name="services[]" value="Printing Services">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Printing Services ~ خدمات الطباعة
                                        </label>
                                    </div>


                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="service_7" name="services[]" value="Tech & Logistics Services">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Tech & Logistics Services ~ الخدمات التقنية واللوجستية
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="skill_18" name="services[]" value="other">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Other: ~ شيء آخر:
                                        </label>
                                        <input name="question_6" type="text" class="form-control" placeholder="" value="{{ old('question_6') }}">
                                    </div>
                                </label>

                                <label class="d-block mb-4">
                                    <div class="form-group">
                                        <label for="question_7"><span class="me-2 text-danger">.</span><strong>Have you previously partnered with any non-profit social events? ~ هل سبق وأن كنت شريكاً لفعاليات مجتمعية من قبل؟</strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question_7" id="question_7_yes" value="yes" checked>
                                            <label class="form-check-label" for="question_7_yes">
                                                yes ~ نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="question_7" id="question_7_no" value="no">
                                            <label class="form-check-label" for="question_7_no">
                                                no ~ لا
                                            </label>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <!-- step three -->
                            <div class="step">
                                <!--favourit speaker-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><span class="me-2 text-danger">.</span><strong>Please mention your favorite TED or TEDx talk? ~ الرجاء ذكر خطاب تيد أو تيد اكس المفضل لديك</strong></span>
                                    <input name="question_8" type="text" class="form-control" placeholder="Because ..." value="{{ old('quesiton_8') }}">
                                </label>

                                <!--notes-->
                                <label class="d-block mb-4">
                                    <span class="form-label d-block"><strong>Please add any notes or comments? ~الرجاء إضافة أية ملاحظات أو تعليقات </strong></span>
                                    <textarea rows="4" cols="50" name="question_9" type="text" class="form-control" placeholder="Because ..." value="{{ old('question_9') }}"></textarea>
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