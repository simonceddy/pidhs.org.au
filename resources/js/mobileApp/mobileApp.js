import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router } from 'react-router-dom';
import {Provider} from 'react-redux';
import App from './components/App';
import configureStore from './shared/redux/configureStore';

const store = configureStore({
  article: {
    title: 'Homepage',
    updatedOn: Date.now()
  }
});

if (document.getElementById('root')) {
  ReactDOM.render(
    <Provider store={store}>
      <Router basename="mob">
        <App />
      </Router>
    </Provider>,
    document.getElementById('root')
  );
}
