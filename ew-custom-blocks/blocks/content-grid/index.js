import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';

registerBlockType('ew/content-grid', {

    edit: Edit,

    save: () => null

});