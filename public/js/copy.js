(function () {
    'use strict';

    $('.alert-show').hide();

    function copytable(el) {
        const urlField = document.getElementById(el);
        const range = document.createRange();

        range.selectNode(urlField)
        window.getSelection().addRange(range)
        document.execCommand('copy');
    }

    $(document).on('click', '#excel_csv', function (e) {
        copytable('ownerId');

        $('.alert-show').show().html('Table data copy to clipboard')
    });
})();