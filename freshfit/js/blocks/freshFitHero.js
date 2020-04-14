( function( blocks, element ) {
    var el = element.createElement;
    // var RichText = editor.RichText;

 
    blocks.registerBlockType( 'fresh-fit/hero', {
        title: 'Hero Block',
        icon: 'desktop',
        category: 'fresh-fit',
        example: {},
        attributes: {
            content: {
                type: 'array',
                source: 'children',
                selector: 'p',
            },
        },
        edit: function() {
            return el(
                        'div',
                        {className: "ff-hero-block"},
                        el (
                            'div',
                            {className: "ff-hero-layer-circle"},
                            el (
                                'p',
                                {},
                                'Work Damn You'
                            )
                        ))
					
        },
        save: function() {
            return el(
                        'div',
                        {className: "ff-hero-block"},
                        el (
                            'div',
                            {className: "ff-hero-layer-circle"},
                            el (
                                'p',
                                {},
                                'Work Damn You'
                            )
                        ))
					
        },
    } );
}(
    window.wp.blocks,
    window.wp.element
) );