@extends('layouts.app')

@section('title', 'Home Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">


    <!-- Include the navigation bar -->
    @include('partials.nav')

@section('content')

        <h1>Why the Netherlands?</h1>
        <img src="{{ asset('images/flag-of-netherlands.png') }}" class="netherlands" alt="flag of the netherlands">
        <p>It's good to know why you would want to start studying on an other country.
            <br>
            Where you don't know anybody and where you cannot speak the local language.
            To simply put it, it's because you want to see how your life could be if you
            would take that next step, and that's exactly what I did. And now after being here for few months I can
            say that I do not regret it at all.
        </p>
        <h1>Why ICT-HBO?</h1>
        <img src="{{ asset('images/logo-matala.png') }}" class="business" alt="logo of old school">
        <p>I did ask this same question from myself when I 1st applied for the
            <a href="https://en.bc.fi/" target="_blank">Helsinki Business College</a>
            back in 2017.
            Why did I study to become a datanome?
            <br>
            (Vocational Qualification in Business Information
            Technology<!-- try to say that 5 times and fast-->).
            And the first reason is that I have always wanted to do something with
            computers.
            But when thinking more about it maybe it was because I have always liked about
            the known and unknown of possibilities that what you can you with computers.
            I also always wanted to create my own game,
            and that's why I studied to became a game developer.
            <br>
            <br>
            I want to get better in coding, or understanding the code.
            My previous 4 years of working experience with MySQL have gotten me really close
            to databases and understanding how they are connected to the
            front-end and back-end as well.
            But not just that I also wanted to be able to create what I was able to imagine,
            and just the feeling when you have created a game that looks and feels just like
            you
            is the best reward that I could ever hope to get.
        </p>
    <img src="{{ asset('images/hz-university-of-applied-sciences.png') }}" class="hz" alt="HZ Logo">
    <h1>What are your future goals?</h1>
    <h4>My future goals are the following</h4>
    <ol>
        <li>Start the school</li>
        <br>
        <li>Get to know more people and build connections</li>
        <br>
        <li>Study hard</li><br>
        <li>Have fun - Possibility of
            <a href="https://en.wikipedia.org/wiki/Pantsdrunk" target="_blank">kalsarikännit</a>
        </li><br>
        <li>Graduate from the school</li><br>
        <li>Get a job within the field - connections?</li><br>
        <li>See what the future holds</li>

    </ol>
@endsection
