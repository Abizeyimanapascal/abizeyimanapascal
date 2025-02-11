import React from 'react';
import { Link } from 'react-router-dom';

const Header = () => {
  return (
    <>
    <div>
      Header
    </div>

    <di>
        <Link to = "/Home">Home</Link>
        <Link to = "/">Logout</Link>
    </di>
    </>
  );
};

export default Header;