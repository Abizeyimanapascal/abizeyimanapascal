import React, { useEffect, useState } from 'react'
import Mainlayout from '../components/Mainlayout';
import Header from '../components/Header';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import Axios from 'axios';

function Home() {
  const [book, setBook] = useState([]);
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
        <div class="row">
          {
            book.map((book) => {
              return (
                
                <div class="card book p-3 border-0">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
                      dy=".3em">Image cap</text>
                  </svg>
                  <div class="card-body">
                    <h5 class="card-title">{book.booktitle}<div class="badge badge-warning">{book.booknumber}</div></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                      the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              )
            })
          }

        </div>
      </Mainlayout>

      <Footer />
    </div>
  )
}

export default Home
