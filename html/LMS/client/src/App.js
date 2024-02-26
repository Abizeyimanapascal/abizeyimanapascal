import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Header from './components/Header.js';
import Navbar from './components/Navbar.js';
import Mainlayout from './components/Mainlayout.js';
import Footer from './components/Footer.js';

class App extends Component {
  render() {
    return (
      <div className="App">
        <Header />
        <Navbar />
        Hello World app1
        <Footer />
      </div>
    );
  }
}

export default App;
