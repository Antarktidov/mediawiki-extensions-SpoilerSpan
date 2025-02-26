mw.loader.using('mediawiki.util').then(function () {
    $(function () {
        var spoilerSpans = document.querySelectorAll('.spoiler-span');

        for (let i = 0; i < spoilerSpans.length; i++) {
            spoilerSpans[i].onclick = function() {
                spoilerSpans[i].classList.remove('spoiler-span');
            }
        }
    })
});