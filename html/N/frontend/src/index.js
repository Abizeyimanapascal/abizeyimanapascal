import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import './index.css';
import Home from './pages/Home';
import Content from './pages/Content';
import Logout from './pages/Logout';
import Account from './pages/Account';

import { createBrowserRouter, RouterProvider } from "react-router-dom";

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
    path: "Content",
    element: <Content />,
  },
  {
    path: "Account",
    element: <Account />,
  },
  {
    path: "Logout",
    element: <Logout />,
  },
]);

ReactDOM.render(

    <RouterProvider router={router} />,
  document.getElementById('root')
);
