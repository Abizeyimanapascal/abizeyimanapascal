import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import './index.css';
import Home from './pages/Home';
import Admin from './pages/Admin';
import Dashboard from './pages/Dashboard';
import Updatebook from './pages/Updatebook';

import { createBrowserRouter,RouterProvider } from "react-router-dom";


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
  {
    path: "Dashboard",
    element: <Dashboard />,
  },
  {
    path: "/Updatebook/:id",
    element: <Updatebook />,
  }
  
]);

ReactDOM.render(
  <RouterProvider router={router} />,
  document.getElementById('root')
);
