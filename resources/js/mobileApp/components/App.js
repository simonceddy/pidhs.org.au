import React from 'react';
import Menu from './Menu';
import Logo from './Logo';

class App extends React.Component {
  render() {
    return (
      <div className="app">
        <header>
          <Logo />
          <Menu />
        </header>
        <article>
          Content
        </article>
        <footer>
          Footer content
        </footer>
      </div>
    );
  }
}

export default App;