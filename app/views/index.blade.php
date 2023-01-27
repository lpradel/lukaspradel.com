@extends('layouts.master')

@section('title')
Lukas Pradel
@stop

@section('language-links')
@if (App::getLocale() == "en")
    <div class="polyglot-language-switcher" data-grid-columns="1" data-anim-effect="fade" data-open-mode="click" style="display:inline;">
        <ul style="display: none">
            <li><a href="/?lang=de" title="German" data-lang-id="de_DE"> Deutsch</a></li>
            <li><a href="/?lang=en" title="English"  data-lang-id="en_US" class="pls-selected-locale"> English</a></li>
        </ul>
    </div>
@else
    <div class="polyglot-language-switcher" data-grid-columns="1" data-anim-effect="fade" data-open-mode="click" style="display:inline;">
        <ul style="display: none">
            <li><a href="/?lang=de" title="German" data-lang-id="de_DE" class="pls-selected-locale"> Deutsch</a></li>
            <li><a href="/?lang=en" title="English"  data-lang-id="en_US" > English</a></li>
        </ul>
    </div>
@endif
@stop

@section('main')
<?php $highlightNo = rand(1,6); // random color theme ?>
<main>
    <div class="v-card">
        <div class="container-fluid">
            <div class="ui-user">
                <img src="images/me.jpg" alt="" class="img-responsive" />
                <h3><a href="#">Lukas Pradel</a><span>@lang('index.about-0-0')</span></h3>
            </div>
            <p> @lang('index.about-1-0')
                @lang('index.about-1-1')
                <a href="https://conciso.de//"><span class="highlight{{$highlightNo}}">Conciso GmbH</span></a>@lang('index.about-1-2')
                @lang('index.about-2-1')
                <a href="http://steamcommunity.com/id/boonzsteam/"><span class="highlight{{$highlightNo}}">@lang('index.about-2-2')</span></a>,
                @lang('index.about-2-3')
                @lang('index.about-2-4')
                <a href="images/wee.jpg"><span class="highlight{{$highlightNo}}">@lang('index.about-2-5')</span></a>.
            </p>

            <br />
            <hr />

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4 col-mob">
                    <div class="ui-item">
                        <h4>@lang('index.col-1-0')</h4>
                        <ul>
                            <li><a href="https://blog.lukaspradel.com">Blog</a></li>
                            <li><a href="https://www.xing.com/profile/Lukas_Pradel/">XING</a></li>
                            <li><a href="https://www.linkedin.com/in/lukaspradel">LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 col-mob">
                    <div class="ui-item">
                        <h4>@lang('index.col-2-0')</h4>
                        <ul>
                            <li><a href="https://github.com/lpradel">GitHub</a></li>
                            <li><a href="https://libraries.io/github/lpradel">Open Source</a></li>
                            <li><a href="https://resume.github.io/?lpradel">OS Resume</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 col-mob">
                    <div class="ui-item">
                        <h4>@lang('index.col-3-0')</h4>
                        <ul>
                            <li> <a href="https://mailhide.io/e/yULcLnh3" onclick="popup=window.open('https://mailhide.io/e/yULcLnh3','mailhidepopup','width=580,height=635'); return false;">E-Mail</a></li>
                            <li><a href="https://keybase.io/lpradel">GPG</a></li>
                            <li><a href="https://twitter.com/lukaspradel">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop