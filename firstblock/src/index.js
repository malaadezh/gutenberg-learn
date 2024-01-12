// var registerBlockType = wp.blocks.registerBlockType;
import { registerBlockType } from "@wordpress/blocks";
import Edit from "./edit";
import Save from "./save";

import "./style.scss";

registerBlockType("serhii-blocks/firstblock", {
    // Editor visual
    edit: Edit,

    // Frontend
    save: Save
});
