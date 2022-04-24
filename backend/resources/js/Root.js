import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import Main from './Router';

class Root extends Component {
  render() {
      return (<Main />);
  }
}

export default Root;

if (document.getElementById('root')) {
    ReactDOM.render(<Root />, document.getElementById('root'));
}
