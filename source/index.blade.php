@extends('_layouts.master')

@section('head')
<title>GTM Tests - Shane Jones - Under2</title>
@endsection

@section('content')

<main class="p-4 main">
    <h1 class="text-3xl font-light text-black">Google Tag Manager Tests</h1>
    <p class="pb-4 my-4 text-gray-600 border-b-2">An experiment by <a href="https://twitter.com/shanejones">Shane Jones</a> from <a href="http://under2.agency/">Under2</a></p>

    <h2 class="text-3xl font-light text-black">Tests</h2>
    <ul>
        <li><a href="no-gtm/">No Google Tag Manager</a></li>
        <li><a href="gmt-dom-ready/">Google Tag Manager DOM Ready</a></li>
        <li><a href="gmt-window-ready/">Google Tag Manager Window Ready</a></li>
        <li><a href="defer-gmt-dom-ready/">Google Tag Manager DOM Ready</a></li>
        <li><a href="defer-gmt-window-ready/">Google Tag Manager Window Ready</a></li>
    </ul>

</main>

@endsection
