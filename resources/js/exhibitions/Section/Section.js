import React from 'react';

const Section = (props) => {
    return (
        <div id="section-container">
            {props.sections || 'testing'}
        </div>
    );
}

export default Section;
