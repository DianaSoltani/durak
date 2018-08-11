@extends('layout')

@section('content')
    <script src="https://deck-of-cards.js.org/dist/deck.min.js"></script>
    <link rel="stylesheet" href="https://deck-of-cards.js.org/example.css">
    <div class="container">
        <div id="container"></div>
    </div>
    <script>
        var $container = document.getElementById('container')

        // Instantiate a deck
        var deck = Deck();

        // display it in a html container
        var $container = document.getElementById('container');
        deck.mount($container);
    </script>
@stop
