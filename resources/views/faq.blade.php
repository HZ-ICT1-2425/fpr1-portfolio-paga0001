@extends('layouts.app')

@section('title', 'Home Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/faqstyles.css') }}">

    <!-- Include the navigation bar -->
    @include('partials.nav')

    <!-- JavaScript (deferred for better performance) -->
    <script src="{{ asset('js/collapsmenu.js') }}" defer></script>

    @section('content')
        <h1>FAQ</h1>
        <main>
            <button class="accordion">How to Login to HZ.nl Portal?</button>
            <div class="panel">
                <p>You can login to the portal from
                    <a href="https://portal.hz.nl/en/" target="_blank">here</a>.
                </p>
            </div>
            <button class="accordion">How can you print a document from your laptop at HZ?</button>
            <div class="panel">
                <p>You can print documents from
                    <a href="https://print.hz.nl/" target="_blank">here</a>.
                    <br>
                    Just login to your HZ account.
                    <br>
                    Make sure that you have balance on your account. <br>
                    Remember to also choose which
                    printer you want to use.
                </p>
            </div>
            <button class="accordion">How can you scan a document a send it to your laptop at HZ?</button>
            <div class="panel">
                <p>Scanning documents have their own instruction page
                    <a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?unid=d065a4e8a56d47dcbd0ffb9cdf78f20b&origin=searchPreview"
                       target="_blank">in here</a>.
                </p>
            </div>
            <button class="accordion">How can I buy something (like when I sign up for the
                IT introduction event) on the HZ web shop?</button>
            <div class="panel">
                <p>Login to
                    <a href="https://webshop.hz.nl/webshopapp/default.aspx?menu=082076044027019251066025111065201099237062130097"
                       target="_blank">
                        here</a>.
                    <br>
                    You should be able to choose from different items, tickets or you can even
                    enroll to events.
                </p>
            </div>
            <button class="accordion">How can you book a project space?</button>
            <div class="panel">
                <p>You can book a space from
                    <a href="https://hzuniversity.topdesk.net/tas/public/ssp/" target="_blank">here</a>.
                    <br>
                    Login and select
                    <b>reservations</b>. Then select
                    <b>reserve a meeting or project room</b>.
                    <br>
                    Then just pick a time and book a room.
                </p>
            </div>
            <button class="accordion">What are the instructions if you want to park your car at the HZ parking lot?</button>
            <div class="panel">
                <p>Currently there is no available parking in Poelendaelesingel. You can find
                    the current instructions for Middelburg's campus
                    <a href="https://hz.nl/en/news/parking-in-middelburg-poelendaelesingel-no-longer-available"
                       target="_blank">in here</a>.
                </p>
            </div>
        </main>
    @endsection
