(function() {
    tinymce.PluginManager.add('ex_first_button', function( editor, url ) {
        editor.addButton( 'ex_first_button', {
            text: 'Вставить карту',
            title: 'Втсавить карту с маркером на расположение Bionic University',
            icon: false,
            // icon: 'dashicons dashicons-location-alt',
            onclick: function() {
                editor.insertContent('[map]');
            }
        });
    });
})();