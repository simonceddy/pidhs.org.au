import React from 'react';
import {Switch, Route} from 'react-router-dom';
import Error404 from './Error/404';
import Article from './Article/Article';

const AppSwitch = () => {
  return (
    <div>
      <Switch>
        <Route path="/" exact render={(props) => (<Article {...props} article={{
          title: "Beyond the sky",
          updatedOn: Date.now()
        }}/>)} />
        <Route path="/now" render={function() {
          return (<div>Some Content</div>);
        }} />
        <Route component={Error404} />
      </Switch>
    </div>
  );
};

export default AppSwitch;