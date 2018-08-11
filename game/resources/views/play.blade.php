@extends('layout')

@section('content')
    <script src="https://deck-of-cards.js.org/dist/deck.min.js"></script>
    <link rel="stylesheet" href="https://deck-of-cards.js.org/example.css">
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#set-options">Add a Widget</button>
        <button type="button" class="btn btn-success" onclick="deal()">Deal</button>
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
                        <button type="submit" class="btn btn-success" id="setOption" name="set-options" data-dismiss="modal">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="container"></div>
    </div>
    <script>

        var $container = document.getElementById('container')
        var numberCards = 6;
        var numberPlayers = 4;
        var cardsPlayed = [];
        var playerHand = [];
        var cardsInDeck = [];
        var playersTurn = 0;
        var cardsOnBoard = [];
        var clearedCards = [];
        var passingEnabled = true;
        var playerPlayedCards = [];

        // Instantiate a deck
        var deck = Deck();
        /*var card*/
        // display it in a html container
        var $container = document.getElementById('container');
        deck.mount($container);

        function deal(){
            // Shuffle
            deck.shuffle();

            var $numPlayers = document.getElementById('players');
            var $handSize = document.getElementById('cardsInHand');

            var card = deck.cards[0];
            var xPOS = card.x;

            for (var i = 0; i < 7; i++) {
                xPOS += 30;
                card = deck.cards[i];
                card.enableFlipping();
                card.animateTo({
                    delay: 1000,
                    duration: 500,
                    ease: 'quartOut',
                    x: -90 + xPOS,
                    y: 200
                });
            }
            xPOS = 0;
            for (var i = 7; i < 14; i++) {
                xPOS += 30;
                card = deck.cards[i];
                card.enableFlipping();
                card.animateTo({
                    delay: 1000,
                    duration: 500,
                    ease: 'quartOut',
                    x: -90 +xPOS,
                    y: -200
                });
            }
            xPOS=0;
            for (var i = 14; i < 21; i++) {
                xPOS += 20;
                card = deck.cards[i];
                card.enableFlipping();
                card.animateTo({
                    delay: 1000,
                    duration: 500,
                    ease: 'quartOut',
                    x: -400 + xPOS,
                    y: 0
                });
            }
            xPOS=0;
            for (var i = 21; i < 28; i++) {
                xPOS += 20;
                card = deck.cards[i];
                card.enableFlipping();
                card.animateTo({
                    delay: 1000,
                    duration: 500,
                    ease: 'quartOut',
                    x: 260 + xPOS,
                    y: 0
                });
            }

        }

        /*function attack(){
        	if(isPlayersTurn()){

        	}

        }

        function defend(){
        	if(isPlayersTurn()){

        	}

        }

        function forfeitTurn{
        	if(isPlayersTurn()){

        	}

        }

        function pass(){
        	if(isPlayersTurn()){

        	}
        }

        function goNextPlayer(){
        	if(playersTurn < numberPlayers){
        		playersTurn ++;
        	}
        	else{
        		playersTurn = 0;
        	}
        }

        function isPlayersTurn(){
        	if(playersTurn === 0){
        		return true;
        	}
        	return false;
        }

        function playCards(){
        	playerPlayedCards.push
        }

        function main(){

        }
        main();*/
    </script>
@stop
