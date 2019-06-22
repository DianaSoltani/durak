// JavaScript source code

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
var handDistanceFromDeck = 250;

// Instantiate a deck
var deck = Deck();
// display it in a html container
var $container = document.getElementById('container');
deck.mount($container);

function dealOneHand(xStart, yStart, spacing) {
    console.log("one hand dealt");
    console.log("num player is " + numberPlayers);
    console.log("xstart is " + xStart);
    console.log("ystart is " + yStart);
    xStart = xStart - ((spacing * numberCards / 2));
    for (var i = 0; i < numberCards; i++) {
        card = deck.cards[i];
        card.enableFlipping();
        card.animateTo({
            delay: 50,
            duration: 100,
            ease: 'quartOut',
            x: xStart,
            y: yStart
        });
        xStart = xStart + spacing;
    }
}

function deal() {
    // Shuffle
    deck.shuffle();

    /*if (document.getElementById("cardsInHand") != null) {
        numberCards = Number(document.getElementById("cardsInHand"));
    }*/

    //numberPlayers = document.getElementById('players');
    //numberCards = document.getElementById('cardsInHand');

    //var numPlayers = document.getElementById('players');
    //var handSize = document.getElementById('cardsInHand');

    //var card = deck.cards[0];
    //var xPosPlus = 35;
    //console.log("xposplus is " + xPosPlus);
    console.log("number cards type is " + typeof(numberCards));
    console.log("num cards is " + Number(numberCards));
    //console.log("cos of pi/2 is " + Math.cos(Math.PI / 2));
    for (var i = 1; i <= numberPlayers; i++) {
        console.log("num players is " + numberPlayers);
        /*for (var j = 0; j < numberCards; j++) {
            card = deck.cards[j];
            card.enableFlipping();
            card.animateTo({
                delay: 1000,
                duration: 500,
                ease: 'quartOut',
                x: xCur + xPosPlus,
                y: 200
            });
            xCur = xCur + xPosPlus;
            console.log("xcur is " + xCur);
        }
        console.log("card x is " + card.x);*/
        console.log("i is " + i);
        console.log("x is " + (Math.cos(2 * Math.PI / i) * handDistanceFromDeck));
        console.log("y is " + (Math.sin(2 * Math.PI / i) * handDistanceFromDeck));
        dealOneHand((Math.cos(2 * Math.PI / i) * handDistanceFromDeck), (Math.sin(2 * Math.PI / i) * handDistanceFromDeck), 35);
    }
}
    /*for (var i = 7; i < 14; i++) {
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
    }*/

//}

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
