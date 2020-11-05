const {registerBlockType} = wp.blocks;

registerBlockType('custom-block-base/test-block', {
    title: 'Basic Example',
    icon: 'smiley',
    category: 'layout',
    edit: ({className}) => <div className={className}>Hello World!</div>,
    save: () => <div>Hello World!</div>,
});