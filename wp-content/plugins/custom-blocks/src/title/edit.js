import { InspectorControls, useBlockProps } from '@wordpress/block-editor'
import { PanelBody, TextControl } from '@wordpress/components'
import './editor.scss'

export default function Edit({ attributes, setAttributes }) {
  const { title, subtitle } = attributes;

  return (
    <>
      <InspectorControls>
        <PanelBody title="Title 1">
          <TextControl label="Title" value={title} onChange={(value) => setAttributes({ title: value })}/>
          <TextControl label="Subtitle" value={subtitle} onChange={(value) => setAttributes({ subtitle: value })}/>
        </PanelBody>
      </InspectorControls>
      <div {...useBlockProps()}>
        {title}
        {subtitle && <p>{subtitle}</p>}
      </div>
    </>
  );
}
