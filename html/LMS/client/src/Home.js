import React, { useEffect, useState } from 'react'
import Mainlayout from './components/Mainlayout';
import Header from './components/Header';
import Footer from './components/Footer';
import Axios from 'axios';

function Home() {
  const [book, setBook] = useState([]);
  const [count, setCount] = useState(0);
  useEffect(() => {
    
    Axios.get('http://localhost:3001/api/getbooks').then((res) => {
      setBook(res.data);
    }).catch((err) => {
      console.log(err);
    });
  });
  return (
    <div className='main'>
      <Header />

      <Mainlayout>
        Home page 
       <button onClick={() => setCount(count + 1)}>
      You clicked {count} times
    </button>
        
      </Mainlayout>

      <Footer />
    </div>
  )
}

export default Home
