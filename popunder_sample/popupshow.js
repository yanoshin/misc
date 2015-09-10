window.aTwoPopunder = [
    ['http://api.tats.jp', {window: {height: 768, width: 1024}, blocktime: 1}]
];

var fHandler = function (e) {
    var val = popupGetCookie();
    if (!val) {
        popupSetCookie("1", 1);
        $.popunder(window.aTwoPopunder);
    }
};

var val = popupGetCookie();

if (!val) {
    $(document).click(fHandler);
}

