import React, { Component } from "react";

class TextDisplay extends Component {
  state = {
    text: this.props.text
  };

  render() {
    return this.state.text;
  }
}

export default TextDisplay;