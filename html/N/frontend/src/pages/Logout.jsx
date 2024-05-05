import React from 'react'
import Mainlayout from '../components/Mainlayout'
import { Link } from "react-router-dom";


function Logout() {
  return (
    <div>
      <Mainlayout>
        <div class="alert ps-5">
          Click down here to Logout 👇 <br /><br />

          <Link to="/" class="btn btn-danger"> Logout</Link>

        </div>
      </Mainlayout>
    </div>
  )
}

export default Logout
