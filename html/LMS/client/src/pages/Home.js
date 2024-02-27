import React from 'react'
import Mainlayout from '../components/Mainlayout';
import Header from '../components/Header';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';

function Home() {
  return (
    <div className='main'>
      <Header />

      <Navbar />

      <Mainlayout> Home
      Lorem ipsum dolor sit amet sit am   Pattern<br />
        Lorem ipsum dolor sit amet sit am   Pattern<br />
        Lorem ipsum dolor sit amet sit am   Pattern<br />
        Lorem ipsum dolor sit amet sit am   Pattern<br />Lorem ipsum dolor sit amet sit am   Pattern<br />
        Lorem ipsum dolor sit amet sit am   Pattern<br />
        Lorem ipsum dolor sit amet sit am   Pattern<br />
        Lorem ipsum dolor sit amet sit am   Pattern<br />
      </Mainlayout>

      <Footer />
    </div>
  )
}

export default Home
