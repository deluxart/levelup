(function() {
	// Register buttons
	tinymce.create('tinymce.plugins.MyButtons', {
		init: function( editor, url ) {
			// Add button that inserts shortcode into the current position of the editor
			editor.addButton( 'my_button', {
				title: 'Вставить спойлер',
				icon: false,
				onclick: function() {
					// Open a TinyMCE modal
					editor.windowManager.open({
						title: 'Вставить спойлер',
						body: [{
							type: 'textbox',
							name: 'title',
							label: 'Введите заголовок'
                        },{
							type: 'textbox',
							name: 'content',
							label: 'Текст'
						}],
						onsubmit: function( e ) {
							editor.insertContent( '[spoiler title="' + e.data.title + '"]' + e.data.content + '[/spoiler]' );
						}
					});
				}
			});
		},
		createControl: function( n, cm ) {
			return null;
		}
	});
	// Add buttons
	tinymce.PluginManager.add( 'my_button_script', tinymce.plugins.MyButtons );
})();
