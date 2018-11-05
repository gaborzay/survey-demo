import React from 'react';
import './Button.scss';

const button = (props) => {
    return (
        <button
            disabled={!props.disabled}
            onClick={props.clicked}
            type="button"
            className="Button btn btn-dark">
            {props.text}
        </button>
    );
};

export default button;
