import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import './index.css';
import Home from './pages/Home';
import Admin from './pages/Admin';

import {
  createBrowserRouter,
  RouterProvider,
} from "react-router-dom";


const router = createBrowserRouter([
  {
    path: "/",
    element: <App />,
  },
  {
    path: "Home",
    element: <Home />,
  },
  {
    path: "Admin",
    element: <Admin />,
  },
  
]);

ReactDOM.render(
  <RouterProvider router={router} />,
  document.getElementById('root')
);
