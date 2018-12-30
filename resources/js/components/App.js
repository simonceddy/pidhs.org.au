import React from 'react';

class App extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            title: "Exhibitions"
        }
    }

    render() {
        return (
            <div className="container">
                <div className="row">
                    <h1>{this.state.title}</h1>
                </div>
                <div className="row">

                </div>
            </div>
        );
    }
}

export default App;
