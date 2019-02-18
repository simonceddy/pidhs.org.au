import React from 'react';
import Menu from './Menu';
import Logo from './Logo';
import AppSwitch from './routes';

class App extends React.Component {
  render() {
    return (
      <div className="app">
        <header>
          <Logo />
          <Menu />
        </header>
        <article>
          <AppSwitch />
        </article>
        <footer>
          Footer content
        </footer>
      </div>
    );
  }
}

export default App;