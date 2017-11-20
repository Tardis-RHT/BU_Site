(function() {
    tinymce.PluginManager.add('ex_first_button', function( editor, url ) {
        editor.addButton( 'ex_first_button', {
            text: 'Вставить карту',
            icon: true,
            title: '\f231',
            onclick: function() {
                editor.insertContent('[map]');
            }
        });
    });
})();