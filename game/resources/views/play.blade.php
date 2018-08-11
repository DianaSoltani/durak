@extends('layout')

@section('content')
    <script src="https://deck-of-cards.js.org/dist/deck.min.js"></script>
    <link rel="stylesheet" href="https://deck-of-cards.js.org/example.css">
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#set-options">Add a Widget</button>
    </div>
    <div class="container">
        <div class="modal fade" id="set-options" tabindex="-1" role="dialog" aria-labelledby="set-options-label">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">Close</span> </button>
                        <h4 class="modal-title" id="add-widget-label">Start Game</h4>
                    </div>
                    <div class="modal-body">
                        <h4> Please change game options: </h4>
                        <label for="players"> Enter the number of players: </label>
                        <select name="players" id="players">
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <label for="cardsInHand"> Enter the number of cards the player must hold before the deck is empty: </label>
                        <select name="cardsInHand" id="cardsInHand">
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        <label for="pass">Enable Passing: </label>
                        <input type="checkbox">

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="setOption" name="set-options">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="container"></div>
    </div>
    <script>
        // Instantiate a deck
        var deck = Deck();

        // display it in a html container
        var $container = document.getElementById('container');
        deck.mount($container);
    </script>
@stop
