@extends('layouts.app')

@section('title', 'Dashboard')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboardstyles.css') }}">

@section('content')
    <!-- Include the navigation bar -->
    @include('partials.nav')

    <h1>Dashboard</h1>
    <main>
        <article class="content">
            <!-- Main content -->
            <p>To complete the 1st year you need to have 45 EC's.
                <br>
                Maximum that you can earn for 1 year it 60 EC's.
                <br>
                <br>
            </p>
            <article>
                <table>
                    <tr>
                        <td class="notTaken">Not taken</td>
                        <td class="passed">Passed</td>
                        <td class="failed">Failed</td>
                    </tr>
                </table>
            </article>
            <div id="Table">
                <table>
                    <tr>
                        <td id="Quarter">Quartile</td>
                        <td id="courses">Courses</td>
                        <td id="ec">EC's</td>
                        <td id="exam">Exam</td>
                        <td id="grade">Grade</td>
                    </tr>
                    <tr>
                        <td rowspan="3">1</td>
                        <td class="passed">Programme and Careers Orientation</td>
                        <td class="passed">2.5</td>
                        <td class="passed">Assessment website</td>
                        <td class="passed">7.8</td>
                    </tr>
                    <tr>
                        <!-- <td>1</td> -->
                        <td class="passed">Computer Science Basics</td>
                        <td class="passed">5</td>
                        <td class="passed">Written exam</td>
                        <td class="passed">7.7</td>
                    </tr>
                    <tr>
                        <!-- <td>1</td> -->
                        <td class="passed">Programming Basics</td>
                        <td class="passed">5</td>
                        <td class="passed">Case study exam</td>
                        <td class="passed">7.7</td>
                    </tr>
                    <tr>
                        <td rowspan="2">2</td>
                        <td rowspan="2">Object-Oriented Programming</td>
                        <td  class="passed">5</td>
                        <td  class="passed">Group assignment</td>
                        <td  class="passed">6.7</td>
                    </tr>
                    <tr>
                        <!-- <td>1</td> -->
                        <!--<td>Object-Oriented Programming</td>-->
                        <td class="failed">5</td>
                        <td class="failed">Case study exam</td>
                        <td class="failed">4.8</td>
                    </tr>
                    <tr>
                        <td rowspan="4">3</td>
                        <td rowspan="4">Framework Project 1</td>
                        <td>5</td>
                        <td>On-site case study exam</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <!--<td rowspan="4">3</td>-->
                        <!--<td>Framework Project 1</td>-->
                        <td>1.25</td>
                        <td>Database exam</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <!--<td rowspan="4">3</td>-->
                        <!--<td>Framework Project 1</td>-->
                        <td>2.5</td>
                        <td>Group presentation on project result</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <!--<td rowspan="4">3</td>-->
                        <!--<td>Framework Project 1</td>-->
                        <td>1.25</td>
                        <td>Group portfolio with individual elements on requirements</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td rowspan="2">Business IT Consultancy Basics</td>
                        <td rowspan="2">2.5</td>
                        <td rowspan="2">Video</td>
                        <td rowspan="2">-</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <!-- <td>Business IT Consultancy Basics</td>-->
                        <!-- <td>2.5</td>-->
                        <!-- <td rowspan="2">Video</td>-->
                        <!-- <td>-</td>-->
                    </tr>
                    <tr>
                        <td rowspan="3">4</td>
                        <td rowspan="3">Framework Project 2</td>
                        <td>2.5</td>
                        <td>Final delivery</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <!--<td>4</td>-->
                        <!--<td>Framework Project 2</td>-->
                        <td>2.5</td>
                        <td>Report of acceptance tests and optional assessments</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <!--<td>4</td>-->
                        <!--<td>Framework Project 2</td>-->
                        <td>5</td>
                        <td>IT Development portfolio</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1-4</td>
                        <td>Personal Professional Development: Exploration</td>
                        <td>12.5</td>
                        <td>English test</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>1-4</td>
                        <td>IT-Personality</td>
                        <td>5</td>
                        <td>4 portfolios</td>
                        <td>-</td>
                    </tr>
                </table>
            </div>
            <div class="wrapper">
                <div class="progress-bar">
                    <span id="progress" class="progress-bar-fill"></span>
                </div>
            </div>
        </article>
    </main>
@endsection
