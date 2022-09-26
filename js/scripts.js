$(".sm-btn").click(function () {
    $('#popups').toggleClass("hide");
});
function closePopupShadow() {
    $('#popups').toggleClass("hide");
    $('.popup, .shadow').toggleClass("hide");
};

function startGame() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('difficult.html');
}
function play() {
    $('.popup, .shadow').toggleClass("hide");
    window.location.href = "game-words.html";
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
}
function loading() {
    $('.send').toggleClass("hide");
    $('.loading').toggleClass("hide");
}

function loadRules() {
    $('.popup').removeClass("overflow-v");
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('rules.html');
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
}

function wellcome() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup').toggleClass("overflow-v");
    $('.popup-content').load("wellcome.html");
}
function closeWellcome() {
    $('.popup, .shadow').toggleClass("hide");
}

function letter1() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('letter1.html');
}

function letter2() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('letter2.html');
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
}


function couponOpen() {
    $('.popup, .shadow').toggleClass("hide");
    $('.popup-content').load('couponDescription.html');
}
