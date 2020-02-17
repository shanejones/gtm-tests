@extends('_layouts.master')

@section('head')
<title>GTM Tests - Shane Jones - Under2</title>

<script id="twitter-wjs" type="text/javascript" async defer src="//platform.twitter.com/widgets.js"></script>
@endsection

@section('content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=2987973207942050&autoLogAppEvents=1"></script>


<main class="p-4 main">
    <h1 class="text-3xl font-light text-black">Google Tag Manager Tests</h1>
    <p class="pb-4 my-4 text-gray-600 border-b-2">An experiment by <a href="https://twitter.com/shanejones">Shane Jones</a> from <a href="http://under2.agency/">Under2</a></p>

    <p>This page will be pulling in scripts from external sources. To keep the DOM pretty much identical through all tests, the name of this test will appear in the URL</p>
    <p>This page will include external widgets from Facebook, Twitter and some other tools too.</p>

    <h2 class="text-2xl font-light text-black">Facebook Widget</h2>

    <div class="fb-page" data-href="https://www.facebook.com/under2agency/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/under2agency/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/under2agency/">Under2</a></blockquote></div>

    <h2 class="text-2xl font-light text-black">Twitter Widget</h2>

    <div class="w-64">
        <a class="twitter-timeline"
            href="https://twitter.com/ShaneJones"
            data-chrome="nofooter noborders">
            Tweets by @ShaneJones
        </a>
    </div>


</main>

@endsection
