import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';

if (document.getElementById('exhibitions-app')) {
    ReactDOM.render(<App />, document.getElementById('exhibitions-app'));
}
