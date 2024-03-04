import React, { Component } from 'react'

function Mainlayout(props){
    return (
      <div className='container-fluid d-flex mt-2 mb-2 main-layout'>
        <div className='col-10 bg-light me-1 left-side text-dark shadow p-3 mb-5 bg-body-tertiary rounded' style={{minHeight:'350px'}}> {props.children}<br /></div>
        <div className='col-2 me-2 bg-warning align-self mr-0 shadow p-3 mb-5 rounded' style={{position: 'fixed',right:'0px',height:'350px'}}> g<br /></div>
      </div>
    )
  }

export default Mainlayout
