import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { Link } from "react-router-dom";

function App() {
  const [count, setCount] = useState(0); // Initial state: 0
  return (
    <>
      <div className='mydiv'>
        hy got to <li class="nav-item">
          <Link to="/Home"> Home</Link>
        </li><br />
        <div>
            <h2>Count: {count}</h2>
            <button onClick={() => setCount(count + 1)}>Increase</button>
            <button onClick={() => setCount(count - 1)}>Decrease</button>
        </div>
        
      </div>
    </>
  )
}

export default App
