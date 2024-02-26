import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import './index.css';
import Books from './pages/Books';

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
    path: "Books",
    element: <Books />,
  },
]);

ReactDOM.render(
  <RouterProvider router={router} />,
  document.getElementById('root')
);
