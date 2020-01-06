<!DOCTYPE HTML>
<html class="supernova">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Creat your Event listing" >
    <meta property="og:url" content="https://alt.jotfor.ms/events2" >
    <meta property="og:description" content="Please click the link to complete this form.">
    <meta name="slack-app-id" content="AHNMASS8M">
    <link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
    <link rel="canonical" href="https://alt.jotfor.ms/events2" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
    <meta name="HandheldFriendly" content="true" />
    <link href="https://alt.jotfor.ms/static/formCss.css?3.3.14549" rel="stylesheet" type="text/css" />
    <link type="text/css" media="print" rel="stylesheet" href="https://alt.jotfor.ms/css/printForm.css?3.3.14549" />
    <link type="text/css" rel="stylesheet" href="https://alt.jotfor.ms/css/styles/nova.css?3.3.14549" />
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/plugins.css')}}">

    <style type="text/css">
        .form-label-left{
            width:150px;
        }
        .form-line{
            padding-top:12px;
            padding-bottom:12px;
        }
        .form-label-right{
            width:150px;
        }
        body, html{
            margin:0;
            padding:0;
            background:#fff;
        }

        .form-all{
            margin:0px auto;
            padding-top:0px;
            width:690px;
            color:#555 !important;
            font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
            font-size:14px;
        }
        .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
            /*color: false;*/
        }

    </style>
    <link rel="stylesheet" href="{{asset('frontend/plugins/form/css/calendarview.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/form/css/styles/form.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/form/css/styles/buttons/form-submit-button-simple_black.css')}}">
    <style type="text/css" id="form-designer-style">
        /* Injected CSS Code */
        .form-label.form-label-auto {

            display: block;
            float: none;
            text-align: left;
            width: 100%;

        }/*PREFERENCES STYLE*/
        .form-all {
            font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
        }
        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
        }
        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
        }
        .form-header-group {
            font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
        }
        .form-label {
            font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
        }



        .form-line {
            margin: auto!important;
        /        }

        .form-all {
            width: 690px;
        }

        .form-label-left,
        .form-label-right,
        .form-label-left.form-label-auto,
        .form-label-right.form-label-auto {
            width: 150px;
        }

        .form-all {
            font-size: 14px
        }
        .form-all .qq-upload-button,
        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-size: 14px
        }
        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-size: 14px
        }

        .supernova .form-all, .form-all {
            /*background-color: ;*/
            border: 1px solid transparent;
        }

        .form-all {
            color: #555;
        }
        .form-header-group .form-header {
            color: #555;
        }
        .form-header-group .form-subHeader {
            color: #555;
        }
        .form-label-top,
        .form-label-left,
        .form-label-right,
        .form-html,
        .form-checkbox-item label,
        .form-radio-item label {
            color: #555;
        }
        .form-sub-label {
            color: #6f6f6f;
        }

        .supernova {
            /*background-color: undefined;*/
        }
        .supernova body {
            background: transparent;
        }

        .form-textbox,
        .form-textarea,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input {
            /*background-color: undefined;*/
        }

        .supernova {
            background-image: none;
        }
        #stage {
            background-image: none;
        }

        .form-all {
            background-image: none;
        }

        .ie-8 .form-all:before { display: none; }
        .ie-8 {
            margin-top: auto;
            margin-top: initial;
        }

        /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
        /* Injected CSS Code */
    </style>

    <link type="text/css" rel="stylesheet" href="https://alt.jotfor.ms/css/styles/buttons/form-submit-button-simple_black.css?3.3.14549"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
<img src="{{asset('backend/img/placeholders/backgrounds/login_full_bg.jpg')}}" alt="Login Full Background" class="full-bg animation-pulseSlow">

<div id="login-container" class="animation-fadeIn">
    <form class="jotform-form" action="{{url('store')}}" method="post" enctype="multipart/form-data" name="form_events2" id="events2" accept-charset="utf-8">
        @csrf
        <input type="hidden" name="formID" value="events2" >
        <input type="hidden" id="JWTContainer" value="" >
        <input type="hidden" id="cardinalOrderNumber" value="" >
        <div role="main" class="form-all">
            <ul class="form-section page-section">
                <li id="cid_27" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group ">
                        <div class="header-text httal htvam">
                            <h1 id="header_27" class="form-header" data-component="header">
                                Creat your Event listing
                            </h1>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_fullname" id="id_29">
                    <label class="form-label form-label-top form-label-auto" id="label_29" for="first_29">
                        Event title
                        <span class="form-required"> * </span>
                    </label>
                    <div id="cid_29" class="form-input-wide jf-required">
                        <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top; display: grid">
              <input type="text" id="first_29" name="title" class="form-textbox validate[required]" size="10" value="" data-component="title" aria-labelledby="label_29" required="" />
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_fullname" id="id_30">
                    <label class="form-label form-label-top form-label-auto" id="label_30" for="input_30">
                        Venue or Address
                        <span class="form-required">
                        *
                    </span>
                    </label>
                    <div id="cid_30" class="form-input-wide jf-required">
                        <input type="text" id="input_30" name="venue" class="form-textbox validate[required]" size="30" value="" data-component="address" aria-labelledby="label_30" required="" />
                    </div>
                </li>

                <li class="form-line jf-required" data-type="control_fullname" id="id_11">
                    <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11">
                        Upload Image
                        <span class="form-required"> * </span>
                    </label>

                    <div id="cid_11" class="form-input-wide jf-required">
                        <input id="image" type="file" value="input_11" class="form-textbox validate[required] @error('image') is-invalid @enderror" name="image" data-component="image" aria-labelledby="label_11" required="" />

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_datetime" id="id_15">
                    <label class="form-label form-label-top form-label-auto" id="label_15" for="day_15">
                        Event start
                        <span class="form-required"> * </span>
                    </label>
                    <div id="cid_15" class="form-input-wide jf-required">
                        <input type="datetime-local" id="day_15" name="s_time" class="form-textbox validate[required]" value="" data-component="s_time" aria-labelledby="day_15" required="" />
                    </div>
                </li>
                <li class="form-line jf-required allowTime" data-type="control_datetime" id="id_28">
                    <label class="form-label form-label-top form-label-auto" id="label_28" for="day_28">
                        Event end
                        <span class="form-required"> * </span>
                    </label>
                    <div id="cid_28" class="form-input-wide jf-required">
                        <input type="datetime-local" id="day_28" name="e_time" class="form-textbox validate[required]" value="" data-component="e_time" aria-labelledby="day_28" required="" />
                    </div>
                </li>

                <li class="form-line jf-required" data-type="control_textarea" id="id_11">
                    <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11">
                        Description
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_11" class="form-input-wide jf-required">
                        <textarea id="input_11" class="form-textarea validate[required]" name="comment" cols="50" rows="4" data-component="textarea" required="" aria-labelledby="label_11"></textarea>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_dropdown" id="id_19">
                    <label class="form-label form-label-top form-label-auto" id="label_19" for="input_19">
                        Event category
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_19" class="form-input-wide jf-required">
                        <select class="form-dropdown validate[required]" id="input_19" name="category" style="width:150px" data-component="dropdown" required="" aria-labelledby="label_19">
                            <option value="">  </option>
                            <option value="One-way"> Events </option>
                            <option value="Life"> Life </option>
                            <option value="Education"> Education </option>
                            <option value="Origin"> Origin </option>
                            <option value="Maps"> Maps </option>
                            <option value="Culture"> Culture </option>
                            <option value="Country"> Country </option>
                        </select>
                    </div>
                </li>
                <li class="form-line" data-type="control_button" id="id_1">
                    <div id="cid_1" class="form-input-wide">
                        <div style="text-align:center" class="form-buttons-wrapper ">
                            <button id="input_1" type="submit" class="form-submit-button form-submit-button-simple_black" data-component="button">
                                Submit
                            </button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <input type="hidden" id="simple_spc" name="simple_spc" value="events2" />
    </form>
</div>
</body>
</html>
