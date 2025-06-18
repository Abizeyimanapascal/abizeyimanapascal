import React, { Component } from 'react'

function Mainlayout(props){
    return (
      <div className='container-fluid row mt-2'>
        <div className='col-md-10 bg-light  text-dark shadow bg-body-tertiary rounded' style={{minHeight:'350px'}}> {props.children}<br /></div>
        <div className='col-md-2 bg-light text-center shadow p-3 mb-5 rounded position-sticky' style={{top:'130px',height:'300px'}}>
          <img src="https://github.com/mdo.png" alt="mdo" width="80" height="80" class="rounded-circle" />
          <br />
          Boost teamwork efficiency with an end-to-end PDF solution that empowers teams to collaborate, share, and manage documents.
          </div>
      </div>
    )
  }

export default Mainlayout
