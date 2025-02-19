@extends('layouts.app')

@section('title', 'Profile')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/profilestyles.css') }}">


    <!-- Include the navigation bar -->
    @include('partials.nav')

    @section('content')
        <h1 class="PageName">Profile</h1>
        <main>
            <article class="basics">
                <div id="profile">
                    <img src="{{ asset('images/profilepic.jpg') }}" alt="Profile Pic" id="ProfilePic">
                    <table>
                        <tr>
                            <td>Name: Joni Paganus</td>
                            <td>Spoken Languages:</td>
                        </tr>
                        <tr>
                            <td>Nationality: Finnish</td>
                            <td>Finnish / suomi</td>
                        </tr>
                        <tr>
                            <td>Age: 23-years-old</td>
                            <td>English</td>
                        </tr>
                    </table>
                </div>
            </article>
            <article class="content">
                <div id="content">
                    <h1>Who am I?</h1>
                    <p>My name is Joni, and I come from Finland.
                        <br>
                        I have been studied coding before back in 2017-2019, which after I started
                        working with databases as a trainee at the start and climb myself to head of
                        technical support.
                    </p>
                    <h1>My time in the Army</h1>
                    <p>I joined to the army on 6th of July 2020 in
                        <a href="https://en.wikipedia.org/wiki/Hamina" target="_blank">Hamina</a>
                        <a href="" target="_blank"></a>
                        and got moved to reserve forces with a rank of jaeger (jääkäri) in 17th of March
                        2021 (255 days). During my army time I learned the basics of being a soldier,
                        sleeping in the tent, being hungry all the time, and to WAIT hours.
                        <br>
                        I served as a part of mandatory conscription law as a MP (military police). My
                        training included protecting VIP's, car escorts, attacking on build areas, and
                        protecting & guarding the
                        <a href="https://en.wikipedia.org/wiki/Reserve_Officer_School_(Finland)" target="_blank">RUK</a>
                        (reservi upseeri kurssi).
                        <br>
                        I also send 2 weeks in Lapland during large exercise. We were guarding the HQ.
                        It was a long drive from South of Finland all the way to
                        <a href="https://en.wikipedia.org/wiki/Rovaniemi" target="_blank">Rovaniemi</a>.
                    </p>
                </div>
            </article>
            <article class="list">
                <h1>My Characteristics</h1>
                <ul class="bottom_list">
                    <li>Logical</li><br>
                    <li>Relaxed</li><br>
                    <li>Determined</li><br>
                    <li>Empathic</li><br>
                    <li>Good sense of humor</li><br>
                    <li>Honest</li><br>
                </ul>
            </article>
            <table class="links">
                <tr>
                    <td>
                        <a href="https://www.linkedin.com/in/joni-paganus/" class="linkedin" style="display: inline-block;"
                           target="_blank">
                            <img src="{{ asset('images/linkedin.png') }}"  id="link" alt="linkedin logo"></a>
                    </td>
                    <td>
                        <a href="https://github.com/paga0001?tab=repositories" class="linkedin"
                           style="display: inline-block;" target="_blank">
                            <img src="{{ asset('images/github-logo.png') }}"  id="link" alt="github logo"></a>
                    </td>
                </tr>
            </table>
        </main>

    @endsection
