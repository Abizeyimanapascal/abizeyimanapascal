import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { Link } from "react-router-dom";

function App() {
  return (
    <>
      <div className='mydiv'>
        hy got to <li class="nav-item">
                    <Link to="/Home"> Home</Link>
                  </li>
      </div>
    </>
  )
}

export default App
