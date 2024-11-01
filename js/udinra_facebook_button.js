(function () {
    'use strict';

    tinymce.PluginManager.add('Udinra_Facebook_subscribe', function (editor, url) {
        editor.addButton('Udinra_Facebook_subscribe', {
            title: 'Udinra Facebook Button',
            image: url + '/../image/facecon.png',

            onclick: function () {
                editor.windowManager.open({
                    title: 'Udinra Facebook Like Configuration',
                    body: [
                        {
                            type: 'listbox',
                            name: 'button',
                            label: 'Button Text',
                            values: [
                                {text: 'Like', value: 'like'},
                                {text: 'Recommend', value: 'recommend'}
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'size',
                            label: 'Size',
                            values: [
                                {text: 'Large', value: 'large'},
                                {text: 'Small', value: 'small'}
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'color',
                            label: 'Color Scheme',
                            values: [
                                {text: 'Light', value: 'light'},
                                {text: 'Dark', value: 'dark'}
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'layout',
                            label: 'Layout',
                            values: [
								{text: 'Standard', value: 'standard'},
								{text: 'Button', value: 'button'},
								{text: 'Button Count', value: 'button_count'},								
                                {text: 'Box Count', value: 'box_count'}
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'faces',
                            label: 'Show Faces',
                            values: [
								{text: 'Show', value: 'true'},
                                {text: 'Hide', value: 'false'}
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'style',
                            label: 'Style',
                            values: [
                                {text: 'Aqua', value: 'UdinraFacebookAqua'},
								{text: 'Teal', value: 'UdinraFacebookTeal'},
								{text: 'Chocolate', value: 'UdinraFacebookChocolate'},
								{text: 'Coral', value: 'UdinraFacebookCoral'},
								{text: 'Golden', value: 'UdinraFacebookGolden'},
								{text: 'Pink', value: 'UdinraFacebookPink'},
								{text: 'Green 1', value: 'UdinraFacebookLightGreen'},
								{text: 'Green 2', value: 'UdinraFacebookSeaGreen'},
								{text: 'Grey', value: 'UdinraFacebookGrey'},
								{text: 'Tan', value: 'UdinraFacebookTan'},
								{text: 'White', value: 'UdinraFacebookWhite'},
								{text: 'None', value: 'UdinraFacebookNone'}																
                            ]
                        },				
						{
                            type: 'textbox',
							size: 40,
                            name: 'like',
                            label: 'Like URL',
                        },					
						{
                            type: 'textbox',
							size: 40,
                            name: 'header',
                            label: 'Header Text',
                        },								
						{
                            type: 'textbox',
							size: 40,
                            name: 'body',
                            label: 'Body Text',
                        }
                    ],
                    onsubmit: function (e) {
                        editor.insertContent('[Udinra_Facebook button=' + e.data.button +
                        ' size=' + e.data.size + ' color=' + e.data.color + ' style=' + e.data.style +  
						'" header="' + e.data.header + '" body="' + e.data.body + '" layout="' + e.data.layout + '" faces="' + e.data.faces +
						'" like="' + e.data.like + '"]' );
                    }
                });
            }
        });
    });
})();


