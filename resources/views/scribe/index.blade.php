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
        var useCsrf = Boolean(1);
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.8.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.8.0.js") }}"></script>

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
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETup">
                                <a href="#endpoints-GETup">GET up</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETdashboard">
                                <a href="#endpoints-GETdashboard">GET dashboard</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETprofile">
                                <a href="#endpoints-GETprofile">Display the user's profile form.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEprofile">
                                <a href="#endpoints-DELETEprofile">Delete the user's account.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETproducts">
                                <a href="#endpoints-GETproducts">GET products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETproducts-store">
                                <a href="#endpoints-GETproducts-store">GET products/store</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEproducts-destroy--product_product_serial_number-">
                                <a href="#endpoints-DELETEproducts-destroy--product_product_serial_number-">DELETE products/destroy/{product_product_serial_number}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETproduct-delete--product_product_serial_number-">
                                <a href="#endpoints-GETproduct-delete--product_product_serial_number-">GET product/delete/{product_product_serial_number}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETproducts-create">
                                <a href="#endpoints-GETproducts-create">GET products/create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETproduct-edit--product_product_serial_number-">
                                <a href="#endpoints-GETproduct-edit--product_product_serial_number-">GET product/edit/{product_product_serial_number}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTproducts-update--product_product_serial_number-">
                                <a href="#endpoints-POSTproducts-update--product_product_serial_number-">POST products/update/{product_product_serial_number}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETproduct--product_product_serial_number-">
                                <a href="#endpoints-GETproduct--product_product_serial_number-">GET product/{product_product_serial_number}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETsellers">
                                <a href="#endpoints-GETsellers">GET sellers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETseller-create">
                                <a href="#endpoints-GETseller-create">GET seller/create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETseller-store">
                                <a href="#endpoints-GETseller-store">Store a new seller.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTseller-logout">
                                <a href="#endpoints-POSTseller-logout">POST seller/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETseller--id-">
                                <a href="#endpoints-GETseller--id-">GET seller/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETseller-edit--seller_id-">
                                <a href="#endpoints-GETseller-edit--seller_id-">GET seller/edit/{seller_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTseller-update--seller_id-">
                                <a href="#endpoints-POSTseller-update--seller_id-">POST seller/update/{seller_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GET-">
                                <a href="#endpoints-GET-">GET /</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTseller-store">
                                <a href="#endpoints-POSTseller-store">Store a new seller.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETclients">
                                <a href="#endpoints-GETclients">GET clients</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETclient--client_client_id-">
                                <a href="#endpoints-GETclient--client_client_id-">GET client/{client_client_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETclients-create">
                                <a href="#endpoints-GETclients-create">GET clients/create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTclient-store">
                                <a href="#endpoints-POSTclient-store">POST client/store</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETclient-edit--client_client_id-">
                                <a href="#endpoints-GETclient-edit--client_client_id-">GET client/edit/{client_client_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTclient-update--client_client_id-">
                                <a href="#endpoints-POSTclient-update--client_client_id-">POST client/update/{client_client_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETclient-delete--client_client_id-">
                                <a href="#endpoints-GETclient-delete--client_client_id-">GET client/delete/{client_client_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEclient-destroy--client_client_id-">
                                <a href="#endpoints-DELETEclient-destroy--client_client_id-">DELETE client/destroy/{client_client_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETcategories">
                                <a href="#endpoints-GETcategories">GET categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETcategories-create">
                                <a href="#endpoints-GETcategories-create">GET categories/create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETcategories-store">
                                <a href="#endpoints-GETcategories-store">GET categories/store</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETcategories-delete--productCategory_product_categorie_id-">
                                <a href="#endpoints-GETcategories-delete--productCategory_product_categorie_id-">GET categories/delete/{productCategory_product_categorie_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTcategories--productCategory_product_categorie_id-">
                                <a href="#endpoints-PUTcategories--productCategory_product_categorie_id-">PUT categories/{productCategory_product_categorie_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTcategories-update--productCategory_product_categorie_id-">
                                <a href="#endpoints-POSTcategories-update--productCategory_product_categorie_id-">POST categories/update/{productCategory_product_categorie_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETcategories-edit--productCategory_product_categorie_id-">
                                <a href="#endpoints-GETcategories-edit--productCategory_product_categorie_id-">GET categories/edit/{productCategory_product_categorie_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GET commands--client_client_id-">
                                <a href="#endpoints-GET commands--client_client_id-">GET  commands/{client_client_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETcommands-create--client_client_id-">
                                <a href="#endpoints-GETcommands-create--client_client_id-">GET commands/create/{client_client_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTcommands-addCart--id-">
                                <a href="#endpoints-POSTcommands-addCart--id-">POST commands/addCart/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTcommands-command--client_client_id-">
                                <a href="#endpoints-POSTcommands-command--client_client_id-">POST commands/command/{client_client_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GET commands-edit--command_command_id-">
                                <a href="#endpoints-GET commands-edit--command_command_id-">GET  commands/edit/{command_command_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTcommands-update--command_command_id-">
                                <a href="#endpoints-POSTcommands-update--command_command_id-">POST commands/update/{command_command_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GET commands-details--command_command_id-">
                                <a href="#endpoints-GET commands-details--command_command_id-">GET  commands/details/{command_command_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETregister">
                                <a href="#endpoints-GETregister">Display the registration view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTregister">
                                <a href="#endpoints-POSTregister">Handle an incoming registration request.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETlogin">
                                <a href="#endpoints-GETlogin">Display the login view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTlogin">
                                <a href="#endpoints-POSTlogin">Handle an incoming authentication request.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETforgot-password">
                                <a href="#endpoints-GETforgot-password">Display the password reset link request view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTforgot-password">
                                <a href="#endpoints-POSTforgot-password">Handle an incoming password reset link request.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETreset-password--token-">
                                <a href="#endpoints-GETreset-password--token-">Display the password reset view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTreset-password">
                                <a href="#endpoints-POSTreset-password">Handle an incoming new password request.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETverify-email">
                                <a href="#endpoints-GETverify-email">Display the email verification prompt.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETverify-email--id---hash-">
                                <a href="#endpoints-GETverify-email--id---hash-">Mark the authenticated user's email address as verified.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTemail-verification-notification">
                                <a href="#endpoints-POSTemail-verification-notification">Send a new email verification notification.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETconfirm-password">
                                <a href="#endpoints-GETconfirm-password">Show the confirm password view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTconfirm-password">
                                <a href="#endpoints-POSTconfirm-password">Confirm the user's password.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTpassword">
                                <a href="#endpoints-PUTpassword">Update the user's password.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTlogout">
                                <a href="#endpoints-POSTlogout">Destroy an authenticated session.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETstorage--path-">
                                <a href="#endpoints-GETstorage--path-">GET storage/{path}</a>
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
        <li>Last updated: March 11, 2026</li>
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
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETup">GET up</h2>

<p>
</p>



<span id="example-requests-GETup">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/up" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/up"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETup">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: text/html; charset=UTF-8
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
    &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

    &lt;!-- Styles --&gt;
    &lt;script src=&quot;https://cdn.tailwindcss.com&quot;&gt;&lt;/script&gt;

    &lt;script&gt;
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: [&#039;Figtree&#039;, &#039;ui-sans-serif&#039;, &#039;system-ui&#039;, &#039;sans-serif&#039;, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;],
                    }
                }
            }
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body class=&quot;antialiased&quot;&gt;
&lt;div class=&quot;relative flex justify-center items-center min-h-screen bg-gray-100 selection:bg-red-500 selection:text-white&quot;&gt;
    &lt;div class=&quot;w-full sm:w-3/4 xl:w-1/2 mx-auto p-6&quot;&gt;
        &lt;div class=&quot;px-6 py-4 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex items-center focus:outline focus:outline-2 focus:outline-red-500&quot;&gt;
            &lt;div class=&quot;relative flex h-3 w-3 group &quot;&gt;
                &lt;span class=&quot;animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 group-[.status-down]:bg-red-600 opacity-75&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;relative inline-flex rounded-full h-3 w-3 bg-green-400 group-[.status-down]:bg-red-600&quot;&gt;&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class=&quot;ml-6&quot;&gt;
                &lt;h2 class=&quot;text-xl font-semibold text-gray-900&quot;&gt;Application up&lt;/h2&gt;

                &lt;p class=&quot;mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed&quot;&gt;
                    HTTP request received.

                                            Response rendered in 320ms.
                                    &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETup" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETup"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETup"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETup" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETup">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETup" data-method="GET"
      data-path="up"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETup', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETup"
                    onclick="tryItOut('GETup');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETup"
                    onclick="cancelTryOut('GETup');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETup"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>up</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETup"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETdashboard">GET dashboard</h2>

<p>
</p>



<span id="example-requests-GETdashboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/dashboard" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/dashboard"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETdashboard">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6IjJ5ZDkzTUJhTzZDRER3b1NCd0JvZFE9PSIsInZhbHVlIjoiNTVyTEswMmJRVXdnMUErbzFQSU11TjFNWGJCTUw2dXd5cXVQUC9vSnl2SGhOYTJCUDYyZ2pFRTA0eU9ZUi9uNllxM0VJdkFaRUU1YnUyKzJHcCtIV1VUb2tqUkVJMTlJaFE3dHo4RDZ2MGEySUNPUWdXVHBrU0pQdTBNVFJkZUkiLCJtYWMiOiI2MTFjZWVhZGE0ZGNjOWI3MGZjMDNhZjY2MzQ3ZTI0N2FlODhjNDU1ODI5ZDU4OTBjY2QxZDFjYzUyODVmZDM1IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IkpvZVZPSmdQYk5UeDFFdjJEc3k0VXc9PSIsInZhbHVlIjoiZkRGaWJJalpycE9UWThiUlU1OHJjVXJOQ010SnEzVUJSMFBsYjQraFJtd09GcjhkYTQwTERWKzZOZE1NRlIzWVpTeTczejNYU0Qzb3BxRXZnMXk3ZlhuNjAvMFI4RFJ0SnJ2Y3lrMmd5WnVybGpmSlpBNVZrMU1mMXFVSGtOWmwiLCJtYWMiOiIxMzFjZTUwOGU3MzM3YTE0NjY4ZjRjZmVjNjAyYTAxYWZmMmZkMTk2NTdhMDc3YWMxNzUwY2YxM2MyYmM5NTU3IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETdashboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETdashboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETdashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETdashboard" data-method="GET"
      data-path="dashboard"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETdashboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETdashboard"
                    onclick="tryItOut('GETdashboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETdashboard"
                    onclick="cancelTryOut('GETdashboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETdashboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>dashboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETdashboard"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETprofile">Display the user&#039;s profile form.</h2>

<p>
</p>



<span id="example-requests-GETprofile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/profile" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/profile"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETprofile">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6ImxyL2R3bWxuY0cvTXNUMkthS1hiRWc9PSIsInZhbHVlIjoibXNSaXF6ckNPWTVsWGd1KzZpVUJVeTRwWU9FcDBhMGhNS2JMaUZkREV6UDk0Wm1oWWVJd2gvckR3Vm9hY3doV0laUS9aKzh5d1hyTElIdTI4YXFtRHUrSlZ4R1JoUWVJNEN1N3BON1lFckh4RmZQVzlVRmYrMlArQ3YzYlFKTUQiLCJtYWMiOiIwOTllN2M4NTU2MDcxNTkyMTllNzVlYjdiZDkwMjAzZjYyMGQ0OGM3MzM4MjliMWI3ZDNjNDBlZDRlMGRlZWY2IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InA5SEZIcWVHNGtvMnFad2pnRWhxMkE9PSIsInZhbHVlIjoiM1BYZXdKRGNkYUVMZ3JxVEdmZGJJQ3JKSzVWSTBtWUlTOWpnblNGWE90L0VoWUovZzFQdlJlN1N6b1hPMEJ2MG9jNzJtVys4aVpkZFhuSHJSbkJFL1Vlbjdzb1VmNjR3M1NUZHR4Q2JMdjlUV1VrTkx1SlI5ZTh3NnlFaUY2KzAiLCJtYWMiOiJmMWZhOWU4MjQxODM5YTYwOWEyOWNhN2NjODUzMjJmN2Y0ZWY3Mjk4NGZkMGY3ZTk3MzcwMjEyYTdlZGZjMTk2IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETprofile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETprofile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETprofile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETprofile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETprofile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETprofile" data-method="GET"
      data-path="profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETprofile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETprofile"
                    onclick="tryItOut('GETprofile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETprofile"
                    onclick="cancelTryOut('GETprofile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETprofile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETprofile"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-DELETEprofile">Delete the user&#039;s account.</h2>

<p>
</p>



<span id="example-requests-DELETEprofile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/profile" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/profile"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "password": "architecto"
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEprofile">
</span>
<span id="execution-results-DELETEprofile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEprofile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEprofile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEprofile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEprofile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEprofile" data-method="DELETE"
      data-path="profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEprofile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEprofile"
                    onclick="tryItOut('DELETEprofile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEprofile"
                    onclick="cancelTryOut('DELETEprofile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEprofile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEprofile"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEprofile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="DELETEprofile"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETproducts">GET products</h2>

<p>
</p>



<span id="example-requests-GETproducts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/products" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/products"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproducts">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6ImhBK2IrSWtqT2FNNDNXbFpmNjk0U0E9PSIsInZhbHVlIjoiMmF4KzVFZGhFYlhjMUJROXJYSzk5UWpuY2VBOXkrWldud0ZFV0lHaStqTFVadGNXUU9qcW1NQnptM09UYUJQcmd4d2ZmcC82aUpjU2Z0OVkrU1BUME5NZDdBeE9hL3RHWnZHOXY4RlhyVy9uRmdmL08zUWtIYzYvMUY5b3lzVlYiLCJtYWMiOiJlN2VlODFhZDkxMDdmNDc0M2I3ZjdiOTcxNTRmNjI4Y2I4NjQ2NzkxZWY5MjdjYzFhN2M4OTE4ZjgwZmNjOWZlIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IjhBQjZkc2dYWnNZejZseHJBTnJVa0E9PSIsInZhbHVlIjoiazRvMXBDSFFoVnczUXZLQzhtZnZpbGhWOWZWUjduV0x2OVFqTFBXWHo1MVBsVHhhV2ZnQ0hlcWp0YVU1UGdERklWRmt3RkQyK05uUmt0Myt0a2NVank4QkNPVm1XWkRUaWR3ZjRPWU5KRkdqQjFsQnArR0hjN01qcGF2cnRWdjkiLCJtYWMiOiI3NDFjNDA4NmMyZGFkMGUyNTNmZDc4NTVmMTBkZDA3MjkyOWQ2ZTg2ZTU1ZmU3NTgxZmNhMWM0MjQ5ODc2NWU5IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETproducts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproducts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproducts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproducts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproducts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETproducts" data-method="GET"
      data-path="products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproducts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproducts"
                    onclick="tryItOut('GETproducts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproducts"
                    onclick="cancelTryOut('GETproducts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproducts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETproducts"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETproducts-store">GET products/store</h2>

<p>
</p>



<span id="example-requests-GETproducts-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/products/store" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"product_name\": \"b\",
    \"product_desc\": \"architecto\",
    \"product_price_pre_tax\": 39,
    \"product_img\": \"architecto\",
    \"product_stock\": 39,
    \"product_country\": \"architecto\",
    \"product_weight\": 39,
    \"product_categorie_id\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/products/store"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "product_name": "b",
    "product_desc": "architecto",
    "product_price_pre_tax": 39,
    "product_img": "architecto",
    "product_stock": 39,
    "product_country": "architecto",
    "product_weight": 39,
    "product_categorie_id": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproducts-store">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6InIrNHE0ZmVNcGczZ0tuang3dDdRd3c9PSIsInZhbHVlIjoiTWEwcnI1WkM2dVA5b1VReVhuMHZrTmpaOE1pL0pHaHBHWDFERU1xdnZoZUtEaVR3UHZ5dDN4OUExSUcrb0dWRW84V0VzQWJOT0c2NjR1ZjFEdkZHdldYdVJxVk5TUCtxWUxNY0FRMUMySlQ2bUZhZXVtQzJEL09PYk9naFl0bUsiLCJtYWMiOiI5MzRhODBkMWZkM2EwMGE5NWZjMDMzODUzOGE0MmMzM2U4ZWY2YWNjMjJlNTBjMzI0OGNiMTgyYjI3ZmViNDgxIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IjhwMmxLUE1GNTBQdHNPSUw5bEFZaUE9PSIsInZhbHVlIjoiUjNHNmJLa0Q0Z3N3andrbXdrUGxEMHFMZDBQbkE2NTI1UDQ3dFNpaVRhVG5GeW0vOG9LNjQrc0ZyVjFyVmNPMHBjRU9BV1FqcGlLUDBKRlh1dnJlTUhZS1pJVXlPRUZsOWttbHlMYUVYK3hudHRwWXVPaXd5R2gzRjZmNFVKckciLCJtYWMiOiI2ZTllM2ZhYjA0YjAxMGE2Y2ZjNTZlNTI1YWEwNzQ4MmMzYzZiNzBlMDJjNzAyZjk0MzE0NjY2YTYyMDNmM2NkIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETproducts-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproducts-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproducts-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproducts-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproducts-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETproducts-store" data-method="GET"
      data-path="products/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproducts-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproducts-store"
                    onclick="tryItOut('GETproducts-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproducts-store"
                    onclick="cancelTryOut('GETproducts-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproducts-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>products/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETproducts-store"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETproducts-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_name"                data-endpoint="GETproducts-store"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_desc</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_desc"                data-endpoint="GETproducts-store"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_price_pre_tax</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_price_pre_tax"                data-endpoint="GETproducts-store"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_img</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_img"                data-endpoint="GETproducts-store"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_stock</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_stock"                data-endpoint="GETproducts-store"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_country"                data-endpoint="GETproducts-store"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_weight</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_weight"                data-endpoint="GETproducts-store"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_categorie_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_categorie_id"                data-endpoint="GETproducts-store"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>product_categorie_id</code> of an existing record in the product_categories table. Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEproducts-destroy--product_product_serial_number-">DELETE products/destroy/{product_product_serial_number}</h2>

<p>
</p>



<span id="example-requests-DELETEproducts-destroy--product_product_serial_number-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/products/destroy/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/products/destroy/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEproducts-destroy--product_product_serial_number-">
</span>
<span id="execution-results-DELETEproducts-destroy--product_product_serial_number-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEproducts-destroy--product_product_serial_number-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEproducts-destroy--product_product_serial_number-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEproducts-destroy--product_product_serial_number-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEproducts-destroy--product_product_serial_number-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEproducts-destroy--product_product_serial_number-" data-method="DELETE"
      data-path="products/destroy/{product_product_serial_number}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEproducts-destroy--product_product_serial_number-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEproducts-destroy--product_product_serial_number-"
                    onclick="tryItOut('DELETEproducts-destroy--product_product_serial_number-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEproducts-destroy--product_product_serial_number-"
                    onclick="cancelTryOut('DELETEproducts-destroy--product_product_serial_number-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEproducts-destroy--product_product_serial_number-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>products/destroy/{product_product_serial_number}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEproducts-destroy--product_product_serial_number-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_product_serial_number</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_product_serial_number"                data-endpoint="DELETEproducts-destroy--product_product_serial_number-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETproduct-delete--product_product_serial_number-">GET product/delete/{product_product_serial_number}</h2>

<p>
</p>



<span id="example-requests-GETproduct-delete--product_product_serial_number-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/product/delete/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/product/delete/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproduct-delete--product_product_serial_number-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6Ik0xUk9jQ0JzckZlOWRSNFpRZVZDaWc9PSIsInZhbHVlIjoiVUpDSUZKQ1hzd21mUkJFYVZuNU14TU1ZR3BvTkxPbUZRQUtnT2FncjNndzlwSXpwaTcxb2U3U1NtaDNZajJCTHRLYzVST0pRS3gxTEdmc3BhQnJiQ2RUS2wwYXd2WlozZFMzcGtVUnN5TUJZOU0xellTSllQN2ROTENEbFhTQXgiLCJtYWMiOiJmZTg1YmRkZWRiODMzZDkzNTExOTIxZmUzOWRkMDIyNzQ0YzAyYTk1MDlmMTdiZDUzZGYzMDYwM2FmNDk2MWI0IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IjZuQU43dXBsTjNyRi91Y1dTMnFYZWc9PSIsInZhbHVlIjoicnVRN0Y0blNNWWszb3NsOXd3M0RxYWlDU2NwbC84MFlYbmZmRW1SMWZmcjNRclEveU1STExRVWZleWlNTzg5bFhIQWcwTm0yWG5JY3p6aHJ1M1ZLbjdBQnFFazV5QU1XSEg5WmFxMTVuZkJJZ3UvRXp1UjlTSHkwVXA3ZnpOY1ciLCJtYWMiOiIyODY3YTQ3MDk1ODAwYzAwZDFhNWY5ODYwN2MxMGNjODQ0YmUwNGM3ZmE2MmNiNWUyYWVmMWZhMTI4YjhjMjcwIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETproduct-delete--product_product_serial_number-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproduct-delete--product_product_serial_number-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproduct-delete--product_product_serial_number-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproduct-delete--product_product_serial_number-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproduct-delete--product_product_serial_number-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETproduct-delete--product_product_serial_number-" data-method="GET"
      data-path="product/delete/{product_product_serial_number}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproduct-delete--product_product_serial_number-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproduct-delete--product_product_serial_number-"
                    onclick="tryItOut('GETproduct-delete--product_product_serial_number-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproduct-delete--product_product_serial_number-"
                    onclick="cancelTryOut('GETproduct-delete--product_product_serial_number-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproduct-delete--product_product_serial_number-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>product/delete/{product_product_serial_number}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETproduct-delete--product_product_serial_number-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_product_serial_number</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_product_serial_number"                data-endpoint="GETproduct-delete--product_product_serial_number-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETproducts-create">GET products/create</h2>

<p>
</p>



<span id="example-requests-GETproducts-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/products/create" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/products/create"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproducts-create">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6Ik83NG5xQ3loUERIb241NGdOa2JzR2c9PSIsInZhbHVlIjoic3FsWW96UnNBb1pIbytYekp6V2tIanpuZzZKbllZVDNlWkJnUXp1QmViUDRwWGdLcE1INWpDbm9pWjRjTElQa2RBYUNUbTlmVUlWZ29iWU50bGI3Mkh6VlZGSHI0d0ozRW50cEFpVkkzMjduWm9pYXVwWFc1cUpoMmVNc3EraHciLCJtYWMiOiJmOGRlNWNlNmE4NzZkYTQ1OTgwMDk2MDc1NDZhNTdmZWJiMDM1MjdlZjU2Zjg3ZGFlYzg5NDMxY2UyOTkxYjdjIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Iks2WjR5V21nenJSdzYyZVdFdHhRdkE9PSIsInZhbHVlIjoidWRTVWJYb1dTL3FUVXBYK0NabVpsRjB5VG1hUGpSNldmd3pMSEd4aTRqMG1IVkZJVnpHWThDMFA0aUREdmJHOThkT3BaTCtPQ01LWnRNcDV4MktlRENkWWthLzRUWFFSTG1INU9iYjA1UWM1K1dzdUhnRXVkak9nakpGVm95ZmQiLCJtYWMiOiJkNWE0MWVlZTA0MzQ0ZmNhNzFmODYyOTc0OGRmZmE3NmEwZjMxNmY1NWE2YzZkODk0ZDJmMzk5ODQyNDJiODgwIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETproducts-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproducts-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproducts-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproducts-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproducts-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETproducts-create" data-method="GET"
      data-path="products/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproducts-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproducts-create"
                    onclick="tryItOut('GETproducts-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproducts-create"
                    onclick="cancelTryOut('GETproducts-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproducts-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>products/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETproducts-create"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETproduct-edit--product_product_serial_number-">GET product/edit/{product_product_serial_number}</h2>

<p>
</p>



<span id="example-requests-GETproduct-edit--product_product_serial_number-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/product/edit/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/product/edit/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproduct-edit--product_product_serial_number-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6IkpXanVCM0VZRTlKV1U1WUgzWno0dFE9PSIsInZhbHVlIjoiRFdnVS9sVEJ2VTdMZ29IaklsK3AyZDRsTWE0RzFGN2FXbXBucE5MaVR1VUxUZzlnNlBTd1k3a05vQlhSeGx0QmVmUEhPYkkzdUludEVyVm8vb1NFS1dmNHdaa3dyQTlsSXpUemc2UUhGRGRlNFRwaWhNRzhhNDhtNkMrODVNNjIiLCJtYWMiOiIyMzVlMGI4ZTFlMDc2N2YxZTg4NmQwMDViOGFmYTI0YmE0YTg4ZTE0ZGJiNmNmMjVjMTRkZDE2YzE0MWMzYmU2IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Ilc3QUl1MjhUY1l2ZkttTU0xUTVNT3c9PSIsInZhbHVlIjoiY3U3UjdtUnhXSGNmaGxTaHBCeVQzM1NoclZjQnFoYVhIWGRIZ3RCckRod09PTnJMRFVDZzIram1VUnFNZHVET0QxUUVtc2RWYVBNMk9CaXVUVGhQVmtHcWMrWTVvZFVDRm5NNDFVWmRCVmt2dWVZZXQxU01RSk8xRjErS2w2cmwiLCJtYWMiOiI2NmNkNDdjYWYzZWE5NjI1ZTA4N2I3ZjZjYjA2NmEyMWRmMDA0NmI2ZTQ5NzUwMDFhMWZjOTliMDA3YzA3MjNhIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETproduct-edit--product_product_serial_number-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproduct-edit--product_product_serial_number-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproduct-edit--product_product_serial_number-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproduct-edit--product_product_serial_number-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproduct-edit--product_product_serial_number-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETproduct-edit--product_product_serial_number-" data-method="GET"
      data-path="product/edit/{product_product_serial_number}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproduct-edit--product_product_serial_number-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproduct-edit--product_product_serial_number-"
                    onclick="tryItOut('GETproduct-edit--product_product_serial_number-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproduct-edit--product_product_serial_number-"
                    onclick="cancelTryOut('GETproduct-edit--product_product_serial_number-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproduct-edit--product_product_serial_number-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>product/edit/{product_product_serial_number}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETproduct-edit--product_product_serial_number-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_product_serial_number</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_product_serial_number"                data-endpoint="GETproduct-edit--product_product_serial_number-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTproducts-update--product_product_serial_number-">POST products/update/{product_product_serial_number}</h2>

<p>
</p>



<span id="example-requests-POSTproducts-update--product_product_serial_number-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/products/update/1" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"product_name\": \"architecto\",
    \"product_desc\": \"architecto\",
    \"product_price_pre_tax\": \"architecto\",
    \"product_img\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/products/update/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "product_name": "architecto",
    "product_desc": "architecto",
    "product_price_pre_tax": "architecto",
    "product_img": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTproducts-update--product_product_serial_number-">
</span>
<span id="execution-results-POSTproducts-update--product_product_serial_number-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTproducts-update--product_product_serial_number-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTproducts-update--product_product_serial_number-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTproducts-update--product_product_serial_number-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTproducts-update--product_product_serial_number-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTproducts-update--product_product_serial_number-" data-method="POST"
      data-path="products/update/{product_product_serial_number}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTproducts-update--product_product_serial_number-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTproducts-update--product_product_serial_number-"
                    onclick="tryItOut('POSTproducts-update--product_product_serial_number-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTproducts-update--product_product_serial_number-"
                    onclick="cancelTryOut('POSTproducts-update--product_product_serial_number-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTproducts-update--product_product_serial_number-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>products/update/{product_product_serial_number}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTproducts-update--product_product_serial_number-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTproducts-update--product_product_serial_number-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_product_serial_number</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_product_serial_number"                data-endpoint="POSTproducts-update--product_product_serial_number-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_name"                data-endpoint="POSTproducts-update--product_product_serial_number-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_desc</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_desc"                data-endpoint="POSTproducts-update--product_product_serial_number-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_price_pre_tax</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_price_pre_tax"                data-endpoint="POSTproducts-update--product_product_serial_number-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_img</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_img"                data-endpoint="POSTproducts-update--product_product_serial_number-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETproduct--product_product_serial_number-">GET product/{product_product_serial_number}</h2>

<p>
</p>



<span id="example-requests-GETproduct--product_product_serial_number-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/product/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/product/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproduct--product_product_serial_number-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6Iit6VGlMbmxLV1JFM3hldnJMMjdnTmc9PSIsInZhbHVlIjoiR3FzR05EcjhrVnlldGZ6YmtaL0VkbmFId2ZYVGltRWRlK20xTWViTExsbzNhZUhyRlhwalBZSkhSbEI3SENjcHU0bjVxZlJKNXJhc1pQNnpreGd1UWc4ajVLa1Voa3BYUXdlMkxodVZEeGgyclk4VHd4a24yM2x1QzNRQTJjbGciLCJtYWMiOiI4ZTY0NzE0Y2JkZjIzNzc2ODUxOTUyYzcwOTE0MTM5M2ZhMjhiNGM3OGJlYzA3MDY3NDExNzBmNGNiMjgzYWQzIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IkV2VjZya0F4YkE3RmNjZkxCdDBiUnc9PSIsInZhbHVlIjoiME1QWlpYK2h4MGs5cmk3dldZenN5bkd1eUxxaG1tU3Z0OWFwM1ZDcnpGaUZSZEdpdVFrY2dVdW81ZFQ0SitwZkwvdUJuSEhYTlAwRHFjNi9aSTZ4VDlzTjRxU0QwMzJwekNHRGdPM1hTSVNmTXdnTmtWOTAxbktDckhWVUJzbGQiLCJtYWMiOiIzZDk2YmFhNTZiZjM2MWMxZWE3NjZiZjA2NjAyZDU5Njc5NjlmMWUzMGRmZDI3ZGQzMmQ0NmUzN2NjNTFhOGQwIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETproduct--product_product_serial_number-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproduct--product_product_serial_number-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproduct--product_product_serial_number-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproduct--product_product_serial_number-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproduct--product_product_serial_number-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETproduct--product_product_serial_number-" data-method="GET"
      data-path="product/{product_product_serial_number}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproduct--product_product_serial_number-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproduct--product_product_serial_number-"
                    onclick="tryItOut('GETproduct--product_product_serial_number-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproduct--product_product_serial_number-"
                    onclick="cancelTryOut('GETproduct--product_product_serial_number-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproduct--product_product_serial_number-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>product/{product_product_serial_number}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETproduct--product_product_serial_number-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_product_serial_number</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_product_serial_number"                data-endpoint="GETproduct--product_product_serial_number-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETsellers">GET sellers</h2>

<p>
</p>



<span id="example-requests-GETsellers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/sellers" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/sellers"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETsellers">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6ImtiWk5HOWtCZEFVYlpKTXhEMnp0UXc9PSIsInZhbHVlIjoiTUFvZlhoay9PRXJ4K3BJc1ZELzkrQmJTMSsraEV3WTZ5U3QwRU1MaURnYUl6UzVyMDdKV3Q5MEZ5V0pMZ2h3ZnZoeS9LeThNZkNpU3UxanlIVVEvSitlczhRSlhvQUVnZUhMV0hZc1MrcVRPVWN4N0gzMi9oWmViQlA4cVJDclMiLCJtYWMiOiIyMzcwNmRmODc2MzI3NGM5YWJlZmYwMzc2ZTExODNkZDkxZGI1OTExNTMyMWNhOTJiNmZjM2E1MDljMWE3MWM3IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IlI3T0hHN2ZDcldUNTBMSytNZDB5Ymc9PSIsInZhbHVlIjoiUElySEJrVWF0UnlENCs1emkzMFpsazJPcjhwYllVb0o1bjR6QjZkVUxEYjRqWWFPRjlhajVOSmgzaDcrWlltaExqRXNwOWt0aXp0eVI4MVJjbjNrb0ltZ0NDM001bE50OWhpTkY1Wm5FYU0xWWt1dDIrU0NsNjlwM2NSWElGV3YiLCJtYWMiOiI0MDM2ZWQwNGNlYjJhOTQ4ZDdhZGViMzg1MDRiMjA3NGRiZjc2MDcyNjcyYjIwOTQyNzg1YWFkM2ZhZGM4Y2ZjIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETsellers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETsellers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETsellers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETsellers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsellers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETsellers" data-method="GET"
      data-path="sellers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETsellers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETsellers"
                    onclick="tryItOut('GETsellers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETsellers"
                    onclick="cancelTryOut('GETsellers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETsellers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>sellers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETsellers"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETseller-create">GET seller/create</h2>

<p>
</p>



<span id="example-requests-GETseller-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/seller/create" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/seller/create"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETseller-create">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6ImhUOFhwOG15b1dNREkrYlN6UDdid2c9PSIsInZhbHVlIjoiY0dwWEh6MGY3MnNhbFlnTzNDTW9OQStSeG5kZlBRTElUZnNRbGtMSWtPNUFwdzgzMU9YbEc5V2Z3Mkd6TjZkajlUQW1ld1VkMTJWL0ZuWHRUalFmSXJrVG1ndldFL1BnTXk5TXl0NnA2dWVncFJiUkJodFlmNGMrUXQ1QUNxZUQiLCJtYWMiOiIwZTY1ZDk5YjQ1ZDQzNzdhM2Y0ZWVkMDRlOTEwYmJhZmFmMTBkMDFlNjA5MGIxNTYyNzViYmJiYmY4Y2Y5MmI4IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IlAwYXJINDNDbEdoUUdmSUtqMlZ0U2c9PSIsInZhbHVlIjoiMWJXSGlrQms2UGNib0Fhb203eDdFeDdkOTh2Mzc0ak4rd3FKeGJndWtWMHZJR1VZZXBOUEdGOStEYUEzSTMzdEN3eTVDWlc5d1IybWNOTGJ1ZFRXVVZ4TnhOditQRjJMWTNnY3pBZ2g3V0JXT3hDUGpYQUcvbjB4WEUyVTBiNjMiLCJtYWMiOiI5M2Q4ZGMxZWQ3ZGE4MjY0ZmE1ZjAyMDRiODYwYzRkNDg2Y2U4OTUyOWQ4NmMyZGM3ZDg0ODc5MDczOTdhMjFiIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETseller-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETseller-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETseller-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETseller-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETseller-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETseller-create" data-method="GET"
      data-path="seller/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETseller-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETseller-create"
                    onclick="tryItOut('GETseller-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETseller-create"
                    onclick="cancelTryOut('GETseller-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETseller-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>seller/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETseller-create"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETseller-store">Store a new seller.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint validates the seller's information, creates a new user account
in the database, and redirects to the sellers index with a success message.</p>
<ul>
<li>@group User Management</li>
</ul>

<span id="example-requests-GETseller-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/seller/store" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"john.doe@example.com\",
    \"password\": \"VeryStrongPassword123!\",
    \"password_confirmation\": \"VeryStrongPassword123!\\n* @response 302 {\\n\\\"message\\\": \\\"Redirecting to \\/sellers\\\",\\n\\\"session\\\": { \\\"success\\\": \\\"Vendeur créé\\\" }\\n}\\n* @response 422 {\\n\\\"message\\\": \\\"The email has already been taken.\\\",\\n\\\"errors\\\": { \\\"email\\\": [\\\"Cet email est déjà utilisé.\\\"] }\\n}\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/seller/store"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "name": "b",
    "email": "john.doe@example.com",
    "password": "VeryStrongPassword123!",
    "password_confirmation": "VeryStrongPassword123!\n* @response 302 {\n\"message\": \"Redirecting to \/sellers\",\n\"session\": { \"success\": \"Vendeur créé\" }\n}\n* @response 422 {\n\"message\": \"The email has already been taken.\",\n\"errors\": { \"email\": [\"Cet email est déjà utilisé.\"] }\n}"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETseller-store">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6Ik9BVUJjb2ttREV6ZGsxbnI4UG1XN3c9PSIsInZhbHVlIjoiRmkrK0FjL29yK0hsTmFxekhqK1NVUXV1aVEvZ0JuRDFRVWRGbEt5UXlQNjg1QkFtZnJ0c0x0VWQzUlpURkYyZDRkVzhDUFY0akpyZkFKTlRGRS9vUjRSQjdtdk5WSmExdWJoVUkzTDFPR2N1Ty9PV3QyOUM1N3FnbUMwZk5LbUYiLCJtYWMiOiJkZDcyMjExOWQ2YWJmNzE4MDFlMTY5ZDMwMWZiMTVmNDZjYTVlMTJlMmNlYjhmMTA2YmZkOTNhYjY3ZDZjMTNiIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImtJcmhGbWpxcjZGeVZYUUtDKzM0T3c9PSIsInZhbHVlIjoiSzNtNkVjUjFQR2trZGM1R1RjWG9aeXEvUzM5emZleVd6VUkxallEMkc1RmdkZkpFZTlReWl6czBnZkZ2N2RscVNxUnlsaVhRblVidVZsbnNFSldvU2VobWUyQXozekdzNlNJOE1vTklCKzNSbjlMRyszekh1Q0F6QXVHV1pyS3oiLCJtYWMiOiJmZjNlZGVlMzZmNWUzOTg0ZTUwMWYzMDE0MDc2ZTYxNTAwMDcyMWU2YzU0NzhlYzFiZWIyYTFiNjgxMGI0ZGE3IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETseller-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETseller-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETseller-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETseller-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETseller-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETseller-store" data-method="GET"
      data-path="seller/store"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETseller-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETseller-store"
                    onclick="tryItOut('GETseller-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETseller-store"
                    onclick="cancelTryOut('GETseller-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETseller-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>seller/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETseller-store"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETseller-store"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETseller-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="GETseller-store"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="GETseller-store"
               value="john.doe@example.com"
               data-component="body">
    <br>
<p>The unique email address. Example: <code>john.doe@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="GETseller-store"
               value="VeryStrongPassword123!"
               data-component="body">
    <br>
<p>The password (minimum 18 characters). Example: <code>VeryStrongPassword123!</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="GETseller-store"
               value="VeryStrongPassword123!
* @response 302 {
"message": "Redirecting to /sellers",
"session": { "success": "Vendeur créé" }
}
* @response 422 {
"message": "The email has already been taken.",
"errors": { "email": ["Cet email est déjà utilisé."] }
}"
               data-component="body">
    <br>
<p>Must match the password field. Example: `VeryStrongPassword123!</p>
<ul>
<li>@response 302 {
"message": "Redirecting to /sellers",
"session": { "success": "Vendeur créé" }
}</li>
<li>@response 422 {
"message": "The email has already been taken.",
"errors": { "email": ["Cet email est déjà utilisé."] }
}`</li>
</ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTseller-logout">POST seller/logout</h2>

<p>
</p>



<span id="example-requests-POSTseller-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/seller/logout" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/seller/logout"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTseller-logout">
</span>
<span id="execution-results-POSTseller-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTseller-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTseller-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTseller-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTseller-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTseller-logout" data-method="POST"
      data-path="seller/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTseller-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTseller-logout"
                    onclick="tryItOut('POSTseller-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTseller-logout"
                    onclick="cancelTryOut('POSTseller-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTseller-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>seller/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTseller-logout"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETseller--id-">GET seller/{id}</h2>

<p>
</p>



<span id="example-requests-GETseller--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/seller/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/seller/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETseller--id-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6IjkzaWlER1ZKaitiNlJuQmc0dFlJZEE9PSIsInZhbHVlIjoibEp0NWg0ZzF1ZDBLa3hTNGVHay9ZMkNpZXlsWWdSVTYvYmdiQ2dWUjhnQnExdy9Kbk5aMEJheENIUUFPUTA0VEtuUFd1NS95Q0FvUTcrc1FJY1pza3F5WWpNQ1VEanN6RmhkeUdzUFFGMFFWS2ljNzhGKy9YSWlwVWV4cTJ2WVQiLCJtYWMiOiJjMGI5YjFkZmI1MzY2NTI4OTJmNGYzNTQ2YmUxODc2MWJjZDcxYzlhMzM4ZGJmOWE3NDNjMjJjMjMzZDNhMTdkIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IjZ6bEwycUI3Z2JmTWJYSHpRZjJtcEE9PSIsInZhbHVlIjoidVlOS2M5UjhkSWYwTzc2eVhJRktUUjhoMWRzN09IWWRwZklFRmwrMXg5Q0RaRGs3WUEzS1FjZUV1b2tzd2VwQi9hMFp0UzM3bGVoZ2JaK3o5OVBra2M0VG5TaFowQVJQZk1qaTR6UVJsNG5iZVQ0Rm1CVWFHSzBZTGxKRzNKVm8iLCJtYWMiOiJlNzY1NTc1YWMyZmI4Y2Y5ZDE1NmQxMzQwYzU3YzE3MDBmMTZhZmMyNjEyMmNhODE3NzJjZmJmNWZjYmJmOTIyIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETseller--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETseller--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETseller--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETseller--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETseller--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETseller--id-" data-method="GET"
      data-path="seller/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETseller--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETseller--id-"
                    onclick="tryItOut('GETseller--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETseller--id-"
                    onclick="cancelTryOut('GETseller--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETseller--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>seller/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETseller--id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETseller--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the seller. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETseller-edit--seller_id-">GET seller/edit/{seller_id}</h2>

<p>
</p>



<span id="example-requests-GETseller-edit--seller_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/seller/edit/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/seller/edit/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETseller-edit--seller_id-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6InIrbDhaMExrVHUvMVY3NWtPZ0p1RlE9PSIsInZhbHVlIjoiR3Y2WG9FQ2pEUVdiTERuNjNsWTM0VWc5WEFENUJQaGhMN1hNcjBKNTdxTHpOUTlWNmk1NXc5aVNzSG9BQ0YyNDhHVytMY1dKZXlYWWlHWHJZT1FvNmhCR0dUTUcxVVIzU0x3MUZyeTVwcE5pV2s5R2R6dldPQVcvSkdNdXAwMHUiLCJtYWMiOiIyZmQ5NTJkMDg0ZWY4NzVjN2E5ZTdiZjQzYTQ5NTA5ZDc1NjIzNDFiNWIzYTAwOWQwZjQ4MDYzMGM3OTgzYWM2IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Img0MWc2M0RtclRBcW5XZGl4Q0ZhblE9PSIsInZhbHVlIjoiYTV2cEVwZFlRNlpEaHhpa2NBdnNnN1NNcTc5UEp4MjB6TzdVWEFqZGF3aDRraERxUVRTM093Y0JiYnAvN3MrUlBsdHo0eGZ5MlVrVmFIUGwvc0JpcXUwRlNtelkyUHlweElGeU80Zng2UFdsWkdPTXBTMkxYd1libmowTms2V2siLCJtYWMiOiI3NzNiNmJjNjI0YTcwNDQ4OGQ5MmIzOTVlMzE1ZmU1MjMzODkxYjVhNGMwMmUwNzBlYmU0ODViNmJlNTMzYmI4IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETseller-edit--seller_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETseller-edit--seller_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETseller-edit--seller_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETseller-edit--seller_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETseller-edit--seller_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETseller-edit--seller_id-" data-method="GET"
      data-path="seller/edit/{seller_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETseller-edit--seller_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETseller-edit--seller_id-"
                    onclick="tryItOut('GETseller-edit--seller_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETseller-edit--seller_id-"
                    onclick="cancelTryOut('GETseller-edit--seller_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETseller-edit--seller_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>seller/edit/{seller_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETseller-edit--seller_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>seller_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="seller_id"                data-endpoint="GETseller-edit--seller_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the seller. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTseller-update--seller_id-">POST seller/update/{seller_id}</h2>

<p>
</p>



<span id="example-requests-POSTseller-update--seller_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/seller/update/1" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"name\": \"architecto\",
    \"email\": \"architecto\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/seller/update/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "name": "architecto",
    "email": "architecto",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTseller-update--seller_id-">
</span>
<span id="execution-results-POSTseller-update--seller_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTseller-update--seller_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTseller-update--seller_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTseller-update--seller_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTseller-update--seller_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTseller-update--seller_id-" data-method="POST"
      data-path="seller/update/{seller_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTseller-update--seller_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTseller-update--seller_id-"
                    onclick="tryItOut('POSTseller-update--seller_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTseller-update--seller_id-"
                    onclick="cancelTryOut('POSTseller-update--seller_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTseller-update--seller_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>seller/update/{seller_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTseller-update--seller_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTseller-update--seller_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>seller_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="seller_id"                data-endpoint="POSTseller-update--seller_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the seller. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTseller-update--seller_id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTseller-update--seller_id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTseller-update--seller_id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GET-">GET /</h2>

<p>
</p>



<span id="example-requests-GET-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GET-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6ImhGL2FYMTdTclNucGM2eXo4alZRaGc9PSIsInZhbHVlIjoiRlRxTktMa0hUV21hWGZTNUdEdzdFRW1wOEh1SVFKQjI3cHM0OHlpVFdXUXRTWGFvVzlKejlFUnZkaTMwM0Y5b3l0aDNBVVNNS1JuMjlNS25wMW95N2xpYVcxei96NmtlY1dtbzhYT2JmdzBrTWdaTUJpVUFxWXN2amdrbmMwb0IiLCJtYWMiOiI2OTU4MzEwMDg0YTc4YTY0MzMzYjZlYTE5ZTEzOWE4NmRjOGZiYTZmYzJmNmI2NTAyNTYxZjVlNzA5ZWVjYjQwIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Im5aQ2hBS1ZLNUt5QTMxZnpIak5wNWc9PSIsInZhbHVlIjoiVzJzd0hiUi96VzJ1U0gzUUoxbGl4dmltSnZHVUs2TTNwMmViS1FhL1VEWWFMaWVxZTQyaktrWjh2L095YWM5TVRwbUxiOGh0RXBtSHhqRk9GbEpkQm51eUNkc0xZa1c2SWRxQnlMdU0zVm9NZndMNEZMckdoMFY2Y0llRVl0RnkiLCJtYWMiOiIwZTU3OGE1NjVlYTdlNzRiYTI0MTU3ZjJhODgzMGVlNjM0NzAwZDIxNmYxMTY2MGNmY2MzYTM0YzM1N2FkYjBjIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GET-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GET-" data-method="GET"
      data-path="/"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET-"
                    onclick="tryItOut('GET-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET-"
                    onclick="cancelTryOut('GET-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>/</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GET-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTseller-store">Store a new seller.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint validates the seller's information, creates a new user account
in the database, and redirects to the sellers index with a success message.</p>
<ul>
<li>@group User Management</li>
</ul>

<span id="example-requests-POSTseller-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/seller/store" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"john.doe@example.com\",
    \"password\": \"VeryStrongPassword123!\",
    \"password_confirmation\": \"VeryStrongPassword123!\\n* @response 302 {\\n\\\"message\\\": \\\"Redirecting to \\/sellers\\\",\\n\\\"session\\\": { \\\"success\\\": \\\"Vendeur créé\\\" }\\n}\\n* @response 422 {\\n\\\"message\\\": \\\"The email has already been taken.\\\",\\n\\\"errors\\\": { \\\"email\\\": [\\\"Cet email est déjà utilisé.\\\"] }\\n}\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/seller/store"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "name": "b",
    "email": "john.doe@example.com",
    "password": "VeryStrongPassword123!",
    "password_confirmation": "VeryStrongPassword123!\n* @response 302 {\n\"message\": \"Redirecting to \/sellers\",\n\"session\": { \"success\": \"Vendeur créé\" }\n}\n* @response 422 {\n\"message\": \"The email has already been taken.\",\n\"errors\": { \"email\": [\"Cet email est déjà utilisé.\"] }\n}"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTseller-store">
</span>
<span id="execution-results-POSTseller-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTseller-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTseller-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTseller-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTseller-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTseller-store" data-method="POST"
      data-path="seller/store"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTseller-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTseller-store"
                    onclick="tryItOut('POSTseller-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTseller-store"
                    onclick="cancelTryOut('POSTseller-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTseller-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>seller/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTseller-store"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTseller-store"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTseller-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTseller-store"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTseller-store"
               value="john.doe@example.com"
               data-component="body">
    <br>
<p>The unique email address. Example: <code>john.doe@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTseller-store"
               value="VeryStrongPassword123!"
               data-component="body">
    <br>
<p>The password (minimum 18 characters). Example: <code>VeryStrongPassword123!</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTseller-store"
               value="VeryStrongPassword123!
* @response 302 {
"message": "Redirecting to /sellers",
"session": { "success": "Vendeur créé" }
}
* @response 422 {
"message": "The email has already been taken.",
"errors": { "email": ["Cet email est déjà utilisé."] }
}"
               data-component="body">
    <br>
<p>Must match the password field. Example: `VeryStrongPassword123!</p>
<ul>
<li>@response 302 {
"message": "Redirecting to /sellers",
"session": { "success": "Vendeur créé" }
}</li>
<li>@response 422 {
"message": "The email has already been taken.",
"errors": { "email": ["Cet email est déjà utilisé."] }
}`</li>
</ul>
        </div>
        </form>

                    <h2 id="endpoints-GETclients">GET clients</h2>

<p>
</p>



<span id="example-requests-GETclients">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/clients" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/clients"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETclients">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6InJabjAwaEpVNFNPekVkUW0ycTdERnc9PSIsInZhbHVlIjoibFNHQXk3SXJxcHVLT3BCc3BNTFdsNGhvU0NHaDRyZnVvZkwxL3JYYzRzeTJocExTUlJXeDdjK1c2UUh2UlZCRVZEVVNUeldpc0NvU01jOG9jR21ENVArK3UxVjBCT0Njbk1jNGsrQTYyb0ZtVFBTNWlsNjJTcXJPdXRGb2Z5N2siLCJtYWMiOiI5YWMyMTVkZWJjMWE0ZDFiNzgyZGMzMDhkMGQxNTQwNGViMWU1MWJmNDdlOTQ1Yzk4ZTNiZDU3NzhjYzFkNjZmIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InB2Q0w0Ry93c2h4cVFzS2k2RE1zZmc9PSIsInZhbHVlIjoiWUUyZXdnb0U4M0ZtZjAvcDB1QXViZlFkYjhuL0lvNjg2QUd3T2g5K3lwMTA0d3R3RDNtMTRDZit5dDFJRWdYZmcvSG9mZUpuZHA4SXBNOEp5d29mTnRaVUJpOExSNHAxc1p5WVUrMkxxaTB1QjMwa1VmVGRyTGpSUUp6UE8xbjMiLCJtYWMiOiJmZmIxZWM2MGUxZmYxYmRiNzdkMzQ1YjgwYWVmZTI1ZmYwZWJiMDcwNGUzMjY1OGFhZGI0Y2JmMjBiZDJjMzEyIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETclients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETclients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETclients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETclients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETclients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETclients" data-method="GET"
      data-path="clients"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETclients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETclients"
                    onclick="tryItOut('GETclients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETclients"
                    onclick="cancelTryOut('GETclients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETclients"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>clients</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETclients"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETclient--client_client_id-">GET client/{client_client_id}</h2>

<p>
</p>



<span id="example-requests-GETclient--client_client_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/client/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/client/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETclient--client_client_id-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6IkpPNVJpcXFqTXZ6VGFMWUNDOHk3L3c9PSIsInZhbHVlIjoiZjd4cktIZjdCdHFXOW1RYm1tQ0pYQm42RVFJbzA2ZUNoSEh2dlIzT1lNUFlrajVkc0JnMHZ5UDRsRDZLZXRzMWhQaEZaWlUxS0g5QnZ2UWI2eGgzWGROZTBJRzNITTVFWG1Ba3JUUDQ3enhkMFE0QkNzUDJSNnhhaXdsZXlUcGEiLCJtYWMiOiI0Y2M3ZTJjZDgxMjI1OTI4MDEzNGIxNzQwZWVlNmEyNDc0ZGZmMDZmMTYzODdjMjljYTA5OTQwNDg5OGI2NDI4IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IlhaU29ydlQySExxdGV0ZDYrZ2ZrbGc9PSIsInZhbHVlIjoiQS9ZbFAvalNLRTI0dzB6K25uQU1yUVpSejBiUUFzUzF0bFV1Q3FHQmZJWDJVdWgwek11dXQ2blAxQ29tSXJ5MS85eEFqWCtCM25ES3BZY2NVUjRyRkdZbnBhb0o1QkdieWUvYXp6WlVXbFFaTDNoTnlVVjNJamJGd3ZzdjFTQlUiLCJtYWMiOiI2ODQ2NWQ2ZjczYTQ3N2MwNWM5NGVjZWJjNjhmMmMyZjIzZmViZWViMDY2MzVjNTI3ZjlhYTg5YmJlMmJhMTRlIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETclient--client_client_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETclient--client_client_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETclient--client_client_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETclient--client_client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETclient--client_client_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETclient--client_client_id-" data-method="GET"
      data-path="client/{client_client_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETclient--client_client_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETclient--client_client_id-"
                    onclick="tryItOut('GETclient--client_client_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETclient--client_client_id-"
                    onclick="cancelTryOut('GETclient--client_client_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETclient--client_client_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>client/{client_client_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETclient--client_client_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client_client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_client_id"                data-endpoint="GETclient--client_client_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the client client. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETclients-create">GET clients/create</h2>

<p>
</p>



<span id="example-requests-GETclients-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/clients/create" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/clients/create"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETclients-create">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6Indub084RVFCT2M2VVQvREdldkluOXc9PSIsInZhbHVlIjoibjVKaERmQmFMbzRaaGRuM1VVTUR3cVdXdU93MmF6Zi9aMUVlbVhzazZ5aGFVK1pnQlZwOWFicnRXaUk1NTFFaktCOWV1WDhEa1A4dGh1akVNb2FyTjFYbUxKdnRTSG1hczR4V0ttdkJpY1hHcnJQZnFyNFNZMjlHNHFLamtwQlkiLCJtYWMiOiJhZGM4Yjg2YjNhNzA0NmRkNmVjMjc2MzI5ZGVkMGY1ZjRjN2JmNmMwMmUyMGQxYWJmYmJiMjg2ZTA1NGY1MjZjIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Im1HaTZoYStjTU5jRU4vRU1MeW5sL0E9PSIsInZhbHVlIjoiWWtycFdQT3R0NXFXMzdzZU44R1kxRTQvcU9ZYUhSeXFwWlZudDY2aURRb3pEbEJPN3pYRzE4NlFFZVNnR2xzdnJlQ3Fuc3AwQ2tKM2d5ZUdvQVUxMTlmcDhxNG5ZREpEeUtwNUhKaFRnYUUwQVlTTDBBeFlTMFJhSUs0VWdlMlgiLCJtYWMiOiI0MDI4MTMyZjQ1ZjkyYjE4Nzk3Nzc5ZWQ2M2U3ZTc5NDQ3NzhhNDkxZjI0NzFmYzMwZWQ4MTg1YzhiOTg2MWMwIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETclients-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETclients-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETclients-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETclients-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETclients-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETclients-create" data-method="GET"
      data-path="clients/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETclients-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETclients-create"
                    onclick="tryItOut('GETclients-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETclients-create"
                    onclick="cancelTryOut('GETclients-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETclients-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>clients/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETclients-create"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTclient-store">POST client/store</h2>

<p>
</p>



<span id="example-requests-POSTclient-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/client/store" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"client_firstName\": \"b\",
    \"client_lastName\": \"n\",
    \"client_email\": \"ashly64@example.com\",
    \"client_born_date\": \"2022-04-05\",
    \"client_adress\": \"n\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/client/store"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "client_firstName": "b",
    "client_lastName": "n",
    "client_email": "ashly64@example.com",
    "client_born_date": "2022-04-05",
    "client_adress": "n"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTclient-store">
</span>
<span id="execution-results-POSTclient-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTclient-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTclient-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTclient-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTclient-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTclient-store" data-method="POST"
      data-path="client/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTclient-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTclient-store"
                    onclick="tryItOut('POSTclient-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTclient-store"
                    onclick="cancelTryOut('POSTclient-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTclient-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>client/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTclient-store"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTclient-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_firstName</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="client_firstName"                data-endpoint="POSTclient-store"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_lastName</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="client_lastName"                data-endpoint="POSTclient-store"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="client_email"                data-endpoint="POSTclient-store"
               value="ashly64@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>ashly64@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_born_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="client_born_date"                data-endpoint="POSTclient-store"
               value="2022-04-05"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date before <code>today</code>. Example: <code>2022-04-05</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_adress</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="client_adress"                data-endpoint="POSTclient-store"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETclient-edit--client_client_id-">GET client/edit/{client_client_id}</h2>

<p>
</p>



<span id="example-requests-GETclient-edit--client_client_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/client/edit/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/client/edit/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETclient-edit--client_client_id-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6Ijk5a2I2dEwybW5WRkdmUTYrczhTa2c9PSIsInZhbHVlIjoiak9rNlROWmxZNkNCNHJhNTdmb3NXRzExQWQzWlZQMkQwZGdaOUxLOGR5VXN5czZuRE9RcUlKYy9RaTBCd0VFdHFudkhqMld4bXlWSEtYdmgxUmVlOHltcG4xWXpFNXdlZUtNcVVQQllRV3lBRTVDZWtqVmFzSUpRdTdYTkdNVXYiLCJtYWMiOiI2NzY3OTc2MzUwN2E0NGFlMzYyNWJjNzNhMjI3YTViMmU2ODYzM2RkNmVlYjJkZDI5NTkzZTlkMTk1ZTRlMmU1IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImorcHJIdCtIZEZqYnlXdnNVUHdYNEE9PSIsInZhbHVlIjoicXBuVDJRZEg5R00wMlFGenovMUljVjBIeWloZm13NUkrdU40QlVFNS9UYWRLam04ZE5mbzRORlpxNHFZcjJqTzh6aDdwTzVFOVBKdlIxOThlTlRmcG9oeE5ZcHNTdG1YWFRndWV6WGxEcGREakhxZllFWFIweFVCMGdqMmNhRGgiLCJtYWMiOiIzYmFmNjc2NDA2OTIyZjg1MGUyZDFjNmUzNTI4MGUwYTlhNDA4Njg1OWRhMmFhM2E2ZTcyMWNlMzE1NDRmNmI3IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETclient-edit--client_client_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETclient-edit--client_client_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETclient-edit--client_client_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETclient-edit--client_client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETclient-edit--client_client_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETclient-edit--client_client_id-" data-method="GET"
      data-path="client/edit/{client_client_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETclient-edit--client_client_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETclient-edit--client_client_id-"
                    onclick="tryItOut('GETclient-edit--client_client_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETclient-edit--client_client_id-"
                    onclick="cancelTryOut('GETclient-edit--client_client_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETclient-edit--client_client_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>client/edit/{client_client_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETclient-edit--client_client_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client_client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_client_id"                data-endpoint="GETclient-edit--client_client_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the client client. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTclient-update--client_client_id-">POST client/update/{client_client_id}</h2>

<p>
</p>



<span id="example-requests-POSTclient-update--client_client_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/client/update/1" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"client_firstName\": \"b\",
    \"client_lastName\": \"n\",
    \"client_email\": \"ashly64@example.com\",
    \"client_born_date\": \"2026-03-11T17:52:24\",
    \"client_adress\": \"v\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/client/update/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "client_firstName": "b",
    "client_lastName": "n",
    "client_email": "ashly64@example.com",
    "client_born_date": "2026-03-11T17:52:24",
    "client_adress": "v"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTclient-update--client_client_id-">
</span>
<span id="execution-results-POSTclient-update--client_client_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTclient-update--client_client_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTclient-update--client_client_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTclient-update--client_client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTclient-update--client_client_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTclient-update--client_client_id-" data-method="POST"
      data-path="client/update/{client_client_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTclient-update--client_client_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTclient-update--client_client_id-"
                    onclick="tryItOut('POSTclient-update--client_client_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTclient-update--client_client_id-"
                    onclick="cancelTryOut('POSTclient-update--client_client_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTclient-update--client_client_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>client/update/{client_client_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTclient-update--client_client_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTclient-update--client_client_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client_client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_client_id"                data-endpoint="POSTclient-update--client_client_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the client client. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_firstName</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="client_firstName"                data-endpoint="POSTclient-update--client_client_id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_lastName</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="client_lastName"                data-endpoint="POSTclient-update--client_client_id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="client_email"                data-endpoint="POSTclient-update--client_client_id-"
               value="ashly64@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>ashly64@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_born_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="client_born_date"                data-endpoint="POSTclient-update--client_client_id-"
               value="2026-03-11T17:52:24"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-11T17:52:24</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_adress</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="client_adress"                data-endpoint="POSTclient-update--client_client_id-"
               value="v"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>v</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETclient-delete--client_client_id-">GET client/delete/{client_client_id}</h2>

<p>
</p>



<span id="example-requests-GETclient-delete--client_client_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/client/delete/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/client/delete/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETclient-delete--client_client_id-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6InhHdlB2c0RxeUVBOHRJTDZscjdkL2c9PSIsInZhbHVlIjoidjVnWGt2STMzV3NUUmlwbXUyVjFLdzVyUnljcjE4UVlUNzRxcEVYUHp0bDVJTzM3aS90Y082TCtoc3UzQVJQb0tZbzhYR01zczhiaEN3K0w4MnhyYjEwOGFubTJsaEZ3L2x0VExna243R25POVEzaXFCZ3RCWHJnRXB5R2tabEQiLCJtYWMiOiI3ODhmM2Y5MDc1ODU3OWE2NjdmZTJiYzQzNGI5N2U2MmIyYzc4MWViM2YyZGE5OWIxNGNlNWI2NmI4YmFmM2FlIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IlYxWjJ1MmdKSjZCT1NiS2hHcHJmcGc9PSIsInZhbHVlIjoiVTdoWFh4WDRDWHBnN2VURkpxVU5lbTFUTGlBemNFYS9RaXA1M3FRQmx6eDRVTzlmeDVvSVVFV1c5ZVdCUytTUXlXQktHWW1wbTZMcGg2TW1SMDZVdk9tZEltbnIxTGhoQ29PMGtwSzBBREV3U0pGWnRvK0ZpUmN4OUpyTE84MkciLCJtYWMiOiI4ZDY5NGVjMDVjMmZkYzBkMGU1MzUxYWIxY2QyMjVjMGM3MTRmNWZjZGNlY2M4ZDUyNjljN2M1OWYwMGU3ZmM5IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETclient-delete--client_client_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETclient-delete--client_client_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETclient-delete--client_client_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETclient-delete--client_client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETclient-delete--client_client_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETclient-delete--client_client_id-" data-method="GET"
      data-path="client/delete/{client_client_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETclient-delete--client_client_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETclient-delete--client_client_id-"
                    onclick="tryItOut('GETclient-delete--client_client_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETclient-delete--client_client_id-"
                    onclick="cancelTryOut('GETclient-delete--client_client_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETclient-delete--client_client_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>client/delete/{client_client_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETclient-delete--client_client_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client_client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_client_id"                data-endpoint="GETclient-delete--client_client_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the client client. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEclient-destroy--client_client_id-">DELETE client/destroy/{client_client_id}</h2>

<p>
</p>



<span id="example-requests-DELETEclient-destroy--client_client_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/client/destroy/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/client/destroy/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEclient-destroy--client_client_id-">
</span>
<span id="execution-results-DELETEclient-destroy--client_client_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEclient-destroy--client_client_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEclient-destroy--client_client_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEclient-destroy--client_client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEclient-destroy--client_client_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEclient-destroy--client_client_id-" data-method="DELETE"
      data-path="client/destroy/{client_client_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEclient-destroy--client_client_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEclient-destroy--client_client_id-"
                    onclick="tryItOut('DELETEclient-destroy--client_client_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEclient-destroy--client_client_id-"
                    onclick="cancelTryOut('DELETEclient-destroy--client_client_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEclient-destroy--client_client_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>client/destroy/{client_client_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEclient-destroy--client_client_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client_client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_client_id"                data-endpoint="DELETEclient-destroy--client_client_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the client client. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETcategories">GET categories</h2>

<p>
</p>



<span id="example-requests-GETcategories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/categories" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/categories"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETcategories">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6Ijh3WGQ2TkNCQ0hBeVA0UnE4WUdZNnc9PSIsInZhbHVlIjoiRnhwd3crTldVVUswNkJzSTRZYnhxSjllZVFCRnQ0dDl0K1RSbHcwOUhxenYweXJ3UFNSREVLTkhKWmhHTHhWdVVIcURaSEkwOFlnMEtEdHF6UldnZGZ1RVlXbFFsZ1p4d1hHanVzTG5vajM1Ui9TbXEzZ2tWNElpT3dLSWdKdDIiLCJtYWMiOiJkNzkxNGM1ZGE0NjlkZWE3NTYxMzlhZWJlNjAzYjIxOWNmY2UxZTYzMjI5OGM3ZjcxMmM3MmUyNTg5YzBlY2IzIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IjFybWpvMGRQaXkvaEFmblJ4T0NoMVE9PSIsInZhbHVlIjoidjc2a0xjTHIwdk8xc0FXWUxENEozdzFWaTlzSCtaSHRjVFNIR1hDWTh4WmUxbWVTTEpzMlpETU01NDhQZDJHSFJ0WmtHV3BpRmJ1RVh5WjhHNmZLNFBSYzRiSWswVzIxKzZaY2h6MktPOUZmMWtuUXRvaGpadWJCNzV0VGNOZ1AiLCJtYWMiOiI4NDQzMWNlNmE0ZWY2N2E1ZTc1OTQ5MWY1ZDUyMjQ3NDk2Yzc2NzQ2MTNlZmE1OTA4Yzk0OTY2NDUyMWZmNTQ3IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETcategories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETcategories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETcategories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETcategories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcategories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETcategories" data-method="GET"
      data-path="categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETcategories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETcategories"
                    onclick="tryItOut('GETcategories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETcategories"
                    onclick="cancelTryOut('GETcategories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETcategories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETcategories"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETcategories-create">GET categories/create</h2>

<p>
</p>



<span id="example-requests-GETcategories-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/categories/create" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/categories/create"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETcategories-create">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6Ik9nckNXejJSQzlpWVFBRDdJc1luZ0E9PSIsInZhbHVlIjoiQkcxZ2FQdXM2SWk1cFVHMjJNVUVEeWVRMkFKdm01UEN3SVNPUitnVUhVdWtNWHN6THpaUVlXRjFDNGZvTFZscmcvTGhDQUlrU3pqVlVodkYyOFRkcjY3STRsVmpva1VtMzMxeDVqM0VOa3k2ck9ic2toUFdmZzUrWTZFamVQNDkiLCJtYWMiOiIzY2NjM2ViMmVlNzY5YThjYzE5M2JkNWFkOWFjNDU1Y2UzNzkzNTk4MDQ3MjE5ZTQxNzQ1OTUxYTgyNTlmZGQ4IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IlN6SlluOVdvNGlad3RlaTRjd0dRN0E9PSIsInZhbHVlIjoiUTJCM2Nyai9nQStjWUM0UCtSSFI3K28rR0VSd29CQ3VEcjVXMnpFRGx1ekFaVDdsN2QxV1gxbTI4eG9yTmRMTlBoS1h4ZjlWV2ljR0hueU1RUlZzV0dOWHpaRU9Pc00vNEp2UGIxc3hlL0IxZG1Kem9MdGtacVVWMGNZcGZVWHYiLCJtYWMiOiI3NzA3Y2Y0MjYxNWZiZDNlNWFmODQ1YzRhMThmNmI1N2ZkMWIyNGRjMjExOTRjNmZjNWQyN2NhYWZiYTg5YjJkIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETcategories-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETcategories-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETcategories-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETcategories-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcategories-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETcategories-create" data-method="GET"
      data-path="categories/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETcategories-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETcategories-create"
                    onclick="tryItOut('GETcategories-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETcategories-create"
                    onclick="cancelTryOut('GETcategories-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETcategories-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>categories/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETcategories-create"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETcategories-store">GET categories/store</h2>

<p>
</p>



<span id="example-requests-GETcategories-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/categories/store" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"product_categorie_name\": \"architecto\",
    \"product_type_sell\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/categories/store"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "product_categorie_name": "architecto",
    "product_type_sell": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETcategories-store">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6IlZMaCswQys2UjF5ckV3RjJUMEhrVlE9PSIsInZhbHVlIjoiazRrWTZvZVBJdVpLaFhrNEJzWUFVemk0NUhIV3JrNlZVMEI4SWFTZkZxRWZ0YmtIN2cxcVVWME50Yk9xaGdBMTZJOXBia2FxUnZWdkFvamM3L3lha3luS0JEbUJKMTB4djg4eVFzc25VVlpjbExvUU9NWDFBQTd5K2VwNUh5L1AiLCJtYWMiOiI5MTMyNjA5NDVlYmI5MjJmYmI0ZDcxZDM3MmYyNTBjMjkzYjIyNDVmNWIxM2UxZTVmMWUyZTQ2OTZjNDM0Y2JkIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Ik1ZZjNWakF1djR0YU1qZ1hPbTBGa3c9PSIsInZhbHVlIjoiVXZJZmpwYksxQTlSVGZQYlBCTWJ0MjZUM2JWcDRiQXFFR3lBM1JBRmJBMEIzczlpam5TUWNlVWFLT3UzOGR1MGRhcjNzT3lUNTlyelhZVVJIT3FDL1lsOFdZTkZPNVNEcytMWUlrM0p5UG9YSzljN3o3YUVqZ0c0NG8wVzdKdkciLCJtYWMiOiIwMmY0MTUzODEwNmMzYzk3NjJiNTVkMDRmZGU5MTNhYzgxMDA1MjE1NjBlMTg1ODBiNDBhNmQwMzRkYzRlNTE2IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETcategories-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETcategories-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETcategories-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETcategories-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcategories-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETcategories-store" data-method="GET"
      data-path="categories/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETcategories-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETcategories-store"
                    onclick="tryItOut('GETcategories-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETcategories-store"
                    onclick="cancelTryOut('GETcategories-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETcategories-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>categories/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETcategories-store"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETcategories-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_categorie_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_categorie_name"                data-endpoint="GETcategories-store"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_type_sell</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_type_sell"                data-endpoint="GETcategories-store"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETcategories-delete--productCategory_product_categorie_id-">GET categories/delete/{productCategory_product_categorie_id}</h2>

<p>
</p>



<span id="example-requests-GETcategories-delete--productCategory_product_categorie_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/categories/delete/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/categories/delete/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETcategories-delete--productCategory_product_categorie_id-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6InEvL2ZTN3IrcDRxZU8vM1NETXFwWWc9PSIsInZhbHVlIjoid25MN1R0dm9qUzRvdlZ1Y1RBdENYLzIzUHNPbVkrTStFaTRkbEJia2NwdmpDNXhacnRTTEpqQW5ma05acCtlYUNZY2w4bEV3V29jS3hKYkZKMmlFWThIWmJUd2o5NDJKNW9PdTJKS1ZpMXp4WFZWTFhueDgxU0RRQmhnK2RmdWoiLCJtYWMiOiIzOTE0MTZmMzM2YWU3OTBlY2EwMDVhNWJhY2M4YTk3NjU2MWZhNDAyODA2NzAxMTEwY2E5Mzg1YzUwOGU3MWRkIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImZrTnp4Z05RTm44WEtjK1k2dGlaeHc9PSIsInZhbHVlIjoiWFdlVDRiQzBqNnpXME5vYWZFS0NIV2o3RFhYMVJyMDVZZStHMEhySGVWZ3oxaU5BVktTV3JPMVh1RE5hWjVEa2hVR2dXbzg1TGs1Z1RJMDlLNjRIN2s4bG03Z1Q5Zys4dmU3SGl1SW5wSEp2LzF2ajhjRGdBODBzUmFxMnhreXAiLCJtYWMiOiI0ZmY5ODBmM2YwNjExZTVlZDY4OTVkNTQzOGYwNTMxNDA5N2ZkM2JhYjQ5ZGZlY2U0MzY4Y2VkMjYwMjAxMmE1IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETcategories-delete--productCategory_product_categorie_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETcategories-delete--productCategory_product_categorie_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETcategories-delete--productCategory_product_categorie_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETcategories-delete--productCategory_product_categorie_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcategories-delete--productCategory_product_categorie_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETcategories-delete--productCategory_product_categorie_id-" data-method="GET"
      data-path="categories/delete/{productCategory_product_categorie_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETcategories-delete--productCategory_product_categorie_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETcategories-delete--productCategory_product_categorie_id-"
                    onclick="tryItOut('GETcategories-delete--productCategory_product_categorie_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETcategories-delete--productCategory_product_categorie_id-"
                    onclick="cancelTryOut('GETcategories-delete--productCategory_product_categorie_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETcategories-delete--productCategory_product_categorie_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>categories/delete/{productCategory_product_categorie_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETcategories-delete--productCategory_product_categorie_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>productCategory_product_categorie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="productCategory_product_categorie_id"                data-endpoint="GETcategories-delete--productCategory_product_categorie_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the productCategory product categorie. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTcategories--productCategory_product_categorie_id-">PUT categories/{productCategory_product_categorie_id}</h2>

<p>
</p>



<span id="example-requests-PUTcategories--productCategory_product_categorie_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/categories/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/categories/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTcategories--productCategory_product_categorie_id-">
</span>
<span id="execution-results-PUTcategories--productCategory_product_categorie_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTcategories--productCategory_product_categorie_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTcategories--productCategory_product_categorie_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTcategories--productCategory_product_categorie_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTcategories--productCategory_product_categorie_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTcategories--productCategory_product_categorie_id-" data-method="PUT"
      data-path="categories/{productCategory_product_categorie_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTcategories--productCategory_product_categorie_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTcategories--productCategory_product_categorie_id-"
                    onclick="tryItOut('PUTcategories--productCategory_product_categorie_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTcategories--productCategory_product_categorie_id-"
                    onclick="cancelTryOut('PUTcategories--productCategory_product_categorie_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTcategories--productCategory_product_categorie_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>categories/{productCategory_product_categorie_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTcategories--productCategory_product_categorie_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>productCategory_product_categorie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="productCategory_product_categorie_id"                data-endpoint="PUTcategories--productCategory_product_categorie_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the productCategory product categorie. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTcategories-update--productCategory_product_categorie_id-">POST categories/update/{productCategory_product_categorie_id}</h2>

<p>
</p>



<span id="example-requests-POSTcategories-update--productCategory_product_categorie_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/categories/update/1" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"product_categorie_name\": \"architecto\",
    \"product_type_sell\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/categories/update/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "product_categorie_name": "architecto",
    "product_type_sell": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTcategories-update--productCategory_product_categorie_id-">
</span>
<span id="execution-results-POSTcategories-update--productCategory_product_categorie_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTcategories-update--productCategory_product_categorie_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTcategories-update--productCategory_product_categorie_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTcategories-update--productCategory_product_categorie_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTcategories-update--productCategory_product_categorie_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTcategories-update--productCategory_product_categorie_id-" data-method="POST"
      data-path="categories/update/{productCategory_product_categorie_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTcategories-update--productCategory_product_categorie_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTcategories-update--productCategory_product_categorie_id-"
                    onclick="tryItOut('POSTcategories-update--productCategory_product_categorie_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTcategories-update--productCategory_product_categorie_id-"
                    onclick="cancelTryOut('POSTcategories-update--productCategory_product_categorie_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTcategories-update--productCategory_product_categorie_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>categories/update/{productCategory_product_categorie_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTcategories-update--productCategory_product_categorie_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTcategories-update--productCategory_product_categorie_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>productCategory_product_categorie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="productCategory_product_categorie_id"                data-endpoint="POSTcategories-update--productCategory_product_categorie_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the productCategory product categorie. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_categorie_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_categorie_name"                data-endpoint="POSTcategories-update--productCategory_product_categorie_id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_type_sell</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_type_sell"                data-endpoint="POSTcategories-update--productCategory_product_categorie_id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETcategories-edit--productCategory_product_categorie_id-">GET categories/edit/{productCategory_product_categorie_id}</h2>

<p>
</p>



<span id="example-requests-GETcategories-edit--productCategory_product_categorie_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/categories/edit/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/categories/edit/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETcategories-edit--productCategory_product_categorie_id-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6IkRNS3BtYnEvOWFuWFF1RVRIblNuRGc9PSIsInZhbHVlIjoibndjR3N3VFVaNDk0Y3lnR01Cb1JOQkJVZUhrU21Eb3BOZDYwZ3BRY2o4MXRIQVJxWFBuZjUvaGdGc3BaV3IzOTZyWmNpcS9YL21JelhqQW1UNk00ckt0Vi9xU2hxVzczVkNXeEsvOU9HVUROTmJDVmVsYWVFRVRLY2ZEM2xPVFYiLCJtYWMiOiJjMTgxZmMxMTdlMGM3YTRlNTdkMmRmZDM5ZDdkODdkYjdhN2U1ZmQ5YTFhMTA2OGJiZGExNjMwMjc4NjZmN2VhIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IjNtYThvZllFbzZqbDVoalNxSURvbkE9PSIsInZhbHVlIjoiSitmRjNhVDFmTGdUQlp2eFIvME12SHJWb2l2S3F1cW9DbDZvc1c4WTczWkFHZTgzR01naGNISk9KSEYxamExbzBhU0p3WVVZZmFUbkE2c2w2YnhPU2t2cnozTWcwY2R3QlVPZ2VzNkhRdUphQ1d0OFA0Y04rdDJGVS9mM1RCekwiLCJtYWMiOiI5MjBjMzQ3YjAyNzEyNDBlNmM2ZjRkMWFiZDQ5NDg0ODg5MDliYmZkZjY2YzI2ZGJiNGNiYTU5MTQ0MzQ3MmZkIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETcategories-edit--productCategory_product_categorie_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETcategories-edit--productCategory_product_categorie_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETcategories-edit--productCategory_product_categorie_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETcategories-edit--productCategory_product_categorie_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcategories-edit--productCategory_product_categorie_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETcategories-edit--productCategory_product_categorie_id-" data-method="GET"
      data-path="categories/edit/{productCategory_product_categorie_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETcategories-edit--productCategory_product_categorie_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETcategories-edit--productCategory_product_categorie_id-"
                    onclick="tryItOut('GETcategories-edit--productCategory_product_categorie_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETcategories-edit--productCategory_product_categorie_id-"
                    onclick="cancelTryOut('GETcategories-edit--productCategory_product_categorie_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETcategories-edit--productCategory_product_categorie_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>categories/edit/{productCategory_product_categorie_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETcategories-edit--productCategory_product_categorie_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>productCategory_product_categorie_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="productCategory_product_categorie_id"                data-endpoint="GETcategories-edit--productCategory_product_categorie_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the productCategory product categorie. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GET commands--client_client_id-">GET  commands/{client_client_id}</h2>

<p>
</p>



<span id="example-requests-GET commands--client_client_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/ commands/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/ commands/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GET commands--client_client_id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: text/html; charset=UTF-8
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;title&gt;Not Found&lt;/title&gt;

        &lt;style&gt;
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}code{font-family:monospace,monospace;font-size:1em}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}code{font-family:Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-gray-400{--border-opacity:1;border-color:#cbd5e0;border-color:rgba(203,213,224,var(--border-opacity))}.border-t{border-top-width:1px}.border-r{border-right-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-xl{max-width:36rem}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.uppercase{text-transform:uppercase}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.tracking-wider{letter-spacing:.05em}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@-webkit-keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@-webkit-keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@-webkit-keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@-webkit-keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        &lt;/style&gt;

        &lt;style&gt;
            body {
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body class=&quot;antialiased&quot;&gt;
        &lt;div class=&quot;relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0&quot;&gt;
            &lt;div class=&quot;max-w-xl mx-auto sm:px-6 lg:px-8&quot;&gt;
                &lt;div class=&quot;flex items-center pt-8 sm:justify-start sm:pt-0&quot;&gt;
                    &lt;div class=&quot;px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider&quot;&gt;
                        404                    &lt;/div&gt;

                    &lt;div class=&quot;ml-4 text-lg text-gray-500 uppercase tracking-wider&quot;&gt;
                        Not Found                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GET commands--client_client_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET commands--client_client_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET commands--client_client_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GET commands--client_client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET commands--client_client_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GET commands--client_client_id-" data-method="GET"
      data-path=" commands/{client_client_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GET commands--client_client_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET commands--client_client_id-"
                    onclick="tryItOut('GET commands--client_client_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET commands--client_client_id-"
                    onclick="cancelTryOut('GET commands--client_client_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET commands--client_client_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code> commands/{client_client_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GET commands--client_client_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client_client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_client_id"                data-endpoint="GET commands--client_client_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the client client. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETcommands-create--client_client_id-">GET commands/create/{client_client_id}</h2>

<p>
</p>



<span id="example-requests-GETcommands-create--client_client_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/commands/create/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/commands/create/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETcommands-create--client_client_id-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6IlBoallaNitRVVBDQUx4U0laWWVScVE9PSIsInZhbHVlIjoiNFlDT2ZWd2ZIbmF6RDREeXRweCt0TmRqVWhlNnpnZG1uTjhXM1MrVEw0MGlxMWV4OG9hRXNJekJSL25sMkFuVXJCdTdhcGFDbXdQU3pWYXJIbjBjbmpRcGpxMFNKd1F4OWtTWG5QT1dOV2VIZlBIN2g3Tk0vZ0p3U3pEOWNkNHAiLCJtYWMiOiJlOTE4ZWE3OWJjMGM2MWI3MGNiNDRiNjNmY2MxYmM0ZTg0MzZlZTUwY2JlYTFjZTQ2ODg0NDllYTU1ZmEyZmEzIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImxycGYwb3p5eU90SnBxemRpcDF1VUE9PSIsInZhbHVlIjoiVjRaRlZXUllQbkZySXUzMGlYRTQyZkdYbDNLWFg1akhQZE9MaEU3eFYrOFgvUTZpN3d5UFUyU1c2UjNzb2h1TStOdnpiZi9PcFppaDVZTTA1c1NRRk03ZnNqQXJ1dmRxYlNuWHYvRi94ZWIxSGdNUk91a2RLb0piV1BLYUx6QlYiLCJtYWMiOiI5ZWQxNWJiZmFhODRhNWUyMjBmOWQ3ZmFjYWU2Y2NlN2Y5Y2ZkNTA2M2Y1OWEyNDNmNzgyMGEwZmY4OWJjMDY2IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETcommands-create--client_client_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETcommands-create--client_client_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETcommands-create--client_client_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETcommands-create--client_client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcommands-create--client_client_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETcommands-create--client_client_id-" data-method="GET"
      data-path="commands/create/{client_client_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETcommands-create--client_client_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETcommands-create--client_client_id-"
                    onclick="tryItOut('GETcommands-create--client_client_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETcommands-create--client_client_id-"
                    onclick="cancelTryOut('GETcommands-create--client_client_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETcommands-create--client_client_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>commands/create/{client_client_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETcommands-create--client_client_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client_client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_client_id"                data-endpoint="GETcommands-create--client_client_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the client client. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTcommands-addCart--id-">POST commands/addCart/{id}</h2>

<p>
</p>



<span id="example-requests-POSTcommands-addCart--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/commands/addCart/architecto" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/commands/addCart/architecto"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTcommands-addCart--id-">
</span>
<span id="execution-results-POSTcommands-addCart--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTcommands-addCart--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTcommands-addCart--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTcommands-addCart--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTcommands-addCart--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTcommands-addCart--id-" data-method="POST"
      data-path="commands/addCart/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTcommands-addCart--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTcommands-addCart--id-"
                    onclick="tryItOut('POSTcommands-addCart--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTcommands-addCart--id-"
                    onclick="cancelTryOut('POSTcommands-addCart--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTcommands-addCart--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>commands/addCart/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTcommands-addCart--id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTcommands-addCart--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the addCart. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTcommands-command--client_client_id-">POST commands/command/{client_client_id}</h2>

<p>
</p>



<span id="example-requests-POSTcommands-command--client_client_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/commands/command/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/commands/command/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTcommands-command--client_client_id-">
</span>
<span id="execution-results-POSTcommands-command--client_client_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTcommands-command--client_client_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTcommands-command--client_client_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTcommands-command--client_client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTcommands-command--client_client_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTcommands-command--client_client_id-" data-method="POST"
      data-path="commands/command/{client_client_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTcommands-command--client_client_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTcommands-command--client_client_id-"
                    onclick="tryItOut('POSTcommands-command--client_client_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTcommands-command--client_client_id-"
                    onclick="cancelTryOut('POSTcommands-command--client_client_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTcommands-command--client_client_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>commands/command/{client_client_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTcommands-command--client_client_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client_client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_client_id"                data-endpoint="POSTcommands-command--client_client_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the client client. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GET commands-edit--command_command_id-">GET  commands/edit/{command_command_id}</h2>

<p>
</p>



<span id="example-requests-GET commands-edit--command_command_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/ commands/edit/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/ commands/edit/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GET commands-edit--command_command_id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: text/html; charset=UTF-8
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;title&gt;Not Found&lt;/title&gt;

        &lt;style&gt;
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}code{font-family:monospace,monospace;font-size:1em}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}code{font-family:Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-gray-400{--border-opacity:1;border-color:#cbd5e0;border-color:rgba(203,213,224,var(--border-opacity))}.border-t{border-top-width:1px}.border-r{border-right-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-xl{max-width:36rem}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.uppercase{text-transform:uppercase}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.tracking-wider{letter-spacing:.05em}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@-webkit-keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@-webkit-keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@-webkit-keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@-webkit-keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        &lt;/style&gt;

        &lt;style&gt;
            body {
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body class=&quot;antialiased&quot;&gt;
        &lt;div class=&quot;relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0&quot;&gt;
            &lt;div class=&quot;max-w-xl mx-auto sm:px-6 lg:px-8&quot;&gt;
                &lt;div class=&quot;flex items-center pt-8 sm:justify-start sm:pt-0&quot;&gt;
                    &lt;div class=&quot;px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider&quot;&gt;
                        404                    &lt;/div&gt;

                    &lt;div class=&quot;ml-4 text-lg text-gray-500 uppercase tracking-wider&quot;&gt;
                        Not Found                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GET commands-edit--command_command_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET commands-edit--command_command_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET commands-edit--command_command_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GET commands-edit--command_command_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET commands-edit--command_command_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GET commands-edit--command_command_id-" data-method="GET"
      data-path=" commands/edit/{command_command_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GET commands-edit--command_command_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET commands-edit--command_command_id-"
                    onclick="tryItOut('GET commands-edit--command_command_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET commands-edit--command_command_id-"
                    onclick="cancelTryOut('GET commands-edit--command_command_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET commands-edit--command_command_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code> commands/edit/{command_command_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GET commands-edit--command_command_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>command_command_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="command_command_id"                data-endpoint="GET commands-edit--command_command_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the command command. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTcommands-update--command_command_id-">POST commands/update/{command_command_id}</h2>

<p>
</p>



<span id="example-requests-POSTcommands-update--command_command_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/commands/update/1" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"command_adress\": \"architecto\",
    \"command_state\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/commands/update/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "command_adress": "architecto",
    "command_state": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTcommands-update--command_command_id-">
</span>
<span id="execution-results-POSTcommands-update--command_command_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTcommands-update--command_command_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTcommands-update--command_command_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTcommands-update--command_command_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTcommands-update--command_command_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTcommands-update--command_command_id-" data-method="POST"
      data-path="commands/update/{command_command_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTcommands-update--command_command_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTcommands-update--command_command_id-"
                    onclick="tryItOut('POSTcommands-update--command_command_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTcommands-update--command_command_id-"
                    onclick="cancelTryOut('POSTcommands-update--command_command_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTcommands-update--command_command_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>commands/update/{command_command_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTcommands-update--command_command_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTcommands-update--command_command_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>command_command_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="command_command_id"                data-endpoint="POSTcommands-update--command_command_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the command command. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>command_adress</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="command_adress"                data-endpoint="POSTcommands-update--command_command_id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>command_state</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="command_state"                data-endpoint="POSTcommands-update--command_command_id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GET commands-details--command_command_id-">GET  commands/details/{command_command_id}</h2>

<p>
</p>



<span id="example-requests-GET commands-details--command_command_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/ commands/details/1" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/ commands/details/1"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GET commands-details--command_command_id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: text/html; charset=UTF-8
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;title&gt;Not Found&lt;/title&gt;

        &lt;style&gt;
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}code{font-family:monospace,monospace;font-size:1em}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}code{font-family:Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-gray-400{--border-opacity:1;border-color:#cbd5e0;border-color:rgba(203,213,224,var(--border-opacity))}.border-t{border-top-width:1px}.border-r{border-right-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-xl{max-width:36rem}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.uppercase{text-transform:uppercase}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.tracking-wider{letter-spacing:.05em}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@-webkit-keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@-webkit-keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@-webkit-keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@-webkit-keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        &lt;/style&gt;

        &lt;style&gt;
            body {
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body class=&quot;antialiased&quot;&gt;
        &lt;div class=&quot;relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0&quot;&gt;
            &lt;div class=&quot;max-w-xl mx-auto sm:px-6 lg:px-8&quot;&gt;
                &lt;div class=&quot;flex items-center pt-8 sm:justify-start sm:pt-0&quot;&gt;
                    &lt;div class=&quot;px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider&quot;&gt;
                        404                    &lt;/div&gt;

                    &lt;div class=&quot;ml-4 text-lg text-gray-500 uppercase tracking-wider&quot;&gt;
                        Not Found                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GET commands-details--command_command_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET commands-details--command_command_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET commands-details--command_command_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GET commands-details--command_command_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET commands-details--command_command_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GET commands-details--command_command_id-" data-method="GET"
      data-path=" commands/details/{command_command_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GET commands-details--command_command_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET commands-details--command_command_id-"
                    onclick="tryItOut('GET commands-details--command_command_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET commands-details--command_command_id-"
                    onclick="cancelTryOut('GET commands-details--command_command_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET commands-details--command_command_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code> commands/details/{command_command_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GET commands-details--command_command_id-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>command_command_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="command_command_id"                data-endpoint="GET commands-details--command_command_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the command command. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETregister">Display the registration view.</h2>

<p>
</p>



<span id="example-requests-GETregister">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/register" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/register"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETregister">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6IlJteTFkdW1MNXBDTVFGWFNEeElmV1E9PSIsInZhbHVlIjoibkJyS0t5bnBSWlRlUDVVY0ZQbzRjeUtwV0ZJdlF0VnBnL0dYU0dQdXJsYk5IakZXTUxUUEFxazZrOEM1dzBMWjVVRy9SQ1Q3N2FDNkUyWkY0TkJGU1RlekwyNmE0V1FQUVcwRUxWR0d6NkVodUk1L3Q5d1hhN0RFTzBvSkJSZzUiLCJtYWMiOiIzN2U3ODQ0YjY5MTFjMzYxNmZiNWZiZTkzNjJkNTJiYTBjMWE3YTFlZjIzMGY2MzllNzcwZjg5YmI1MzE5OTQ4IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IjVUcTJCcEt3c3NoeHlzMGZoQkFmOFE9PSIsInZhbHVlIjoiMjJwcEh4TjdtTzJHY1B3Q21WTGpUQzdmWFpnSnJJekZIaGZ0VktmYU96dURrbERNVzQ1cFpUS3BxeUNmUjlsaE9IeE9kN2lEMWRaalYyMDNKTFJYOFZOT2pqVDBoN21BNTFUS0NUR2Y3eGV5VU9mYkFVQmpPL1RBcmlBRjNuSGsiLCJtYWMiOiI0Mzg5MjY2MWJkZDI4MmJhNTcxYzc1MjdmMzAzYjFjYjgyZjAwMTk0NWY2NjJlMGRjNGI4Nzk0OWJjMThjODZmIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
        &lt;meta name=&quot;csrf-token&quot; content=&quot;q6QRWHYkfG6jlvcvE42gc9iKA0EjeoNbwvHyd5iN&quot;&gt;

        &lt;title&gt;Laravel&lt;/title&gt;

        &lt;!-- Fonts --&gt;
        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
        &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,500,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

        &lt;!-- Scripts --&gt;
        &lt;link rel=&quot;preload&quot; as=&quot;style&quot; href=&quot;http://localhost:8000/build/assets/app-B9Mw8dQ_.css&quot; /&gt;&lt;link rel=&quot;modulepreload&quot; href=&quot;http://localhost:8000/build/assets/app-DaBYqt0m.js&quot; /&gt;&lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost:8000/build/assets/app-B9Mw8dQ_.css&quot; /&gt;&lt;script type=&quot;module&quot; src=&quot;http://localhost:8000/build/assets/app-DaBYqt0m.js&quot;&gt;&lt;/script&gt;    &lt;/head&gt;
    &lt;body class=&quot;font-sans text-gray-900 antialiased&quot;&gt;
        &lt;div class=&quot;min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100&quot;&gt;
            &lt;div&gt;
                &lt;a href=&quot;/&quot;&gt;
                    &lt;img src=&quot;./img/coffee--bean.png&quot; style=&quot;height: 50px&quot;&gt;
                &lt;/a&gt;
            &lt;/div&gt;

            &lt;div class=&quot;w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg&quot;&gt;
                &lt;form method=&quot;POST&quot; action=&quot;http://localhost:8000/register&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;q6QRWHYkfG6jlvcvE42gc9iKA0EjeoNbwvHyd5iN&quot; autocomplete=&quot;off&quot;&gt;
        &lt;!-- Name --&gt;
        &lt;div&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;name&quot;&gt;
    Name
&lt;/label&gt;
            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;name&quot; type=&quot;text&quot; name=&quot;name&quot; required=&quot;required&quot; autofocus=&quot;autofocus&quot; autocomplete=&quot;name&quot;&gt;
                    &lt;/div&gt;

        &lt;!-- Email Address --&gt;
        &lt;div class=&quot;mt-4&quot;&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;email&quot;&gt;
    Email
&lt;/label&gt;
            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;email&quot; type=&quot;email&quot; name=&quot;email&quot; required=&quot;required&quot; autocomplete=&quot;username&quot;&gt;
                    &lt;/div&gt;

        &lt;!-- Password --&gt;
        &lt;div class=&quot;mt-4&quot;&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;password&quot;&gt;
    Password
&lt;/label&gt;

            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;password&quot; type=&quot;password&quot; name=&quot;password&quot; required=&quot;required&quot; autocomplete=&quot;new-password&quot;&gt;

                    &lt;/div&gt;

        &lt;!-- Confirm Password --&gt;
        &lt;div class=&quot;mt-4&quot;&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;password_confirmation&quot;&gt;
    Confirm Password
&lt;/label&gt;

            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;password_confirmation&quot; type=&quot;password&quot; name=&quot;password_confirmation&quot; required=&quot;required&quot; autocomplete=&quot;new-password&quot;&gt;

                    &lt;/div&gt;

        &lt;div class=&quot;flex items-center justify-end mt-4&quot;&gt;
            &lt;a class=&quot;underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500&quot; href=&quot;http://localhost:8000/login&quot;&gt;
                Already registered?
            &lt;/a&gt;

            &lt;button type=&quot;submit&quot; class=&quot;inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ms-4&quot;&gt;
    Register
&lt;/button&gt;
        &lt;/div&gt;
    &lt;/form&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETregister" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETregister"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETregister"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETregister">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETregister" data-method="GET"
      data-path="register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETregister', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETregister"
                    onclick="tryItOut('GETregister');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETregister"
                    onclick="cancelTryOut('GETregister');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETregister"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETregister"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTregister">Handle an incoming registration request.</h2>

<p>
</p>



<span id="example-requests-POSTregister">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/register" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/register"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTregister">
</span>
<span id="execution-results-POSTregister" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTregister"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTregister" data-method="POST"
      data-path="register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTregister', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTregister"
                    onclick="tryItOut('POSTregister');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTregister"
                    onclick="cancelTryOut('POSTregister');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTregister"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTregister"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTregister"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTregister"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTregister"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTregister"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETlogin">Display the login view.</h2>

<p>
</p>



<span id="example-requests-GETlogin">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/login" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/login"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETlogin">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6IjZNQ1l2a0J0TG52eXYzQ3JqWmcva1E9PSIsInZhbHVlIjoiaWtmR3QrYlFIakJnazk4MmxtT3dXZENKdHQyeThSK3BmZjlIRm9XVmdxbXBzcENkNk1ZcDVBUysrVTlHaG1KS09YK2FweUlMbHY2Y3YraHF0bVJMajkvTnFrTlZyeTlTRXAwSk5mUGozaE5qc0s1L2hoZ0t6bjZrOXBpc1EybTciLCJtYWMiOiI1MzkzOGYyZjc1NTA0Y2I3ODAyMWYzNzBhNmQwMzNmMTYzZTQxMTE4YjljZmRkYTcwNzJhZDBhYmQ2MmRmMjM0IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImRydDZ4SE85YjRoM2s5Nmcyb1ZVN0E9PSIsInZhbHVlIjoib0xmeVd3ZHI2OVI0aHJPTUk4a0lLd3ZaVHhBZmlGMWNsMTNNc3lWTWNrWGJ6RDBqdlF6MTd6M0Q4UjFkVmFwKzQ1NEdmbEdpQjR2RkwzZDFUV0cvRkxSODNtaERuTlcvdFkxaHJvM24wdmpET05IMGp6VzFYWHA4TlQ3d3VhTXkiLCJtYWMiOiJjYjA4MTU2NjI4NGJkMmI1YzFhYjNmODkwMmYyNDE1MGU4Y2M5M2Y2YmQ2YzczZDU5MTcwNjNjOTRmZGYzYTdlIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
        &lt;meta name=&quot;csrf-token&quot; content=&quot;q6QRWHYkfG6jlvcvE42gc9iKA0EjeoNbwvHyd5iN&quot;&gt;

        &lt;title&gt;Laravel&lt;/title&gt;

        &lt;!-- Fonts --&gt;
        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
        &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,500,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

        &lt;!-- Scripts --&gt;
        &lt;link rel=&quot;preload&quot; as=&quot;style&quot; href=&quot;http://localhost:8000/build/assets/app-B9Mw8dQ_.css&quot; /&gt;&lt;link rel=&quot;modulepreload&quot; href=&quot;http://localhost:8000/build/assets/app-DaBYqt0m.js&quot; /&gt;&lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost:8000/build/assets/app-B9Mw8dQ_.css&quot; /&gt;&lt;script type=&quot;module&quot; src=&quot;http://localhost:8000/build/assets/app-DaBYqt0m.js&quot;&gt;&lt;/script&gt;    &lt;/head&gt;
    &lt;body class=&quot;font-sans text-gray-900 antialiased&quot;&gt;
        &lt;div class=&quot;min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100&quot;&gt;
            &lt;div&gt;
                &lt;a href=&quot;/&quot;&gt;
                    &lt;img src=&quot;./img/coffee--bean.png&quot; style=&quot;height: 50px&quot;&gt;
                &lt;/a&gt;
            &lt;/div&gt;

            &lt;div class=&quot;w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg&quot;&gt;
                &lt;!-- Session Status --&gt;
    
    &lt;form method=&quot;POST&quot; action=&quot;http://localhost:8000/login&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;q6QRWHYkfG6jlvcvE42gc9iKA0EjeoNbwvHyd5iN&quot; autocomplete=&quot;off&quot;&gt;
        &lt;!-- Email Address --&gt;
        &lt;div&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;email&quot;&gt;
    Email
&lt;/label&gt;
            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;email&quot; type=&quot;email&quot; name=&quot;email&quot; required=&quot;required&quot; autofocus=&quot;autofocus&quot; autocomplete=&quot;username&quot;&gt;
                    &lt;/div&gt;

        &lt;!-- Password --&gt;
        &lt;div class=&quot;mt-4&quot;&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;password&quot;&gt;
    Password
&lt;/label&gt;

            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;password&quot; type=&quot;password&quot; name=&quot;password&quot; required=&quot;required&quot; autocomplete=&quot;current-password&quot;&gt;

                    &lt;/div&gt;

        &lt;!-- Remember Me --&gt;







        &lt;div class=&quot;flex items-center justify-end mt-4&quot;&gt;






            &lt;button type=&quot;submit&quot; class=&quot;inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ms-3 btn-primary&quot;&gt;
    Log in
&lt;/button&gt;
        &lt;/div&gt;
    &lt;/form&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETlogin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETlogin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETlogin"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlogin">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETlogin" data-method="GET"
      data-path="login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETlogin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETlogin"
                    onclick="tryItOut('GETlogin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETlogin"
                    onclick="cancelTryOut('GETlogin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETlogin"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETlogin"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTlogin">Handle an incoming authentication request.</h2>

<p>
</p>



<span id="example-requests-POSTlogin">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/login" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"|]|{+-\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/login"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "|]|{+-"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTlogin">
</span>
<span id="execution-results-POSTlogin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTlogin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTlogin" data-method="POST"
      data-path="login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTlogin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTlogin"
                    onclick="tryItOut('POSTlogin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTlogin"
                    onclick="cancelTryOut('POSTlogin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTlogin"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTlogin"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTlogin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTlogin"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTlogin"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Example: <code>|]|{+-</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETforgot-password">Display the password reset link request view.</h2>

<p>
</p>



<span id="example-requests-GETforgot-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/forgot-password" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/forgot-password"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETforgot-password">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6IklDc201V01neDJFYngyMDdrV1F3Y2c9PSIsInZhbHVlIjoiRS9xeDFQNTBDUUVZOXFWN0pqaHQ3WVp3Vnl0V2hPWFMra3l0UGFNZis1eTBlL3hua1VyemxYN28rZExNWWRCaEZtVms1U0l4TkFHVStla2F1aElDbjhMYzllR01SVStQL2F0S09mWjFqR1dyYWF2eDB6NFM4bkk0OE94YUdJbUMiLCJtYWMiOiI0YTEzNzEwOGYwMGM3ZmVmMjkxMjEzODRhNzg4NTUzZGUxOGNhYjFjMzAyOGU4MTI1ZmI1ZmFkNzM1OTcxYjAyIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IklGcm91V0UrVVBCQVRlTSs2RGpodVE9PSIsInZhbHVlIjoiTk9WcVRxQTZmWVpybHhkdWd6RVFjVUtMeW9NcmNyaDZDUWsyU0pSNWttRXNyeEJXYjVOMnNZUkZGNkZycmxrQURYVnBRQllSNjFOb1lkOFU1MVJKN2MyY1FTeGh0MUtjWEx3a2c5QlJJMFQ3UzZQQjlCMWZWTjhNUCtLNERHQXUiLCJtYWMiOiIzZWEyYjAxZGYxNzhjZWUyNjM4OGE1NzQ5MWZhOTI1ZDNiZmVkNjM1YTY3NzMzNWNmYjQwYTI5NmRlYWYxZjgxIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
        &lt;meta name=&quot;csrf-token&quot; content=&quot;q6QRWHYkfG6jlvcvE42gc9iKA0EjeoNbwvHyd5iN&quot;&gt;

        &lt;title&gt;Laravel&lt;/title&gt;

        &lt;!-- Fonts --&gt;
        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
        &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,500,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

        &lt;!-- Scripts --&gt;
        &lt;link rel=&quot;preload&quot; as=&quot;style&quot; href=&quot;http://localhost:8000/build/assets/app-B9Mw8dQ_.css&quot; /&gt;&lt;link rel=&quot;modulepreload&quot; href=&quot;http://localhost:8000/build/assets/app-DaBYqt0m.js&quot; /&gt;&lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost:8000/build/assets/app-B9Mw8dQ_.css&quot; /&gt;&lt;script type=&quot;module&quot; src=&quot;http://localhost:8000/build/assets/app-DaBYqt0m.js&quot;&gt;&lt;/script&gt;    &lt;/head&gt;
    &lt;body class=&quot;font-sans text-gray-900 antialiased&quot;&gt;
        &lt;div class=&quot;min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100&quot;&gt;
            &lt;div&gt;
                &lt;a href=&quot;/&quot;&gt;
                    &lt;img src=&quot;./img/coffee--bean.png&quot; style=&quot;height: 50px&quot;&gt;
                &lt;/a&gt;
            &lt;/div&gt;

            &lt;div class=&quot;w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg&quot;&gt;
                &lt;div class=&quot;mb-4 text-sm text-gray-600&quot;&gt;
        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
    &lt;/div&gt;

    &lt;!-- Session Status --&gt;
    
    &lt;form method=&quot;POST&quot; action=&quot;http://localhost:8000/forgot-password&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;q6QRWHYkfG6jlvcvE42gc9iKA0EjeoNbwvHyd5iN&quot; autocomplete=&quot;off&quot;&gt;
        &lt;!-- Email Address --&gt;
        &lt;div&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;email&quot;&gt;
    Email
&lt;/label&gt;
            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;email&quot; type=&quot;email&quot; name=&quot;email&quot; required=&quot;required&quot; autofocus=&quot;autofocus&quot;&gt;
                    &lt;/div&gt;

        &lt;div class=&quot;flex items-center justify-end mt-4&quot;&gt;
            &lt;button type=&quot;submit&quot; class=&quot;inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150&quot;&gt;
    Email Password Reset Link
&lt;/button&gt;
        &lt;/div&gt;
    &lt;/form&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETforgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETforgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETforgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETforgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETforgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETforgot-password" data-method="GET"
      data-path="forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETforgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETforgot-password"
                    onclick="tryItOut('GETforgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETforgot-password"
                    onclick="cancelTryOut('GETforgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETforgot-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>forgot-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETforgot-password"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTforgot-password">Handle an incoming password reset link request.</h2>

<p>
</p>



<span id="example-requests-POSTforgot-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/forgot-password" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/forgot-password"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "email": "gbailey@example.net"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTforgot-password">
</span>
<span id="execution-results-POSTforgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTforgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTforgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTforgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTforgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTforgot-password" data-method="POST"
      data-path="forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTforgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTforgot-password"
                    onclick="tryItOut('POSTforgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTforgot-password"
                    onclick="cancelTryOut('POSTforgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTforgot-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>forgot-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTforgot-password"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTforgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTforgot-password"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETreset-password--token-">Display the password reset view.</h2>

<p>
</p>



<span id="example-requests-GETreset-password--token-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/reset-password/architecto" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/reset-password/architecto"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETreset-password--token-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6IlRhcXdzSDVTT0YxckladWZheFdKL2c9PSIsInZhbHVlIjoicTd3ekNKUTBhc0VpbVQ1WFppZnlmUTJFWEpaclMvVHNxSldXUVFtZmhKS3cwLzZWQTY4MC9ORUZBODNWWjhwRWI1NjdlZGdLRFB6VlpZZnQ1T2NINk1BYnBjdExXRFFidXMySDhIMFg5QzJscXZoUVVEMmx0UWIrU3RPQmRjbnAiLCJtYWMiOiI5Yjg3MmQ3NzY0YWI5MDYwNWVjNTNhM2E4M2YyOTIxNDdmN2U3MzZmNmQ1NGE4NTRmNTFjMDk4NjZiNDlhYjAwIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IklqYWVscmIrekpqUHhkUmoyMEhEbWc9PSIsInZhbHVlIjoiL0MyOFlKaktaOFRsZnRTOXFMdW9lNkk0SXpoQ1YvaTJxQmtrSm1qcE9iODRyT0xQcGVvTUd6YzRrVlRTTStxQUxFV2RMYXhFSU1NSnBtdVAyUGk1VklIbU4wbHNMY0RiV0ozTUgwb2ZyRXk0eVpSbmhGWjV5eGZzR2VZbHNVclAiLCJtYWMiOiJiNGE0YWU4YjczZDI0NWEyMGM5ODNiZDk1ZjljOGU5ZDk5Zjk4MmEwYzMzYjZiZjc4MzE2NTY2YWY1MTE5ZTk5IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
        &lt;meta name=&quot;csrf-token&quot; content=&quot;q6QRWHYkfG6jlvcvE42gc9iKA0EjeoNbwvHyd5iN&quot;&gt;

        &lt;title&gt;Laravel&lt;/title&gt;

        &lt;!-- Fonts --&gt;
        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
        &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,500,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

        &lt;!-- Scripts --&gt;
        &lt;link rel=&quot;preload&quot; as=&quot;style&quot; href=&quot;http://localhost:8000/build/assets/app-B9Mw8dQ_.css&quot; /&gt;&lt;link rel=&quot;modulepreload&quot; href=&quot;http://localhost:8000/build/assets/app-DaBYqt0m.js&quot; /&gt;&lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost:8000/build/assets/app-B9Mw8dQ_.css&quot; /&gt;&lt;script type=&quot;module&quot; src=&quot;http://localhost:8000/build/assets/app-DaBYqt0m.js&quot;&gt;&lt;/script&gt;    &lt;/head&gt;
    &lt;body class=&quot;font-sans text-gray-900 antialiased&quot;&gt;
        &lt;div class=&quot;min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100&quot;&gt;
            &lt;div&gt;
                &lt;a href=&quot;/&quot;&gt;
                    &lt;img src=&quot;./img/coffee--bean.png&quot; style=&quot;height: 50px&quot;&gt;
                &lt;/a&gt;
            &lt;/div&gt;

            &lt;div class=&quot;w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg&quot;&gt;
                &lt;form method=&quot;POST&quot; action=&quot;http://localhost:8000/reset-password&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;q6QRWHYkfG6jlvcvE42gc9iKA0EjeoNbwvHyd5iN&quot; autocomplete=&quot;off&quot;&gt;
        &lt;!-- Password Reset Token --&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;token&quot; value=&quot;architecto&quot;&gt;

        &lt;!-- Email Address --&gt;
        &lt;div&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;email&quot;&gt;
    Email
&lt;/label&gt;
            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;email&quot; type=&quot;email&quot; name=&quot;email&quot; required=&quot;required&quot; autofocus=&quot;autofocus&quot; autocomplete=&quot;username&quot;&gt;
                    &lt;/div&gt;

        &lt;!-- Password --&gt;
        &lt;div class=&quot;mt-4&quot;&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;password&quot;&gt;
    Password
&lt;/label&gt;
            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;password&quot; type=&quot;password&quot; name=&quot;password&quot; required=&quot;required&quot; autocomplete=&quot;new-password&quot;&gt;
                    &lt;/div&gt;

        &lt;!-- Confirm Password --&gt;
        &lt;div class=&quot;mt-4&quot;&gt;
            &lt;label class=&quot;block font-medium text-sm text-gray-700&quot; for=&quot;password_confirmation&quot;&gt;
    Confirm Password
&lt;/label&gt;

            &lt;input  class=&quot;border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full&quot; id=&quot;password_confirmation&quot; type=&quot;password&quot; name=&quot;password_confirmation&quot; required=&quot;required&quot; autocomplete=&quot;new-password&quot;&gt;

                    &lt;/div&gt;

        &lt;div class=&quot;flex items-center justify-end mt-4&quot;&gt;
            &lt;button type=&quot;submit&quot; class=&quot;inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150&quot;&gt;
    Reset Password
&lt;/button&gt;
        &lt;/div&gt;
    &lt;/form&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETreset-password--token-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETreset-password--token-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETreset-password--token-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETreset-password--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETreset-password--token-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETreset-password--token-" data-method="GET"
      data-path="reset-password/{token}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETreset-password--token-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETreset-password--token-"
                    onclick="tryItOut('GETreset-password--token-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETreset-password--token-"
                    onclick="cancelTryOut('GETreset-password--token-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETreset-password--token-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>reset-password/{token}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETreset-password--token-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="token"                data-endpoint="GETreset-password--token-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTreset-password">Handle an incoming new password request.</h2>

<p>
</p>



<span id="example-requests-POSTreset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/reset-password" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"token\": \"architecto\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/reset-password"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "token": "architecto",
    "email": "zbailey@example.net",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTreset-password">
</span>
<span id="execution-results-POSTreset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTreset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTreset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTreset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTreset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTreset-password" data-method="POST"
      data-path="reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTreset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTreset-password"
                    onclick="tryItOut('POSTreset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTreset-password"
                    onclick="cancelTryOut('POSTreset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTreset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTreset-password"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTreset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="token"                data-endpoint="POSTreset-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTreset-password"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTreset-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETverify-email">Display the email verification prompt.</h2>

<p>
</p>



<span id="example-requests-GETverify-email">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/verify-email" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/verify-email"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETverify-email">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6IjVKalNpcy9aNjRaZVdRK25NN3AyQVE9PSIsInZhbHVlIjoiYUpTK0hybUV3WXl2VE5WbXh6KzhiM1lFYXBhK29jUjFDZ2dnVjhDSVB5d2VPZ0lOT2YrZXpTcGw5bnZKT2VvZlNUcUs2K0lDcDJ2dUtCUVRjREgxWWkzYjBhVzh2a0tLUTN1NzArUm1yQ1dzbUVJWmtlNGFKRUJ2SWdKZDVhbjUiLCJtYWMiOiIxYjA5ODY1OGQyNmU5MDJhODQzNzMzZjQwYTJkMTliZjU5NTZmNTRhY2VlZWY4ZTdjNzdhMWVjMTVlMjE2NGM4IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InZIeXAzdGIxTmZ5RnRmdFRHRDYyWWc9PSIsInZhbHVlIjoiSHJ6QW1RYUJuUXozS0cxdDUrdWcyQThvZ3VHLzlEWjRVVlRvNU9NbHlFS08yV05xYy9OK1UwV2gvU0NKNlVUejdNT0czTUtSYkhqcDk5ZWhaaWdsYldsaTZWMnUvZXAxUTRlNmUrNUdqaG1ncWJTZFQ0NExFdDRvVnpacjhma0wiLCJtYWMiOiIwOTg0ZjU3MDE4MGM0OTVkNzQwYjNlMTI4OTk5ZWY0NWQ4ZDE1NDk3NjY5Y2U0NTk5YjY5M2EzNzg3N2IwZDBiIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETverify-email" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETverify-email"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETverify-email"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETverify-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETverify-email">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETverify-email" data-method="GET"
      data-path="verify-email"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETverify-email', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETverify-email"
                    onclick="tryItOut('GETverify-email');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETverify-email"
                    onclick="cancelTryOut('GETverify-email');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETverify-email"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>verify-email</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETverify-email"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETverify-email--id---hash-">Mark the authenticated user&#039;s email address as verified.</h2>

<p>
</p>



<span id="example-requests-GETverify-email--id---hash-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/verify-email/architecto/architecto" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/verify-email/architecto/architecto"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETverify-email--id---hash-">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6ImZ6aEhBYXdscjd0d05QaFhkRk5aNmc9PSIsInZhbHVlIjoiWm9YUklpbWYxbmRja0lRRWZDNDQ3SDZIRVlSUExIRFBHZ3BobTFGRENzMnBYSkRodm9oZmh1VUpITk1URW5UWFVwTW5meUg3WDVMVkFIajlMcXhROUpUZVZueUZRUUNSU3JubGxIc0JFOGtMSkRSbUJoUTBzc2NGVExlVDhxSk8iLCJtYWMiOiJlNDI3ZWNkOTJhNTZhYmYyOTIyZTBjYmFmN2FmYmNjZTNlNTFmZDdlMGJhYzMyZDEyNWZlZjk2OTMwZDAyNzQxIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InVZWk12YmFLWUtBaEZHZGlENnpCb2c9PSIsInZhbHVlIjoiZlgrUDJTQ0tBTmhDM1ZJLysrM1hiZDhjWlUxQW5BZFVSL1NtUGp1N0ZxM2owOE9XZ2I2Zm9MYmZ0Z0lOQ29CZjZiZGFSU2s2ajZDVkRWNnppV3dSMGpXV1JRZ2dSQnBuRENVck0wbTM5a1duc2FSR1NDZjhtcmtKdS9PWHpuS1QiLCJtYWMiOiJmZmExYmYwMTZiZTFmYjhjZWViM2UxNzFkNTRmNWY1YmM2YmIyNDNhMWM4ZjEwYjM5NDg5YzA2ZGM1MWRjNzVjIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETverify-email--id---hash-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETverify-email--id---hash-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETverify-email--id---hash-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETverify-email--id---hash-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETverify-email--id---hash-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETverify-email--id---hash-" data-method="GET"
      data-path="verify-email/{id}/{hash}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETverify-email--id---hash-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETverify-email--id---hash-"
                    onclick="tryItOut('GETverify-email--id---hash-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETverify-email--id---hash-"
                    onclick="cancelTryOut('GETverify-email--id---hash-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETverify-email--id---hash-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>verify-email/{id}/{hash}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETverify-email--id---hash-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETverify-email--id---hash-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the verify email. Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>hash</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="hash"                data-endpoint="GETverify-email--id---hash-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTemail-verification-notification">Send a new email verification notification.</h2>

<p>
</p>



<span id="example-requests-POSTemail-verification-notification">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/email/verification-notification" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/email/verification-notification"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTemail-verification-notification">
</span>
<span id="execution-results-POSTemail-verification-notification" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTemail-verification-notification"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTemail-verification-notification"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTemail-verification-notification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTemail-verification-notification">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTemail-verification-notification" data-method="POST"
      data-path="email/verification-notification"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTemail-verification-notification', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTemail-verification-notification"
                    onclick="tryItOut('POSTemail-verification-notification');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTemail-verification-notification"
                    onclick="cancelTryOut('POSTemail-verification-notification');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTemail-verification-notification"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>email/verification-notification</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTemail-verification-notification"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETconfirm-password">Show the confirm password view.</h2>

<p>
</p>



<span id="example-requests-GETconfirm-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/confirm-password" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/confirm-password"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETconfirm-password">
            <blockquote>
            <p>Example response (302):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
location: http://localhost:8000/login
content-type: text/html; charset=utf-8
set-cookie: XSRF-TOKEN=eyJpdiI6IjVaVGx0ZjJ1NldQcWszRzRFeDV1Ymc9PSIsInZhbHVlIjoiaGRlclBDSUdYNHJjZWpFblo2bDJWcENrMHViSUo4TWgyQmpHT0VLYmpxVS9kdkJKTFRPNjUyQWw0aXpaUUJtM0twZEZ4NTdpVnV4V0lGS09UdmdHL0xva1RCYnV4ODFGQTJXNXdKbFoyOWNMbVo4MHVBem9Zdkt5MkUvYkU1Wk4iLCJtYWMiOiI1NTYyMjg3YzExNTZmMmFmMjYyNGZhM2UzY2Y2NGYwYzk5NjJmMDZkZjBkNWRmZTFmZmU3MDIwMGM2YzFiMzU4IiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InlvSmxneWZVWExUbm9Mb1hDNzF3dXc9PSIsInZhbHVlIjoiK0I1bUNzOUNOMmYvZ05XVzE5MDJNNUl6WStZb0R0QjQxYXU2dFVDdUxWTnF1N1NUOStZMjJjaVNjTVZaRGV5dWRTZ1JJUy9WWWZETm9RWUpsQ2l3L2NCcTFVRElidEdHdGxlbG5qdmVoSTVKNW9NVFVjTFBtQkd1WDZrN3hSek0iLCJtYWMiOiI5Y2NiZmJkMzQ5ZDNmNjNhN2I0MTUyZDMwNDYwNmUyMTVmMjY0ZWRkNzFiOTg3MzllNzk0ZDYwZjM3MGVjYjNiIiwidGFnIjoiIn0%3D; expires=Wed, 11 Mar 2026 19:52:24 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot; /&gt;
        &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0;url=&#039;http://localhost:8000/login&#039;&quot; /&gt;

        &lt;title&gt;Redirecting to http://localhost:8000/login&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href=&quot;http://localhost:8000/login&quot;&gt;http://localhost:8000/login&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETconfirm-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETconfirm-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETconfirm-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETconfirm-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETconfirm-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETconfirm-password" data-method="GET"
      data-path="confirm-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETconfirm-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETconfirm-password"
                    onclick="tryItOut('GETconfirm-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETconfirm-password"
                    onclick="cancelTryOut('GETconfirm-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETconfirm-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>confirm-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETconfirm-password"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTconfirm-password">Confirm the user&#039;s password.</h2>

<p>
</p>



<span id="example-requests-POSTconfirm-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/confirm-password" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/confirm-password"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTconfirm-password">
</span>
<span id="execution-results-POSTconfirm-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTconfirm-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTconfirm-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTconfirm-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTconfirm-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTconfirm-password" data-method="POST"
      data-path="confirm-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTconfirm-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTconfirm-password"
                    onclick="tryItOut('POSTconfirm-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTconfirm-password"
                    onclick="cancelTryOut('POSTconfirm-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTconfirm-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>confirm-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTconfirm-password"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTpassword">Update the user&#039;s password.</h2>

<p>
</p>



<span id="example-requests-PUTpassword">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/password" \
    --header "Accept: text/html,application/xhtml+xml" \
    --header "Content-Type: application/json" \
    --data "{
    \"current_password\": \"architecto\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/password"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
    "Content-Type": "application/json",
};

let body = {
    "current_password": "architecto",
    "password": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTpassword">
</span>
<span id="execution-results-PUTpassword" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTpassword"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTpassword"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTpassword" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTpassword">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTpassword" data-method="PUT"
      data-path="password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTpassword', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTpassword"
                    onclick="tryItOut('PUTpassword');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTpassword"
                    onclick="cancelTryOut('PUTpassword');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTpassword"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTpassword"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTpassword"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>current_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="current_password"                data-endpoint="PUTpassword"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="PUTpassword"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTlogout">Destroy an authenticated session.</h2>

<p>
</p>



<span id="example-requests-POSTlogout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/logout" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/logout"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTlogout">
</span>
<span id="execution-results-POSTlogout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTlogout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTlogout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTlogout" data-method="POST"
      data-path="logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTlogout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTlogout"
                    onclick="tryItOut('POSTlogout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTlogout"
                    onclick="cancelTryOut('POSTlogout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTlogout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTlogout"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETstorage--path-">GET storage/{path}</h2>

<p>
</p>



<span id="example-requests-GETstorage--path-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/storage/|{+-0p" \
    --header "Accept: text/html,application/xhtml+xml"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/storage/|{+-0p"
);

const headers = {
    "Accept": "text/html,application/xhtml+xml",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETstorage--path-">
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: text/html; charset=UTF-8
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;title&gt;Forbidden&lt;/title&gt;

        &lt;style&gt;
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}code{font-family:monospace,monospace;font-size:1em}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}code{font-family:Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-gray-400{--border-opacity:1;border-color:#cbd5e0;border-color:rgba(203,213,224,var(--border-opacity))}.border-t{border-top-width:1px}.border-r{border-right-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-xl{max-width:36rem}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.uppercase{text-transform:uppercase}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.tracking-wider{letter-spacing:.05em}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@-webkit-keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@-webkit-keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@-webkit-keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@-webkit-keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        &lt;/style&gt;

        &lt;style&gt;
            body {
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body class=&quot;antialiased&quot;&gt;
        &lt;div class=&quot;relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0&quot;&gt;
            &lt;div class=&quot;max-w-xl mx-auto sm:px-6 lg:px-8&quot;&gt;
                &lt;div class=&quot;flex items-center pt-8 sm:justify-start sm:pt-0&quot;&gt;
                    &lt;div class=&quot;px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider&quot;&gt;
                        403                    &lt;/div&gt;

                    &lt;div class=&quot;ml-4 text-lg text-gray-500 uppercase tracking-wider&quot;&gt;
                        Forbidden                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETstorage--path-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETstorage--path-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETstorage--path-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETstorage--path-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETstorage--path-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETstorage--path-" data-method="GET"
      data-path="storage/{path}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETstorage--path-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETstorage--path-"
                    onclick="tryItOut('GETstorage--path-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETstorage--path-"
                    onclick="cancelTryOut('GETstorage--path-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETstorage--path-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>storage/{path}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETstorage--path-"
               value="text/html,application/xhtml+xml"
               data-component="header">
    <br>
<p>Example: <code>text/html,application/xhtml+xml</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>path</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="path"                data-endpoint="GETstorage--path-"
               value="|{+-0p"
               data-component="url">
    <br>
<p>Example: <code>|{+-0p</code></p>
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
