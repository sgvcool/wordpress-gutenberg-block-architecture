import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, RangeControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {

    const { postsToShow, columns } = attributes;

    return (
        <>

            <InspectorControls>

                <PanelBody title="Content Settings">

                    <RangeControl
                        label="Posts to show"
                        value={postsToShow}
                        min={1}
                        max={12}
                        onChange={(value) =>
                            setAttributes({ postsToShow: value })
                        }
                    />

                    <RangeControl
                        label="Columns"
                        value={columns}
                        min={1}
                        max={4}
                        onChange={(value) =>
                            setAttributes({ columns: value })
                        }
                    />

                </PanelBody>

            </InspectorControls>

            <div {...useBlockProps()}>
                <p>Content Grid preview</p>
            </div>

        </>
    );

}