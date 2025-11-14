<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.5.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.5.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-carpooling-drivers-create-driver-ride">
                                <a href="#endpoints-POSTapi-carpooling-drivers-create-driver-ride">Create a new carpool ride as a driver.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-drivers-ride-bookings--ride_id-">
                                <a href="#endpoints-GETapi-carpooling-drivers-ride-bookings--ride_id-">Get bookings for a ride.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-">
                                <a href="#endpoints-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-">Accept a ride booking request.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-">
                                <a href="#endpoints-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-">Cancel a ride booking.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-drivers-cancel-ride--ride_id-">
                                <a href="#endpoints-GETapi-carpooling-drivers-cancel-ride--ride_id-">Cancel a ride.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-drivers-create-from-ride--ride_id-">
                                <a href="#endpoints-GETapi-carpooling-drivers-create-from-ride--ride_id-">Create a new ride from an existing ride.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-drivers-open-ride--ride_id-">
                                <a href="#endpoints-GETapi-carpooling-drivers-open-ride--ride_id-">Open a ride.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-drivers-start-ride--ride_id-">
                                <a href="#endpoints-GETapi-carpooling-drivers-start-ride--ride_id-">Start a ride.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-drivers-end-ride--ride_id-">
                                <a href="#endpoints-GETapi-carpooling-drivers-end-ride--ride_id-">End a ride.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-">
                                <a href="#endpoints-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-">View ride histories.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-carpooling-drivers-create-ride-notice">
                                <a href="#endpoints-POSTapi-carpooling-drivers-create-ride-notice">Create a ride notice.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-carpooling-passengers-view-carpool-rides">
                                <a href="#endpoints-POSTapi-carpooling-passengers-view-carpool-rides">View available carpool rides.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-passengers-start-ride--booking_id-">
                                <a href="#endpoints-GETapi-carpooling-passengers-start-ride--booking_id-">Start a ride as a passenger.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-">
                                <a href="#endpoints-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-">Cancel a ride booking as a passenger.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-">
                                <a href="#endpoints-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-">Complete a ride as a passenger.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-carpooling-passengers-view-booking-history--user_id-">
                                <a href="#endpoints-GETapi-carpooling-passengers-view-booking-history--user_id-">View booking history for a passenger.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: November 14, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-carpooling-drivers-create-driver-ride">Create a new carpool ride as a driver.</h2>

<p>
</p>

<p>Creates a new ride with the given data.</p>

<span id="example-requests-POSTapi-carpooling-drivers-create-driver-ride">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/carpooling/drivers/create-driver-ride" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": 17,
    \"driver_vehicle_id\": 17,
    \"origin_name\": \"consequatur\",
    \"destination_name\": \"consequatur\",
    \"departure_time\": \"consequatur\",
    \"date_of_departure\": \"consequatur\",
    \"available_seats\": 17,
    \"status\": \"consequatur\",
    \"contribution_per_seat\": 11613.31890586,
    \"total_bookings\": 17,
    \"origin_lat\": 11613.31890586,
    \"origin_long\": 11613.31890586,
    \"destination_lat\": 11613.31890586,
    \"destination_long\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/drivers/create-driver-ride"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 17,
    "driver_vehicle_id": 17,
    "origin_name": "consequatur",
    "destination_name": "consequatur",
    "departure_time": "consequatur",
    "date_of_departure": "consequatur",
    "available_seats": 17,
    "status": "consequatur",
    "contribution_per_seat": 11613.31890586,
    "total_bookings": 17,
    "origin_lat": 11613.31890586,
    "origin_long": 11613.31890586,
    "destination_lat": 11613.31890586,
    "destination_long": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-carpooling-drivers-create-driver-ride">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
     &quot;success&quot;: true,
     &quot;message&quot;: &quot;Ride created successfully.&quot;,
     &quot;data&quot;: { &quot;id&quot;: 1, ... }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Validation failed.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-carpooling-drivers-create-driver-ride" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-carpooling-drivers-create-driver-ride"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-carpooling-drivers-create-driver-ride"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-carpooling-drivers-create-driver-ride" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-carpooling-drivers-create-driver-ride">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-carpooling-drivers-create-driver-ride" data-method="POST"
      data-path="api/carpooling/drivers/create-driver-ride"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-carpooling-drivers-create-driver-ride', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-carpooling-drivers-create-driver-ride"
                    onclick="tryItOut('POSTapi-carpooling-drivers-create-driver-ride');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-carpooling-drivers-create-driver-ride"
                    onclick="cancelTryOut('POSTapi-carpooling-drivers-create-driver-ride');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-carpooling-drivers-create-driver-ride"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/carpooling/drivers/create-driver-ride</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="17"
               data-component="body">
    <br>
<p>The id of the user. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>driver_vehicle_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="driver_vehicle_id"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="17"
               data-component="body">
    <br>
<p>The vehicle id. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="origin_name"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="consequatur"
               data-component="body">
    <br>
<p>The name of the origin location. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>destination_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="destination_name"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="consequatur"
               data-component="body">
    <br>
<p>The name of the destination location. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>departure_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="departure_time"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="consequatur"
               data-component="body">
    <br>
<p>The time of departure (H:i format). Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_of_departure</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_of_departure"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="consequatur"
               data-component="body">
    <br>
<p>The date of departure (Y-m-d). Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>available_seats</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="available_seats"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="17"
               data-component="body">
    <br>
<p>The number of available seats. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="consequatur"
               data-component="body">
    <br>
<p>The ride status. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contribution_per_seat</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="contribution_per_seat"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Contribution asked per seat. Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>total_bookings</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="total_bookings"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="17"
               data-component="body">
    <br>
<p>The current bookings for ride. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin_lat</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="origin_lat"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Latitude of origin. Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin_long</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="origin_long"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Longitude of origin. Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>destination_lat</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="destination_lat"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Latitude of destination. Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>destination_long</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="destination_long"                data-endpoint="POSTapi-carpooling-drivers-create-driver-ride"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Longitude of destination. Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-carpooling-drivers-ride-bookings--ride_id-">Get bookings for a ride.</h2>

<p>
</p>

<p>Returns all bookings for a specific ride ID.</p>

<span id="example-requests-GETapi-carpooling-drivers-ride-bookings--ride_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/drivers/ride-bookings/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/drivers/ride-bookings/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-drivers-ride-bookings--ride_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
     &quot;success&quot;: true,
     &quot;message&quot;: &quot;Bookings retrieved.&quot;,
     &quot;data&quot;: [ { &quot;id&quot;: 1, ... }, ... ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to retrieve ride bookings&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-drivers-ride-bookings--ride_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-drivers-ride-bookings--ride_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-drivers-ride-bookings--ride_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-drivers-ride-bookings--ride_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-drivers-ride-bookings--ride_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-drivers-ride-bookings--ride_id-" data-method="GET"
      data-path="api/carpooling/drivers/ride-bookings/{ride_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-drivers-ride-bookings--ride_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-drivers-ride-bookings--ride_id-"
                    onclick="tryItOut('GETapi-carpooling-drivers-ride-bookings--ride_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-drivers-ride-bookings--ride_id-"
                    onclick="cancelTryOut('GETapi-carpooling-drivers-ride-bookings--ride_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-drivers-ride-bookings--ride_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/drivers/ride-bookings/{ride_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-drivers-ride-bookings--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-drivers-ride-bookings--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ride_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ride_id"                data-endpoint="GETapi-carpooling-drivers-ride-bookings--ride_id-"
               value="17"
               data-component="url">
    <br>
<p>The id of the ride. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-">Accept a ride booking request.</h2>

<p>
</p>

<p>Accepts a user's booking for a ride.</p>

<span id="example-requests-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/drivers/accept-ride-booking/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/drivers/accept-ride-booking/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
     &quot;success&quot;: true,
     &quot;message&quot;: &quot;Booking accepted.&quot;,
     &quot;data&quot;: { &quot;id&quot;: 3, ... }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to accept ride booking&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-" data-method="GET"
      data-path="api/carpooling/drivers/accept-ride-booking/{ride_booking_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-"
                    onclick="tryItOut('GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-"
                    onclick="cancelTryOut('GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/drivers/accept-ride-booking/{ride_booking_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ride_booking_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ride_booking_id"                data-endpoint="GETapi-carpooling-drivers-accept-ride-booking--ride_booking_id-"
               value="17"
               data-component="url">
    <br>
<p>The id of the ride booking. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-">Cancel a ride booking.</h2>

<p>
</p>

<p>Cancels an existing ride booking.</p>

<span id="example-requests-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/drivers/cancel-ride-booking/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/drivers/cancel-ride-booking/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
     &quot;success&quot;: true,
     &quot;message&quot;: &quot;Booking cancelled.&quot;,
     &quot;data&quot;: { &quot;id&quot;: 3, ... }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to cancel ride booking&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-" data-method="GET"
      data-path="api/carpooling/drivers/cancel-ride-booking/{ride_booking_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-"
                    onclick="tryItOut('GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-"
                    onclick="cancelTryOut('GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/drivers/cancel-ride-booking/{ride_booking_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ride_booking_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ride_booking_id"                data-endpoint="GETapi-carpooling-drivers-cancel-ride-booking--ride_booking_id-"
               value="17"
               data-component="url">
    <br>
<p>The id of the ride booking. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-carpooling-drivers-cancel-ride--ride_id-">Cancel a ride.</h2>

<p>
</p>

<p>Cancels an existing ride by its ID.</p>

<span id="example-requests-GETapi-carpooling-drivers-cancel-ride--ride_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/drivers/cancel-ride/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/drivers/cancel-ride/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-drivers-cancel-ride--ride_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Ride cancelled successfully.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to cancel ride.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-drivers-cancel-ride--ride_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-drivers-cancel-ride--ride_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-drivers-cancel-ride--ride_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-drivers-cancel-ride--ride_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-drivers-cancel-ride--ride_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-drivers-cancel-ride--ride_id-" data-method="GET"
      data-path="api/carpooling/drivers/cancel-ride/{ride_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-drivers-cancel-ride--ride_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-drivers-cancel-ride--ride_id-"
                    onclick="tryItOut('GETapi-carpooling-drivers-cancel-ride--ride_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-drivers-cancel-ride--ride_id-"
                    onclick="cancelTryOut('GETapi-carpooling-drivers-cancel-ride--ride_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-drivers-cancel-ride--ride_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/drivers/cancel-ride/{ride_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-drivers-cancel-ride--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-drivers-cancel-ride--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ride_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ride_id"                data-endpoint="GETapi-carpooling-drivers-cancel-ride--ride_id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the ride to cancel. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-carpooling-drivers-create-from-ride--ride_id-">Create a new ride from an existing ride.</h2>

<p>
</p>

<p>Creates a new ride entity based on data from an existing ride.</p>

<span id="example-requests-GETapi-carpooling-drivers-create-from-ride--ride_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/drivers/create-from-ride/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/drivers/create-from-ride/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-drivers-create-from-ride--ride_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;success&quot;: true,
  &quot;message&quot;: &quot;Ride created from existing ride.&quot;,
  &quot;data&quot;: { &quot;id&quot;: 123, ... }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to create ride from existing ride.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-drivers-create-from-ride--ride_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-drivers-create-from-ride--ride_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-drivers-create-from-ride--ride_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-drivers-create-from-ride--ride_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-drivers-create-from-ride--ride_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-drivers-create-from-ride--ride_id-" data-method="GET"
      data-path="api/carpooling/drivers/create-from-ride/{ride_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-drivers-create-from-ride--ride_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-drivers-create-from-ride--ride_id-"
                    onclick="tryItOut('GETapi-carpooling-drivers-create-from-ride--ride_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-drivers-create-from-ride--ride_id-"
                    onclick="cancelTryOut('GETapi-carpooling-drivers-create-from-ride--ride_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-drivers-create-from-ride--ride_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/drivers/create-from-ride/{ride_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-drivers-create-from-ride--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-drivers-create-from-ride--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ride_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ride_id"                data-endpoint="GETapi-carpooling-drivers-create-from-ride--ride_id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the ride to clone. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-carpooling-drivers-open-ride--ride_id-">Open a ride.</h2>

<p>
</p>

<p>Changes the status of a ride to open.</p>

<span id="example-requests-GETapi-carpooling-drivers-open-ride--ride_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/drivers/open-ride/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/drivers/open-ride/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-drivers-open-ride--ride_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Ride opened successfully.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to open ride.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-drivers-open-ride--ride_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-drivers-open-ride--ride_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-drivers-open-ride--ride_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-drivers-open-ride--ride_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-drivers-open-ride--ride_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-drivers-open-ride--ride_id-" data-method="GET"
      data-path="api/carpooling/drivers/open-ride/{ride_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-drivers-open-ride--ride_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-drivers-open-ride--ride_id-"
                    onclick="tryItOut('GETapi-carpooling-drivers-open-ride--ride_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-drivers-open-ride--ride_id-"
                    onclick="cancelTryOut('GETapi-carpooling-drivers-open-ride--ride_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-drivers-open-ride--ride_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/drivers/open-ride/{ride_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-drivers-open-ride--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-drivers-open-ride--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ride_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ride_id"                data-endpoint="GETapi-carpooling-drivers-open-ride--ride_id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the ride to open. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-carpooling-drivers-start-ride--ride_id-">Start a ride.</h2>

<p>
</p>

<p>Marks the ride as started.</p>

<span id="example-requests-GETapi-carpooling-drivers-start-ride--ride_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/drivers/start-ride/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/drivers/start-ride/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-drivers-start-ride--ride_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Ride started successfully.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to start ride.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-drivers-start-ride--ride_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-drivers-start-ride--ride_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-drivers-start-ride--ride_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-drivers-start-ride--ride_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-drivers-start-ride--ride_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-drivers-start-ride--ride_id-" data-method="GET"
      data-path="api/carpooling/drivers/start-ride/{ride_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-drivers-start-ride--ride_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-drivers-start-ride--ride_id-"
                    onclick="tryItOut('GETapi-carpooling-drivers-start-ride--ride_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-drivers-start-ride--ride_id-"
                    onclick="cancelTryOut('GETapi-carpooling-drivers-start-ride--ride_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-drivers-start-ride--ride_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/drivers/start-ride/{ride_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-drivers-start-ride--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-drivers-start-ride--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ride_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ride_id"                data-endpoint="GETapi-carpooling-drivers-start-ride--ride_id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the ride to start. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-carpooling-drivers-end-ride--ride_id-">End a ride.</h2>

<p>
</p>

<p>Marks the ride as completed/ended.</p>

<span id="example-requests-GETapi-carpooling-drivers-end-ride--ride_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/drivers/end-ride/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/drivers/end-ride/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-drivers-end-ride--ride_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Ride ended successfully.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to end ride.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-drivers-end-ride--ride_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-drivers-end-ride--ride_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-drivers-end-ride--ride_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-drivers-end-ride--ride_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-drivers-end-ride--ride_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-drivers-end-ride--ride_id-" data-method="GET"
      data-path="api/carpooling/drivers/end-ride/{ride_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-drivers-end-ride--ride_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-drivers-end-ride--ride_id-"
                    onclick="tryItOut('GETapi-carpooling-drivers-end-ride--ride_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-drivers-end-ride--ride_id-"
                    onclick="cancelTryOut('GETapi-carpooling-drivers-end-ride--ride_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-drivers-end-ride--ride_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/drivers/end-ride/{ride_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-drivers-end-ride--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-drivers-end-ride--ride_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ride_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ride_id"                data-endpoint="GETapi-carpooling-drivers-end-ride--ride_id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the ride to end. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-">View ride histories.</h2>

<p>
</p>

<p>Shows all ride histories for a specific driver vehicle.</p>

<span id="example-requests-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/drivers/view-ride-hsitories/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/drivers/view-ride-hsitories/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;success&quot;: true,
  &quot;data&quot;: [{}, ...],
  &quot;message&quot;: &quot;Histories retrieved.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to retrieve ride histories.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-" data-method="GET"
      data-path="api/carpooling/drivers/view-ride-hsitories/{driver_vehicle_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-"
                    onclick="tryItOut('GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-"
                    onclick="cancelTryOut('GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/drivers/view-ride-hsitories/{driver_vehicle_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>driver_vehicle_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="driver_vehicle_id"                data-endpoint="GETapi-carpooling-drivers-view-ride-hsitories--driver_vehicle_id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the driver's vehicle. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-carpooling-drivers-create-ride-notice">Create a ride notice.</h2>

<p>
</p>

<p>Creates a notice related to a ride.</p>

<span id="example-requests-POSTapi-carpooling-drivers-create-ride-notice">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/carpooling/drivers/create-ride-notice" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"ride_id\": 17,
    \"message\": \"consequatur\",
    \"notice_type\": \"delay\",
    \"title\": \"consequatur\",
    \"content\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/drivers/create-ride-notice"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ride_id": 17,
    "message": "consequatur",
    "notice_type": "delay",
    "title": "consequatur",
    "content": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-carpooling-drivers-create-ride-notice">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;success&quot;: true,
  &quot;message&quot;: &quot;Ride notice created successfully.&quot;,
  &quot;data&quot;: { &quot;id&quot;: 1, ... }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to create ride notice.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-carpooling-drivers-create-ride-notice" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-carpooling-drivers-create-ride-notice"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-carpooling-drivers-create-ride-notice"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-carpooling-drivers-create-ride-notice" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-carpooling-drivers-create-ride-notice">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-carpooling-drivers-create-ride-notice" data-method="POST"
      data-path="api/carpooling/drivers/create-ride-notice"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-carpooling-drivers-create-ride-notice', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-carpooling-drivers-create-ride-notice"
                    onclick="tryItOut('POSTapi-carpooling-drivers-create-ride-notice');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-carpooling-drivers-create-ride-notice"
                    onclick="cancelTryOut('POSTapi-carpooling-drivers-create-ride-notice');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-carpooling-drivers-create-ride-notice"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/carpooling/drivers/create-ride-notice</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-carpooling-drivers-create-ride-notice"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-carpooling-drivers-create-ride-notice"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ride_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ride_id"                data-endpoint="POSTapi-carpooling-drivers-create-ride-notice"
               value="17"
               data-component="body">
    <br>
<p>The ID of the ride. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>message</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="message"                data-endpoint="POSTapi-carpooling-drivers-create-ride-notice"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notice_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notice_type"                data-endpoint="POSTapi-carpooling-drivers-create-ride-notice"
               value="delay"
               data-component="body">
    <br>
<p>Example: <code>delay</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>info</code></li> <li><code>delay</code></li> <li><code>cancel</code></li> <li><code>custom</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-carpooling-drivers-create-ride-notice"
               value="consequatur"
               data-component="body">
    <br>
<p>The title of the notice. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-carpooling-drivers-create-ride-notice"
               value="consequatur"
               data-component="body">
    <br>
<p>The content of the notice. Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-carpooling-passengers-view-carpool-rides">View available carpool rides.</h2>

<p>
</p>

<p>Returns a list of available carpool rides based on the search criteria.</p>

<span id="example-requests-POSTapi-carpooling-passengers-view-carpool-rides">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/carpooling/passengers/view-carpool-rides" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"origin_name\": \"consequatur\",
    \"destination_name\": \"consequatur\",
    \"origin_lat\": 11613.31890586,
    \"origin_long\": 11613.31890586,
    \"destination_lat\": 11613.31890586,
    \"destination_long\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/passengers/view-carpool-rides"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "origin_name": "consequatur",
    "destination_name": "consequatur",
    "origin_lat": 11613.31890586,
    "origin_long": 11613.31890586,
    "destination_lat": 11613.31890586,
    "destination_long": 11613.31890586
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-carpooling-passengers-view-carpool-rides">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
     &quot;data&quot;: [
         {
             &quot;id&quot;: 1,
             &quot;origin_name&quot;: &quot;Origin&quot;,
             &quot;destination_name&quot;: &quot;Destination&quot;,
             ...
         }
     ],
     &quot;message&quot;: &quot;Rides Listings&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-carpooling-passengers-view-carpool-rides" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-carpooling-passengers-view-carpool-rides"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-carpooling-passengers-view-carpool-rides"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-carpooling-passengers-view-carpool-rides" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-carpooling-passengers-view-carpool-rides">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-carpooling-passengers-view-carpool-rides" data-method="POST"
      data-path="api/carpooling/passengers/view-carpool-rides"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-carpooling-passengers-view-carpool-rides', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-carpooling-passengers-view-carpool-rides"
                    onclick="tryItOut('POSTapi-carpooling-passengers-view-carpool-rides');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-carpooling-passengers-view-carpool-rides"
                    onclick="cancelTryOut('POSTapi-carpooling-passengers-view-carpool-rides');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-carpooling-passengers-view-carpool-rides"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/carpooling/passengers/view-carpool-rides</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-carpooling-passengers-view-carpool-rides"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-carpooling-passengers-view-carpool-rides"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="origin_name"                data-endpoint="POSTapi-carpooling-passengers-view-carpool-rides"
               value="consequatur"
               data-component="body">
    <br>
<p>The name of the origin location. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>destination_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="destination_name"                data-endpoint="POSTapi-carpooling-passengers-view-carpool-rides"
               value="consequatur"
               data-component="body">
    <br>
<p>The name of the destination location. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin_lat</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="origin_lat"                data-endpoint="POSTapi-carpooling-passengers-view-carpool-rides"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Latitude of origin. Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin_long</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="origin_long"                data-endpoint="POSTapi-carpooling-passengers-view-carpool-rides"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Longitude of origin. Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>destination_lat</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="destination_lat"                data-endpoint="POSTapi-carpooling-passengers-view-carpool-rides"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Latitude of destination. Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>destination_long</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="destination_long"                data-endpoint="POSTapi-carpooling-passengers-view-carpool-rides"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Longitude of destination. Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-carpooling-passengers-start-ride--booking_id-">Start a ride as a passenger.</h2>

<p>
</p>

<p>Marks the ride booking as started for a passenger.</p>

<span id="example-requests-GETapi-carpooling-passengers-start-ride--booking_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/passengers/start-ride/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/passengers/start-ride/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-passengers-start-ride--booking_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Ride started.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to start ride.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-passengers-start-ride--booking_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-passengers-start-ride--booking_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-passengers-start-ride--booking_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-passengers-start-ride--booking_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-passengers-start-ride--booking_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-passengers-start-ride--booking_id-" data-method="GET"
      data-path="api/carpooling/passengers/start-ride/{booking_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-passengers-start-ride--booking_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-passengers-start-ride--booking_id-"
                    onclick="tryItOut('GETapi-carpooling-passengers-start-ride--booking_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-passengers-start-ride--booking_id-"
                    onclick="cancelTryOut('GETapi-carpooling-passengers-start-ride--booking_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-passengers-start-ride--booking_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/passengers/start-ride/{booking_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-passengers-start-ride--booking_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-passengers-start-ride--booking_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>booking_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="booking_id"                data-endpoint="GETapi-carpooling-passengers-start-ride--booking_id-"
               value="17"
               data-component="url">
    <br>
<p>The booking ID. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-">Cancel a ride booking as a passenger.</h2>

<p>
</p>

<p>Allows the passenger to cancel a ride booking.</p>

<span id="example-requests-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/passengers/passenger-cancel-ride-booking/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/passengers/passenger-cancel-ride-booking/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Booking cancelled.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to cancel booking.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-" data-method="GET"
      data-path="api/carpooling/passengers/passenger-cancel-ride-booking/{booking_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-"
                    onclick="tryItOut('GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-"
                    onclick="cancelTryOut('GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/passengers/passenger-cancel-ride-booking/{booking_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>booking_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="booking_id"                data-endpoint="GETapi-carpooling-passengers-passenger-cancel-ride-booking--booking_id-"
               value="17"
               data-component="url">
    <br>
<p>The booking ID. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-">Complete a ride as a passenger.</h2>

<p>
</p>

<p>Marks the ride booking as completed for a passenger.</p>

<span id="example-requests-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/passengers/passenger-complete-ride/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/passengers/passenger-complete-ride/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Ride completed.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to complete ride.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-" data-method="GET"
      data-path="api/carpooling/passengers/passenger-complete-ride/{booking_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-passengers-passenger-complete-ride--booking_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-"
                    onclick="tryItOut('GETapi-carpooling-passengers-passenger-complete-ride--booking_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-"
                    onclick="cancelTryOut('GETapi-carpooling-passengers-passenger-complete-ride--booking_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-passengers-passenger-complete-ride--booking_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/passengers/passenger-complete-ride/{booking_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-passengers-passenger-complete-ride--booking_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-passengers-passenger-complete-ride--booking_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>booking_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="booking_id"                data-endpoint="GETapi-carpooling-passengers-passenger-complete-ride--booking_id-"
               value="17"
               data-component="url">
    <br>
<p>The booking ID. Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-carpooling-passengers-view-booking-history--user_id-">View booking history for a passenger.</h2>

<p>
</p>

<p>Returns the booking history for the specified passenger/user.</p>

<span id="example-requests-GETapi-carpooling-passengers-view-booking-history--user_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/carpooling/passengers/view-booking-history/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/carpooling/passengers/view-booking-history/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-carpooling-passengers-view-booking-history--user_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
     &quot;success&quot;: true,
     &quot;message&quot;: &quot;Booking history retrieved successfully&quot;,
     &quot;data&quot;: {
         &quot;booking&quot;: [...]
     }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-carpooling-passengers-view-booking-history--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-carpooling-passengers-view-booking-history--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-carpooling-passengers-view-booking-history--user_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-carpooling-passengers-view-booking-history--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-carpooling-passengers-view-booking-history--user_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-carpooling-passengers-view-booking-history--user_id-" data-method="GET"
      data-path="api/carpooling/passengers/view-booking-history/{user_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-carpooling-passengers-view-booking-history--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-carpooling-passengers-view-booking-history--user_id-"
                    onclick="tryItOut('GETapi-carpooling-passengers-view-booking-history--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-carpooling-passengers-view-booking-history--user_id-"
                    onclick="cancelTryOut('GETapi-carpooling-passengers-view-booking-history--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-carpooling-passengers-view-booking-history--user_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/carpooling/passengers/view-booking-history/{user_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-carpooling-passengers-view-booking-history--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-carpooling-passengers-view-booking-history--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="GETapi-carpooling-passengers-view-booking-history--user_id-"
               value="17"
               data-component="url">
    <br>
<p>The user ID. Example: <code>17</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
