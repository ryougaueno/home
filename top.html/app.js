
$(function() {
    var $allMsg = $('.wrapper-head');
    var $wordList = $('.wrapper-head').text().split("");
     $('.wrapper-head').html("");
    $.each($wordList, function(idx, elem) {
		var newEL = $("<span/>").text(elem).css({ opacity: 0 });
        newEL.appendTo($allMsg);
        newEL.delay(idx * 50);
        newEL.animate({ opacity: 1 }, 5000);
    });
});