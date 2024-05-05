import React from 'react'
import "./styles.css";

function Header() {
  return (
    <header class="d-flex justify-content-center py-3 shadow p-3 mb-5 bg-body-tertiary rounded row sticky-top">
        <div className='col-2'>
        </div>
        <div className='col-1'>
          <h3 className='color underline color'><b>Nockira</b></h3>
        </div>
        <div className='col-4'>
          <nav>
            
          </nav>
        </div>

        <div className='col-3'>
          <ul class="nav nav-pills  justify-content-center pe-3">
            <li class="nav-item"><select class="form-control"><option>Ikinyarwanda</option><option>English</option></select></li>
          </ul>
        </div>
        <div className='col-2'></div>
      </header>
  )
}

export default Header
