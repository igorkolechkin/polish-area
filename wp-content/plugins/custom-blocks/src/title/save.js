import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {
  const { title, subtitle } = attributes

  return (
    <div {...useBlockProps.save()}>
      <h2>{title}</h2>
      {subtitle && <p>{subtitle}</p>}
    </div>
  );
}