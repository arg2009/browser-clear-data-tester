<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />

        <style>
            .vertical-center {
                min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
                min-height: 100vh; /* These two lines are counted as one :-)       */

                display: flex;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid vertical-center">
            <div class="row container-fluid">
                <div class="row container-fluid">
                    <div class="row container-fluid">
                        <div class="col-md-12">
                            <h1 class="text-center">Browser Data Checker</h1>
                        </div>
                    </div>
                    <div class="row container-fluid">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="text-left">
                                <h4>Cookies</h4>
                            </div>
                            @if(empty($browserId))
                                <div class="text-left">
                                    <p>Your browser did not identify you.</p>
                                    <p>We have set the following ID on your browser: {{ $newBrowserId }}</p>
                                </div>
                            @else
                                <div class="text-left">
                                    <p>Your browser has identified you with the ID: {{ $browserId }}</p>
                                    <p>Clear your browser data then refresh this page.</p>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div id="local-storage" class="row container-fluid invisible">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="text-left">
                                <h4>Local Storage</h4>
                            </div>
                            <div class="msgbox" class="text-left"></div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div id="session-storage" class="row container-fluid invisible">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="text-left">
                                <h4>Session Storage</h4>
                            </div>
                            <div class="msgbox" class="text-left"></div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div id="indexeddb" class="row container-fluid invisible">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="text-left">
                                <h4>IndexedDB</h4>
                            </div>
                            <div class="msgbox" class="text-left"></div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
