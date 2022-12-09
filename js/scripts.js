$(".sm-btn").click(function () {
    $('#popups').toggleClass("hide");
});
function closePopupShadow() {
    $('#popups').toggleClass("hide");
    $('.popup, .shadow').toggleClass("hide");
    $('.shadow').toggleClass("blur");

}
function startGame() {
    $('.popup').removeClass("overflow-v");
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('difficult.html');
    $('.shadow').addClass("blur");
}
function play() {
    $('.popup, .shadow').toggleClass("hide");
    window.location.href = "game-words.php";
}
function agree() {
    $('#loadContent').load('agree.html');
}
function loginscreen() {
    $('#background').load('default.html');
}
function loadWin() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup').load('win.html');
}
function loadLose() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup').load('lose.html');
}
function closeBtn() {
    $('.popup, .shadow').toggleClass("hide");
    $('.shadow').toggleClass("blur");
}
function loading() {
    $('.send').toggleClass("hide");
    $('.loading').toggleClass("hide");
}

function loadRules() {
    $('.popup').removeClass("overflow-v");
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('rules.html');
    $('.shadow').toggleClass("blur");
}
function nextRules() {
    $('.popup').toggleClass("overflow-v");
    $('.popup-content').load('rules2.html');
    $('.close').addClass('hide');
}
function nextBonus() {
    $('.popup-content').load('bonus.html');
}
function loadPuzzle() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('puzzle.html');
    $('.shadow').toggleClass("blur");
}

function wellcome() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup').toggleClass("overflow-v");
    $('.popup-content').load("wellcome.html");
    $('.shadow').toggleClass("blur");
}
function closeWellcome() {
    $('.popup, .shadow').toggleClass("hide");
}

function letter1() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load("letter1.html");
    $('.shadow').addClass("blur");
}

function letter2() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('letter2.html');
    $('.shadow').addClass("blur");
}

function letter3() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('letter3.html');
    $('.shadow').addClass("blur");
}
function goToURL() {
    window.location.href = "index.html";
}

function buyLink() {
    $('.popup, .shadow').addClass("hide");
    window.location.href = "store.html";
}
function buyLink() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('buy.html');
    $('.shadow').toggleClass("blur");
}


function couponOpen() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('couponDescription.html');
}



