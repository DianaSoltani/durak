@extends('layout')

@section('content')
    <script src="https://deck-of-cards.js.org/dist/deck.min.js"></script>
    <link rel="stylesheet" href="https://deck-of-cards.js.org/example.css">
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

        // display it in a html container
        var $container = document.getElementById('container');
        deck.mount($container);

        function deal(){

        }

        function attack(){
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
        main();
    </script>
@stop
